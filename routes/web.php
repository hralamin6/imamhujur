<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;


Route::middleware(['auth:sanctum', 'verified', 'admin'])->prefix('admin')->group(function () {
    Route::get('/user',\App\Http\Livewire\Admin\UserComponent::class)->name('admin.user');
    Route::get('/setup',\App\Http\Livewire\Admin\SetupComponent::class)->name('admin.setup');
    Route::get('/show-cv',\App\Http\Livewire\Admin\ShowCVComponent::class)->name('admin.show.cv');
    Route::get('/show-job',\App\Http\Livewire\Admin\ShowJobComponent::class)->name('admin.show.job');
    Route::get('/show-payment',\App\Http\Livewire\Admin\ShowPaymentComponent::class)->name('admin.show.payment');

});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/chat',\App\Http\Livewire\ChatRoom::class)->name('chat');

    Route::get('/dashboard',\App\Http\Livewire\Web\DashboardComponent::class)->name('dashboard');
    Route::get('/edit-cv/{id?}',\App\Http\Livewire\Web\EditCvComponent::class)->name('edit.cv');
    Route::get('/edit-job/{id?}',\App\Http\Livewire\Web\EditJobComponent::class)->name('edit.job');
    Route::get('/contact-request',\App\Http\Livewire\Web\PaymentComponent::class)->name('contact.request');
    Route::get('/unlocked-profile',\App\Http\Livewire\Web\UnlockedProfileComponent::class)->name('unlocked.profile');

    Route::get('/message',\App\Http\Livewire\MessageComponent::class)->name('message');

});
Route::get('/',\App\Http\Livewire\Web\HomeComponent::class)->name('home');
Route::get('/biodata/{id:slug}',\App\Http\Livewire\Web\Details\CvDetailsComponent::class)->name('show.cv');
Route::get('/circular/{id:slug}',\App\Http\Livewire\Web\Details\JobDetailsComponent::class)->name('show.job');
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

Route::get('/sitemap', function(){
    $sitemap = Sitemap::create()
        ->add(Url::create('/home'))
        ->add(Url::create('/faq'))
        ->add(Url::create('/login'))
        ->add(Url::create('/about-us'))
        ->add(Url::create('/register'));

//    $posts = \App\Models\Blog::all();
//    foreach ($posts as $post) {
//        $sitemap->add(Url::create("/post/{$post->id}"));
//    }
    \App\Models\Page::all()->each(function (\App\Models\Page $item) use ($sitemap) {
        $sitemap->add(Url::create("/page/{$item->name}"));
    });
    \App\Models\Cv::all()->each(function (\App\Models\Cv $item) use ($sitemap) {
        $sitemap->add(Url::create("/biodata/{$item->slug}"));
    });
    \App\Models\Job::all()->each(function (\App\Models\Job $item) use ($sitemap) {
        $sitemap->add(Url::create("/circular/{$item->slug}"));
    });
    $sitemap->writeToFile(public_path('sitemap.xml'));
});


\PWA::routes();


Route::get('/college',\App\Http\Livewire\CollegeListComponent::class)->name('college');
