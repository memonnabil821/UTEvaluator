<!DOCTYE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rmve_teac.css">
    <title>Update Teacher Info</title>
</head>
<body>
    <div class="container">
        <header id="head">
            <img src="../images/logo1.png" alt="logo1.png">
        </header>
        <form action="../html/upd_teac2.php" method="post">
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
                    <label class="lb" for="class">Class : </label>
                    <select class="class" name="class">
             <option value="setud" selected>SE</option>
             <option value="testud">TE</option>
             <option value="bestud">BE</option>
           </select>
                    <label class="lb" for="roll">Enter Roll no. : </label>
                    <input type="text" class="text" name="roll" placeholder=" Roll number"/>
                    <div style="padding-top:2%;padding-left:15%;">
                                <span id="chck" style="color:red;font-weight:bold;display:block;"></span>
                            </div>
                    <div id="div1">
                        <button type="submit" id="subit" class="sub" name="subit">Search User</button>
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
