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
            <header id="head">
                <img src="../images/logo1.png" alt="logo1.png">
            </header>
            <form action="../html/termdetails2.php" method="post">
                <nav class="menu">
                    <a href="../html/termdetails.php">TermTest Details</a>
                    <span class="sp">|</span>
                    <a href="../html/tt1me.php">TermTest Entry</a>
                    <span class="sp">|</span>
                    <a href="../html/analysis.php">Analysis</a>
                    <span class="sp">|</span>
                    <a href="../html/logout.php">Logout</a>
                </nav>
                <?php
    include 'connect.php';
    $sub=$_SESSION["sub"];
    $tt=$_SESSION["tt"];
//    $sub="oopm";
//    $tt="t1";
    if($tt=="t1"){
        $tm="TermTest-1";
    }
    else{
        $tm="TermTest-2";
    }
    $sub=strtolower($sub."details".$tt); //adding termtest number in subject name
    $sql = "select * from $sub";
                echo $sql;
    $query = mysqli_query($connect,$sql);
    echo "<table id='tt' border='1' align='center' style='width:60%;'>
                    <thead>
                        <tr><th colspan='3'>$tm</th></tr>
                        <tr><th>Question Number</th>
                        <th>Course Outcome(CO)</th>
                        <th>Marks</th></tr>
                    </thead>
                    <tbody>";
                $i=0;
                $qn=array('qn1','qn2','qn3','qn4','qn5','qn6');
                $co=array('co1','co2','co3','co4','co5','co6');
                $mk=array('mk1','mk2','mk3','mk4','mk5','mk6');
    while($row = mysqli_fetch_assoc($query)){
           echo "<tr><td>
           <input class='tx' type='text' id='dat' name='".$qn[$i]."' value='". $row['qno'] ."' readonly/>
           </td>
           <td><input class='tx' type='text' name='".$co[$i]."' value='". $row['cot1']."'/>
           </td>
           <td><input class='tx' type='text' name='".$mk[$i]."' value='". $row['mt1']."'/></td></tr>";
        $i++;
    }
?>
                    <div id="sub">
                        <button type="submit" id="sb" name="submit">Submit</button>
                    </div>
                    <footer id="footer">
                        &copy;<?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
                    </footer>
            </form>
        </div>
    </body>
<?php
    if(isset($_POST['submit'])){
        $i=0;
        while($i<6){
            $cos = $_POST[$co[$i]];
            $mks = $_POST[$mk[$i]];
            $qno = $_POST[$qn[$i]];
//            $sql = "update $sub set cot1='$cos', mt1='$mks' where qno='$qno'";
            $sql = "update $sub set cot1='$cos' where qno='$qno'";
            $query = mysqli_query($connect,$sql);
            $sql1 = "select cot1 from $sub where qno='$qno'";
            $query1 = mysqli_query($connect,$sql1);
            $row = mysqli_fetch_assoc($query1);
            if($row['cot1'] != '0' && $mks >= 0){
                $sql2 = "update $sub set mt1='$mks' where qno='$qno'";
                $query2 = mysqli_query($connect,$sql2);
            }
            else if($row['cot1'] == '0' && $mks > 0){
                 echo "<script>alert('Cannot update marks whose CO is not available.');</script>";
            }
            $i++;
        }
        header("refresh:0");
        
    }    
?>

    

</html>
