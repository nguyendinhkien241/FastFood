<?php 
    include "process/process_food.php";
?>



<?php 
    $food = new Food;
    $showFood = $food -> show_Food();
    $data = array();
    while($result = $showFood->fetch_assoc()) {
        $data[] = $result; 
    }
    echo json_encode($data);
    exit();
?>