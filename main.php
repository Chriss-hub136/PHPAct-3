<?php
function sum($a, $b, $command): mixed {
    switch($command){
        default:
        case 'add':
            return $a + $b;
            case 'substract':
            return $a - $b;
            case 'multiply':
            return $a * $b;
            case 'divide':
                if ($b==0) {
                    return "cannot divided to zero";
                }

    }

}

echo sum(a: 10, b: 5, command: 'add') . "<br>\n";
echo sum(a: 10, b: 5, command: 'substract') . "<br>\n";
echo sum(a: 10, b: 5, command: 'multiply') . "<br>\n";
echo sum(a: 10, b: 5, command: 'divide') . "<br>\n";

$str= "hello, websys";
echo strien($str);
?>