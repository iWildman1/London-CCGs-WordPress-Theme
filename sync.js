const browserSync          = require('browser-sync').create();
const webpack              = require('webpack');
const webpackDevMiddleware = require('webpack-dev-middleware');
const webpackHotMiddleware = require('webpack-hot-middleware');
const webpackConfig        = require('./webpack.config');

const bundler = webpack(webpackConfig);

browserSync.init({
    files: [
        '*.php',
        '*.css'
    ],
    proxy: {
        target: 'http://dev.officelondonccgs.org.uk/',

        middleware: [
            webpackDevMiddleware(bundler, {
                publicPath: 'http://officelondonccgs.org.uk/wp-content/themes/london_ccgs/build'
            }),

            webpackHotMiddleware(bundler)
        ]
    }
});

