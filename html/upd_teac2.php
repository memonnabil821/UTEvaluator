<?php
    include '../html/session.php';
?>
<!DOCTYE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rmve_teac.css">
    <title>Update Teacher Info</title>
</head>

<body>
    <div class="container">
        <header id="head">
            <img src="../images/logo1.png" alt="logo1.png">
        </header>
        <form action="../html/upd_teac2.php" method="post">
        <nav class="menu">
            <a href="../html/add_teac.php">Add Teacher</a>
            <span class="sp">|</span>
            <a href="../html/upd_teac2.php">Update Teacher info</a>
            <span class="sp">|</span>
            <a href="../html/rmve_teac.php">Remove Teacher</a>
            <span class="sp">|</span>
            <a href="../html/add_stud.php">Add Student</a>
            <span class="sp">|</span>
            <a href="#">Remove Student</a>
            <span class="sp">|</span>
            <a href="#">Update Student</a>
            <span class="sp">|</span>
            <a href="../html/user_list.php">List of Users</a>
            <span class="sp">|</span>
            <a href="../html/logout.php">Log Out</a>
        </nav>
        <article id="article1">
            <div id="div_all">
                    <label for="uname" class="lb">Enter Username :</label>
                    <input type="text" name="uname" id="uname" class="text">
                    <div style="padding-top:2%;padding-left:15%;">
                                <span id="chck" style="color:red;font-weight:bold;display:block;"></span>
                            </div>
                    <div id="div1">
                        <button type="submit" id="subit" class="sub" name="subit">Search User</button>
                    </div>
            </div>
        </article>    
        </form>
        <footer id="footer">
            &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
        </footer>
    </div>
</body>
<?php
    include 'connect.php';
    if(isset($_POST['subit'])){
       $dbuname = $_POST['uname'];
       $sql = "select * from users where username='$dbuname'";
       $query= mysqli_query($connect,$sql);
       $numrow = mysqli_num_rows($query);
       if($numrow == 0){
//           echo "<div style='padding-top:2%;padding-left:15%;'><span id='chck' style='color:red;font-weight:bold;display:block;'></span></div>";
           echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='User does not exist.'</script>";
       }
       else{
            $_SESSION["uname"]=$dbuname;
            header("location: ../html/upd_teac.php");
       }
    }
?>

</html>
