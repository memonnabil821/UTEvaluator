<?php
    include "session.php";
?>
<!DOCTYE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <header id="head">
            <img src="../images/logo1.png" alt="logo1.png">
        </header>
        <nav class="menu">
            <a href="../html/home.php">Home</a>
            <span class="sp">|</span>
            <a href="../html/login.php">Login</a>
            <span class="sp">|</span>
            <a href="">About</a>
        </nav>
        <article>
            <form action="../html/login.php" name="login" method="post">
                <div id="login">
                    <div id="divuser">
                        <label class="lb" for="user">Enter Username: </label>
                        <input type="text" class="text" id="user" name="username" value="<?php if(isset($_POST['login'])) {echo $_POST['username']; }?>" placeholder="Username" required/>
                        <br>
                    </div>
                    <div id="divpass">
                        <label class="lb" for="pass">Password<span id="sp">: </span></label>
                        <input type="password" class="text" id="pass" placeholder="Password" name="password" required/>
                        <br>
                    </div>
                    <span id="inc" style="color:red;font-weight:bold;margin-top:50%;"></span>
                    <div id="divsubmit">
                        <button type="submit" id="sub" name="login">Login</button>
<!--
                        <br><br>
                        <a href="#" id="forpass">Forget Password?</a>
-->
                    </div>

                </div>
            </form>
        </article>
        <footer id="footer">
            &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
        </footer>
    </div>
</body>

<?php
    include 'connect.php';
    
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
if($username&&$password)
{
//mysqli_select_db($connect,"uteval")or die("couldnt connect");
    $query = mysqli_query($connect,"SELECT * FROM users where username='$username' and password='$password'");
$numrow = mysqli_num_rows($query);
    echo $numrow;
    if ($numrow!=0){
	//code to login
            while($row = mysqli_fetch_assoc($query)){
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
            $dbbit = $row['bit'];    
           }

     //check to see if they match
    if ($username==$dbusername && $password==$dbpassword)
    {
        if($dbbit == 0){
            $_SESSION['username']=$username;
            header("location: ../html/add_teac.php");
        }
        elseif($dbbit == 1){
            $_SESSION['username']=$username;
            $_SESSION['cname']=$username;
            header("location: ../html/termdetails.php");
        }
    }    
    }  
  else{
//        echo "<script>alert('hello');</script>";
        echo "<script type='text/javascript'>document.getElementById('inc').innerHTML='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username/Password Incorrect.'</script>";
    }
 }
}
?>
</html>
