<?php

$tasks = [

'title' => 'task-1',
'descri' => 'Go to mall',
'assigned_it' => 'deepu',
'due' => 'today',
'is_completed' => true
];



echo "<pre>";
var_dump($tasks);
echo "</pre>";

echo '</br>';

var_dump($tasks);


echo $tasks['is_completed'];

?>