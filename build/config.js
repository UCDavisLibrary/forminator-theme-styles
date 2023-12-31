/**
 * @description Shared config values for dist and dev builds
 */
const config = {
  fileName: 'ucdlib-forminator-shims',
  cssFileName: 'ucdlib-forminator-shims',
  entry: '../src/index.js',
  scssEntry: '../src/scss/style.scss',
  publicDir: '../dist',
  clientModules: [
    './src/node_modules',
  ],
  loaderOptions: {
    css: {
      loader: 'css-loader',
      options : {
        url: false
      }
    },
    scss: {
      loader: 'sass-loader',
      options: {
        sassOptions: {
          includePaths: [
            "node_modules/@ucd-lib/theme-sass",
            "node_modules/breakpoint-sass/stylesheets",
            "node_modules/sass-toolkit/stylesheets"]
        }
      }
    }
  },
};

export default config;
