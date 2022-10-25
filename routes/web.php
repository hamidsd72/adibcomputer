<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use App\Models\CurlCrm;
use DB;

Route::group(['prefix' => '', 'namespace' => 'User'], function () {
    Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('index');

    Route::get('login-crm', function () {
        $username = 'abbas.tosan@gmail.com';
        $access_key = 'rcHHkOyJB52qzu7l';
        $login=false;
        if (session()->has('sessionName')) {
               $login=true;
        }
        if(!$login)
        {
            $res = CurlCrm::login1($username);
            $res = json_decode($res, true);
            if ($res["success"]) {
                $result = $res["result"];
                $token = $result["token"];
                $res1 = CurlCrm::login2($username, $access_key, $token);
                $res1 = json_decode($res1, true);
                if ($res1["success"]) {
                    $result1 = $res1["result"];
                    session(['sessionName' => $result1["sessionName"]]);
                    session(['user_id' => $result1["userId"]]);

                } else {
                    dd('invalid username or accessKey');
                }
            } else {
                dd('not username');
            }
        }

    });
    Route::get('car-list', function () {
        if (session()->has('sessionName')) {
                $sessionName = session('sessionName');
            $query1 = DB::table('vtcmarac')->where('adel01','aa')->where('adel02','>=','bb');
            dd($query1->toSql());
                $query="SELECT * FROM vtcmarac";
                $result = CurlCrm::query_set($sessionName, $query);
                $result = json_decode($result, true);
                dd($result);
            }
        else
        {
            dd('no login');
        }
    });
});

