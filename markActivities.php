<?php
session_start();
include_once('activityQuestions.php'); // import questions
include_once('currentActivity.php'); // this file contains current activity ($currentActivity)

$score = 0; // initail score
$totalPoints = 0; // initial total points

if (isset($_POST['submit'])) {

    // loop over activity questions
    foreach ($currentActivity['activity'] as $q) {
        $totalPoints = $totalPoints + $q['points']; // calculate total number of points
        $question_id = "answer-" . $q['question_id'];
        if ($_POST[$question_id]) {
            markQuestion($q, $_POST[$question_id]); // mark question
        } else {
            $_SESSION['data'] = $_POST;
            $_SESSION['error'] = "please answer all questions";
            header('Location:activity.php');
            exit;
        }
    }
    $average = ($score/ $totalPoints)*100;
    $_SESSION['data']['activity'] = $currentActivity['name'];
    $_SESSION['data']['average'] = $average;
    
    if($average > 75){
     
        $_SESSION['activities'][$currentActivityIndex]['score'] = $average;
        $_SESSION['activities'][$currentActivityIndex]['completed'] = true;
        $_SESSION['activities'][$currentActivityIndex]['current'] = false;
        if(isset($_SESSION['activities'][$currentActivityIndex +1])){
            $_SESSION['activities'][$currentActivityIndex +1]['current'] = true;
        }
        $_SESSION['data']['status'] = 'Pass';
        $_SESSION['data']['action'] = 'Next Activity';
        
    }
    else{
        $_SESSION['data']['status'] = 'Fail';
        $_SESSION['data']['action'] = 'Try Again';
    }
    header('Location:results.php');
} else if(isset($_POST['start_over'])) {
    session_unset();
    session_destroy();
    header('Location:activity.php'); //redirecting to the next page
}
else{
    header('Location:activity.php');//redirecting to the next page
} 

function markQuestion($question, $answer)
{
    global $score; // make scope global varibale
    $correctAnswers = array(); // initialize correct answers

    // Get question correct answers
    foreach ($question['answers'] as $a) {
        if ($a[1] == true) // if second element is true, $a[0] is correct answer, hence should be pushed to correctAnswers array
            array_push($correctAnswers, $a[0]);
    }
    if (gettype($answer) == "array") {
        // Multiple answers from checkbox
        sort($answer);
        sort($correctAnswers);
        if($answer == $correctAnswers){
            $score = $score + $question['points'];
        }
    } else  {
        // Single answer from textArea
        if(in_array($answer, $correctAnswers)) {
            $score = $score + $question['points'];
        }
    }
}
?>
