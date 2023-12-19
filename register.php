<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connect.php");

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $college = $_POST['College'];
    $typeofelection = $_POST['TypeofElection'];
    $position = $_POST['Position'];
    $description = $_POST['Description'];
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $user = $_POST['Username'];
    $password = $_POST['Password'];
    $cpassword = $_POST['cpassword'];
    

    if ($cpassword !== $password) {
        echo '<script>                
        if (confirm("Wrong password. Do you want to go to the home page?"))
         {                 
                 window.location.href = "Registration.html";       
          }               
          </script>'; 
    } else {
        move_uploaded_file($tmp_name, "upload/$photo");
        $insert = mysqli_query($connect, "INSERT INTO `user`(`Id`, `Name`, `Email`, `College`, `Type of Election`, `Position`, `Description`, `Photo`, `Username`, `Password`, `Confirm Password`, `Status`, `Votes`) VALUES (NULL,'$name','$email','$college','$typeofelection','$position','$description','$photo','$user','$password','$cpassword',0,0)");
        $insert2 = mysqli_query($connect, "INSERT INTO `voter`(`Voter_Id`, `Name`, `Email`, `College`, `Username`, `Password`, `CPassword`) VALUES (NULL,'$name','$email','$college','$user','$password','$cpassword')");

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





