var gulp = require("gulp"),
  sass = require("gulp-sass"),
  sassGlob = require("gulp-sass-glob"),
  postcss = require("gulp-postcss"),
  autoprefixer = require("autoprefixer"),
  cssnano = require("cssnano"),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify");

var browserSync = require("browser-sync").create();

var paths = {
  styles: {
    src: [
      "../da_boilerplate/assets/scss/style.scss",
      "../da_boilerplate/assets/scss/editor-styles.scss"
    ],
    dest: "../da_boilerplate/assets/compiled"
  },
  js: {
    src: [
      // 3rd party libraries..
      "../da_boilerplate/assets/js/lib/*.js",

      // modules..
      "../da_boilerplate/assets/js/modules/accordion.js",
      "../da_boilerplate/assets/js/modules/cookieConsent.js",
      // "../da_boilerplate/assets/js/modules/dropdownMenu.js",
      "../da_boilerplate/assets/js/modules/responsiveMenu.js",
      "../da_boilerplate/assets/js/modules/userTabbing.js",

      // inits
      "../da_boilerplate/assets/js/inits.js",
    ],
    dest: "../da_boilerplate/assets/compiled"
  },
  editorJS: {
    src: [
    // editor
    "../da_boilerplate/assets/js/editor.js",
    ],
    dest: "../da_boilerplate/assets/compiled"
  },
  browsersync: {
    watch: [
      "../da_boilerplate/*.php",
      "../da_boilerplate/parts/blocks/*.php",
      "../da_boilerplate/parts/*.php",
      "../da_boilerplate/functions/*.php",
      "../da_boilerplate/functions/**/*",
      "../da_boilerplate/template-pages/*.php",
      "../da_boilerplate/template-parts/*.php",
      "../da_boilerplate/template-parts/**/*"
    ]
  }
};

function handleError(err) {
  console.log(err.toString());
  this.emit("end");
}

function style() {
  return gulp
    .src(paths.styles.src)
    .pipe(sassGlob())
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(postcss([autoprefixer("last 2 versions", "ie >= 9"), cssnano()]))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

function scripts() {
  return gulp
    .src(paths.js.src)
    .pipe(concat("footer.js"))
    .pipe(uglify())
    .on("error", handleError)
    .pipe(gulp.dest(paths.js.dest))
    .pipe(browserSync.stream());
}

function editorScripts() {
  return gulp
    .src(paths.editorJS.src)
    .pipe(concat("editor-scripts.js"))
    .pipe(uglify())
    .on("error", handleError)
    .pipe(gulp.dest(paths.editorJS.dest))
    .pipe(browserSync.stream());
}

function reload() {
  browserSync.reload();
}

function watch() {
  browserSync.init({
    proxy: "da-boilerplate.local",
    notify: false
  });

  style();
  scripts();
  editorScripts();

  gulp.watch("../da_boilerplate/assets/scss/**/*.scss", style);
  gulp.watch(paths.browsersync.watch).on("change", browserSync.reload);
  gulp.watch(paths.js.src, scripts);
  gulp.watch(paths.editorJS.src, editorScripts);
}

function defaultTask() {
  watch();
}

exports.style = style;
exports.scripts = scripts;
exports.editorScripts = editorScripts;
exports.default = defaultTask;
