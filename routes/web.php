<?php

use App\Facades\DateFormateFacade;
use App\Http\Controllers\PayOrderController;
use App\Jobs\JobQueueTestMail;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('pay', [PayOrderController::class, 'index']);


Route::get('/', function () {


    // echo DateFormateFacade::format1('2012/4/2');

    echo Str::upper("rasel hasan");
    echo Str::upper1("rasel Hasan");
});



Route::get('view-composer-1', function(){
    return view('view-composer-1');
});

Route::get('view-composer-2', function(){
    return view('view-composer-2');
});


Route::get('observer-test', function(){
    User::create([
        'name' => 'rasel',
        'email' => 'rasel.laravel@gmail.com',
        'password' => Hash::make('password')
    ]);
});


Route::get('job-queue-test-mail', function(){
    dispatch(new JobQueueTestMail(User::first()));
    echo "Mail Sent";
});


Route::get('test-notification', function(){
    $user = User::first();
    //$user->notify( new InvoicePaid());

    //dd($user->notifications->toArray());
    //dd($user->unreadNotifications->toArray());

    //dd($user->readNotifications->toArray());
    //$user->notifications->first()->markAsRead();
    //$user->notifications->first()->markAsUnread();
});



//==================== Basic ====================

Route::middleware(['throttle:global'])->group(function(){
    Route::get('users/{rasel}', function(User $user){
        echo $user->name;
    });
});


