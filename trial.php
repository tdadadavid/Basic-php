<?php

require 'function.php';
require 'worktodo.php';

$pdo =  connectToDb();

$results = fetchAllTask($pdo);


require 'trial.view.php';
?>