<!DOCTYE html>
<html lang="en">
<?php
    include '../html/session.php';
    $name="";
    $uname="";
    $pass="";
    $bit="";
    $class1="";
    $sub1="";
    $class2="";
    $sub2="";
    $class3="";
    $sub3="";
   include 'connect.php';
    $uname = $_SESSION["uname"];
    $sql = "select * from users where username='$uname'";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($query)){
            $name = $row['name'];
            //$dbusername = $row['username'];
            $pass = $row['password'];
            $bit = $row['bit'];
            $class1 = $row['class1'];
            $sub1 = $row['sub1'];
            $class2 = $row['class2'];
            $sub2 = $row['sub2'];
            $class3 = $row['claa3'];
            $sub3 = $row['sub3'];
    }
    if(isset($_POST['sub'])){
       $dbuname = $_SESSION["uname"];
       $uname = $_POST['uname'];
//       $sql = "select username from users where username='$uname' and username!='$dbuname'";
//       $sql = "select username from users where username='$dbuname'";
       $sql1 = "select username from users where username='$uname'"; 
       $query = mysqli_query($connect,$sql1);
       $numrow = mysqli_num_rows($query);
       if(($dbuname == $uname) || ($numrow != 1)){
           $uname = $_POST['uname'];
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $bit = $_POST['priv'];
            $class1 = $_POST['class1'];
            $sub1 = $_POST['sub1'];
            $class2 = $_POST['class2'];
            $sub2 = $_POST['sub2'];
            $class3 = $_POST['class3'];
            $sub3 = $_POST['sub3'];
            
            $sql = "update users set name='$name',username='$uname',password='$pass',bit='$bit',class1='$class1',sub1='$sub1',class2='$class2',sub2='$sub2',claa3='$class3',sub3='$sub3' where username='$dbuname'";
//            echo $class1;
            $query=mysqli_query($connect,$sql);
           // 1 means true(successful) , 0 means false(unsucessful)
            if($query==1){
//                echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='User info updated.';</script>";
                echo "<script>alert('User Info Updated.');</script>";
            }
       }
       else{
            echo "<script>alert('Username already taken. Please enter another one.');</script>";
//           echo '<div style="padding-top:2%;"><span id="chck" style="color:red;font-weight:bold;display:block;"></span></div>';
//           echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='Username/Password Incorrect.'</script>";
           }
       }
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/add_teac.css">
        <title>Update Teacher Info</title>
        <script>
            function validate(){
                var x= document.forms["form1"]["name"].value;
    if(x==" "){
        alert("Name cannot be blank space.");
        return false;
    }
    var y =  document.forms["form1"]["pass"].value;
    if(y==" "){
        alert("Password cannot be blank space.");
        return false;
    }
    var z =  document.forms["form1"]["uname"].value;
    if(z==" "){
        alert("Username cannot be blank space.");
        return false;
    }
    if(!/^[a-zA-Z]+$/g.test(x)){
        alert("Name cannot contain any digits");
        return false;
                
            }
        
        </script>
    </head>

    <body>
        <div class="container">
            <header id="head">
                <img src="../images/logo1.png" alt="logo1.png">
            </header>
            <form action="../html/upd_teac.php" method="post" name="form1" onsubmit="return validate()">
                <nav class="menu">
                    <a href="../html/add_teac.php">Add Teacher</a>
                    <span class="sp">|</span>
                    <a href="../html/upd_teac2.php">Update Teacher Info</a>
                    <span class="sp">|</span>
                    <a href="../html/rmve_teac.html">Remove Teacher</a>
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
                        <div id="lb1">
                            <label class="lb" for="name">Name : </label>
                            <input type="text" name="name" id="name" class="text" placeholder="Name" value="<?php echo $name; ?>">
                        </div>
                        <div id="lb2">
                            <label class="lb" for="uname">Username : </label>
                            <input type="text" id="uname" name="uname" class="text" placeholder="Username" value="<?php echo $uname; ?>">
                        </div>
                        <div id="lb3">
                            <label class="lb" for="password">Password : </label>
                            <input type="password" name="pass" id="password" class="text" placeholder="Password" value="<?php echo $pass ?>">
                        </div>
                        <br>
                        <div id="no1">
                            <div id="class1">
                                <label class="lb">Class 1 : </label>
                                <select class="class" name="class1">
             <option value="none" <?php if($class1=="none") echo 'selected' ?>>None</option>
             <option value="SEA" <?php if($class1=="SEA") echo 'selected' ?>>SE-A</option>
             <option value="SEB" <?php if($class1=="SEB") echo 'selected' ?>>SE-B</option>
             <option value="SEC" <?php if($class1=="SEC") echo 'selected' ?>>SE-C</option>
             <option value="TEA"<?php if($class1=="TEA") echo 'selected' ?>>TE-A</option>
             <option value="TEB" <?php if($class1=="TEB") echo 'selected' ?>>TE-B</option>
             <option value="TEC" <?php if($class1=="TEC") echo 'selected' ?>>TE-C</option>
             <option value="BEA" <?php if($class1=="BEA") echo 'selected' ?>>BE-A</option>
             <option value="BEB" <?php if($class1=="BEB") echo 'selected' ?>>BE-B</option>
             <option value="BEC" <?php if($class1=="BEC") echo 'selected' ?>>BE-C</option>
           </select>
                            </div>
                            <div id="sub1">
                                <label class="lb">Subject 1 : </label>
                                <select class="subjects" name="sub1">
                <option value="none" <?php if($sub1=="none") echo 'selected' ?>>None</option>
                <option value="DIS" <?php if($sub1=="DIS") echo 'selected' ?>>DIS</option>
                <option value="DS" <?php if($sub1=="DS") echo 'selected' ?>>DS</option>
                <option value="OOPM" <?php if($sub1=="OOPM") echo 'selected' ?>>OOPM</option>
                <option value="ECCF" <?php if($sub1=="ECCF") echo 'selected' ?>>ECCF</option>
                <option value="M3" <?php if($sub1=="M3") echo 'selected' ?>>M3</option>
                <option value="DLDA" <?php if($sub1=="DLDA") echo 'selected' ?>>DLDA</option>
                <option value="M4" <?php if($sub1=="M4") echo 'selected' ?>>M4</option>
                <option value="CG" <?php if($sub1=="CG") echo 'selected' ?>>CG</option>
                <option value="TCS" <?php if($sub1=="TCS") echo 'selected' ?>>TCS</option>
                <option value="DBMS" <?php if($sub1=="DBMS") echo 'selected' ?>>DBMS</option>
                <option value="AOA" <?php if($sub1=="AOA") echo 'selected' ?>>AOA</option>
                <option value="COA" <?php if($sub1=="COA") echo 'selected' ?>>COA</option>
            </select>
                            </div>
                            <br>
                        </div>
                        <div id="no2">
                            <div id="class2">
                                <label class="lb">Class 2 : </label>
                                <select class="class" name="class2">
             <option value="none" <?php if($class2=="none") echo 'selected' ?>>None</option>
             <option value="SEA" <?php if($class2=="SEA") echo 'selected' ?>>SE-A</option>
             <option value="SEB" <?php if($class2=="SEB") echo 'selected' ?>>SE-B</option>
             <option value="SEC" <?php if($class2=="SEC") echo 'selected' ?>>SE-C</option>
             <option value="TEA" <?php if($class2=="TEA") echo 'selected' ?>>TE-A</option>
             <option value="TEB" <?php if($class2=="TEB") echo 'selected' ?>>TE-B</option>
             <option value="TEC" <?php if($class2=="TEC") echo 'selected' ?>>TE-C</option>
             <option value="BEA" <?php if($class2=="BEA") echo 'selected' ?>>BE-A</option>
             <option value="BEB" <?php if($class2=="BEB") echo 'selected' ?>>BE-B</option>
             <option value="BEC" <?php if($class2=="BEC") echo 'selected' ?>>BE-C</option>
           </select>
                            </div>
                            <div id="sub2">
                                <label class="lb">Subject 2 : </label>
                                <select class="subjects" name="sub2">
                <option value="none" <?php if($sub2=="none") echo 'selected' ?>>None</option>
                <option value="DIS" <?php if($sub2=="DIS") echo 'selected' ?>>DIS</option>
                <option value="DS" <?php if($sub2=="DS") echo 'selected' ?>>DS</option>
                <option value="OOPM" <?php if($sub2=="OOPM") echo 'selected' ?>>OOPM</option>
                <option value="ECCF" <?php if($sub2=="ECCF") echo 'selected' ?>>ECCF</option>
                <option value="M3" <?php if($sub2=="M3") echo 'selected' ?>>M3</option>
                <option value="DLDA" <?php if($sub2=="DLDA") echo 'selected' ?>>DLDA</option>
                <option value="M4" <?php if($sub2=="M4") echo 'selected' ?>>M4</option>
                <option value="CG" <?php if($sub2=="CG") echo 'selected' ?>>CG</option>
                <option value="TCS" <?php if($sub2=="TCS") echo 'selected' ?>>TCS</option>
                <option value="DBMS" <?php if($sub2=="DBMS") echo 'selected' ?>>DBMS</option>
                <option value="AOA" <?php if($sub2=="AOA") echo 'selected' ?>>AOA</option>
                <option value="COA" <?php if($sub2=="COA") echo 'selected' ?>>COA</option>
            </select>
                            </div>
                            <br>
                        </div>
                        <div id="no3">
                            <div id="class3">
                                <label class="lb">Class 3 : </label>
                                <select class="class" name="class3">
             <option value="none" <?php if($class3=="none") echo 'selected' ?>>None</option>
             <option value="SEA" <?php if($class3=="SEA") echo 'selected' ?>>SE-A</option>
             <option value="SEB" <?php if($class3=="SEB") echo 'selected' ?>>SE-B</option>
             <option value="SEC" <?php if($class3=="SEC") echo 'selected' ?>>SE-C</option>
             <option value="TEA" <?php if($class3=="TEA") echo 'selected' ?>>TE-A</option>
             <option value="TEB" <?php if($class3=="TEB") echo 'selected' ?>>TE-B</option>
             <option value="TEC" <?php if($class3=="TEC") echo 'selected' ?>>TE-C</option>
             <option value="BEA" <?php if($class3=="BEA") echo 'selected' ?>>BE-A</option>
             <option value="BEB" <?php if($class3=="BEB") echo 'selected' ?>>BE-B</option>
             <option value="BEC" <?php if($class3=="BEC") echo 'selected' ?>>BE-C</option>
           </select>
                            </div>
                            <div id="sub3">
                                <label class="lb">Subject 3 : </label>
                                <select class="subjects" name="sub3">
                <option value="none" <?php if($sub3=="none") echo 'selected' ?>>None</option>
                <option value="DIS" <?php if($sub3=="DIS") echo 'selected' ?>>DIS</option>
                <option value="DS" <?php if($sub3=="DS") echo 'selected' ?>>DS</option>
                <option value="OOPM" <?php if($sub3=="OOPM") echo 'selected' ?>>OOPM</option>
                <option value="ECCF" <?php if($sub3=="ECCF") echo 'selected' ?>>ECCF</option>
                <option value="M3" <?php if($sub3=="M3") echo 'selected' ?>>M3</option>
                <option value="DLDA" <?php if($sub3=="DLDA") echo 'selected' ?>>DLDA</option>
                <option value="M4" <?php if($sub3=="M4") echo 'selected' ?>>M4</option>
                <option value="CG" <?php if($sub3=="CG") echo 'selected' ?>>CG</option>
                <option value="DBMS" <?php if($sub3=="DBMS") echo 'selected' ?>>DBMS</option>
                <option value="AOA" <?php if($sub3=="AOA") echo 'selected' ?>>AOA</option>
                <option value="COA" <?php if($sub3=="COA") echo 'selected' ?>>COA</option>
            </select>
                            </div>
                            <div id="bit">
                                <label class="lb">Privilage : </label>
                                <select class="subjects" name="priv">
                                <option value="0" <?php if($bit==0) echo 'selected' ?>>HOD</option>
                                <option value="1" <?php if($bit==1) echo 'selected' ?>>Faculty</option>
                                <option value="2" <?php if($bit==2) echo 'selected' ?>>Admin</option>
                            </select>
                            </div>
<!--
                            <div style="padding-top:2%;">
                                <span id="chck" style="color:red;font-weight:bold;display:block;"></span>
                            </div>
-->
                        </div>
                        <div id="sub">
                            <button type="submit" id="submit" name="sub">Update User</button>
                        </div>

                    </div>
                </article>
            </form>
            <footer id="footer">
                &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
            </footer>
        </div>
    </body>


</html>
