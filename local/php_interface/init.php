<?php
function dump($arr, $var_dump = false)
{
    echo "<pre style='background: #222; color: #54ff00; padding: 20px;'>";
    if ($var_dump) {
        var_dump($arr);
    } else {
        print_r($arr);
    }
    echo "</pre>";
}