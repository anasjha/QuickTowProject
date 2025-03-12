<?php
session_start();

if (isset($_POST['login'])) {
    $conn =mysqli_connect("localhost", "root", "12345678", "quicktow_users") or die("Connection failed:".mysqli_connect_error());

    $username =$_POST['username'];
    $email=$_POST['email'];
    $passWord =$_POST['passWord'];

    // chech if user exist
    $usercheck="SELECT * FROM users WHERE username='$username' or email='$email' ";
    $result = mysqli_query($conn, $usercheck);
    
    if (mysqli_num_rows($result) > 0) {
        // if we found th user
        $row = mysqli_fetch_assoc($result);
        $hashed_password =$row['password'];

        // password check
        if (password_verify($passWord, $hashed_password)) {
            $_SESSION['username'] =$username; // beccause if he close the window then return
            echo "<script>
                window.alert('Login successful!');
                window.location.href='welcome.php'; 
            </script>";
        } else {
            echo "<script>
                window.alert('Incorrect password');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            window.alert('User does not exist');
            window.history.back();
        </script>";
    }

    mysqli_close($conn);
}
?>
