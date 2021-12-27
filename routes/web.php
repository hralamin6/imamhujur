<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


Route::middleware(['auth:sanctum', 'verified', 'admin'])->prefix('admin')->group(function () {
    Route::get('/setup',\App\Http\Livewire\Admin\SetupComponent::class)->name('admin.setup');
    Route::get('/show-cv',\App\Http\Livewire\Admin\ShowCVComponent::class)->name('admin.show.cv');
    Route::get('/show-payment',\App\Http\Livewire\Admin\ShowPaymentComponent::class)->name('admin.show.payment');

});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/chat',\App\Http\Livewire\ChatRoom::class)->name('chat');

    Route::get('/dashboard',\App\Http\Livewire\Web\DashboardComponent::class)->name('dashboard');
    Route::get('/edit-cv/{id?}',\App\Http\Livewire\Web\EditCvComponent::class)->name('edit.cv');
    Route::get('/edit-job/{id?}',\App\Http\Livewire\Web\EditJobComponent::class)->name('edit.job');
    Route::get('/contact-request',\App\Http\Livewire\Web\PaymentComponent::class)->name('contact.request');
});
Route::get('/',\App\Http\Livewire\Web\HomeComponent::class)->name('home');
Route::get('/cv-details/{id}',\App\Http\Livewire\Web\Details\CvDetailsComponent::class)->name('show.cv');
Route::get('/job-details/{id}',\App\Http\Livewire\Web\Details\JobDetailsComponent::class)->name('show.job');
Route::get('/imam',\App\Http\Livewire\Web\Show\ImamComponent::class)->name('imam');
Route::get('/teacher',\App\Http\Livewire\Web\Show\TeacherComponent::class)->name('teacher');
Route::get('/mosque',\App\Http\Livewire\Web\Show\MosqueComponent::class)->name('mosque');
Route::get('/madrasa',\App\Http\Livewire\Web\Show\MadrasaComponent::class)->name('madrasa');

Route::view('index', 'tailwind.index');
Route::view('blog', 'tailwind.test');

Route::get('/admin-page/{pageName?}',\App\Http\Livewire\AdminPageComponent::class)->name('admin.page');
Route::get('/page/{pageName?}',\App\Http\Livewire\PageComponent::class)->name('page');


//Route::get('blog-non-livewire', 'BlogController@index');
//Route::get('blog-non-livewire', [BlogController::class, 'index']);
//
//Route::get('/blog',\App\Http\Livewire\Blog\BlogComponent::class)->name('blog');
//Route::get('/blog-details/{id}',\App\Http\Livewire\Blog\SinglePostComponent::class)->name('blog.details');


//Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

//Route::get('/sitemap', function(){
//    $sitemap = Sitemap::create()
//        ->add(Url::create('/about-us'))
//        ->add(Url::create('/contact_us'));
//
//    $post = \App\Models\Blog::all();
//    foreach ($post as $post) {
//        $sitemap->add(Url::create("/post/{$post->slug}"));
//    }
//    $sitemap->writeToFile(public_path('sitemap.xml'));
//});


\PWA::routes();
