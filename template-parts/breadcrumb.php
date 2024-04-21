<!-- ===============================================================================================
breadcrumb
================================================================================================ -->
<?php if (function_exists('bcn_display')) : ?>
	<div class="breadcrumb">
		<div class="breadcrumb__contents">
			<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述
			?>
		</div><!-- /breadcrumb__contents -->
	</div>
<?php endif; ?>
<!-- /breadcrumb -->