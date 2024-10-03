<?php
function formatFloat($number) {
    if (floor($number) == $number) {
        return number_format($number, 2, '.', '');
    } else {
        return $number;
    }
}