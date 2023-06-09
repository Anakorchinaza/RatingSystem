<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;

class UserController extends Controller
{
    public function Register(Request $request){

        return view("auth.register");
    }//end method

    public function Create(Request $request, FlasherInterface $flasher){

        $rules = [
            'name' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ];

        $message = [
            'name.required' => 'Fullname is Required',
            'email.required' => 'Email Address is Required',
            'password.required' => 'Password is Required',
        ];


        $data = $request->validate($rules, $message);   
        
        $userCount = User::where(['email'=> $data['email']])->count();

        if($userCount>0){
            $flasher->addSuccess('Your Credentials Exist please Login!');
            return redirect()->back();
        }else{
            $user = User::create([

                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // Manually logging user 
            Auth::login($user);

            $flasher->addSuccess('Your Registration is successfully!');
            return redirect()->route('profile');  

        }
    }//end method

    public function Profile(){
        return view("profile");
    }//end method

    public function Login(Request $request){

        return view("auth.login");
    }//end method

    protected function Signin(Request $request, FlasherInterface $flasher){

        $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|string|min:6',
            
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $remember_token = $request->has('remember_me') ? true : false;
        

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_token)) {
            $request->session()->regenerate();


            if(Auth::user()){

                 $flasher->addSuccess('Welcome back'.' '.ucwords(Auth::user()->fname));
                return  redirect()->route('profile');
               
            } else{

                 $flasher->addSuccess('Your Login is not Successfull!');
                return redirect()->route('login');
            }
        
        }

        return back()->withErrors([
            'email' => 'Wrong Credentials check your inputs.',
        ]);

    }//end method

    public function Logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }//end method






}
