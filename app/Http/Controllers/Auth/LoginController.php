<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //login
    public function getLogin(){
        return view('security/login');
    }
    public function postLogin(Request $request){
        $rules = [
           'email' => 'required|email',
           'password' => 'required|min:3'
        ];

        $message = [
           'email.required' => 'yeu cau ban nhap email',
           'email.email' => 'email khong hop le',
           'password.required' => 'yeu cau nhap mat khau',
           'password.min' => 'mat khau it  nhat 4 ki tu'
        ];

        $validator = Validator::make($request->all(),$rules,$message);

        if($validator->fails()){
            return redirect()->route('login')->withErrors($validator)->withInput();
        }else{
            $email = $request->input('email');
            $password = $request->input('password');

           if(Auth::attempt(['email'=>$email,'password'=>$password])) {
               return redirect()->route('admin');
           }else{
              Session::flash('error','email va password khong hop le');
              return redirect()->route('login');
           }
        }
    }
    //logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
