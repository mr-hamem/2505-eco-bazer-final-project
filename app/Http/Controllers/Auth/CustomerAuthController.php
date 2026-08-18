<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Socialite;

class CustomerAuthController extends Controller
{
    use AuthenticatesUsers;
    use RegistersUsers;

    protected $redirectTo = '/customer/dashboard';


    public function showLoginForm()
    {
        return view('frontend.signin');
    }
    public function showRegisterForm()
    {
        return view('frontend.signup');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return Customer
     */
    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }


    function googleRedirect()
    {
        $user = Socialite::driver('google')->user();

        $user = Customer::updateOrCreate([
            "email" => $user->email
        ], [
            'name' => $user->name,
            "email" => $user->email,
            "password" => Hash::make(uniqid()),
        ]);

        Auth::guard('customer')->login($user);
        
        
        return to_route('customer.dashboard');
    }


    function githubLogin()
    {
        return Socialite::driver('github')->redirect();
    }
    function githubRedirect()
    {
        $user = Socialite::driver('github')->user();
        dd($user);
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('customer.signin');
    }
}
