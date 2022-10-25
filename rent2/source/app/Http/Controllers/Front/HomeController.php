<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HomeController extends Controller {

    public function index($slug='index') {
        $view = 'front.rent2.'.$slug;
        return view($view, ['title' => 'صفحه اصلی']);
    }

}
