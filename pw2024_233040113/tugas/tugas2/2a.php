<?php
$nama1 = "Muhammad Yafi";
$nama2 = "Nashrulloh";
$i = 1 ;
while ($i<= 100)
{
    if ($i % 5 === 0 and $i % 3 === 0) {
        echo $nama1." ".$nama2."<br>";
    }
    elseif ($i % 3 === 0) {
            echo $nama1."<br>";
        }
        elseif ($i % 5 === 0) {
            echo $nama2."<br>";
        }
        elseif (!$i % 5 === 0 or !$i % 3 === 0) {
        echo $i."<br>";
        }
    $i++;
}
?>