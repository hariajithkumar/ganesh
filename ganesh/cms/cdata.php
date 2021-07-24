<?php
include "../db/dbconfic.php";

if(isset($_POST["submit"])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $mark=$_POST['percentage'];
  $pass=$_POST['pass'];
  $filename=$_FILES["upload"]["name"];
  $tempname=$_FILES["upload"]["tmp_name"];
  $folder="../asset/photo/".$filename;

$query=mysqli_query($con,"INSERT INTO `reg`(`firstname`,`lastname`,`email`,`mark`,`password`,`pdf`) VALUES('$fname','$lname','$email','$mark','$pass','$filename');");
     
if($query){
  if(move_uploaded_file($tempname, $folder)){

    echo "<script>
alert('Successfully Uploaded');
window.location.href='../index.php';
</script>";
}else{
  echo "<script>
alert('Photo Not Upload');
// window.location.href='../index.php';
</script>";
}
}else{
     echo "<script>
alert('Query Error');
window.location.href='../index.php';
</script>"; 
    }
    

}

// logiin


if(isset($_REQUEST["s_user"])){
$login_email=$_REQUEST["semail"];
$login_password=$_REQUEST["spass"];
$select=mysqli_query($con,"SELECT * FROM `reg` WHERE `email`='$login_email' AND `password`='$login_password'");
   $row=mysqli_fetch_array($select);
if(mysqli_num_rows($select)>0){ 
	header("Location:../index.php");
}else{
	echo "<script>
    alert('username&password wrong');
    window.location.href='../login.php';
    </script>";
}

}






