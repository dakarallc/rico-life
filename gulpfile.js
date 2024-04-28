// gulpプラグインの読み込み
const gulp       = require("gulp");
const sass       = require("gulp-sass")(require("sass"));    // Sassコンパイル
const plumber      = require('gulp-plumber');             // エラー時の強制終了を防止
const notify       = require('gulp-notify');              // エラー発生時にデスクトップ通知
const sassGlob     = require('gulp-sass-glob');           // @useの記述を簡潔化
// var browserSync  = require('browser-sync');             // ブラウザ反映
const postcss      = require('gulp-postcss');             // postcssのautoprefixerプラグイン利用のため
const autoprefixer = require('autoprefixer');             // ベンダープレフィックス付与
const cssdeclsort  = require('css-declaration-sorter');   // css並べ替え
// var mmq          = require('gulp-merge-media-queries'); // メディアクエリの順番を整頓
// var imagemin     = require('gulp-imagemin');            // 画像圧縮
// var pngquant     = require('imagemin-pngquant');        // png画像の圧縮最適化
// var mozjpeg      = require('imagemin-mozjpeg');         // jpg画像の圧縮最適化
const rename       = require("gulp-rename");              //ファイル名変更
const cleanCSS     = require("gulp-clean-css");           //cssの圧縮
// var uglify       = require("gulp-uglify");              //jsの圧縮
// var ejs = require("gulp-ejs");                          //ejs
// var replace = require("gulp-replace");



// scssのコンパイル
gulp.task('sass', function () {
  return gulp
    .src('assets/sass/styles.scss')
    .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))//エラーチェック
    .pipe(sassGlob())// importの読み込みを簡潔化
    .pipe(sass({
      outputStyle: 'expanded' // expanded, nested, campact, compressedから選択
    }))
    // ベンダープレフィックス付加
    .pipe(postcss([
      //バージョン設定はpackage.jsonを確認
      autoprefixer({
        cascade: false
      })
    ]))
    .pipe(postcss([cssdeclsort({ order: 'alphabetical' })]))// プロパティをソート(アルファベット順)
    // 圧縮前の状態で一度出力
    .pipe(gulp.dest('assets/css'))// コンパイル後の出力先
    .pipe(cleanCSS())// cssの圧縮
    .pipe(rename({
      suffix: '.min',
    }))
    .pipe(gulp.dest('assets/css'));// コンパイル後の出力先
});

// 監視
gulp.task('watch', function (done) {
  gulp.watch('assets/sass/**/*.scss', gulp.task('sass')); //sassが更新されたらgulp sassを実行
  done();
});


// default
gulp.task('default', gulp.series(gulp.parallel('watch')));
