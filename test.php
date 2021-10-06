<?php
$data = [
    [
        "name" => "Hasan",
        "age" => 131
    ],
    [
        "name" => "Nazrul",
        "age" => 33
    ]
];



usort($data, 'sortByOrder');

print_r($data);
