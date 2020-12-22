<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'name' => [
                    'label' => 'Vardas *',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_symbols',
                        'validate_max_symbols',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo vardą',
                        ]
                    ]
                ],
                'surname' => [
                    'label' => 'Pavardė *',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_symbols',
                        'validate_max_symbols',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo pavardę',
                        ]
                    ]
                ],
                'email' => [
                    'label' => 'Elektroninis paštas *',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email',
                        'validate_user_unique',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo elektroninį paštą',
                        ]
                    ]
                ],

                'password' => [
                    'label' => 'Slaptažodis *',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite slaptažodį',
                        ]
                    ]
                ],
                'phone' => [
                    'label' => 'Telefono numeris',
                    'type' => 'number',
                    'validators' => [
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite savo telefono numerį',
                        ]
                    ]
                ],
                'address' => [
                    'label' => 'Jūsų adresas',
                    'type' => 'text',
                    'validators' => [
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įveskite adresą',
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'register' => [
                    'title' => 'Registruotis',
                ]
            ],
        ]
    );

    }
}