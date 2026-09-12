<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Write code on Method

     *

     * @return response()
     */
    public function index(): View
    {

        return view('auth.login');

    }

    /**
     * Write code on Method

     *

     * @return response()
     */
    public function registration(): View
    {

        return view('auth.registration');

    }

    /**
     * Write code on Method

     *

     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {

        $request->validate([

            'email' => 'required',

            'password' => 'required',

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');

        }

        return redirect('login')->withSuccess('Oppes! You have entered invalid credentials');

    }

    /**
     * Write code on Method

     *

     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6',

        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect('dashboard')->withSuccess('Great! You have Successfully loggedin');

    }

    /**
     * Write code on Method

     *

     * @return response()
     */
    public function dashboard(): View|RedirectResponse
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->withSuccess('Oops! You do not have access');
    }

    /**
     * Write code on Method

     *

     * @return response()
     */
    public function create(array $data)
    {

        return User::create([

            'name' => $data['name'],

            'email' => $data['email'],

            'password' => Hash::make($data['password']),

        ]);

    }

    /**
     * Write code on Method

     *

     * @return response()
     */
    public function logout(): RedirectResponse
    {

        Session::flush();

        Auth::logout();

        return Redirect('login');

    }
}
