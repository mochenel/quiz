<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th colspan="2">Activity Results</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td>Activity</td>
                    <td><?php echo $_SESSION['data']['activity']; ?></td>
                    
                </tr>
                <tr>
                    <td>Average Score</td>
                    <td><?php echo $_SESSION['data']['average']; ?>%</td>
                    
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $_SESSION['data']['status']; ?></td>
                    
                </tr>
            </tbody>
        </table>
        <a href="activity.php" class="btn btn-primary " href=""><?php echo $_SESSION['data']['action']; ?></a>
    </div>

</body>

</html>