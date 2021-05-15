<?php
var_dump($_POST);

$todoName = $_POST['todo_name'] ?? false;

if($todoName)
{
    echo 'Save TODO';
}