<?php

function money($amount = null)
{
    $amount = str_replace(',', '', $amount);

    return number_format((float) $amount, '2', '.', ',');
}

/**
 * Generate Float Random Number
 *
 * @param  float  $Min Minimal value
 * @param  float  $Max Maximal value
 * @param  int  $round The optional number of decimal digits to round to. default 0 means not round
 * @return float Random float value
 */
function float_rand($min, $max, $round = 0)
{
    //validate input
    if ($min > $max) {
        $min = $max;
        $max = $min;
    } else {
        $min = $min;
        $max = $max;
    }
    $randomfloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
    if ($round > 0) {
        $randomfloat = round($randomfloat, $round);
    }

    return $randomfloat;
}
