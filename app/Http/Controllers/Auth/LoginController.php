<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(),  [
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'إسم المستخدم مطلوب',
            'password.required' =>'كلمة المرور مطلوبة',
            // 'password.min' => Lang::get('links.password_min'),
            // 'password.max' => Lang::get('links.password_max'),

        ]);

        // $validator =  Validator::make($input, [

        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
        if ($validator->fails()) {

            return redirect()->back()->withInput()
                ->withErrors($validator->messages());

        }
        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
                return redirect()->route('home');

        }else{

            return redirect()->route('login')
                ->with('error','خطأ فى الدخول ! كلمة المرور او اسم المستخدم');
        }

    }

    public function logout(Request $request)
    {

            Auth::guard('web')->logout();

            $request->session()->invalidate();

            return redirect()->route('home');


    }
    protected function authenticated(Request $request, $user)
    {
            return redirect('/login');


    }

}
