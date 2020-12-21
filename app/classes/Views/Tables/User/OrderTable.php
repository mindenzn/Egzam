<?php

namespace App\Views\Tables\User;

use Core\Views\Table;

class OrderTable extends Table
{
    public function __construct($orders = [])
    {
        parent::__construct([
            'headers' => [
                'ID',
                'Status',
                'Time Ago'
            ],
            'rows' => $comments
        ]);
    }
}