<!DOCTYE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>UT Evaluation System</title>
</head>

<body>
    <div class="container">
        <header id="head">
            <img src="../images/logo1.png" alt="logo1.png">
        </header>
        <form action="../html/home.php" method="post">
            <nav class="menu">
                <a href="../html/home.php">Home</a>
                <span class="sp">|</span>
                <a href="../html/login.php">Login</a>
                <span class="sp">|</span>
                <a href="">About</a>
            </nav>
            <article id="article1">
                <div id="dv">
                    <label class="lb" for="class">Class : </label>
                    <select class="class" name="class" id="class">
             <option value="semarks" selected>SE</option>
             <option value="TEA">TE</option>
             <option value="BEA">BE</option>
           </select>
                    <label class="lb" for="roll">Enter Roll no. : </label>
                    <input type="text" class="text" name="roll" placeholder=" Roll number" id="roll" />
                </div>
                <br><br>
                <button type="submit" id="sub" name="sub">  Search</button>
            </article>
        </form>
        <footer id="footer">
            &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
        </footer>

    </div>


</body>

</html>
<?php
    include 'connect.php';
    if(isset($_POST['sub'])){
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        if($class == 'semarks'){
            $rclass='sestud';
            $year= 'se';
            $year1 = 'se1';
        }
        elseif($class == 'temarks'){
            $rclass='testud';
            $year = 'te';
            $year1 = 'te1';
        }
        else{
            $rclass='bestud';
            $year = 'be';
            $year1 = 'be1';
        }
        $sql = "select * from $class where roll='$roll'";
        $query = mysqli_query($connect,$sql);
        if($query == NULL){
            echo "<script>alert('Student Not Found.')</script>";
        }
        else{
            $row = mysqli_fetch_assoc($query);
            $sql1 = "select * from $rclass where roll='$row[roll]'";
            $query1 = mysqli_query($connect,$sql1);
            $row1 = mysqli_fetch_assoc($query1);
            $sql2 = "select $year,$year1 from sub";
            $query2 = mysqli_query($connect,$sql2);
//            $row2 = mysqli_fetch_assoc($query2);
            echo "<table id='tt' border='1' align='center' style='width:60%;'>
                    <tbody>
                        <tr>
                        <tr>
                        <td>Roll no</td>
                        <td colspan='3'>$row[roll]</td>
                        </tr>
                        <td>Name</td>
                        <td colspan='3'>$row1[name]</td>
                        </tr>
                        <tr>
                        <td>Class</td>
                        <td colspan='3'>$row1[class]</td>
                        </tr>
                        <tr>
                        <td>Batch</td>
                        <td colspan='3'>$row1[batch]</td>
                        </tr>
                        <tr>
                        <td>Serial no</td>
                        <td colspan='3'>$row1[sr]</td>
                        </tr>
                        <tr>
                        <td>Exam</td>
                        <td>UnitTest-1</td>
                        <td>UnitTest-2</td>
                        <td>Average</td>
                        </tr>";
            while($row2 = mysqli_fetch_assoc($query2)){
                    
                    echo"<tr>
                    <td>$row2[$year]</td>";    
                    $yr = $row2[$year1].'t1';   
                    echo"<td>$row[$yr]</td>";
                    $yr = $row2[$year1].'t2';
                    echo"<td>$row[$yr]</td>";
                    $yr = $row2[$year1].'avg';
                    echo"<td>$row[$yr]</td>";
                    echo"</tr>";
            }             
            echo "</table>";
        }
    }
?>
