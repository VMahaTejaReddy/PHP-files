<?php 
function addTask($task, $name){
    echo "Add Task\n";
    $task[] = ['name' => $name, 'Completed' => false];
    echo "Task is added";
    print_r($task);
    return $task;
}

function completeTask($task, $index){
    $task[$index]["Completed"] = true;
    print_r($task);
    echo $task[$index]['name']."completed";

    echo "Completed Task\n";
    return $task;
}

function deleteTask($index, $task){
    echo "Delete Task\n";
    unset($task[$index]);
    return $task;
}

function exitTask(){
    echo "Exit\n";
}

function listTask($task){
    print_r($task);
    foreach($task as $eachTask => $tasks){
        $status=$tasks["Completed"]? "Task Done": "Task not Completed";
        echo $tasks['name']."".$status;
    }
    
}
$task = [];

while(true){
    echo "Enter a number\n";
    $choice =  readline();
switch ($choice){
    case 1:
        echo "Enter Task Name: ";
        $name = trim(readline());

        $task=addTask($task, $name);
        

        break;
    case 2:
        listTask($task);
        break;
    case 3:
        echo "Enter a task to complete: " ;
        $index = readline();
        $task=completeTask($task, (int)$index);

        break;
    case 4:
        echo "Enter a task to complete: " ;
        $index = readline();
        $task=deleteTask($index, $task);
        
        break;
    case 5:
        // exitTask();
        exit;
        break;

}
}



?>
