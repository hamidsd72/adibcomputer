<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
//index
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/view/pages/{slug}', [HomeController::class,'index'])->name('index2');
//search
Route::get('/search', [HomeController::class,'search'])->name('search');
//seen
Route::get('/seen/{tbl}/{id}', [HomeController::class,'seen'])->name('seen');
// about us
Route::get('/about-us', [HomeController::class,'about'])->name('about.us');
// contact us
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact.us');
// news
Route::get('/all/list/{id?}/{slug?}', [HomeController::class,'all_list'])->name('all.list');
Route::get('/news/list/{id?}/{slug?}', [HomeController::class,'news_list'])->name('news.list');
Route::get('/news/show/{id}/{slug}', [HomeController::class,'news_show'])->name('news.show');
Route::get('/n/{id}/{slug?}', [HomeController::class,'news_show'])->name('news.show.short');
// gallery image&video
Route::get('/gallery/{type}', [HomeController::class,'gallery'])->name('gallery');
// report
Route::get('/report/list/{id?}/{slug?}', [HomeController::class,'report_list'])->name('report.list');
// interview
Route::get('/interview/list/{id?}/{slug?}', [HomeController::class,'interview_list'])->name('interview.list');
// translate
Route::get('/translate/list/{id?}/{slug?}', [HomeController::class,'translate_list'])->name('translate.list');
// note
Route::get('/note/list/{id?}/{slug?}', [HomeController::class,'note_list'])->name('note.list');
// memory
Route::get('/memory/list', [HomeController::class,'memory_list'])->name('memory.list');
// new_face
Route::get('/new-face/list/{id?}/{slug?}', [HomeController::class,'new_face_list'])->name('new.face.list');
Route::get('/new-face/show/{id}/{slug}', [HomeController::class,'new_face_show'])->name('new.face.show');
Route::get('/nf/{id}/{slug?}', [HomeController::class,'new_face_show'])->name('new.face.show.short');
// week_face
Route::get('/week-face/list/{id?}/{slug?}', [HomeController::class,'week_face_list'])->name('week.face.list');
Route::get('/week-face/show/{id}/{slug}', [HomeController::class,'week_face_show'])->name('week.face.show');
Route::get('/wf/{id}/{slug?}', [HomeController::class,'week_face_show'])->name('week.face.show.short');
// calender
Route::get('/calender/list/{id?}/{slug?}', [HomeController::class,'calender_list'])->name('calender.list');
Route::get('/calender/show/{id}/{slug}', [HomeController::class,'calender_show'])->name('calender.show');
Route::get('/c/{id}/{slug?}', [HomeController::class,'calender_show'])->name('calender.show.short');
// week_book
Route::get('/week-book/list/{id?}/{slug?}', [HomeController::class,'week_book_list'])->name('week.book.list');
Route::get('/week-book/show/{id}/{slug}', [HomeController::class,'week_book_show'])->name('week.book.show');
Route::get('/wb/{id}/{slug?}', [HomeController::class,'week_book_show'])->name('week.book.show.short');
// gramophone
Route::get('/gramophone/list', [HomeController::class,'gramophone_list'])->name('gramophone.list');
// podcast
Route::get('/podcast/list', [HomeController::class,'podcast_list'])->name('podcast.list');
