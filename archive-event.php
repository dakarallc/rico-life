<?php get_header(); ?>

<div class="page event-page">
  <div class="pageHead">
    <div class="pageHead__contents">
      <h1 class="pageHead__ttl">
        <span class="_upper">イベント</span>
        <span class="_below">EVENTS</span>
      </h1>
    </div>
  </div>

  <?php get_template_part('template-parts/breadcrumb'); ?>

  <section class="eventList">
    <div class="inner eventList__inner">
      <?php
      // ソート順の取得
      $sort_order = isset($_GET['sort']) ? $_GET['sort'] : 'all';
      ?>
      
      <div class="eventList__sort">
        <select name="sort" onchange="window.location.href=this.value">
          <option value="?sort=all" <?php echo $sort_order === 'all' ? 'selected' : ''; ?>>すべて</option>
          <option value="?sort=now" <?php echo $sort_order === 'now' ? 'selected' : ''; ?>>開催中</option>
          <option value="?sort=before" <?php echo $sort_order === 'before' ? 'selected' : ''; ?>>開催前</option>
          <option value="?sort=end" <?php echo $sort_order === 'end' ? 'selected' : ''; ?>>終了</option>
        </select>
      </div>

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $posts_per_page = 9;

      $event_query = new WP_Query([
        'posts_per_page' => -1, // 一時的にすべての投稿を取得
        'post_type' => 'event',
        'orderby' => 'date',
        'order' => 'DESC'
      ]);

      if ($event_query->have_posts()) : 
        $events = array();
        
        // イベントの情報を収集してソート用の配列に格納
        while ($event_query->have_posts()) : 
          $event_query->the_post();
          
          $event_info = [
            'pic' => get_field('event-pic'),
            'start_date' => get_field('event_start_date'),
            'end_date' => get_field('event_end_date'),
            'start_time' => get_field('event_start_time'),
            'end_time' => get_field('event_end_time'),
            'address' => get_field('address')
          ];

          $now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
          $start_datetime = new DateTime($event_info['start_date'] . ' ' . $event_info['start_time'], new DateTimeZone('Asia/Tokyo'));
          $end_datetime = new DateTime($event_info['end_date'] . ' ' . $event_info['end_time'], new DateTimeZone('Asia/Tokyo'));

          if ($start_datetime <= $now && $end_datetime >= $now) {
            $event_status = 'nowEvent';
            $status_class = '_now';
            $interval = $now->diff($end_datetime);
            $status_text = '【開催中】<span>終了まであと</span>' . get_remaining_time('', $interval);
          } elseif ($start_datetime > $now) {
            $event_status = 'beforeEvent';
            $status_class = '_before';
            $interval = $now->diff($start_datetime);
            $status_text = '【開催前】<span>開催まであと</span>' . get_remaining_time('', $interval);
          } else {
            $event_status = 'endEvent';
            $status_class = '_end';
            $status_text = 'イベント終了';
          }

          // ソート条件に合致するイベントのみ配列に追加
          if ($sort_order === 'all' || 
              ($sort_order === 'now' && $event_status === 'nowEvent') ||
              ($sort_order === 'before' && $event_status === 'beforeEvent') ||
              ($sort_order === 'end' && $event_status === 'endEvent')) {
            
            $events[] = array(
              'post' => $post,
              'event_info' => $event_info,
              'event_status' => $event_status,
              'status_class' => $status_class,
              'status_text' => $status_text
            );
          }
        endwhile;

        // イベントステータスでソート
        if ($sort_order !== 'all') {
          usort($events, function($a, $b) use ($sort_order) {
            if ($sort_order === 'now') {
              return $a['event_status'] === 'nowEvent' ? -1 : 1;
            } elseif ($sort_order === 'before') {
              return $a['event_status'] === 'beforeEvent' ? -1 : 1;
            } else {
              return $a['event_status'] === 'endEvent' ? -1 : 1;
            }
          });
        }

        // ページネーション用の計算
        $total_events = count($events);
        $max_pages = ceil($total_events / $posts_per_page);
        $offset = ($paged - 1) * $posts_per_page;
        $events = array_slice($events, $offset, $posts_per_page);

        // ソート後のイベント数をチェック
        if (empty($events)) :
      ?>
          <p>該当するイベントはございません。</p>
      <?php
        else :
      ?>
        <ul class="eventList__list">
          <?php foreach ($events as $event) : 
            $post = $event['post'];
            setup_postdata($post);
            $event_info = $event['event_info'];
            $event_status = $event['event_status'];
            $status_class = $event['status_class'];
            $status_text = $event['status_text'];
          ?>
            <li class="eventList__item wow fadeInUp">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                <div class="eventList__img">
                  <img 
                    data-js-ofi 
                    <?php echo ($event_status === 'endEvent') ? 'class="endEvent"' : ''; ?> 
                    src="<?php echo esc_url($event_info['pic']); ?>" 
                    alt="<?php echo esc_attr(get_the_title() ?: '&nbsp;'); ?>"
                  >
                </div>
                <div class="eventList__status <?php echo esc_attr($status_class); ?>">
                  <?php echo wp_kses($status_text, ['span' => []]); ?>
                </div>
                <div class="eventList__body">
                  <h2 class="eventList__subTtl">
                    <?php echo esc_html(get_the_title() ?: '&nbsp;'); ?>
                  </h2>
                  <p class="detail">
                    <span>日程：</span>
                    <?php echo esc_html($event_info['start_date']); ?>
                    (<?php echo date('w', strtotime($event_info['start_date'])) === '0' ? '日' : 
                      (date('w', strtotime($event_info['start_date'])) === '6' ? '土' : 
                      ['月','火','水','木','金'][date('w', strtotime($event_info['start_date']))-1]); ?>)
                    ~
                    <?php echo esc_html($event_info['end_date']); ?>
                    (<?php echo date('w', strtotime($event_info['end_date'])) === '0' ? '日' : 
                      (date('w', strtotime($event_info['end_date'])) === '6' ? '土' : 
                      ['月','火','水','木','金'][date('w', strtotime($event_info['end_date']))-1]); ?>)
                  </p>
                  <p class="detail"><span>時間：</span><?php echo esc_html($event_info['start_time']); ?>~<?php echo esc_html($event_info['end_time']); ?></p>
                  <p class="detail"><span>場所：</span><?php echo esc_html($event_info['address']); ?></p>
                </div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php 
        endif;
      else: ?>
        <p>現在、イベントはございません。少々お待ちください。</p>
      <?php endif; ?>

      <?php
      $page_arg = array(
        'end_size' => 0,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '前へ',
        'next_text' => '次へ',
        'current' => $paged,
        'total' => $max_pages,
        'base' => add_query_arg('paged', '%#%'),
        'format' => ''
      );
      if ($max_pages > 1) :
      ?>
        <div class="pagination">
          <?php echo paginate_links($page_arg); ?>
        </div>
      <?php endif; ?>

    </div>
  </section>
</div>

<?php 
// 残り時間を取得する関数
function get_remaining_time($prefix, $interval) {
  if ($interval->days > 0) {
    return $prefix . $interval->days . '日';
  } elseif ($interval->h > 0) {
    return $prefix . $interval->h . '時間';
  }
  return $prefix . $interval->i . '分';
}

get_footer(); 
?>
