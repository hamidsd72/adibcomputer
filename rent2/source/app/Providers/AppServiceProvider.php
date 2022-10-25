<?php

namespace App\Providers;

use App\Models\Meta;
use App\Models\NewsCategory;
use App\Models\News;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\Memory;
use App\Models\Sound;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->url = $request->fullUrl();
        Schema::defaultStringLength(191);
        view()->composer('layouts.admin', function ($view) {
            $news_time_archive=News::where('archive_time','!=',null)->get();
            foreach ($news_time_archive as $news_time)
            {
                $time_start=Carbon::now();
                $time_end=Carbon::create($news_time->archive_time);
                $diff=$time_start->diffInMinutes($time_end,false);
                if($diff<=0)
                {
                    $news_time->archive_time=null;
                    $news_time->status_archive='active';
                    $news_time->status_select='pending';
                    $news_time->status_slider='pending';
                    $news_time->status_slider_bottom='pending';
                    $news_time->status_r_menu='pending';
                    $news_time->status_end='pending';
                    $news_time->update();
                }
            }
        });
        // view()->composer('layouts.front', function ($view) {
        //     $news_time_archive=News::where('archive_time','!=',null)->get();
        //     foreach ($news_time_archive as $news_time)
        //     {
        //         $time_start=Carbon::now();
        //         $time_end=Carbon::create($news_time->archive_time);
        //         $diff=$time_start->diffInMinutes($time_end,false);
        //         if($diff<=0)
        //         {
        //             $news_time->archive_time=null;
        //             $news_time->status_archive='active';
        //             $news_time->status_select='pending';
        //             $news_time->status_slider='pending';
        //             $news_time->status_slider_bottom='pending';
        //             $news_time->status_r_menu='pending';
        //             $news_time->status_end='pending';
        //             $news_time->update();
        //         }
        //     }
        //     $seo = Meta::where('link', $this->url)->where('status','active')->first();
        //     if (is_null($seo)) {
        //         $seo = Meta::where('link', $this->url . '/')->where('status','active')->first();
        //         if (is_null($seo)) {
        //             $seo = Meta::where('link', explode('?', $this->url)[0])->where('status','active')->first();
        //             if (is_null($seo)) {
        //                 $seo = Meta::where('link', explode('?', $this->url)[0] . '/')->where('status','active')->first();
        //             }
        //         }
        //     }
        //     if (!is_null($seo)) {
        //         $titleSeo = $seo->title_page;
        //         $keywordsSeo = $seo->keyword;
        //         $descriptionSeo = $seo->description;
        //     }
        //     else {
        //         $titleSeo ='هنرآفرین';
        //         $keywordsSeo = 'هنرآفرین , هدهد , هدهدآبی , هنرآفرین هدهد آبی , اخبار';
        //         $descriptionSeo = 'رسانه هنرآفرینان ایران';
        //     }
        //     $cats_news=NewsCategory::where('status','active')->select('id')->get()->toArray();
        //     $view
        //         ->with('urlPage', $this->url)
        //         ->with('titleSeo', $titleSeo)
        //         ->with('keywordsSeo', $keywordsSeo)
        //         ->with('descriptionSeo', $descriptionSeo)
        //         ->with('header_last_news', News::where('status','active')->where('type_news','news')->select('title')->orderByDesc('created_at')->take(5)->get())
        //         ->with('calender_last', News::where('status','active')->where('type_news','calender')->orderByDesc('created_at')->first())
        //         ->with('week_face_last', News::where('status','active')->where('type_news','week_face')->orderByDesc('created_at')->first())
        //         ->with('week_book_last', News::where('status','active')->where('type_news','week_book')->orderByDesc('created_at')->first())
        //         ->with('social', Contact::select('telegram','instagram','facebook','twitter','whatsapp','whatsapp_group')->first())
        //         ->with('links_footer', Contact::select('links')->first())
        //         ->with('header_banner', Banner::where('status','active')->where('type','top_header')->first())
        //         ->with('menu_category', NewsCategory::where('status','active')->where('status_menu','active')->orderBy('sort')->get())
        //         ->with('sound_g', Sound::where('status','active')->where('status_footer','active')->where('type','gramophone')->orderByDesc('created_at')->first())
        //         ->with('sound_p', Sound::where('status','active')->where('status_footer','active')->where('type','podcast')->orderByDesc('created_at')->first())
        //         ->with('memory_footer', Memory::where('status','active')->where('status_home','active')->orderByDesc('created_at')->first());
        // });
    }


}
