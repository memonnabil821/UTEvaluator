<?php
    include '../html/session.php';
?>
<!DOCTYE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/add_teac.css">
        <title>Add Teacher</title>
        
        <script>
            function validate(){
    var x= document.forms["form1"]["name"].value;
    if(x==" "){
        alert("Name cannot be blank space.");
        return false;
    }
    var y =  document.forms["form1"]["password"].value;
    if(y==" "){
        alert("Password cannot be blank space.");
        return false;
    }
    var z =  document.forms["form1"]["username"].value;
    if(z==" "){
        alert("Username cannot be blank space.");
        return false;
    }
    if(!/^[a-zA-Z]+$/g.test(x)){
        alert("Name cannot contain any digits");
        return false;
    }
}
        </script>
    </head>

    <body>
        <div class="container">
            <header id="head">
                <img src="../images/logo1.png" alt="logo1.png">
            </header>
            <form action="../html/add_teac.php" method="post" name="form1" onsubmit="return validate()">
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
                            <div id="lb1">
                                <label class="lb" for="name">Name : </label>
                                <input type="text" id="name" class="text" placeholder="Name" name="name" required>
                            </div>
                            <div id="lb2">
                                <label class="lb" for="uname">Username : </label>
                                <input type="text" id="uname" class="text" placeholder="Username" name="usname" required>
                            </div>
                            <div id="lb3">
                                <label class="lb" for="password">Password : </label>
                                <input type="password" id="password" class="text" placeholder="Password" name="pass" required>
                            </div>
                            <br>
                            <div id="no1">
                                <div id="class1">
                                    <label class="lb">Class 1 : </label>
                                    <select class="class" name="class1">
             <option value="none" selected>None</option>
             <option value="SEA">SE-A</option>
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
                                <div id="sub1">
                                    <label class="lb">Subject 1 : </label>
                                    <select class="subjects" name="sub1">
                <option value="none" selected>None</option>
                <option value="DIS">DIS</option>
                <option value="DS">DS</option>
                <option value="OOPM">OOPM</option>
                <option value="ECCF">ECCF</option>
                <option value="M3">M3</option>
                <option value="DLDA">DLDA</option>
                <option value="M4">M4</option>
                <option value="CG">CG</option>
                <option value="TCS">TCS</option>
                <option value="DBMS">DBMS</option>
                <option value="AOA">AOA</option>
                <option value="COA">COA</option>
            </select>
                                </div>
                                <br>
                            </div>
                            <div id="no2">
                                <div id="class2">
                                    <label class="lb">Class 2 : </label>
                                    <select class="class" name="class2">
             <option value="none" selected>None</option>
             <option value="SEA">SE-A</option>
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
                                <div id="sub2">
                                    <label class="lb">Subject 2 : </label>
                                    <select class="subjects" name="sub2">
                <option value="none" selected>None</option>
                <option value="DIS">DIS</option>
                <option value="DS">DS</option>
                <option value="OOPM">OOPM</option>
                <option value="ECCF">ECCF</option>
                <option value="M3">M3</option>
                <option value="DLDA">DLDA</option>
                <option value="M4">M4</option>
                <option value="CG">CG</option>
                <option value="TCS">TCS</option>
                <option value="DBMS">DBMS</option>
                <option value="AOA">AOA</option>
                <option value="COA">COA</option>
            </select>
                                </div>
                                <br>
                            </div>
                            <div id="no3">
                                <div id="class3">
                                    <label class="lb">Class 3 : </label>
                                    <select class="class" name="class3">
             <option value="none" selected>None</option>
             <option value="SEA">SE-A</option>
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
                                <div id="sub3">
                                    <label class="lb">Subject 3 : </label>
                                    <select class="subjects" name="sub3">
                <option value="none" selected>None</option>
                <option value="DIS">DIS</option>
                <option value="DS">DS</option>
                <option value="OOPM">OOPM</option>
                <option value="ECCF">ECCF</option>
                <option value="M3">M3</option>
                <option value="DLDA">DLDA</option>
                <option value="M4">M4</option>
                <option value="CG">CG</option>
                <option value="DBMS">DBMS</option>
                <option value="AOA">AOA</option>
                <option value="COA">COA</option>
            </select>
                                </div>
                                <div id="bit">
                                    <label class="lb">Privilage : </label>
                                    <select class="subjects" name="priv">
                                <option value="0" selected>HOD</option>
                                <option value="1">Faculty</option>
                                <option value="2">Admin</option>
                            </select>
                                </div>
                                <div style="padding-top:2%;">
                            <span id="chck" style="color:red;font-weight:bold;display:block;"></span>  
                                </div>
                            </div>
                            <div id="sub">
                                <button type="submit" id="submit" name="adduser">Add User</button>
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
   // include 'session.php';
    if(isset($_POST['adduser'])){
        $dbname=$_POST['name'];    
        $dbusername=$_POST['usname'];
        $dbpassword=$_POST['pass'];
        $dbpriv=$_POST['priv'];
        $dbclass1=$_POST['class1'];
        $dbsub1=$_POST['sub1'];
        $dbclass2=$_POST['class2'];
        $dbsub2=$_POST['sub2'];
        $dbclass3=$_POST['class3'];
        $dbsub3=$_POST['sub3'];
            $sql="select username from users where username='$dbusername'";
            $query = mysqli_query($connect,$sql);
            $numrow = mysqli_num_rows($query);
            if($numrow!=0){
                echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='Username already taken. Please Use a different Username'</script>";
            }
            else{
                $sql="insert into users (name,username,password,bit,class1,sub1,class2,sub2,claa3,sub3)  values ('$dbname','$dbusername','$dbpassword','$dbpriv','$dbclass1','$dbsub1','$dbclass2','$dbsub2','$dbclass3','$dbsub3')";
                $query=mysqli_query($connect,$sql);
                if($query!=0){
                    echo "<script type='text/javascript'>document.getElementById('chck').innerHTML='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Created.'</script>";
                }    
            }
    }
?>

</html>
