<?php
session_start();
if ($_SESSION['user']) {
    
} else {
    header("location: index.php");
}
$user = $_SESSION['user'];
?>

<html>
    <head>
        <title></title>
        <meta charset="utf-8">    
        <link href="styles1.css" rel="stylesheet">
    </head>
    
    <body>
        <div id = "back_top" href="sindex.php" >
            <div id = "logo" >
                <div id = "ttext1" >
                    <div id = "ttext2" >                            
                            
                            <button position = "top left"><a href="home.php"><?php echo $user ?><a></button>         
                    </div>                     
                </div>                
            </div>              
        </div>
        <div id = "fa"></div>
       
        <?php
            mysql_connect("localhost", "root", "") or die(mysql_error());
            mysql_select_db("DB") or die("Cannot connect to database");
            $query=mysql_query("Select * from ads");
            
            while ($row = mysql_fetch_array($query)) {
            
                echo '<div class="box1">';
                echo 'Category: '.$row['category'].'</br>';
                echo 'Ads: '.$row['details'].'</br>';
                echo 'User: '.$row['name_u'].'</br>';
                echo 'Time: '.$row['time_posted'].'</br>';
                echo 'Date: '.$row['date_posted'].'</br>';
                echo '</div>';
            }
        ?>
        
        <div class="footer">
            <img src="Images/ss.png">
	</div>    
    </body>
</html>