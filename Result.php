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
            <button class="button home-button" onclick="redirecttohomepage()" ><img class="icon" src="images/home.png" alt="Home">Logout</button>
            </div>
        </div>  
        <script>
            
        function redirecttohomepage() {
            window.location.href="homepage.html";
        }
      </script>
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
.winner-container{
    margin-left: 450px; /* Center horizontally */
    text-align: center; /* Center text within the container */
    width: 40%; /* Adjust the width as needed */
    background-color: #f0f0f0; /* Add a background color */
    padding: 20px; /* Add some padding for spacing */
}
.center1 {
            margin-left: 150px;
            margin-bottom: 20px;
            text-align: center;
            width: 40%;
        }
        .timer-container {
            text-align: right; /* Align text to the right */
            font-size: larger;
        }     
    </style>
</head>
<body>
<div class="timer-container">
</div>
<section>
        <h1 class="center">RESULTS<br><br>Tech Club</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>User Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Type of Election</th>
                <th>Position</th>
                <th>Description</th>
                <th>Votes</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php include 'techfetch.php'; 
            $maxVotes = -1;
            $winner = null;

            foreach ($users as $user) {
                $userId = $user['Id'];
                $votes = $user['Votes'];

                if ($votes > $maxVotes) {
                    $maxVotes = $votes;
                    $winner = $user;
                }
            }
             foreach ($users as $user) : ?>
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
                <td><?php echo $user['Votes'];?>
    </form></td>
            </tr>
            <?php endforeach; ?> 
        </table>
        <div class="winner-container">
            <?php if ($winner) : ?>
                <h1 class="center1">Winner</h1>
                <h3><p>User Id: <?php echo $winner['Id']; ?></p>
                <p>Name: <?php echo $winner['Name']; ?></p>
                <p>College: <?php echo $winner['College']; ?></p>
                <p>Position: <?php echo $winner['Position']; ?></p>
                <p>Votes: <?php echo $winner['Votes']; ?></p></h3>
            <?php else : ?>
                <p>No winner found.</p>
            <?php endif; ?>
        </div>
        <br>
        <br>
        <hr style="color: blue; background-color: black; height: 2px; width: 1420px;">
        <br>
        <br>
        <section>
        <h1 class="center">Drama Club</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>User Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Type of Election</th>
                <th>Position</th>
                <th>Description</th>
                <th>Votes</th>
            </tr>
        <?php include 'Dramafetch.php'; 
            $maxVotes = -1;
            $winner = null;

            foreach ($users as $user) {
                $userId = $user['Id'];
                $votes = $user['Votes'];

                if ($votes > $maxVotes) {
                    $maxVotes = $votes;
                    $winner = $user;
                }
            }
             foreach ($users as $user) : ?>
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
                <td><?php echo $user['Votes'];?>
    </form></td>
            </tr>
            <?php endforeach; ?> 
        </table>
        <div class="winner-container">
            <?php if ($winner) : ?>
                <h1 class="center1">Winner</h1>
                <h3><p>User Id: <?php echo $winner['Id']; ?></p>
                <p>Name: <?php echo $winner['Name']; ?></p>
                <p>College: <?php echo $winner['College']; ?></p>
                <p>Position: <?php echo $winner['Position']; ?></p>
                <p>Votes: <?php echo $winner['Votes']; ?></p></h3>
            <?php else : ?>
                <p>No winner found.</p>
            <?php endif; ?>
            </div>
        <br>
        <br>
        <hr style="color: blue; background-color: black; height: 2px; width: 1420px;">
        <br>
        <br>
        <section>
        <h1 class="center">Sports Club</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>User Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Type of Election</th>
                <th>Position</th>
                <th>Description</th>
                <th>Votes</th>
            </tr>
        <?php include 'Sportsfetch.php'; 
            $maxVotes = -1;
            $winner = null;

            foreach ($users as $user) {
                $userId = $user['Id'];
                $votes = $user['Votes'];

                if ($votes > $maxVotes) {
                    $maxVotes = $votes;
                    $winner = $user;
                }
            }
             foreach ($users as $user) : ?>
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
                <td><?php echo $user['Votes'];?>
    </form></td>
            </tr>
            <?php endforeach; ?> 
        </table>
        <div class="winner-container">
            <?php if ($winner) : ?>
                <h1 class="center1">Winner</h1>
                <h3><p>User Id: <?php echo $winner['Id']; ?></p>
                <p>Name: <?php echo $winner['Name']; ?></p>
                <p>College: <?php echo $winner['College']; ?></p>
                <p>Position: <?php echo $winner['Position']; ?></p>
                <p>Votes: <?php echo $winner['Votes']; ?></p></h3>
            <?php else : ?>
                <p>No winner found.</p>
            <?php endif; ?>
        </div>
        <br>
        <br>
        <hr style="color: blue; background-color: black; height: 2px; width: 1420px;">
        <br>
        <br>
        <section>
        <h1 class="center">Cultural Club</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>User Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Type of Election</th>
                <th>Position</th>
                <th>Description</th>
                <th>Votes</th>
            </tr>
        <?php include 'Culturalfetch.php'; 
            $maxVotes = -1;
            $winner = null;

            foreach ($users as $user) {
                $userId = $user['Id'];
                $votes = $user['Votes'];

                if ($votes > $maxVotes) {
                    $maxVotes = $votes;
                    $winner = $user;
                }
            }
             foreach ($users as $user) : ?>
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
                <td><?php echo $user['Votes'];?>
    </form></td>
            </tr>
            <?php endforeach; ?> 
        </table>
        <div class="winner-container">
            <?php if ($winner) : ?>
                <h1 class="center1">Winner</h1>
                <h3><p>User Id: <?php echo $winner['Id']; ?></p>
                <p>Name: <?php echo $winner['Name']; ?></p>
                <p>College: <?php echo $winner['College']; ?></p>
                <p>Position: <?php echo $winner['Position']; ?></p>
                <p>Votes: <?php echo $winner['Votes']; ?></p></h3>
            <?php else : ?>
                <p>No winner found.</p>
            <?php endif; ?>
        </div>
        <br>
        <br>
        <hr style="color: blue; background-color: black; height: 2px; width: 1420px;">
        <br>
        <br>
        <section>
        <h1 class="center">Orator Club</h1>
        <!-- TABLE CONSTRUCTION -->
        <table class="center">
            <tr>
                <th>User Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>College</th>
                <th>Type of Election</th>
                <th>Position</th>
                <th>Description</th>
                <th>Votes</th>
            </tr>
        <?php include 'oratorfetch.php'; 
            $maxVotes = -1;
            $winner = null;

            foreach ($users as $user) {
                $userId = $user['Id'];
                $votes = $user['Votes'];

                if ($votes > $maxVotes) {
                    $maxVotes = $votes;
                    $winner = $user;
                }
            }
             foreach ($users as $user) : ?>
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
                <td><?php echo $user['Votes'];?>
    </form></td>
            </tr>
            <?php endforeach; ?> 
        </table>
        <div class="winner-container">
            <?php if ($winner) : ?>
                <h1 class="center1">Winner</h1>
                <h3><p>User Id: <?php echo $winner['Id']; ?></p>
                <p>Name: <?php echo $winner['Name']; ?></p>
                <p>College: <?php echo $winner['College']; ?></p>
                <p>Position: <?php echo $winner['Position']; ?></p>
                <p>Votes: <?php echo $winner['Votes']; ?></p></h3>
            <?php else : ?>
                <p>No winner found.</p>
            <?php endif; ?>
        </div>