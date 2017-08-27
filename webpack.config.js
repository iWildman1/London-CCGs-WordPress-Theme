const path            = require('path'),
    ExtractTextPlugin = require('extract-text-webpack-plugin'),
    webpack           = require('webpack'),
    nodeExternals     = require('webpack-node-externals'),
    WriteFilePlugin   = require('write-file-webpack-plugin');

module.exports = {
    entry: [
      'webpack-hot-middleware/client'
    ],
    target: 'node',
    externals: [nodeExternals()],
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, 'build'),
        publicPath: 'http://dev.officelondonccgs.org.uk/wp-content/themes/london_ccgs/build',
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: [{
                        loader: "css-loader?",
                        options: {
                            modules: false,
                            minimize: true
                        }
                    }, {
                        loader: "sass-loader"
                    }]
                })
            },
            {
                test: /\.(png|woff|woff2|eot|ttf|svg)$/,
                use: ['url-loader?limit=100000']
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin("../style.css"),
        new webpack.HotModuleReplacementPlugin(),
        new webpack.NoEmitOnErrorsPlugin(),
        new WriteFilePlugin({
            test: /\.(js|css)$/
        })
    ]
};