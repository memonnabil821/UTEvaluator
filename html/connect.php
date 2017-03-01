<?php
$servername="localhost";
$username="root";
$db="uteval";
$connect = mysqli_connect($servername,$username,"",$db) or die("couldnt connect");
?>

<!--

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="uteval";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
-->
<!--

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uteval";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$dbname1="asd";
//$dbusername="asd";
//$dbpassword="123";
//$dbpriv=1;
//$sql = "insert into users (name,username,password,bit)  values ('$dbname1','$dbusername','$dbpassword','$dbpriv')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}


//if(isset($_POST['adduser'])){
//        $dbname=$_POST['name'];    
//        $dbusername=$_POST['usname'];
//        $dbpassword=$_POST['pass'];
//        $dbpriv=$_POST['priv'];       
//        //if($dbname && $dbusername && $dbpassword && $dbpriv){
//            $sql="insert into users (name,username,password,bit)  values ('$dbname','$dbusername','$dbpassword','$dbpriv')";
////            echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='".$sql."'</script>";
//            $query=mysqli_query($connect,$sql);
//            echo $sql;
//            echo $query;
//            echo "<script type='text/javascript'>alert('".$sql."');</script>";
//           echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='".$sql."'</script>";
//            if($query!=0){
//                echo '<script language="javascript">';
//        echo 'alert("successfull")';
//        echo '</script>';
//        //    }
//        }    
//    }


$conn->close();
?>-->
