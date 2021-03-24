<?php
require "./vendor/JSONReader.php";
require "./class/Task.php";

$taskList = JSONReader('./dataset/TaskList.json');
$taskObjectResult = [];
foreach ($taskList as $taskArray)  // oggetti messi dentro un array con "foreach" imperativo
{
        $taskObject = new Task();
        $taskObject ->id = $taskArray['id'];
        $taskObject ->taskName = $taskArray['taskName'];
        $taskObject ->status = $taskArray['status'];
        $taskObject ->expirationDate = $taskArray['expirationDate'];

        $taskObjectResult[] = $taskObject;  // gli oggetti vengono inseriti dentro un nuovo array.
}

$taskObjectResult = array_map(function($taskArray){   // oggetti messi dentro un array con "array_map" dichiarativo --> programmazione funzionale.
                                                        // somma(4,5)---> 9 funzione pura, dara sempre come risultato 9.
    $taskObject = new Task();
    $taskObject ->id = $taskArray['id'];
    $taskObject ->taskName = $taskArray['taskName'];
    $taskObject ->status = $taskArray['status'];
    $taskObject ->expirationDate = $taskArray['expirationDate'];    
return $taskObject;
},$taskList);  // funzione anonima 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskList a Oggetti</title>
</head>
<body>

<table>
<tr>
<th>nome attività</th>
<th>scaduta</th>
</tr>
<?php foreach ($taskObjectResult as $task) { ?>   
<tr>
<td><?php echo $task->taskName ?></td> </td>
<td><?= $task->isExpired() ? "si" : "no" ?></td> 
</tr>
<?php } ?>


</table>




</body>
</html>