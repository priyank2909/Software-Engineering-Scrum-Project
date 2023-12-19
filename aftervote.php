<html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Website</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    position: relative;
  }

  .container {
    max-width: 1250px;
    margin-left: 5rem;
  }

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 4rem;
    padding-top: 2rem;
    margin-top: -50px;
  }

  .website-name {
    font-weight: bold;
    font-size: 1.5rem;
    margin-left: 40px;
  }

  .links {
    display: flex;
    align-items: center;
    margin-left: 7rem;
    padding: 1rem 0;
  }

  .links a {
    color: #fff;
    text-decoration: none;
    padding: 0.5rem 2rem;
    margin-right: 1rem;
    background-color: #333;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }

  .links a:hover {
    background-color: grey;
  }
  body::before {
          content: "";
          position: fixed;
          top: 0;
          left: 0;
          width: 500px;
          height: 300px;
          background-color: #ffcc00;
          border-radius: 0% 0% 100% 0%;
          z-index: -1;
      }

      /* Pseudo-element for bottom right corner decoration */
      body::after {
          content: "";
          position: fixed;
          bottom: 0;
          right: 0;
          width: 400px;
          height: 300px;
          background-color: #ffcc00;
          border-radius: 100% 0% 0% 0%;
          z-index: -1;
      }
    table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            opacity: 0.8;
        }
        .center {
            margin: 150px 580px;
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
    .center1 {
            margin: 5px 480px;
            margin-bottom: 50px;
            width: 80%;
                }
            </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="website-name"><img src="images/logo4.png"  width="450" height= "200"></div>
            <div class="links">
            </div>
        </div>  
        <script>
        
        function redirecttoresults() {
            window.location.href="Result.php";
        }
      </script>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
</head>
<body>
    <p><h2 class="center">Vote Register Successfully</h2><p>
    <p><h2 class="center1">Click the "Result" button to see the results</h2><p>
    <input type="button" name="Result" value="Result" class="resultbutton" onclick="redirecttoresults()">
    </body>
</html>