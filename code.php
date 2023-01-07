<?php

function randomName() {
    $names = array(
        'cryptocurrency(1)','cryptocurrency(2)','cryptocurrency(3)','cryptocurrency(4)','cryptocurrency(5)','cryptocurrency(6)','cryptocurrency(7)','cryptocurrency(8)'
    );
    return $names[rand ( 0 , count($names) -1)];
}



if(isset($_POST['action']) && $_POST['action'] === 'request'){
    echo randomName();
}


if(isset($_GET['action']) && $_GET['action'] === 'timeHisab'){

    $year = 2023;
    $month = 1;
    $day = 1;
    $hour = -6;
    $minute = -31;
    $second = -1;

    $result = [];
    $eventtime = new DateTime(); 


    $timezone = new DateTimeZone('Europe/Amsterdam');
    $eventtime->setTimezone($timezone);




    $eventtime->setDate($year, $month, $day);
    $eventtime->setTime($hour , $minute, $second);
    $eventtime = strtotime($eventtime->format("M j, Y H:i:s O")); 
    

   
    $timenow = new DateTime();
    $timenow = time();

    $result ['eventTime'] = $eventtime;
    $result ['timeNow'] = $timenow;

    $timeLeft = $eventtime - $timenow;
    $result['timeLeft'] = $timeLeft;
    echo json_encode($result);



}