<?php
    include '../html/session.php';
?>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/termdetails.css">
        <title>Add TermTest Marks</title>
    </head>

    <body>
        <div class="container">
            <header id="head">
                <img src="../images/logo1.png" alt="logo1.png">
            </header>
            <form action="../html/tt1me.php" method="post">
                <nav class="menu">
                    <a href="../html/termdetails.php">TermTest Details</a>
                    <span class="sp">|</span>
                    <a href="../html/tt1me.php">TermTest Entry</a>
                    <span class="sp">|</span>
                    <a href="../html/analysis.php">Analysis</a>
                    <span class="sp">|</span>
                    <a href="../html/logout.php">Logout</a>
                </nav>
                <div id="sub">
                    <button type="submit" id="submit1" name="sub1">Submit</button>
                </div>
                <footer id="footer">
                &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
            </footer>
            <?php
                 include 'connect.php';
                 $cname = $_SESSION["cname"];
                 $dbclass="";
                 $dbsub="";
                 $sql = "select *from users where username='$cname'";
                 $query = mysqli_query($connect,$sql);
                 echo '<div style="padding-top: 2%;padding-left: 38%;">
                 <div id="class2" style="display: inline;">
                 <label style="display: inline;font-size: 20px;">Class : </label>
                 <select name="class" style="border-radius: 5px;padding: 2px;">';
                 while($row = mysqli_fetch_assoc($query)){
                     $dbclass = array($row['class1'],$row['class2'],$row['claa3']);
                     $i=0;
                     while($i < 3){
                         echo "<option value = $dbclass[$i]> $dbclass[$i]</option>";
                         $i++;
                     }
                 }
                 echo '</select></div>                            <div style="display: inline;padding-left: 10%;">     
                 <label style="display:inline;font-size: 20px;">Subject : </label>
                 <select name="sub" style="border-radius: 5px;padding: 2px;">';
                 $query = mysqli_query($connect,$sql);
                 while($row = mysqli_fetch_assoc($query)){
                     $dbsub = array($row['sub1'],$row['sub2'],$row['sub3']);
                     $i=0; 
                     while( $i < 3 ){ 
                         echo "<option value = '$dbsub[$i]'>$dbsub[$i]</option>";
                         $i++;
                     }
                 }
                     echo '</select></div>';
                     
//                <div style="display: inline;padding-left: 10%;">
//                     <label style="display:inline;font-size: 20px;">TermTest : </label>
//                     <select name="tt" style="border-radius: 5px;padding: 2px;"><option value="t1">TermTest1</option>
//                     <option value="t2">TermTest2</option>
//                     </select></div></div>'
//                         ;
//                
                     ?>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['sub1'])){
            $_SESSION["class"] = $_POST['class'];
            $_SESSION["sub"] = $_POST['sub'];
            //$_SESSION["tt"] = $_POST['tt'];
            header("location: ../html/tt1me2.php");
        }
    ?>
</html>