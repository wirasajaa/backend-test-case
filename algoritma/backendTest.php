<?php

function reverseText($word)
{
    $reverseOnlyText = strrev(preg_replace('/[0-9]/', '', $word));
    $getNumber = preg_replace('/[a-z]/i', '', $word);
    $final = $reverseOnlyText . $getNumber;
    echo $final;
}
function longestWord($sentence)
{
    $wordList = explode(" ", $sentence);
    echo max(array_map('strlen', $wordList)) . " Character";
}
function countWord($arrTarget, $arrBase)
{
    print_r(array_map(function ($val) use ($arrBase) {
        return count(array_filter($arrBase, function ($val2) use ($val) {
            return $val == $val2;
        }));
    }, $arrTarget));
}

function diagonalReduction($matrix)
{
    $diagonal1 = 0;
    $diagonal2 = 0;

    // counting diagonal 1
    foreach ($matrix as $key => $val) {
        $diagonal1 += $val[$key];
    }

    // counting diagonal 2
    foreach ($matrix as $key => $val) {
        $index = (count($val) - $key) - 1;
        $diagonal2 += $val[$index];
    }
    echo $diagonal1 - $diagonal2;
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";

$INPUT = ['xc', 'dz', 'bbb', 'dz'];
$QUERY = ['bbb', 'ac', 'dz'];

$matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]];

reverseText("NEGIE1");
longestWord($sentence);
countWord($QUERY, $INPUT);
diagonalReduction($matrix);
