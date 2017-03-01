<?php
    include '../html/session.php';
?>
    <!DOCTYE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/termdetails.css">
        <title>Add TermTest Details</title>
    </head>

    <body>
        <div class="container">
            <header id="head"> <img src="../images/logo1.png" alt="logo1.png"> </header>
            <form action="../html/cpdf1.php" method="post">
                <nav class="menu"> <a href="../html/termdetails.php">TermTest Details</a> <span class="sp">|</span> <a href="../html/tt1me.php">TermTest Entry</a> <span class="sp">|</span> <a href="../html/analysis.php">Analysis</a> <span class="sp">|</span> <a href="../html/logout.php">Logout</a> </nav>
                <?php
                    include 'connect.php';
                    $class=$_SESSION["class"];
                    $sub=$_SESSION["sub"];
                    $tt=$_SESSION["tt"];
//                $class="SEA";
//                $sub="oopm";
//                $tt="t1";
                    if($class=="SEA" || $class=="SEB" || $class=="SEC"){
                        $mclass="semarks";
                        $rclass="sestud";
                    }
                    elseif($class=="TEA" || $class=="TEB" || $class=="TEC"){
                        $mclass="temarks";
                        $rclass="testud";
                    }
                    elseif($class=="BEA" || $class=="BEB" || $class=="BEC"){
                        $mclass="bemarks";
                        $rclass="bestud";
                    }
                    if($tt=="t1"){
                        $tm="TermTest-1";
                    }
                    elseif($tt=="t2"){
                        $tm="TermTest-2";
                    }
                    else{
                        $tm="Average";
                    }
                    $sub1 = strtolower($sub.$tt);
                    $sub = strtoupper($sub);
                    $sql = "select roll,$sub1 from $mclass where $sub1=(select max($sub1) from $mclass)";
                    $query = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($query);
                    $sql1= "select name,batch from $rclass where roll='$row[roll]'";
                    $query1 = mysqli_query($connect,$sql1);
                    $row1 = mysqli_fetch_assoc($query1);
                    $sql2 = "select count(roll) as cnt1,min($sub1) from $mclass where $sub1>11 and roll in (select roll from $rclass where class='$class')";
                    $query2 = mysqli_query($connect,$sql2);
                    $row2 = mysqli_fetch_assoc($query2);
                    $sql3 = "select count(roll) as cnt,min($sub1) as min1 from $mclass where $sub1<12 and roll in (select roll from $rclass where class='$class')";
                    $query3 = mysqli_query($connect,$sql3);
                    $row3 = mysqli_fetch_assoc($query3);
                    $pass = ($row2['cnt1']*100)/($row2['cnt1']+$row3['cnt']);
                    ob_start();
                echo "<table id='tt' border='1' align='center' style='width:60%;border-collapse:collapse;'>
                    <tbody>
                        <tr>
                        <td>Subject</td>
                        <td>$sub</td>
                        </tr>
                        <tr>
                        <td>Exam</td>
                        <td>$tm</td>
                        </tr>
                        <tr>
                        <td>Class</td>
                        <td>$class</td>
                        </tr>
                        <tr>
                        <td>Name of Topper</td>
                        <td>$row1[name]</td>
                        </tr>
                        <tr>
                        <td>Batch of Topper</td>
                        <td>$row1[batch]</td>
                        </tr>
                        <tr>
                        <td>Highest Marks</td>
                        <td>$row[$sub1]</td>
                        </tr>
                        <tr>
                        <td>Lowest Marks</td>
                        <td>$row3[min1]</td>
                        </tr>
                        <tr>
                        <td>Number of students passed</td>
                        <td>$row2[cnt1]</td>
                        </tr>
                        <tr>
                        <td>Number of students failed</td>
                        <td>$row3[cnt]</td>
                        </tr>
                        <tr>
                        <td>Passing Percentage</td>
                        <td>$pass%</td>
                        </tr>
                    </tbody>
                    </table>";
                $html= ob_get_contents();
                $_SESSION['html']=$html;
                ob_end_flush();
                ?>
                    <div id="sub">
                        <button type="submit" id="sb" name="submit">Create PDF</button>
                    </div>
                    <footer id="footer"> &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon. </footer>
            </form>
        </div>
    </body>

    </html>