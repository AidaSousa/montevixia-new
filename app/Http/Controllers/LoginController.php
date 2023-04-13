<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{

    public function showRegistrationForm() {

        return view('auth.register');
    }
    public function register(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'nullable',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role_id' => 'nullable',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        // $user->email_verification_token = Str::random(32); //Genera un token de verificación único

        $user->save();

        Auth::login($user);

        return redirect()->to('/profile');

        //Envía el correo electrónico de verificación al usuario

    //     $verificationUrl = URL::temporarySignedRoute('vierification.verify', [
    //         'id' => $user->id,
    //         'hash' => sha1($user->email_verification_token)
    //     ]);

    //     Mail::to($user->email)->send(new VerifyEmail($user, $verificationUrl));

    //     return redirect('/login')->with('success', '¡Te has registrado exitosamente! Por favor, verifica tu correo electrónico para poder iniciar sesión.');
    }

    public function showLoginForm() {

        return view('login.login');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"is_associated" => true,
        ];

        if(Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->to('/profile');
        } else {
        return back()->withErrors([
            'message' => 'Credenciales incorrectas'
        ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/');
    }
}
