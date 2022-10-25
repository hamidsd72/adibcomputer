@extends('layouts.front')
@section('styles') @endsection
@section('body')
    <div class="container index_page">
        {{--        rows 1--}}
        <div class="row d-ltr-lg-only">
            <div class="col-md-9 d-rtl mb-md-25">
                @if(count($news_sliders))
                    <div id="slider_1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner w-100 h-100">
                            @foreach($news_sliders as $key=>$slider)
                                <div class="carousel-item w-100 h-100 {{$key==0?'active':''}}">
                                    <a href="{{route('front.news.show',[$slider->id,$slider->slug])}}">
                                        <img src="{{url($slider->slider_pic?$slider->slider_pic:$slider->big_pic)}}" class="img_row_1" alt="{{$slider->title}}">
                                        <div class="carousel-caption text-right">
                                            @if($slider->titr_top)
                                                <h6>{{$slider->titr_top}}</h6>
                                            @endif
                                            <h5>{{$slider->title}}</h5>
                                            <p>
{{--                                                <span class="eye"><i class="fas fa-eye"></i> {{$slider->seen}}</span>--}}
                                                <span class="cal"><i class="fas fa-calendar-alt"></i> {{my_jdate($slider->created_at,'Y/m/d H:i')}}</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#slider_1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#slider_1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-md-3 d-rtl">
                <ul class="ul_category">
                    <li>
                        <a href="{{route('front.news.list','news')}}">
                            <i class="fas fa-angle-left"></i>
                            خبر
                            @if(count($news_menu_lasts))
                                <div class="dropdown_div">
                                    @foreach($news_menu_lasts as $news_menu_last)
                                        <div class="col-md-12 px-0 mb-2 card_page">
                                            @include('front.includes.footer_card',['item'=>$news_menu_last,'link'=>route('front.news.show',[$news_menu_last->id,$news_menu_last->slug])])
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{route('front.report.list')}}">
                            <i class="fas fa-angle-left"></i>
                            گزارش
                            @if(count($report_menu_lasts))
                                <div class="dropdown_div">
                                    @foreach($report_menu_lasts as $report_menu_last)
                                        <div class="col-md-12 px-0 mb-2 card_page">
                                            @include('front.includes.footer_card',['item'=>$report_menu_last,'link'=>route('front.news.show',[$report_menu_last->id,$report_menu_last->slug])])
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{route('front.interview.list')}}">
                            <i class="fas fa-angle-left"></i>
                            مصاحبه
                            @if(count($interview_menu_lasts))
                                <div class="dropdown_div">
                                    @foreach($interview_menu_lasts as $interview_menu_last)
                                        <div class="col-md-12 px-0 mb-2 card_page">
                                            @include('front.includes.footer_card',['item'=>$interview_menu_last,'link'=>route('front.news.show',[$interview_menu_last->id,$interview_menu_last->slug])])
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{route('front.note.list')}}">
                            <i class="fas fa-angle-left"></i>
                            یادداشت
                            @if(count($note_menu_lasts))
                                <div class="dropdown_div">
                                    @foreach($note_menu_lasts as $note_menu_last)
                                        <div class="col-md-12 px-0 mb-2 card_page">
                                            @include('front.includes.footer_card',['item'=>$note_menu_last,'link'=>route('front.news.show',[$note_menu_last->id,$note_menu_last->slug])])
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{route('front.translate.list')}}">
                            <i class="fas fa-angle-left"></i>
                            ترجمه
                            @if(count($translate_menu_lasts))
                                <div class="dropdown_div">
                                    @foreach($translate_menu_lasts as $translate_menu_last)
                                        <div class="col-md-12 px-0 mb-2 card_page">
                                            @include('front.includes.footer_card',['item'=>$translate_menu_last,'link'=>route('front.news.show',[$translate_menu_last->id,$translate_menu_last->slug])])
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{route('front.gallery','pic')}}">
                            <i class="fas fa-angle-left"></i>
                            عکس
                        </a>
                    </li>
                    <li>
                        <a href="{{route('front.gallery','video')}}">
                            <i class="fas fa-angle-left"></i>
                            فیلم
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="fas fa-angle-left"></i>
                            هنر آفرین پلاس
                            <div class="dropdown_div w-230px">
                                <ul class="ul_dropdown_div">
                                    <li>
                                        <a href="{{route('front.memory.list')}}">
                                            آرشیو خاطرات
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.gramophone.list')}}">
                                            گرامافون
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.podcast.list')}}">
                                            پادکست
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.week.face.list')}}">
                                            چهره هفته
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.week.book.list')}}">
                                            کتاب هفته
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.new.face.list')}}">
                                            چهره نو
                                        </a>
                                    </li>
                                    <li class="not_border">
                                        <a href="{{route('front.calender.list')}}">
                                            تقویم روز
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{--        rows 2--}}
        @if(count($news_randoms))
            <div class="row mt-50">
                {{--            <div class="col-12 mb-25">--}}
                {{--                <h5 class="text-center fs-16 mb-0">--}}
                {{--                    جدیدترین خبر ها--}}
                {{--                </h5>--}}
                {{--            </div>--}}
                <div class="col-12 mb-25">
                    <!-- Swiper -->
                    <div class="swiper slider_multi_col slider_row_2 pb-4">
                        <div class="swiper-wrapper">
                            @foreach($news_randoms as $news_random)
                                <div class="swiper-slide">
                                    @include('front.includes.index_row2',['item'=>$news_random,'link'=>route('front.news.show',[$news_random->id,$news_random->slug])])
                                </div>
                            @endforeach
                        </div>

                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-next">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{--        rows 3--}}
        <div class="row">
            <div class="col-lg-8 col-md-7">
                @if(count($news_lasts))
                    <hr class="mt-25 mb-0"/>
                    <div class="container-fluid mt-25">
                        <div class="row">
                            <div class="col-12 mb-25">
                                <h5 class="fs-16 mb-0">آخرین مطالب</h5>
                            </div>
                            @foreach($news_lasts as $key=>$news_last)
                                @if($key==0)
                                    <div class="col-12">
                                        @include('front.includes.card_big_row3',['item'=>$news_last,'link'=>route('front.news.show',[$news_last->id,$news_last->slug])])
                                    </div>
                                @else
                                    <div class="col-md-6 card_page mt-25">
                                        @include('front.includes.footer_card',['item'=>$news_last,'link'=>route('front.news.show',[$news_last->id,$news_last->slug])])
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                <hr class="mt-25 mb-0"/>
                <div class="container-fluid mt-25">
                    <div class="row">
                        <div class="col-sm-6 mb-25 slider_one_swiper slider_one_swiper1 gallery_index">
                            <h5 class="title_border">عکس</h5>
                            <div class="slider_row_4_arrow swiper-button-next">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slider_row_4_arrow swiper-button-prev">
                                <i class="fa fa-angle-right"></i>
                            </div>
                            @if(count($pic_homes))
                                <div class="swiper slider_multi_col slider_row_4 pb-0">
                                    <div class="swiper-wrapper">
                                        @foreach($pic_homes->chunk(5) as $items)
                                            <div class="swiper-slide">
                                                @include('front.includes.index_row4',['items'=>$items,'type'=>'pic'])
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6 mb-25 slider_one_swiper slider_one_swiper1 gallery_index">
                            <h5 class="title_border">فیلم</h5>
                            <div class="slider_row_5_arrow swiper-button-next">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slider_row_5_arrow swiper-button-prev">
                                <i class="fa fa-angle-right"></i>
                            </div>
                            @if(count($video_homes))
                                <div class="swiper slider_multi_col slider_row_5 pb-0">
                                    <div class="swiper-wrapper">
                                        @foreach($video_homes->chunk(5) as $keys=>$items)
                                            <div class="swiper-slide">
                                                @include('front.includes.index_row4',['items'=>$items,'type'=>'video'])
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6 mb-25 mt-25">
                            <div class="col-12 slider_one_swiper border-all-no-border position-relative">
                                <h5 class="title_border">
                                    یادداشت منتخب
                                </h5>
                                <div class="slider_row_3_3_arrow swiper-button-next">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="slider_row_3_3_arrow swiper-button-prev">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                                <div class="col-md-12 px-0">
                                    <div class="swiper slider_multi_col slider_row_3_3 pb-0">
                                        <div class="swiper-wrapper">
                                            @foreach($note_lasts as $note_last)
                                                <div class="swiper-slide">
                                                    @include('front.includes.index_row3',['item'=>$note_last,'link'=>route('front.news.show',[$note_last->id,$note_last->slug])])
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-25 mt-25">
                            <div class="col-12 slider_one_swiper border-all-no-border position-relative">
                                <h5 class="title_border">
                                    چهره نو
                                </h5>
                                <div class="slider_row_3_31_arrow swiper-button-next">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="slider_row_3_31_arrow swiper-button-prev">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                                <div class="col-md-12 px-0">
                                    <div class="swiper slider_multi_col slider_row_3_31 pb-0">
                                        <div class="swiper-wrapper">
                                            @foreach($new_faces as $new_face)
                                                <div class="swiper-slide">
                                                    @include('front.includes.index_row3',['item'=>$new_face,'link'=>route('front.news.show',[$new_face->id,$new_face->slug])])
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 mt-25 mt-md-50">
                @if(count($ads))
                    <div class="col-12 slider_one_swiper border-all ads_slider position-relative">
                        <h5 class="title_border">
                            تبلیغات
                        </h5>
                        <div class="slider_row_3_arrow swiper-button-next">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="slider_row_3_arrow swiper-button-prev">
                            <i class="fa fa-angle-right"></i>
                        </div>
                        <div class="col-md-12 px-0">
                            <div class="swiper slider_multi_col slider_row_3 pb-0">
                                <div class="swiper-wrapper">
                                    @foreach($ads as $ad)
                                        <div class="swiper-slide">
                                            @include('front.includes.ad_card',['item'=>$ad,'link'=>route('front.seen',['ad',$ad->id])])
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                @endif
                @if(count($news_selects))
                    <div class="col-12 mt-50 list_news_one border-all position-relative">
                        <h5 class="title_border">
                            برگزیده ها
                        </h5>
                        @foreach($news_selects as $news_select)
                            <div class="col-md-12 px-0 mb-2 card_page">
                                @include('front.includes.footer_card',['item'=>$news_select,'link'=>route('front.news.show',[$news_select->id,$news_select->slug])])
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(count($last_seen))
                        <div class="col-12 mt-50 list_news_one border-all position-relative">
                            <h5 class="title_border">
                                پر بازدیدها
                            </h5>
                            @foreach($last_seen as $last_see)
                                <div class="col-md-12 px-0 mb-2 card_page">
                                    @include('front.includes.footer_card',['item'=>$last_see,'link'=>route('front.news.show',[$last_see->id,$last_see->slug])])
                                </div>
                            @endforeach
                        </div>
                    @endif
{{--                @if(count($memory_homes))--}}
{{--                    <div class="col-12 mt-50 slider_one_swiper khatereh border-all position-relative">--}}
{{--                        <h5 class="title_border">--}}
{{--                            آرشیو خاطرات--}}
{{--                        </h5>--}}
{{--                        <div class="slider_row_7_arrow swiper-button-next">--}}
{{--                            <i class="fa fa-angle-left"></i>--}}
{{--                        </div>--}}
{{--                        <div class="slider_row_7_arrow swiper-button-prev">--}}
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                        </div>--}}
{{--                        <div class="swiper slider_multi_col slider_row_7 pb-0">--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                @foreach($memory_homes as $memory_home)--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        @include('front.includes.memory_index',['item'=>$memory_home])--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                            <div class="swiper-pagination"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
        </div>
        {{--        rows 4--}}
        <div class="row mt-50 mb-50">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php $i=0 ?>
                @foreach($news_category as $key=>$category)
                    @if(count($category->news_active))
                        <?php $i+=1 ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{$i==1?'active':''}}" id="menu{{$category->id}}-tab" data-toggle="tab"
                               href="#menu{{$category->id}}" role="tab" aria-controls="menu{{$category->id}}"
                               aria-selected="{{$i==1?'true':'false'}}">{{$category->title}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="col-12 border_all_after">
                <div class="container-fluid site__row">
                    <div class="row">
                        <div class="col-12 p-0 tab-content" id="myTabContent">
                            <?php $j=0 ?>
                            @foreach($news_category as $key1=>$cat)
                                @if(count($cat->news_active))
                                    <?php $j+=1 ?>
                                    <div class="swiper slider_multi_col slider_row_6_1 pb-0 tab-pane fade {{$j==1?'show active':''}}"
                                         id="menu{{$cat->id}}" role="tabpanel" aria-labelledby="menu{{$cat->id}}-tab">
                                        <div class="swiper-wrapper">
                                            @foreach($cat->news_active->take(9) as $news_act)
                                                <div class="swiper-slide">
                                                    @include('front.includes.index_row3',['item'=>$news_act,'link'=>route('front.news.show',[$news_act->id,$news_act->slug])])
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts') @endsection