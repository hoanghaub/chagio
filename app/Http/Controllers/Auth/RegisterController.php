<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function getRegister(){
        return view('security/register');
    }

    public function postRegister(Request $request){
        //kiem tra du lieu vao
        $allRequest = $request->all();
        $validator = $this->validator($allRequest);

        if($validator->fails()){
            //du lieu khong thoa man dieu kien se bao loi
            return redirect()->route('register')->withErrors($validator)->withInput();
        }else{
            //du lieu hop le se thuc hien tao nguoi dung trong csdl
            if($this->create($allRequest)){
                //insert thanh coong se hien thi thong bao
                Session::flash('success','Đăng kí thành công !');
                return redirect()->route('login');
            }else{
                //insert that bai se hien thi thong bao loi
                Session::flash('error','Đăng kí thất bại');
                return redirect()->route('register');
            }
        }
    }
    

    
}
