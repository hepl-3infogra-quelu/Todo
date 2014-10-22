<?php namespace todo\Forms;

use Laracasts\Validation\FormValidator;
class Registration extends FormValidator {
    /**
     * Validation rules for registration
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required|unique:users|email',
        'fullname' => 'required',
        'password' => 'required|confirmed'
    ];

    /**
     * Error message for registration
     * @var array
     */
    protected $messages = [
        'required'           => 'Le champ :attribute est requis.',
        'email.unique'       => 'Cet email a déjà été enregistré',
        'email.email'        => 'Cet email est incorrect.',
        'password.confirmed' => 'Les mots de passes doivent être identiques.'
    ];
}
