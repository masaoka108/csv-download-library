<?php

namespace Okamok\CsvDownloadLibrary;

use Illuminate\Support\ServiceProvider;

class CsvDownloadLibraryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // // 動作確認用メッセージ
        // dump('Hello Laravel from CSV dowonload Library!');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
