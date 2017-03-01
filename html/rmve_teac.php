<?php
    include '../html/session.php';
?>
    <!DOCTYE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/rmve_teac.css">
        <title>Remove Teacher</title>
    </head>

    <body>
        <div class="container">
            <header id="head">
                <img src="../images/logo1.png" alt="logo1.png">
            </header>
            <form action="../html/rmve_teac.php" method="post">
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
                        <input type="text" id="uname" class="text" name="uname">
                        <div style="padding-top:2%;padding-left:15%";>
                            <span id="chck" style="color:red;font-weight:bold;display:block;"></span>
                        </div>
                        <div id="div1">
                            <button type="submit" id="sub" class="sub" onclick="return confirm('Are you sure you wanna delete?')" name="sub">Remove User</button>
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
    if(isset($_POST['sub'])){
        $dbuname = $_POST["uname"];
        $sql = "delete from users where username='$dbuname'";
        $query = mysqli_query($connect,$sql);
        $num = mysqli_affected_rows($connect);
        if($num == '0'){
            echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='User doesn't exist.'</script>";
        }
        else{
            echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='User Removed.'</script>";
        }
    }
?>

    </html>
