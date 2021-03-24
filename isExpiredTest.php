<?php
require "./vendor/testTools/testTools.php";
require "./class/Task.php";

$TestCases = [
    [
        'expirationDate' => '2030-03-23',
        'isExpired' => FALSE,
    ],
    [
        'expirationDate' => '2019-05-15',
        'isExpired' => TRUE,
    ],
    [
        'expirationDate' => '2018-01-17',
        'isExpired' => TRUE,
    ],
    [
        'expirationDate' => '2028-03-10',
        'isExpired' => FALSE,
    ],
];

foreach ($TestCases as $TestCase => $task) {
    $task = new Task ();
    $expirationDate=$TestCase['expirationDate'];
    assertEquals($TestCase['isExpired'],$task->isExpired());

}




?>