<?php

use App\App;

/**
 *
 * Checks if user(data) already exists in our saved file.
 *
 * If there is no such data(user) returns true.
 * If the data already exist in file, writes an error and returns false.
 *
 * @param string $field_input - clean input value
 * @param array $field - input array
 * @return bool
 */
function validate_user_unique(string $field_input, array &$field): bool
{
    if (App::$db->getRowWhere('users', ['email' => $field_input])) {
        $field['error'] = 'Toks vartotojas jau egzistuoja';

        return false;
    }

    return true;
}

/**
 *
 *Checks if there is such email and password in the database.
 *
 * If there is such user and password is the same as in database returns true.
 * If email or password of $filtered_input are not in the database(or not the same),
 * writes an error and returns false.
 *
 * @param array $filtered_input - clean inputs array with values
 * @param array $form - form array
 * @return bool
 */
function validate_login(array $filtered_input, array &$form): bool
{
    if (App::$db->getRowWhere('users', [
        'email' => $filtered_input['email'],
        'password' => $filtered_input['password']
    ])) {
        return true;
    }

    $form['error'] = 'Blogai įvestas slaptažodis';

    return false;
}

function validate_row_exists(string $field_input, array &$field): bool
{
    if (App::$db->rowExists('pizzas', $field_input)) {
        return true;
    }

    $field['error'] = 'Tokia eilute neegzistuoja';

    return false;
}

function validate_symbols(string $field_value, array &$field): bool
{
    if (is_numeric($field_value)) {
        $field['error'] = 'Varde ar Pavardėje negali būti skaičių';

        return false;
    };

    return true;
}

function validate_max_symbols(string $field_value, array &$field): bool
{
    if (strlen($field_value) > 40) {
        $field['error'] = 'Viršytas maksimalių symbolių skaičius';
        return false;
    }
    return true;
}

function validate_user_exists(string $field_input, array &$field): bool
{
    if (!App::$db->getRowWhere('users', ['email' => $field_input])) {
        $field['error'] = 'Vartotojas su tokiu El. paštu neegzistuoja';
        return false;
    }
    return true;
}

function validate_wrong_password(string $field_input, array &$field): bool
{
    if (!App::$db->getRowWhere('users', ['password'=> $field_input])) {
        $field['error'] = 'Blogai įvestas slaptažodis';
        return false;
    }
    return true;
}
function validate_max_500(string $field_value, array &$field): bool
{
    if (strlen($field_value) > 500) {
        $field['error'] = 'Viršytas maksimalių symbolių skaičius';
        return false;
    }
    return true;
}