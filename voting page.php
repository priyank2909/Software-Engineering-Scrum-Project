<html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Website</title>
    <link rel="stylesheet" href="voting page.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="website-name"><img src="images/logo4.png"  width="450" height= "200"></div>
            <div class="links">
            <button class="button home-button" onclick="redirecttohomepage()" ><img class="icon" src="images/home.png" alt="Home"> Home</button>
            <button class="button login-button" onclick="redirecttologin()" ><img class="icon" src="images/login.png" alt="Login"> Login </button>
            <button class="button register-button" onclick="redirecttoregister()" ><img class="icon" src="images/register.png" alt="Register"> Register</button>
            </div>
        </div>  
        <script>
            
        function redirecttologin() {
            window.location.href="loginpage1.html";
        }
        function redirecttoregister() {
            window.location.href="Registration.html";
        }
        function redirecttohomepage() {
            window.location.href="homepage.html";
        }
        function redirecttoresults() {
            window.location.href="Result.php";
        }
      </script>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            opacity: 0.8;
        }
        .center {
            margin: 0 250px;
            margin-bottom: 50px;
            width: 80%;
                }

 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }

.votebutton{
            padding: 5px;
            font-size: 15px;
            background-color: #0a6bff;
            color: white;
            border-radius: 5px;
        }
.button {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1rem;
        margin-right: 1rem;
        font-size: 1rem;
        color: white;
        background: grey;
        border: 1px black;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        align-items: center;
        white-space: nowrap;
    }

    .button:hover {
        background: #ffcc00;
        color: black;
    }
    .icon {
        margin-right: 0.5rem;
        width: 1.2em;
        height: 1.2em;
    } 
    .timer-container {
            text-align: right; /* Align text to the right */
            font-size: larger;
        }
    #timer {
            color: red;
        }    

    .resultbutton{
        margin-left:700px;
        padding: 5px;
            font-size: 15px;
            background-color: #0a6bff;
            color: white;
            border-radius: 5px;
    }

    </style>
</head>
 
<body>
<div class="timer-container">
<a href="loginpage1.html" id="logoutButton">Logout</a>
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
</script>
    <section>
        <h1 class="center">Voting</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>User Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Position</th>
                <th>Description</th>
                <th>Vote Button</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php include 'fetch.php'; ?>
            <?php foreach ($users as $user) : ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $user['Id'];?></td>
                <td><img src="upload/<?php echo $user['Photo']?>" height="100" width="100"></td>
                <td><?php echo $user['Name'];?></td>
                <td><?php echo $user['College'];?></td>
                <td><?php echo $user['Position'];?></td>
                <td><?php echo $user['Description'];?></td>
                <td> <form action="vote_handler.php" method="POST">
                <input type="hidden" name="gvotes" value="<?php echo $user['Votes']; ?>">
                <input type="hidden" name="gid" value="<?php echo $user['Id']; ?>">
                <input type="submit" name="votebutton" value="Vote" class="vote-button" onclick="disableAllVoteButtons()">
    </form></td>
            </tr>
            <?php endforeach; ?> 
        </table>
    </section>
</body>
</html>