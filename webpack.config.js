const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const path=require('path');
module.exports={
    mode:"development",
    plugins: [new MiniCssExtractPlugin()],
    entry: [path.resolve(__dirname, './src/app.css'),path.resolve(__dirname, './src/app.js')],
    module:{    rules:[
            {
                test: /\.css$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    "postcss-loader"
                ]
            },
            {
                test: /\.(png|jpe?g|gif|jpg)$/i,
                use: [
                  {
                    loader: 'file-loader',
                  },
                ],
              },
              {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                  loader: 'babel-loader',
                  options: {    
                    "exclude": [
                    // \\ for Windows, \/ for Mac OS and Linux
                    /node_modules[\\\/]core-js/,
                    /node_modules[\\\/]webpack[\\\/]buildin/,
                  ],
                  }
                }
            }
        ]
    },
    output: {
        path: path.resolve(__dirname, './assets'),
        filename: 'main.js',
    },
	watch:true,
    devtool: "source-map",
}