<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\EmailVerificationRequest;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
// use Ichtrojan\Otp\Models\Otp;
use Ichtrojan\Otp\Otp;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $otp;
    public function __construct()
    {
        $this->otp = new Otp();
    }


    public function email_verification(EmailVerificationRequest $request)
    {
        $otp2 = $this->otp->validate($request->email, $request->otp);
        if (!$otp2->status) {
            return response()->json(['error' => $otp2], 410);
        }
        $user = User::where('email', $request->email)->first();
        $user->update(['email_verified_at' => now()]);
        $message['message'] = 'Verified';
        return response()->json($message, 200);
    }

    public function ResendEmailVerification(Request $request)
    {
        $request->user()->notify(new EmailVerificationNotification());
        $message['message'] = 'otp resented';
        return response()->json($message, 200);
    }
}
