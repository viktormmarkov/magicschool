<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User as Admin;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    protected $guard = 'admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'admin' => '1',
            'active' => '1',
        ]);
    }

    public function showLoginForm()
    {   
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

        return view('admin/auth/login');
    }

    public function login(Request $request)
    {


        if (Auth::attempt(array('name'=> $request->input('username'), 'password'=> $request->input('password')))) {
            //save to log
            return Redirect::to('/admin');
        } else {
            echo 2;
            return Redirect::to('/admin/login');
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/admin/login');
    }

    public function registerAdmin(Request $request){
        if($request->input('id') != NULL){
            $admin = Admin::find($request->input('id'));
            $validator = $this->validator($request->all());
            if($validator->fails()){
                return redirect('/admin/administrators/add')->withErrors($validator)->withInput();
            }else {
                $admin->name = $request->input('name');
                $admin->password = bcrypt($request->input('password'));
            return Redirect::to('/admin/administrators');
            }
        }else {
            $data['name'] = $request->input('name');
            $data['password'] = $request->input('password');
            $validator = $this->validator($data);
            if($validator->fails()){
                return redirect('/admin/administrators/add')->withErrors($validator)->withInput();
            }else {
                $this->create($data);
            return Redirect::to('/admin/administrators');
            }
        }
        
    }
    
}