<?php

function public_url($url = '')
{
    return base_url('vendor/' . $url);
}

function pre($data, $is_die = true)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    if ($is_die) {
        die;
    }
}
