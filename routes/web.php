<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TicketController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\isGuest;
use App\Http\Middleware\isAuth;

//MAIN WEBSITE

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');

Route::get('/galeria', [HomeController::class, 'gallery'])->name('gallery');

Route::post('/fillingForm', [TicketController::class, 'fillingForm'])->name('filling.form');

//SERVICES

Route::get('/pochistvane-na-divan', [HomeController::class, 'divani'])->name('divani');

Route::get('/prane-na-matraci', [HomeController::class, 'matraci'])->name('matraci');

Route::get('/pochistvane-na-stolove', [HomeController::class, 'stolove'])->name('stolove');

Route::get('/pochistvane-na-prozorci', [HomeController::class, 'prozorci'])->name('prozorci');

Route::get('/pochistvane-na-kilimi', [HomeController::class, 'kilimi'])->name('kilimi');

Route::get('/pochistvane-na-avtosaloni', [HomeController::class, 'avtosaloni'])->name('avtosaloni');

//MAIL

Route::post('/thank-you', [MailController::class, 'contactForm'])->name('contact.form.send');

Route::middleware([isGuest::class])->group(function () {

    //USER LOGIN / REGISTER

    Route::get('/register', [UserController::class, 'register'])->name('register');

    Route::post('/registerAttempt', [UserController::class, 'registerAttempt'])->name('register.attempt');
    
    Route::get('/login', [UserController::class, 'login'])->name('login');
    
    Route::post('/loginAttempt', [UserController::class, 'loginAttempt'])->name('login.attempt');
});

Route::middleware([isAuth::class])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    //ADMIN ONLY

    Route::middleware([IsAdmin::class])->group(function () {

        //TICKET DELETE ADMIN ONLY
        

        Route::get('/administrator/service/{ticket:id}/destroy', [TicketController::class, 'destroy'])->name('admin.ticket.destroy');

        //ADMIN SERVICES

        Route::get('/administrator/services', [ServiceController::class, 'index'])->name('admin.services.index');

        Route::get('/administrator/service/create', [ServiceController::class, 'create'])->name('admin.service.create');

        Route::post('/administrator/service/store', [ServiceController::class, 'store'])->name('admin.service.store');

        Route::put('/administrator/service/{service:id}/update', [ServiceController::class, 'update'])->name('admin.service.update');

        Route::get('/administrator/service/{service:id}/edit', [ServiceController::class, 'edit'])->name('admin.service.edit');

        Route::get('/administrator/service/{service:id}/delete', [ServiceController::class, 'delete'])->name('admin.service.delete');

        //STATUSES

        Route::get('/administrator/statuses', [StatusController::class, 'index'])->name('admin.statuses.index');

        Route::get('/administrator/status/create', [StatusController::class, 'create'])->name('admin.status.create');

        Route::post('/administrator/status/store', [StatusController::class, 'store'])->name('admin.status.store');

        Route::put('/administrator/status/{status:id}/update', [StatusController::class, 'update'])->name('admin.status.update');

        Route::get('/administrator/status/{status:id}/edit', [StatusController::class, 'edit'])->name('admin.status.edit');

        Route::get('/administrator/status/{status:id}/delete', [StatusController::class, 'delete'])->name('admin.status.delete');

        //ROLES

        Route::get('/administrator/roles', [RoleController::class, 'index'])->name('admin.roles.index');

        Route::get('/administrator/role/create', [RoleController::class, 'create'])->name('admin.role.create');

        Route::post('/administrator/role/store', [RoleController::class, 'store'])->name('admin.role.store');

        Route::put('/administrator/role/{role:id}/update', [RoleController::class, 'update'])->name('admin.role.update');

        Route::get('/administrator/role/{role:id}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');

        Route::get('/administrator/role/{role:id}/delete', [RoleController::class, 'delete'])->name('admin.role.delete');

        //USERS

        Route::get('/administrator/users', [UserController::class, 'index'])->name('admin.users.index');

        Route::get('/administrator/user/create', [UserController::class, 'create'])->name('admin.user.create');

        Route::post('/administrator/user/store', [UserController::class, 'store'])->name('admin.user.store');

        Route::put('/administrator/user/{user:id}/update', [UserController::class, 'update'])->name('admin.user.update');

        Route::get('/administrator/user/{user:id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');

        Route::get('/administrator/user/{user:id}/delete', [UserController::class, 'delete'])->name('admin.user.delete');

        //NOTIFICATIONS

        Route::get('/administrator/notification/create', [NotificationController::class, 'create'])->name('admin.notification.create');

        Route::get('/administrator/notification/{notification:id}/edit', [NotificationController::class, 'edit'])->name('admin.notification.edit');

        Route::post('/administrator/notification/store', [NotificationController::class, 'store'])->name('admin.notification.store');

        Route::put('/administrator/notification/{notification:id}/update', [NotificationController::class, 'update'])->name('admin.notification.update');

        Route::get('/administrator/notification/{notification:id}/delete', [NotificationController::class, 'delete'])->name('admin.notification.delete');

        //ACTIVITY LOGS

        Route::get('/administrator/activity/create', [ActivityController::class, 'create'])->name('admin.activity.create');

        Route::get('/administrator/activity/{notification:id}/edit', [ActivityController::class, 'edit'])->name('admin.activity.edit');

        Route::post('/administrator/activity/store', [ActivityController::class, 'store'])->name('admin.activity.store');

        Route::put('/administrator/activity/{notification:id}/update', [ActivityController::class, 'update'])->name('admin.activity.update');

        Route::get('/administrator/activity/{notification:id}/delete', [ActivityController::class, 'delete'])->name('admin.activity.delete');

        Route::get('/administrator/activity/index', [ActivityController::class, 'index'])->name('admin.activity.index');

        Route::get('/administrator/activity/show/{notification:id}', [ActivityController::class, 'show'])->name('admin.activity.show');

        Route::get('/administrator/activity/{notification:id}/seen', [ActivityController::class, 'makeSeen'])->name('admin.activity.make.seen');
    
        Route::get('/administrator/activity/{notification:id}/unseen', [ActivityController::class, 'makeUnseen'])->name('admin.activity.make.unseen');

        //GALLERY

        Route::get('/administrator/gallery/create', [ImageController::class, 'create'])->name('admin.gallery.create');

        Route::get('/administrator/gallery/index', [ImageController::class, 'index'])->name('admin.gallery.index');

        Route::post('/administrator/gallery/store', [ImageController::class, 'store'])->name('admin.gallery.store');

        Route::get('/administrator/gallery/{image:id}/delete', [ImageController::class, 'delete'])->name('admin.gallery.delete');
    });

    //USER EDIT SELFPROFILE

    Route::get('/administrator/profile', [UserController::class, 'profile'])->name('admin.profile');

    Route::put('/administrator/profile/update', [UserController::class, 'profileUpdate'])->name('admin.profile.update');

    //ADMIN / EMPLOYEE TICKETS

    Route::get('/administrator', [TicketController::class, 'index'])->name('admin.index');

    Route::get('/administrator/tickets/search', [TicketController::class, 'search'])->name('admin.tickets.search');

    Route::get('/administrator/ticket/create', [TicketController::class, 'create'])->name('admin.ticket.create');

    Route::post('/administrator/ticket/store', [TicketController::class, 'store'])->name('admin.ticket.store');

    Route::get('/administrator/ticket/{ticket:id}/edit', [TicketController::class, 'edit'])->name('admin.ticket.edit');

    Route::get('/administrator/ticket/{ticketService:id}/edit/service', [TicketController::class, 'editService'])->name('admin.ticket.edit.service');

    Route::get('/administrator/ticket/{ticket:id}/create/service', [TicketController::class, 'createService'])->name('admin.ticket.create.service');

    Route::put('/administrator/ticket/{ticketService:id}/update/service', [TicketController::class, 'updateService'])->name('admin.ticket.update.service');

    Route::post('/administrator/ticket/{ticket:id}/store/service', [TicketController::class, 'storeService'])->name('admin.ticket.store.service');

    Route::get('/administrator/tickets/{ticket:id}/status/change/{status}', [TicketController::class, 'setStatus'])->name('admin.tickets.set.status');

    Route::get('/administrator/service/{ticketService:id}/destroy/service', [TicketController::class, 'destroyService'])->name('admin.ticket.destroy.service');

   

    Route::put('/administrator/ticket/{ticket:id}/update', [TicketController::class, 'update'])->name('admin.ticket.update');

    //NOTIFICATIONS

    Route::get('/administrator/notifications/index', [NotificationController::class, 'index'])->name('admin.notification.index');

    Route::get('/administrator/notifications/show/{notification:id}', [NotificationController::class, 'show'])->name('admin.notification.show');

    Route::get('/administrator/notification/{notification:id}/seen', [NotificationController::class, 'makeSeen'])->name('admin.notification.make.seen');

    Route::get('/administrator/notification/{notification:id}/unseen', [NotificationController::class, 'makeUnseen'])->name('admin.notification.make.unseen');
});
