<?php


namespace App\Views\Forms\Feedback;


use Core\Views\Form;

class FeedbackBaseForm extends Form
{
    public function __construct() {
        parent::__construct([
            'fields' => [
                'comment' => [
                    'label' => 'Komentaras *',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_max_500'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Įvesk savo komentarą čia',
                        ],
                    ],
                ],
            ],
            // No buttons since they will be defined in Extends
        ]);
    }
}