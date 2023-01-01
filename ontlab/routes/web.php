<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredMemberController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\AwardsController;
use App\Http\Controllers\Auth\MemberSessionController;
use App\Http\Controllers\CollabController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PubsController;
use App\Http\Controllers\TeamController;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('homePage');

Route::get('/team',function (){
    return view('team');
})->name('teamPage');
Route::get('/team/u/{id}',[TeamController::class,'profile']
);
Route::get('/events', function () {
    return view('Events');
})->name('eventPage');
Route::get('/events/{name}', function ($name) {
    $events=DB::table('events')->select('*')->where('event_id','=',$name)->get();
    $data = compact('events');
    return view('singleEvent')->with($data);
});
Route::get('/projects', function () {
    return view('Projects');
})->name('projectPage');
Route::get('/projects/{name}', function ($name) {
    $projects=DB::table('projects')->select('*')->where('proj_id','=',$name)->get();
    $data = compact('projects');
    return view('singleProject')->with($data);
});
Route::get('/research', function () {
    return view('Research');
})->name('researchPage');
Route::get('/research/{domain}', function ($domain) {
    $domains=DB::table('domains')->select('*')->where('d_id','=',$domain)->get();
    $data=compact('domains');
    return view('rdomain')->with($data);
});
Route::group(
    ['prefix' => '/publications'],
    function () { 
        Route::get('/', function () {
            return redirect('publications/conference');
        })->name('pubsPage');
        Route::get('/{name}', [PubsController::class, 'index']);
    }
);


Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');
Route::get('/blogs/{name}', function ($name) {
    return view('singleBlog');
});


Route::get('/member/u/{id}', function ($id) {
    $data = compact('id');
    return view('adminPanel.member.main.member')->with($data);
})->name('member')->middleware('memberAuth');
Route::get('/member-login', [MemberSessionController::class, 'create'])->name('memberlogin');
Route::post('/member-login', [MemberSessionController::class, 'store']);
Route::get('/abcd', [PubsController::class, 'index']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/login', [AuthenticatedSessionController::class,'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup');
Route::post('/signup', [RegisteredUserController::class, 'store']);
// Route::get('/abcd', function () {
//     return view('adminPanel.Pages.show.members');
// });
// Route::get('/award/{n}', [AwardsController::class, 'show']);
//Route::post('/awards/{name}', [AwardsController::class, 'store']);
Route::group(
    ['prefix' => '/ont-admin', 'middleware' => ['auth', 'verified']],
    function () {
        Route::get('/', function () {
            return view('adminPanel.Pages.dashboard.dashboard');
        })->name('dashboard');
        Route::get('/{page}/{action}',[DashboardController::class,'index']);
        Route::post('/members/add', [RegisteredMemberController::class,'store']);
        Route::post('/collabs/add',[CollabController::class,'store']);
        Route::post('/domains/add', [DomainController::class, 'store']);
        Route::post('/events/add',[EventController::class,'store']);
        Route::post('/projects/add', [ProjectController::class, 'store']);
        Route::post('/publications/add', [PubsController::class, 'store']);
    }
);

Route::get('/member/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');
Route::get('/member/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::post('/member/update/{id}', [MemberController::class, 'update'])->name('member.update');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';