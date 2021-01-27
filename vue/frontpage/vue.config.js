webpack = require('webpack');

module.exports = {
    configureWebpack: {
        plugins: [
            new webpack.ProvidePlugin({
                // 此处将jquery注册为webpack的插件是为了给bootstrap.min.js使用，不然会报错
                $: "jquery",
                jQuery: "jquery",
                "windows.jQuery": "jquery"
            })
        ],
    },
    devServer: {
        proxy: {
            '/api': {
                target: 'http://127.0.0.1:8000/api',
                changeOrigin: true,
                pathRewrite: {
                    '^/api': ''
                }
            }
        }
    }

}