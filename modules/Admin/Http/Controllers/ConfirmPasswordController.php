<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Routing\Controller;

class ConfirmPasswordController extends Controller
{
    /*
   |--------------------------------------------------------------------------
   | Confirm Password Controller
   |--------------------------------------------------------------------------
   |
   | This controller is responsible for handling password confirmations and
   | uses a simple trait to include the behavior. You're free to explore
   | this trait and override any functions that require customization.
   |
   */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Display the password confirmation view.
     *
     * @return \Illuminate\Http\Response
     */
    public function showConfirmForm()
    {
        return view('admin::auth.passwords.confirm');
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : url()->route('admin.dashboard');
    }
}
