<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;
/**
 * Class Login
 * @package todo\Forms
 */
class Login extends FormValidator {
    /**
     * Validation rules for login
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required'
    ];

    /**
     * Error messages for login
     *
     * @var array
     */
    protected $messages = [
        'required'           => 'Le champ :attribute est requis.',
        'email.email'        => 'Cet email est incorrect.',
        'password.confirmed' => 'Les mots de passes doivent être identiques.'
    ];
}
