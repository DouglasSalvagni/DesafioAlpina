const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const loader = require('sass-loader');

const config = {
    mode: "development",
}

const sassConfig = Object.assign({}, config, {
    name: "depConfig",
    entry: "./src/sassConfig.js",
    output: {
        path: path.resolve(__dirname, 'assets/css'),
        filename: "bundle.js"
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'main.css'
        }),
        new webpack.SourceMapDevToolPlugin({})
    ],
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
            },
        ]
    }
});

const depConfig = Object.assign({}, config, {
    name: "depConfig",
    entry: "./src/depConfig.js",
    output: {
        path: path.resolve(__dirname, 'assets/js'),
        filename: "bundle.js"
    },
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
        ]
    }
});

module.exports = [
    depConfig, sassConfig
]