<?php 

//$FirstName = $_POST['firstname'];
//$LastName = $_POST['lastname'];
//$Gender = $_POST['gender'];
//$Password = $_POST['password'];
//$DateOfBirth = $_POST['dateofbirth'];
//$Email = $_POST['email'];
//$PNumber = $_POST['number'];
//$AdharNumber = $_POST['adhar'];
//$Address = $_POST['address'];

//$FirstName1 = $_POST['fname'];
//$LastName1 = $_POST['lname'];
//$DateOfBirth1 = $_POST['dateofbirth1'];
//$Email1 = $_POST['email1'];
//$PNumber1 = $_POST['number1'];
//$AdharNumber1 = $_POST['adhar1'];
//$Address1 = $_POST['address1'];
//$txt = $_POST['area'];

// Now connecting to the database

$user = 'root';
$pass = '';
$db = 'internship1';

$connection = new mysqli('localhost', $user, $pass, $db);

if(!$connection){
    die("could not connected please check" . mysqli_error());
}else{
  //  echo "Connected successfully";
}


if(isset($_POST['save'])){
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Gender = $_POST['gender'];
    $Password = $_POST['password'];
    $DateOfBirth = $_POST['dateofbirth'];
    $Email = $_POST['email'];
    $PNumber = $_POST['number'];
    $Address = $_POST['address'];
    
    $sql = "INSERT INTO registration1 (firstname, lastname, gender, password, dateofbirth, email, number, address) VALUES ('$FirstName', '$LastName', '$Gender', '$Password', '$DateOfBirth', '$Email', '$PNumber', '$Address')";

    if(mysqli_query($connection, $sql)){
        echo "<h1>Information Submitted Successfully</h1>";
    }else{
        "Error:" . $sql . " " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
    

   
//INSERT INTO `registration` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `dateofbirth`, `number`, `adhar`, `address`, `fname`, `lname`, `dateofbirth1`, `email1`, `number1`, `adhar1`, `address1`, `area`) VALUES ('2', 'aksa', 'j9j', 'm', 'j9j@gmail.com', 'hgr', '2022-04-05', '9876546565', '87654334565', 'htrhfbfhrrur ghhtur ', 'ufffffff', 'hgfd', '2012-04-11', 'ytres@gmail.com', '8765439876', '98765487654', 'dfgjewjwi nigni ', 'kko



?>