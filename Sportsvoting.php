<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="techvoting.css" >
    
    <title>Stylish Banners</title>
</head>
<body>
<div class="container">
        <div class="header">
            <div class="website-name"><img src="images/logo4.png"  width="400" height= "155"></div>
            <div class="links">
            </div>
        </div>
    </div>

        <script>
            function redirecttohomepage() {
                window.location.href="homepage.html";
            }
        </script>
        <br>
        <br>
        <div class="timer-container">
<p>Timer: <span id="timer">01:00</span></p>
</div>
<script>
        // Function to start the timer
    // Function to start the timer
    function startTimer(duration, display) {
        let timer = duration, minutes, seconds;
        const countdownInterval = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                // Timer has expired, redirect to the home page
                clearInterval(countdownInterval); // Stop the countdown
                redirecttohomepage(); // Redirect the user
            }
        }, 1000);
    }
    // Start the timer when the page loads
    window.onload = function () {
        const oneMinute = 60; // 1 minute in seconds (change as needed)
        const display = document.querySelector('#timer');
        startTimer(oneMinute, display);
    };
    function redirecttohomepage() {
        window.location.href = "homepage.html"; // Change this to the desired page
    }
    function disableButtonAndSubmit(form) {
        var button = form.querySelector('.vote-button');
        button.disabled = true; // Disable the button
        return true; // Submit the form
    }
</script>
    </div>
    <br>
    <section>
        <h1 class="center">Sports club Voting</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Type of Election</th>
                <th>Position</th>
                <th>Description</th>
                <th>Vote Button</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php include 'Sportsfetch.php'; ?>
            <?php foreach ($users as $user) : ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $user['Id'];?></td>
                <td><img src="upload/<?php echo $user['Photo']?>" height="100" width="100"></td>
                <td><?php echo $user['Name'];?></td>
                <td><?php echo $user['College'];?></td>
                <td><?php echo $user['Type of Election'];?></td>
                <td><?php echo $user['Position'];?></td>
                <td><?php echo $user['Description'];?></td>
                <td> <form action="sportsvotehandler.php" method="POST">
        <input type="hidden" name="gvotes" value="<?php echo $user['Votes']; ?>">
        <input type="hidden" name="gid" value="<?php echo $user['Id']; ?>">
        <input type="submit" name="votebutton" value="Vote" class="vote-button" onclick="this.disabled=true;this.form.submit();">
    </form></td>
    
            </tr>
            <?php endforeach; ?> 
        </table>
    </section>
    <br>
    <br>
    <br>

    