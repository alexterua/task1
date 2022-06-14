<?php

function myArrowFunc(int $number) {

    $arrows = '';

    for ($i = 1; $i <= $number; $i++)
    {
        $arrows .= '<';
        if ($i === $number) {
            for ($j = $number; $j > 0; $j--)
            {
                $arrows .= '>';
            }
        }
    }
    return $arrows;
}

echo myArrowFunc(3) . '<br>';
echo myArrowFunc(9) . '<br>';
