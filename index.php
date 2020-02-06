<?php
include('dbconn.php');

?>
<html>
<head>
<title>
Welcome to Kolkata Premiere League!
</title>
</head>
<body>
<form method="post">
<h1 align="center" style="color:blue;">WELCOME TO KOLKATA PREMIERE LEAGUE!</h1>
<h2 align="center" style="color:green;">League Table</h2>
<h4 align="right"><a href="admin.php">Admin Login</a></h4>
<table align="center" border="1">
    <tr align="center" style="font-size:18pt; color:red;"><td>Team Name</td><td>Played</td><td>Won</td><td>Tie</td><td>Lost</td><td>Points</td></tr>
    <?php
    $sql="SELECT * FROM teams ORDER BY points DESC";
    $result=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_array($result))
    {
        echo "<tr align="."center"." style="."font-size:15pt;"."><td>$res[1]</td><td>$res[4]</td><td>$res[5]</td><td>$res[7]</td><td>$res[6]</td><td>$res[8]</td></tr>";
    }
    ?>
    </table>
    <hr/>
<h2 align="center" style="color:green;">Teams playing in the league currently!</h2>
    <table align="center" border="1"><tr align="center" style="font-size:18pt; color:red;"><td>Team Name</td><td>Home Stadium</td><td>No. of Players</td></tr>
<?php
    $sql="SELECT * FROM teams";
    $result=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_array($result))
    {
        echo "<tr align="."center"." style="."font-size:15pt;"."><td><a href="."teamDetails.php?id="."$res[0]".">$res[1]</a></td><td>$res[2]</td><td>$res[3]</td></tr>";
    }
?>   
    </table>
</form>    
</body>
    
</html>