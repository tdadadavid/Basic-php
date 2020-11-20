<?php

function connectToDb()
{

    $server = "127.0.0.1";
    $username = "root";
    $password = "dadadavidtofunmi";
    $db = "task";

    try {
       return new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
//        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function fetchAllTask($pdo){
    $statement = $pdo->prepare("select * from task.goals");

    $statement -> execute();

    return $statement->fetchAll(PDO::FETCH_CLASS , 'workTodo');
}

function check($age){
    if($age < 21){
        echo 'You cant go in';
    }else
        echo 'Come in.';
}

