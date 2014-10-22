<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;

/**
 * Class AddTask
 * @package todo\Forms
 */
class AddTask extends FormValidator {
    /**
     * Validation rules for adding task
     *
     * @var array
     */
    protected $rules = [
        'title' => 'required'
    ];

    /**
     * Error messages for adding task
     *
     * @var array
     */
    protected $messages = [
        'required' => 'Le champ :attribute est requis.'
    ];
}
