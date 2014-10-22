<?php
use todo\Forms\Login as LoginForm;
class AuthController extends Controller {

    /**
     * @var LoginForm
     */
    protected $loginForm;

    /**
     * @param LoginForm $loginForm
     */
    public function __construct (LoginForm $loginForm) {
        $this->loginForm = $loginForm;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function login () {
        return View::make ( 'pages.login' );
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws FormValidationException
     */
    public function doLogin () {
        $this->loginForm->validate ( Input::all () );

        if (Auth::attempt ( Input::only ( 'email', 'password' ) ))
            return Redirect::intended ( 'tasks' );
        else
            return Redirect::back()->withInput()->withMessage('On dirait que vous avez oublié vos identifiants.');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout () {
        Auth::logout ();

        return Redirect::home ();
    }

}
