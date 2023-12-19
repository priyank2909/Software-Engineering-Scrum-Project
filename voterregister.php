<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connect.php");

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $college = $_POST['College'];
    $user = $_POST['Username'];
    $password = $_POST['Password'];
    $cpassword = $_POST['Cpassword'];

    if ($cpassword!== $password) {
        echo '<script>                
        if (confirm("Wrong password. Do you want to go to the home page?"))
         {                 
                 window.location.href = "Registration.html";       
          }               
          </script>'; 
    } else {
        $insert = mysqli_query($connect, "INSERT INTO `voter`(`Voter_Id`, `Name`, `Email`, `College`,`Username`, `Password`, `CPassword`) VALUES (NULL,'$name','$email','$college','$user','$password','$cpassword')");

        if ($insert) {
            echo '<script>
                    alert("Registration successful!");
                    window.location = "loginpage1.html";
                  </script>';
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    }
}
?>      





