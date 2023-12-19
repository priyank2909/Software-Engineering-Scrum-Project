<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include("connect.php");

    $User = $_POST['User'];
    $Password = $_POST['Password'];

$query = "select * from voter Where username = '$User'";

$result = mysqli_query($connect, $query);

if($result) {
    if(mysqli_num_rows($result) > 0) {
        $userRow = mysqli_fetch_assoc($result);
        $storedPassword = $userRow['Password'];

        if($Password === $storedPassword) {
            echo '<script>
                    alert("Login Successful !! ");
                    window.location.href = "afterloginmainpage.php";
                </script>';

        }else{
            echo '<script>
                    alert("Please check your Username & Password");
                    window.location.href = "loginpage1.html";
                </script>';
        }

    }else{
        echo '<script>
                alert("User not found !! Register first to Vote !! ");
                window.location.href = "Registration.html";
            </script>';
    }
}else{
    echo "Error: " . mysqli_error($connect);
}

    mysqli_close($connect);
}
?>