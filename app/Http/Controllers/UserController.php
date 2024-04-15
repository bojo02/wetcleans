<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function register(){
        $title = 'SaitMax: Студио За Уеб Дизайн На Сайт Цена и Оферта';
        $meta_description = '';
        $meta_keywords = '';

        return view('admin.user.register', compact('title', 'meta_description', 'meta_keywords'));
    }

    public function registerAttempt(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);

        auth()->login($user);

        return redirect(route('home'))->with('success', 'Вашият акаунт беше създаден!');
    }

    public function login(){
        $title = 'SaitMax: Студио За Уеб Дизайн На Сайт Цена и Оферта';
        $meta_description = '';
        $meta_keywords = '';

        return view('admin.user.login', compact('title', 'meta_description', 'meta_keywords'));
    }

    public function loginAttempt(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($incomingFields)){
            $request->session()->regenerate();

            return redirect(route('admin.index'))->with('success', 'Влизането беше успешно!');
        }
        else{
            return redirect()->back()->with('wrong', 'Грешни данни за вход...');
        }  
    }

    public function logout(){
        auth()->logout();

        return redirect(route('home'))->with('success', 'Успешно излизане от акаунта!');
    }

    public function index(){
        $users = User::orderBy('created_at','desc')->paginate(10);

        return view('admin.users.index', ['users' => $users]);
    }

    public function create(){
        $roles = Role::get();

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'role_id' => ['required'],
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id
        ]);

        return redirect()->route('admin.user.edit', ['user' => $user->id])->with('success', 'Потребителя беше създаден успешно!');
    }

    public function edit(User $user){
        $roles = Role::get();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function profile(){
        $roles = Role::get();

        $user = auth()->user();

        return view('admin.users.profile', compact('user', 'roles'));
    }

    public function profileUpdate(Request $request){
        $user = auth()->user();

        if($user->email != $request->email){
            if($request->filled('password')){
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'email' => 'required|unique:users',
                    'password' => 'required|min:6'
                ]);
            }
            else{
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'email' => 'required|unique:users',
                ]);
            }
        }
        else{
            if($request->filled('password')){
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required|min:6'
                ]);

                
            }
            else{
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                ]);
            }
        }


      

        $user->update($incomingFields);

        return redirect()->back()->with('success', 'Вашият профил беше редактиран успешно!');
    }

    public function update(User $user, Request $request){
        if($user->email != $request->email){
            if($request->filled('password')){
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'role_id' => ['required'],
                    'email' => 'required|unique:users',
                    'password' => 'required|min:6'
                ]);
            }
            else{
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'role_id' => ['required'],
                    'email' => 'required|unique:users',
                ]);
            }
        }
        else{
            if($request->filled('password')){
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'role_id' => ['required'],
                    'email' => 'required',
                    'password' => 'required|min:6'
                ]);

                
            }
            else{
                $incomingFields = $request->validate([
                    'name' => 'required',
                    'role_id' => ['required'],
                    'email' => 'required',
                ]);
            }
        }


      

        $user->update($incomingFields);

        return redirect()->back()->with('success', 'Потребителя беше редактиран успешно!');
    }

    public function delete(User $user){
        $user->delete();

        return redirect(route('admin.users.index'))->with('success', 'Потребителя беше изтрит успешно!');
    }

    public function test(){
        $user_id = 1;

        return User::find($user_id)->notSeenNotifications();
    }
}
