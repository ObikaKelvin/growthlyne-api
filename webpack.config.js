const path = require('path');

module.exports = {
    entry: [
        __dirname + '/res/src/ts/app.ts',
        __dirname + '/res/src/sass/app.scss'
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
                        options: { outputPath: 'css/', name: '[name].min.css'}
                    },
                    'sass-loader'
                ]
            }
        ]
    }
};