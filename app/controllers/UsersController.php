<?php
use todo\Forms\Registration as RegisterForm;
class UsersController extends Controller {

    /**
     * @var RegisterForm
     */
    protected $registerForm;

    /**
     * @param RegisterForm $registerForm
     */
    public function __construct (RegisterForm $registerForm) {
        $this->registerForm = $registerForm;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function register () {
        return View::make ( 'pages.register' );
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Laracasts\Validation\FormValidationException
     */
    public function store () {
        $this->registerForm->validate ( Input::all () );
        $user = User::create([
            'fullname' => Input::get('fullname'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password'))
        ]);

        Auth::login($user);

        return Redirect::home ();
    }
}
