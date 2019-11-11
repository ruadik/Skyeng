<?php

class index
{

    function bigSum($x1, $x2)
    {
        echo $value = bcadd($x1, $x2);
    }
}

$bigSum = new Index();
$bigSum->bigSum('12345678123456781234567812345678', '87654321876543218765432187654321');