@extends('layouts.front')
@section('styles') @endsection
@section('body')
    <section class="news_page">
        {{--        <div class="img_box">--}}
        {{--            <img src="https://mansoorkiarash.com/wp-content/uploads/2018/06/%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%B5%D9%81%D8%AD%D9%87-%D8%AA%D9%85%D8%A7%D8%B3-%D8%A8%D8%A7-%D9%85%D8%A7.jpg" alt="درباره هنرآفرین">--}}
        {{--        </div>--}}
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 mt-25 contact_col">

                    <h1 class="mb-0">{{$title}}</h1>
                    <hr class="mt-3 mb-3 mb-0"/>

                    @if(count($items))
                        @foreach($items as $item)
                            <div class="col-md-12 px-0 mb-2 card_page">
                                @include('front.includes.sound_card',['item'=>$item])
                            </div>
                        @endforeach
                        <div class="container-fluid">
                            <div class="row">
                                <nav aria-label="..." class=" mt-4 mx-auto">
                                    {{$items->appends(Request::except('page'))->links("pagination::bootstrap-4")}}
                                </nav>
                            </div>
                        </div>
                    @else
                        <div class="col-12 text-center alert alert-danger">
                            موردی یافت نشد
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-5 mt-3 mb-25 mt-md-50">
                    <div class="col-12 p-0 p-sticky">
                        <div class="col-12 mt-25 list_news_one border-all position-relative">
                            <h5 class="title_border">
                                برگزیده ها
                            </h5>
                            @foreach($news_selects as $news)
                                <div class="col-md-12 px-0 mb-2 card_page">
                                    @include('front.includes.footer_card',['item'=>$news,'link'=>route('front.news.show',[$news->id,$news->slug])])
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12 mt-25 list_news_one border-all position-relative">
                            <h5 class="title_border">
                                آخرین مطالب
                            </h5>
                            @foreach($news_end as $news_e)
                                <div class="col-md-12 px-0 mb-2 card_page">
                                    @include('front.includes.footer_card',['item'=>$news_e,'link'=>route('front.news.show',[$news_e->id,$news_e->slug])])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts') @endsection