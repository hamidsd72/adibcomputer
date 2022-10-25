<?php

namespace App\Http\Controllers\Front;

use App\Models\Slider;
use App\Models\Report;
use App\Models\Interview;
use App\Models\Note;
use App\Models\NewsCategory;
use App\Models\News;
use App\Models\Banner;
use App\Models\Ad;
use App\Models\Memory;
use App\Models\About;
use App\Models\Contact;
use App\Models\GalleryCategory;
use App\Models\Sound;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    public function index() {
        $news_sliders=News::where('status','active')->where('status_slider','active')->where('status_archive','pending')->orderByDesc('created_at')->take(6)->get();
        $news_menu_lasts=News::where('status','active')->where('status_archive','pending')->where('type_news','news')->orderByDesc('created_at')->take(3)->get();
        $report_menu_lasts=News::where('status','active')->where('status_archive','pending')->where('type_news','report')->orderByDesc('created_at')->take(3)->get();
        $note_menu_lasts=News::where('status','active')->where('status_archive','pending')->where('type_news','note')->orderByDesc('created_at')->take(3)->get();
        $translate_menu_lasts=News::where('status','active')->where('status_archive','pending')->where('type_news','translate')->orderByDesc('created_at')->take(3)->get();
        $interview_menu_lasts=News::where('status','active')->where('status_archive','pending')->where('type_news','interview')->orderByDesc('created_at')->take(3)->get();
//        $memory_lasts=Memory::where('status','active')->orderByDesc('created_at')->take(3)->get();
        $news_randoms=News::where('status','active')->where('status_slider_bottom','active')->where('status_archive','pending')->orderByDesc('created_at')->take(12)->get();
        $news_lasts=News::where('status','active')->where('status_end','active')->where('status_archive','pending')->orderByDesc('created_at')->take(7)->get();
        $pic_homes=GalleryCategory::where('status','active')->where('status_home','active')->where('type','pic')->orderBy('sort')->take(4)->get();
        $video_homes=GalleryCategory::where('status','active')->where('status_home','active')->where('type','video')->orderBy('sort')->take(4)->get();
        $ads=Ad::where('status','active')->orderByDesc('id')->get();
        $news_selects=News::where('status','active')->where('status_select','active')->where('status_archive','pending')->orderByDesc('created_at')->take(6)->get();
        $news_category=NewsCategory::where('status','active')->where('status_box_bottom','active')->orderBy('sort')->get();
        $last_seen=News::where('status','active')->where('status_archive','pending')->orderByDesc('seen')->take(6)->get();
        $note_lasts=News::where('status','active')->where('status_archive','pending')->where('type_news','note')->where('note_status','active')->orderByDesc('created_at')->take(4)->get();
        $new_faces=News::where('status','active')->where('type_news','new_face')->orderByDesc('created_at')->take(4)->get();
        return view('front.index',compact('news_sliders','news_menu_lasts','report_menu_lasts','note_menu_lasts','interview_menu_lasts','news_randoms','news_lasts','pic_homes','video_homes','ads','news_selects','news_category','last_seen','note_lasts','new_faces','translate_menu_lasts'), ['title' => 'صفحه اصلی']);
    }

    public function search(Request $request)
    {
        $items_news=News::where('status','active')->where('type_news','news')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_report=News::where('status','active')->where('type_news','report')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_interview=News::where('status','active')->where('type_news','interview')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_note=News::where('status','active')->where('type_news','note')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_translate=News::where('status','active')->where('type_news','translate')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_memory=Memory::where('status','active')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_video=GalleryCategory::where('status','active')->where('type','video')->where('title','LIKE','%'.$request->search.'%')->get();
        $items_pic=GalleryCategory::where('status','active')->where('type','pic')->where('title','LIKE','%'.$request->search.'%')->get();
        return view('front.search',compact('items_news','items_report','items_interview','items_note','items_memory','items_video','items_pic','items_translate'), ['title' => 'جستجوی: '.$request->search]);
    }
    public function seen($tbl,$id)
    {
        $link='';
        if($tbl=='banner')
        {
            $item=Banner::find($id);
            $link=$item->link;
        }
        elseif($tbl=='ad')
        {
            $item=Ad::find($id);
            $link=$item->link;
        }
        elseif($tbl=='slider')
        {
            $item=Slider::find($id);
            $link=$item->link;
        }
        if(!$link) {
            return redirect()->back()->with('err_message','لینک یافت نشد');
        }
        $item->seen += 1;
        $item->update();
        return redirect($link);
    }
    public function about()
    {
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $about=About::where('type','about')->first();
        return view('front.about',compact('news_selects','news_end','about'), ['title' => 'درباره ما']);
    }
    public function contact()
    {
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $contact=Contact::first();
        return view('front.contact',compact('contact','news_selects','news_end'), ['title' => 'تماس با ما']);
    }
    public function all_list($id=null,$slug=null,Request $request)
    {
        $from_date=null;
        $to_date=null;
        if(isset($request->from_date))
        {
            $f_en_date=num_to_en($request->from_date);
            $from_date=convert_date($f_en_date);
        }
        if(isset($request->to_date))
        {
            $t_en_date=num_to_en($request->to_date);
            $to_date=convert_date($t_en_date);
        }
        if($id==null)
        {
            $cat_id=0;
            $title='همه مطالب';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->whereIN('type_news',['news','report','interview','note']);
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else
        {
            $category=NewsCategory::find($id);
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $cat_id=$id;
            $title='همه مطالب';
            $items=News::where('status','active')->where('category_id',$id)->whereIN('type_news',['news','report','interview','note']);
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $type_menu_l=[
            ['title'=>'خبر','url'=>'front.news.list','id'=>$id,'slug'=>$slug],
            ['title'=>'گزارش','url'=>'front.report.list','id'=>$id,'slug'=>$slug],
            ['title'=>'مصاحبه','url'=>'front.interview.list','id'=>$id,'slug'=>$slug],
            ['title'=>'یادداشت','url'=>'front.note.list','id'=>$id,'slug'=>$slug],
            ['title'=>'ترجمه','url'=>'front.translate.list','id'=>$id,'slug'=>$slug],
        ];
        $id_cat_news=$id;
        return view('front.news.index',compact('cat_id','items','cats','news_selects','news_end','type_menu_l','id_cat_news'), ['title' => $title]);
    }
    public function news_list($id=null,$slug=null,Request $request)
    {
        $from_date=null;
        $to_date=null;
        if(isset($request->from_date))
        {
            $f_en_date=num_to_en($request->from_date);
            $from_date=convert_date($f_en_date);
        }
        if(isset($request->to_date))
        {
            $t_en_date=num_to_en($request->to_date);
            $to_date=convert_date($t_en_date);
        }
        if($id==null)
        {
            $cat_id=0;
            $title='خبر';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','news');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else if($id=='news')
        {
            $cat_id=0;
            $title='خبر';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','news');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else if($id=='archive')
        {
            $cat_id=0;
            $title='لیست آرشیو';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','news')->where('status_archive','active');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else
        {
            $category=NewsCategory::find($id);
                $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
                $cat_id=$id;
                $title='خبر';
            $items=News::where('status','active')->where('category_id',$id)->where('type_news','news');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $type_menu_l=[
            ['title'=>'خبر','url'=>'front.news.list','id'=>$id,'slug'=>$slug],
            ['title'=>'گزارش','url'=>'front.report.list','id'=>$id,'slug'=>$slug],
            ['title'=>'مصاحبه','url'=>'front.interview.list','id'=>$id,'slug'=>$slug],
            ['title'=>'یادداشت','url'=>'front.note.list','id'=>$id,'slug'=>$slug],
            ['title'=>'ترجمه','url'=>'front.translate.list','id'=>$id,'slug'=>$slug],
        ];
        $id_cat_news=$id;
        return view('front.news.index',compact('cat_id','items','cats','news_selects','news_end','type_menu_l','id_cat_news'), ['title' => $title]);
    }
    public function news_show($id,$slug=null)
    {
        $item=News::findOrFail($id);
        $item->seen+=1;
        $item->update();
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.news.show',compact('item','news_selects','news_end'), ['title' => $item->title]);
    }
    public function gallery($type)
    {
        if($type=='video'){
            $items=GalleryCategory::where('status','active')->where('type','video')->orderBy('sort')->get();
            $title='گالری فیلم';
        }
        elseif($type=='pic'){
            $items=GalleryCategory::where('status','active')->where('type','pic')->orderBy('sort')->get();
            $title='گالری تصاویر';
        }
        else{
            abort(404);
        }
        return view('front.gallery.index',compact('type','items'),['title' => $title]);
    }
    public function report_list($id=null,$slug=null,Request $request)
    {
        $from_date=null;
        $to_date=null;
        if(isset($request->from_date))
        {
            $f_en_date=num_to_en($request->from_date);
            $from_date=convert_date($f_en_date);
        }
        if(isset($request->to_date))
        {
            $t_en_date=num_to_en($request->to_date);
            $to_date=convert_date($t_en_date);
        }
        if($id==null)
        {
            $cat_id=0;
            $title='گزارش';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','report');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else
        {
            $category=NewsCategory::find($id);
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $cat_id=$id;
            $title='گزارش ';
            $items=News::where('status','active')->where('category_id',$id)->where('type_news','report');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $type_menu_l=[
            ['title'=>'خبر','url'=>'front.news.list','id'=>$id,'slug'=>$slug],
            ['title'=>'گزارش','url'=>'front.report.list','id'=>$id,'slug'=>$slug],
            ['title'=>'مصاحبه','url'=>'front.interview.list','id'=>$id,'slug'=>$slug],
            ['title'=>'یادداشت','url'=>'front.note.list','id'=>$id,'slug'=>$slug],
            ['title'=>'ترجمه','url'=>'front.translate.list','id'=>$id,'slug'=>$slug],
        ];
        $id_cat_news=$id;
        return view('front.news.index',compact('cat_id','items','cats','news_selects','news_end','type_menu_l','id_cat_news'), ['title' => $title]);
    }
    public function interview_list($id=null,$slug=null,Request $request)
    {
        $from_date=null;
        $to_date=null;
        if(isset($request->from_date))
        {
            $f_en_date=num_to_en($request->from_date);
            $from_date=convert_date($f_en_date);
        }
        if(isset($request->to_date))
        {
            $t_en_date=num_to_en($request->to_date);
            $to_date=convert_date($t_en_date);
        }
        if($id==null)
        {
            $cat_id=0;
            $title='مصاحبه';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','interview');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else
        {
            $category=NewsCategory::find($id);
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $cat_id=$id;
            $title='مصاحبه ';
            $items=News::where('status','active')->where('category_id',$id)->where('type_news','interview');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $type_menu_l=[
            ['title'=>'خبر','url'=>'front.news.list','id'=>$id,'slug'=>$slug],
            ['title'=>'گزارش','url'=>'front.report.list','id'=>$id,'slug'=>$slug],
            ['title'=>'مصاحبه','url'=>'front.interview.list','id'=>$id,'slug'=>$slug],
            ['title'=>'یادداشت','url'=>'front.note.list','id'=>$id,'slug'=>$slug],
            ['title'=>'ترجمه','url'=>'front.translate.list','id'=>$id,'slug'=>$slug],
        ];
        $id_cat_news=$id;
        return view('front.news.index',compact('cat_id','items','cats','news_selects','news_end','type_menu_l','id_cat_news'), ['title' => $title]);
    }

    public function note_list($id=null,$slug=null,Request $request)
    {
        $from_date=null;
        $to_date=null;
        if(isset($request->from_date))
        {
            $f_en_date=num_to_en($request->from_date);
            $from_date=convert_date($f_en_date);
        }
        if(isset($request->to_date))
        {
            $t_en_date=num_to_en($request->to_date);
            $to_date=convert_date($t_en_date);
        }
        if($id==null)
        {
            $cat_id=0;
            $title='یادداشت';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','note');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else
        {
            $category=NewsCategory::find($id);
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $cat_id=$id;
            $title='یادداشت ';
            $items=News::where('status','active')->where('category_id',$id)->where('type_news','note');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $type_menu_l=[
            ['title'=>'خبر','url'=>'front.news.list','id'=>$id,'slug'=>$slug],
            ['title'=>'گزارش','url'=>'front.report.list','id'=>$id,'slug'=>$slug],
            ['title'=>'مصاحبه','url'=>'front.interview.list','id'=>$id,'slug'=>$slug],
            ['title'=>'یادداشت','url'=>'front.note.list','id'=>$id,'slug'=>$slug],
            ['title'=>'ترجمه','url'=>'front.translate.list','id'=>$id,'slug'=>$slug],
        ];
        $id_cat_news=$id;
        return view('front.news.index',compact('cat_id','items','cats','news_selects','news_end','type_menu_l','id_cat_news'), ['title' => $title]);
    }
    public function translate_list($id=null,$slug=null,Request $request)
    {
        $from_date=null;
        $to_date=null;
        if(isset($request->from_date))
        {
            $f_en_date=num_to_en($request->from_date);
            $from_date=convert_date($f_en_date);
        }
        if(isset($request->to_date))
        {
            $t_en_date=num_to_en($request->to_date);
            $to_date=convert_date($t_en_date);
        }
        if($id==null)
        {
            $cat_id=0;
            $title='ترجمه';
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $items=News::where('status','active')->where('type_news','translate');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        else
        {
            $category=NewsCategory::find($id);
            $cats=NewsCategory::where('status','active')->orderBy('sort')->get();
            $cat_id=$id;
            $title='ترجمه';
            $items=News::where('status','active')->where('category_id',$id)->where('type_news','translate');
            if($from_date!=null)
            {
                $items=$items->whereDate('created_at','>=',$from_date);
            }
            if($to_date!=null)
            {
                $items=$items->whereDate('created_at','<=',$to_date);
            }
            $items=$items->orderByDesc('id')->paginate(12);
        }
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        $type_menu_l=[
            ['title'=>'خبر','url'=>'front.news.list','id'=>$id,'slug'=>$slug],
            ['title'=>'گزارش','url'=>'front.report.list','id'=>$id,'slug'=>$slug],
            ['title'=>'مصاحبه','url'=>'front.interview.list','id'=>$id,'slug'=>$slug],
            ['title'=>'یادداشت','url'=>'front.note.list','id'=>$id,'slug'=>$slug],
            ['title'=>'ترجمه','url'=>'front.translate.list','id'=>$id,'slug'=>$slug],
        ];
        $id_cat_news=$id;
        return view('front.news.index',compact('cat_id','items','cats','news_selects','news_end','type_menu_l','id_cat_news'), ['title' => $title]);
    }

    public function memory_list()
    {
        $title = 'آرشیو خاطرات';
        $items = Memory::where('status', 'active')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.memory.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }
    public function memory_show($id,$slug=null)
    {
        $item=Memory::findOrFail($id);
        $item->seen+=1;
        $item->update();
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.memory.show',compact('item','news_selects','news_end'), ['title' => $item->title]);
    }
    public function new_face_list()
    {
        $title = 'چهره نو';
        $items = News::where('status', 'active')->where('type_news','new_face')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.new_face.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }
    public function new_face_show($id,$slug=null)
    {
        $item=News::findOrFail($id);
        $item->seen+=1;
        $item->update();
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.new_face.show',compact('item','news_selects','news_end'), ['title' => $item->title]);
    }
    public function week_face_list()
    {
        $title = 'چهره هفته';
        $items = News::where('status', 'active')->where('type_news','week_face')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.week_face.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }
    public function week_face_show($id,$slug=null)
    {
        $item=News::findOrFail($id);
        $item->seen+=1;
        $item->update();
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.week_face.show',compact('item','news_selects','news_end'), ['title' => $item->title]);
    }
    public function calender_list()
    {
        $title = 'تقویم روز';
        $items = News::where('status', 'active')->where('type_news','calender')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.calender.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }
    public function calender_show($id,$slug=null)
    {
        $item=News::findOrFail($id);
        $item->seen+=1;
        $item->update();
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.calender.show',compact('item','news_selects','news_end'), ['title' => $item->title]);
    }
    public function week_book_list()
    {
        $title = 'کتاب هفته';
        $items = News::where('status', 'active')->where('type_news','week_book')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.week_book.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }
    public function week_book_show($id,$slug=null)
    {
        $item=News::findOrFail($id);
        $item->seen+=1;
        $item->update();
        $news_selects=News::where('status','active')->where('status_select','active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.plus.week_book.show',compact('item','news_selects','news_end'), ['title' => $item->title]);
    }
    public function gramophone_list()
    {
        $title = 'گرامافون';
        $items = Sound::where('status', 'active')->where('type','gramophone')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.sound.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }
    public function podcast_list()
    {
        $title = 'پادکست';
        $items = Sound::where('status', 'active')->where('type','podcast')->orderByDesc('id')->paginate(12);
        $news_selects = News::where('status', 'active')->where('status_select', 'active')->orderByDesc('id')->take(6)->get();
        $news_end=News::where('status','active')->where('status_end','active')->orderByDesc('id')->take(6)->get();
        return view('front.sound.index',compact('items','news_selects','news_end'), ['title' => $title]);
    }

}
