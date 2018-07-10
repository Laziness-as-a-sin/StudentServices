<html>
    <head>
        <title></title>
        <meta charset="utf-8">    
        <link href="styles1.css" rel="stylesheet">
        
    </head>
    
    <body>
        <div id = "back_top" >
            <div id = "logo" >
                <div id = "ttext1" >
                    <div id = "ttext2" >                            
                            <form action="checklogin.php" method="POST"><p align = "right">
                            <input type="text" name="username" required="required" placeholder="login"/> <br/>
                            <input type="password" name="password" required="required" placeholder="password"/> <br/>
                            <input type="submit" value="Login"/> </br>                            
                            </form>
                            <p align = "right"><a href="register.php"><input type="submit" value="Registration"/></a>         
                    </div>                     
                </div>                
            </div>              
        </div>
        <div id = "fa"></div>
        <div class="box2">gogogogog</div>
        <?php
            mysql_connect("localhost", "root", "") or die(mysql_error());
            mysql_select_db("DB") or die("Cannot connect to database");
            $query=mysql_query("Select * from ads");
            
            while ($row = mysql_fetch_array($query)) {
            
                echo '<div class="box2">';
                echo 'Category: '.$row['category'].'</br>';
                echo 'Ads: '.$row['details'].'</br>';
                echo 'User: '.$row['name_u'].'</br>';
                echo 'Time: '.$row['time_posted'].'</br>';
                echo 'Date: '.$row['date_posted']. '</br>';                
                echo '</div>';
            }
        ?>
        
        <div class="footer">
            <img src="Images/ss.png">
	</div>    
    </body>
</html>