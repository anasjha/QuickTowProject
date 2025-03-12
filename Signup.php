/*
mysqli_connect("localhost","root","12345678") or die(mysql_error());
mysqli_select_db("quicktow_users") or die(mysql_error());




$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


mysqli_query("insert into users(userName, email, password) values('$username', '$email', '$password')") or die(mysql_error());


*/
<?php
/*$servername = "localhost"; 
$username = "root"; 
$password = "12345678"; 
$database = "quicktow_users"; 
*/
if(isset($_POST['signup'])){
$conn = mysqli_connect("localhost", "root", "12345678", "quicktow_users") or die("Connection failed:".mysqli_connect_error());


$username=$_POST['username'];
$email=$_POST['email'];
$passWord=$_POST['passWord'];
 

// 9/3/2025 lecture (hashing password)
$hashed_password = password_hash($passWord, PASSWORD_DEFAULT);


$usercheck="SELECT * FROM users WHERE email='$email' or username='$username' ";
$result = mysqli_query($conn, $usercheck);
// 9/3/2025 lecture (check account existing or not)
    if (mysqli_num_rows($result) > 0) {
      echo "<script>
        window.alert('Username or Email Already exist');
        window.history.back();
        </script>";
     } else {
      
    $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$hashed_password')";
       if (mysqli_query($conn, $query)) {
    echo "<script>
        window.alert('Registration complete!, now you can log in');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('ERROR:".mysqli_error($conn)."');
    window.history.back(); 
    </script>";
}
}
mysqli_close($conn);


}
 ?>