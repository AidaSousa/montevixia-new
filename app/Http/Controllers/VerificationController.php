<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class VerificationController extends Controller
{
    public function verify(Request $request, $id, $hash) {
        
        $user = User::findOrFail($id);

        if ($hash == sha1($user->email_verification_token)) {
            $user->email_verified_at = now();
            $user->save();
            return redirect('/login')->with('success', '¡Tu correo electrónico ha sido verificado! Ya puedes iniciar sesión.');
        }

        return redirect('/login')->with('error', 'La verificación del correo electrónico ha fallado.');
    }

    public function resend(Request $request) {

        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect()->back()->with('success', 'Tu correo electrónico ya ha sido verificado.');
        }

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->id]
        );

        Mail::to($user->email)->send(new VerifyEmail($user));

        return back()->with('success', 'Se ha enviado un nuevo correo de verificación a tu dirección de correo electrónico');
    }
}
