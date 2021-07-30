const path = require('path');
const glob = require('glob-all');
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const PurgeCSSPlugin = require('purgecss-webpack-plugin')

const PATHS = {
  src: path.join(__dirname, 'app/Views'),
  ts: path.join(__dirname, 'res/ts'),
}


module.exports = {
    entry: [
        __dirname + '/res/ts/app.ts',
        __dirname + '/res/sass/app.scss',
    ],
    output: {
        publicPath: '/public/',
        path: path.resolve(__dirname, 'public'), 
        filename: 'js/app.min.js',
    },
    devServer: {
        compress: true,
        port: 8000,
    },
    resolve: {
        extensions: ['.ts', '.js']
    },
    module: {
        rules: [
            {
                test: /\.ts$/,
                exclude: /node_modules/,
                use: 'ts-loader',
            }, {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: { outputPath: 'css/', name: '[name].css'}
                    },
                    MiniCssExtractPlugin.loader,
                    { 
                        loader: 'css-loader', 
                        options: { url: false } 
                    },
                    'sass-loader'
                ]
            },{
                test: /\.(png|jpe?g|webp|git|svg|)$/i,
                use: [
                    'file-loader',
                    {
                        loader: `img-optimize-loader`,
                        options: {
                        name: 'pictures/[name].[ext]',
                        compress: {
                            

                            webp: {
                                quality: 80,
                            },
                        },
                        },
                    },
                ],
            },
        ]
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "css/app.min.css",
      }),
      new PurgeCSSPlugin({
            paths: glob.sync([
                `${PATHS.src}/**/*.php`,
                `${PATHS.ts}/**/*.ts`,
            ],  
                { nodir: true }
            ),
        }),
    ]
};