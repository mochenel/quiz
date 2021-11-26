<?php
session_start();
include_once('activityQuestions.php');
include_once('currentActivity.php');
include_once('progress.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1 Activities</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/chart.js"></script>
</head>

<body>
    <h3 class="text-center m-2">TFC eLearning Java Quiz</h3>

    <div class="container m-3 p-3">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($avarageProgress,1); ?>%"><?php echo round($avarageProgress,1); ?>%</div>
        </div>
        <hr>


        <form action="markActivities.php" method="post">

            <?php
            if (isset($_SESSION['error'])) {
                echo "<script> alert('Please answer all questions'); </script>";
            }
            if (isset($currentActivity['activity'])) {
                echo "<p>" . $currentActivity['name'] . "</p>";
                foreach ($currentActivity['activity'] as $key => $q) {
                    $key++;
                    $question = $q['question'];
                    $type = $q['question_type'];
                    $question_id = $q['question_id'];
                    echo "<div class='form-group'>";
                    echo "<label for=''>($key). $question</label>";
                    if ($type == "A") {
                        $name = "answer-$question_id";

                        $myAnswer = isset($_SESSION['data'][$name]) ? $_SESSION['data'][$name] : "";
                        echo "<textarea class='form-control' name='$name' rows='1'>$myAnswer</textarea>";
                    } else if ($type == "B") {
                        $answers = $q['answers'];
                        foreach ($answers as $key => $a) {
                            $answer = $a[0];
                            $name = "answer-$question_id" . "[]";
                            $myAnswer = "";
                            if (isset($_SESSION['data']["answer-$question_id"])) {
                                foreach ($_SESSION['data']["answer-$question_id"] as $val) {
                                    if ($answer == $val) {
                                        $myAnswer = "checked";
                                        break;
                                    }
                                }
                            }
                            echo "<br>";

                            echo "<input $myAnswer type='checkbox' name='$name' value='$answer'> $answer";
                        }
                    }
                    echo "</div>";
                }
            } else {
                echo '<button type="submit" name="start_over" class="btn btn-success text-center"> Start Over </button> <hr>';
                echo '
              <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Well done!</h4>
              <p>Great job, you successfully completed all activities for Chapter 1.</p>
              <hr>
              <p class="mb-0">Keep up the great work!.</p>
            </div>';
            }

            if (isset($currentActivity['activity'])) {
                echo '<button type="submit" name="submit" class="btn btn-success">Submit</button>';
            }
            ?>



        </form>
        <?php
        if (!isset($currentActivity['activity'])) {
            echo "<script> let activities = []; let scores = [];</script>";
            foreach ($_SESSION['activities'] as $activity) {
                $name = $activity['name']; // activity name 
                $score = $activity['score']; // user score 
                echo 
                "<script> 
                 activities.push('$name'); 
                 scores.push('$score');
                 </script>
                 ";
            }
        
        ?>
        <canvas id="myChart" width="200" height="200"></canvas>
        <?php
            }
        ?>
        
    </div>


</body>

</html>
<script>
    const ctx = document.getElementById('myChart');

    let labels = [];

    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:activities,
            datasets: [{
                label: "Activities",
                data: scores,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?php

unset($_SESSION['data']);
unset($_SESSION['error']);


?>