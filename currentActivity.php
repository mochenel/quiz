<?php 

// Get currect activity details
$currentActivity = [];
$currentActivityIndex = 0; // currect activity key/index
foreach($_SESSION['activities'] as $activity){ // loop over activities
    if($activity['current']){
        // found current activity
        $currentActivity = $activity;
        break; // exit forach loop
    }
    $currentActivityIndex++;
}


