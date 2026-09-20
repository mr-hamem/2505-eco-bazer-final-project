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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Socialite;
use Throwable;

class CustomerAuthController extends Controller
{
    use AuthenticatesUsers;
    use RegistersUsers;

    protected $redirectTo = '/customer/profile';


    public function showLoginForm()
    {
        if(auth('customer')->check()) {
            return to_route('customer.profile');
        }
        return view('frontend.signin');
    }
    public function showRegisterForm()
    {
        if(auth('customer')->check()) {
            return to_route('customer.profile');
        }
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


    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }


    public function googleRedirect(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Throwable $exception) {
            Log::warning('Google customer login failed.', [
                'message' => $exception->getMessage(),
            ]);

            return to_route('customer.signin')
                ->with('error', 'Google sign-in could not be completed. Please try again.');
        }

        if (blank($googleUser->getEmail())) {
            return to_route('customer.signin')
                ->with('error', 'Google did not provide an email address for this account.');
        }

        $customer = Customer::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName() ?: $googleUser->getNickname() ?: 'Google customer',
                'email_verified_at' => now(),
                'password' => Hash::make(str()->random(40)),
            ]
        );

        Auth::guard('customer')->login($customer, true);
        $request->session()->regenerate();

        return to_route('customer.profile');
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
