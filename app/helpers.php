<?php

use App\Http\Controllers\Controller;

if ( ! function_exists('button_icon'))
{
    function button_icon($icon = 'create', $class = '', $id = '', $data_attr = [], $disabled = false)
    {
        $class      = 'btn btn-info btn-block btn-icon ' . $class;
        $disable    = ($disabled) ? 'disabled' : '';
        $btn        = '<button id="'.$id.'" '
                    .       'class="'.$class.'" '
                    .       $disable
                    .       '>'
                    .       '<i class="fa fa-edit ">'.$icon.'</i>'
                    . '</button>';

        return $btn;
    }
}