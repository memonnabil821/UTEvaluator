<?php
    include '../html/session.php';
?>
<!DOCTYE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_list.css">
    <title>List of Users</title>
</head>
<body>
    <div class="container">
        <header id="head">
         <img src="../images/logo1.png" alt="logo1.png">
        </header>
         <form action="../html/user_list.php" method="post">
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
        </article>
            </form>
        <footer id="footer">
         &copy; <?php echo date("Y");?> Created by Juilee Bhoir and Nabil Memon.
        </footer>
    </div>
</body>

<?php
    include 'connect.php';
    $sql = "select * from users";
    $query = mysqli_query($connect,$sql);
    //$numrow = mysqli_num_rows($query);
    echo "<table id='t1' border='1' align='center'>
                    <thead>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Privilage</th>
                        <th>Class1</th>
                        <th>Subject1</th>
                        <th>Class2</th>
                        <th>Subject2</th>
                        <th>Class3</th>
                        <th>Subject3</th>
                        <th>Remove</th>
                    </thead>
                    <tbody>";
    while($row = mysqli_fetch_assoc($query)){
        if($row['bit']==0){
            $bit1="HOD";
        }
        elseif($row['bit']==1){
            $bit1="Faculty";
        }
        elseif($row['bit']==2){
            $bit1="Admin";
        }
        echo "<tr><td>" . $row['name'] . "</td><td>"  . $row['username'] . "</td><td>" . $bit1 . "</td><td>" . $row['class1'] . "</td><td>" . $row['sub1'] . "</td><td>" . $row['class2'] . "</td><td>" . $row['sub2'] . "</td><td>" . $row['claa3'] . "</td><td>" . $row['sub3'] . "</td><td><img src='../images/cross-20.png'></td></tr>";
    }
    echo "</tbody></table>";
?>

</html>