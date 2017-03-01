<?php
    include '../html/session.php';

        ob_start();
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
            <form action="../html/tt1me2.php" method="post">
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
                    $class=$_SESSION["class"];
                    $sub=$_SESSION["sub"];
//                    $tt=$_SESSION["tt"];
                //    $sub="oopm";
                //    $tt="t1";
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
//                    if($tt=="t1"){
//                        $tm="TermTest-1";
//                    }
//                    else{
//                        $tm="TermTest-2";
//                    }
                    $sub1=strtolower($sub."t1");
                    $sub2=strtolower($sub."t2");
                    $sub3=strtolower($sub."avg");
                
                $sql = "select $mclass.roll,$rclass.name,$mclass.$sub1,$mclass.$sub2,$mclass.$sub3 from $mclass join $rclass on $mclass.roll=$rclass.roll and $rclass.class='$class'";
                    $query = mysqli_query($connect,$sql);
                    echo "<table id='tt' border='1' align='center' style='width:60%;'>
                    <thead>
                        <tr><th colspan='5'>$sub</th></tr>
                        <tr>
                        <th>Roll no</th>
                        <th>Name</th>
                        <th>"; echo strtoupper($sub1)."</th>
                        <th>"; echo strtoupper($sub2)."</th>
                        <th>";echo strtoupper($sub3)."</th>
                        </tr>
                    </thead>
                    <tbody>";
                $i=0;
//                <th>Name</th> $row1 = mysqli_fetch_assoc($query1) && 
                 while($row = mysqli_fetch_assoc($query)){
                     echo "<tr><td>
           <input class='tx' type='text' id='dat' name='r".$i."' value='". $row['roll'] ."' readonly/>
           </td>
           <td>
           <input class='tx' type='text' id='dat'  value='". $row['name'] ."' readonly/>
           </td>
           <td><input class='tx' type='text' name='m".$i."' value='". $row[$sub1]."' max='30'/></td>
           <td><input class='tx' type='text' name='mm".$i."' value='". $row[$sub2]."' max='30'/></td>
           <td><input class='tx' type='text' name='mmm".$i."' value='". $row[$sub3]."'readonly/></td>
           </tr>";
                     $i++;
                 }
//                echo "value : ".$i;name='r".$i."'
                
//                <td><input class='tx' type='text' value='". $row1['name']."' readonly/>
//           </td>
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
//        echo "value : ".$i;
        if(isset($_POST['submit'])){
            $j=0;
            while($j<$i){
                $rw = $_POST['r'.$j];
                $m = $_POST['m'.$j];
                $mm = $_POST['mm'.$j];
//                $mmm = $_POST['m'.$j];
                $mmm=($m+$mm)/2;
                $sql = "update $mclass set $sub1='$m',$sub2='$mm',$sub3='$mmm' where roll='$rw'";
                $query = mysqli_query($connect,$sql);
                $j++;
            }
                header("refresh:0");
            
//                header("location: tt1me2.php");
                if($query == 1){
                echo "<script>alert('Marks Updated.');</script>";
            }
        }
    ?>
</html>