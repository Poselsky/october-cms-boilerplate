const mix = require('laravel-mix');
const path = require('path');
const chokidar = require('chokidar');

mix.js('client/main.js', 'dist');

let browserSy;
const themeWatcher = chokidar.watch('themes');
themeWatcher.on('all', (event, p) => {
    if(browserSy) browserSy.publicInstance.reload();
});

if(process.env.NODE_ENV == 'development'){
    mix
        .browserSync({
            logFileChanges: true,
            logConnections: true,
            open: false,
            proxy: 'localhost:8000',
            callbacks: {
                ready: function(err, bs) {
                    browserSy = bs;
                }
            },
            injectChanges: false,
        })
        .disableNotifications();
}

process.on('SIGINT', () => {
    console.log( "\nGracefully shutting down from SIGINT (Ctrl-C)" );
    themeWatcher.close();

    process.exit( );
});