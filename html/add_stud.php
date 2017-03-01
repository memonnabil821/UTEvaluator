<?php
    include '../html/session.php';
?>
    <!DOCTYE html>
    <html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/add_teac.css">
        <script>
               function validate(){
    var x= document.forms["form1"]["name"].value;
    if(x==" "){
        alert("Name cannot be blank space.");
        return false;
    }
    if(!/^[a-z A-Z]+$/g.test(x)){
        alert("Name cannot contain any digits");
        return false;
    }
        var y = document.forms["form1"]["sr"].value;
        if( isNaN(y)|| y > 30 || y < 1){
            alert("Please enter proper serial number.");
            return false;
        }
        var z = document.forms["form1"]["roll"].value;
        if(z == " "){
            alert("Password cannot be blank space.");
            return false;
        }
}       
        </script>
        <title>Add Student</title>
    </head>

    <body>
        <div class="container">
            <header id="head1">
                <img src="../images/logo1.png" alt="logo1.png">
            </header>
            <form action="../html/add_stud.php" method="post" name="form1" onsubmit="return validate()">
                <nav class="menu">
                    <a href="../html/add_teac.php">Add Teacher</a>
                    <span class="sp">|</span>
                    <a href="../html/upd_teac2.php">Update Teacher Info</a>
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
                    <a href="../html/logout.php">Logout</a>
                </nav>
                <article id="article1">
                    <div id="div_all">
                        <form>
                            <div id="lb1">
                                <label class="lb" for="name">Name : </label>
                                <input type="text" id="name" class="text" placeholder="Name" name="name" required>
                            </div>
                            <div id="lb2">
                                <label class="lb" for="roll">Roll no : </label>
                                <input type="text" id="roll" class="text" placeholder="Roll no" name="roll" required>
                            </div>
                            <div id="lb3">
                                <label class="lb" for="sr">SR. no : </label>
                                <input type="text" id="sr" class="text" placeholder="Serial Number" name="sr" min="1" max="30" required>
                            </div>
                            <div id="no2">
                                <div id="class2">
                                    <label class="lb">Class : </label>
                                    <select class="class" name="class">
             <option value="SEA" selected>SE-A</option>
             <option value="SEB">SE-B</option>
             <option value="SEC">SE-C</option>
             <option value="TEA">TE-A</option>
             <option value="TEB">TE-B</option>
             <option value="TEC">TE-C</option>
             <option value="BEA">BE-A</option>
             <option value="BEB">BE-B</option>
             <option value="BEC">BE-C</option>
           </select>
                                </div>
                                <div id="batch">
                                    <label class="lb">Batch : </label>
                                    <select class="subjects" name="batch">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="B3">B3</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <option value="C3">C3</option>
            </select>
                                </div>
                                <br>
                            </div>
                            <div id="sub">
                                <button type="submit" id="submit" name="addstud">Add Student</button>
                            </div>
                        </form>
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
            if(isset($_POST['addstud'])){
                $dbname=$_POST['name'];
                $dbroll=$_POST['roll'];
                $dbroll = strtoupper($dbroll);
                $dbsr=$_POST['sr'];
                $dbclass=$_POST['class'];
                $dbbatch=$_POST['batch'];
                if($dbclass == "SEA" || $dbclass == "SEB" || $dbclass == "SEC"){
                    $dbtable="sestud";
                    $dbtable1="semarks";
                }
                elseif($dbclass == "TEA" || $dbclass == "TEB" || $dbclass == "TEC"){
                    $dbtable="testud";
                    $dbtable1="temarks";
                }
                elseif($dbclass == "BEA" || $dbclass == "BEB" || $dbclass == "BEC"){
                    $dbtable="bestud";
                    $dbtable1="bemarks";
                }
                $sql = "select * from $dbtable where roll='$dbroll'";
                $query = mysqli_query($connect,$sql);
                $numrow = mysqli_num_rows($query);
                if($numrow != 0){
                    echo "<script type='text/javascript'>alert('Student with this roll number already exist.')</script>";
                }
                else{
                    $sql = "insert into $dbtable values ('$dbname','$dbroll','$dbsr','$dbclass','$dbbatch')";
                    $sql1 = "insert into $dbtable1 (roll) values ('$dbroll')";
                    $query = mysqli_query($connect,$sql);
                    $query1 = mysqli_query($connect,$sql1);
                    if($query != 0 && $query1 != 0){
                        echo "<script type='text/javascript'>alert('Student data inserted.')</script>";
                    }
                }
            }
    ?>
    
</html>