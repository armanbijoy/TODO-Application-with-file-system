<?php
// var_dump($_POST);

$todoName = $_POST['todo_name'] ?? '';

$todoName = trim($todoName);

if($todoName)
{
    echo 'Save TODO';
}