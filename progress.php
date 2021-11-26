<?php 

$completed = 0; // number of activities completed
$total = count($_SESSION['activities'] ); // total number of all activities
$tmpAverageScore = 0;
$totalActivityScore = 0; // total number of points in all activities

foreach($_SESSION['activities'] as $activity){
    if($activity['completed']){
        // activity is completed
        $completed ++; // increment by 1
        $tmpAverageScore += $activity['score']; // increment by activity score
        
    }
    // This loop gets sum up points from all activities
    foreach($activity['activity'] as $question){
        $totalActivityScore += $question['points'];
    }
    
  
}
$myAverageScore = ($tmpAverageScore/ $totalActivityScore) *100; // average of all user's points for all activities
$avarageProgress = ($completed/$total) * 100; // progress average
?>