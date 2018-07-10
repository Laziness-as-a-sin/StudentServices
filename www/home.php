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
        <meta charset="utf-8"> 
        <link href="http://allfont.ru/allfont.css?fonts=advergothic-normal" rel="stylesheet" type="text/css" /> 
        <link href="styles.css" type="text/css" rel="stylesheet">
        <link href="styles1.css" rel="stylesheet">
    </head> 

    <body> 
        <div id = "back_top" >
            <div id = "logo" >
                <div id = "ttext1" >
                    <div id = "ttext2">                                                               
                    </div>                     
                </div>                
            </div>              
        </div>
        <div id = "fa"></div>
        <div class="main-wrap">  

            <div class="main"> 
                <h2>Home Page</h2> 

                <p><?php print"$user" ?></p> 
                <a href="logout.php">Click here to go logout</a><br/><br/> 
                <form action="add.php" method="POST"> 
                    Text: <textarea cols="40" rows="7" wrap="off" name="details"></textarea> <br/> 
                    Theme: <input type="text" name="theme" /> 
                    <select name="category" size="1"> 
                        <option selected value="Studying">Studying 
                        <option value="Prepare">Prepare 
                        <option value="Writing">Writing 
                    </select><br><br> 
                    <input type="submit" value="Add to ads"/> <br/> 
                </form> 
                <h2 align="center">My list</h2> 
                <table border="1px" width="100%"> 
                    <tr> 
                        <td>Details</td> 
                        <td>Theme</td> 
                    </tr> 
                    <?php
                    mysql_connect("localhost", "root", "") or die(mysql_error());
                    mysql_select_db("DB") or die("Cannot connect to database");
                    $query = mysql_query("Select * from ads");
                    $countner = 0;
                    while ($row = mysql_fetch_array($query)) {
                        if ($row['name_u'] == $user) {
                            echo '<tr>';
                            echo "<th>" . $row['details'] . " ";
                            echo "<th>" . $row['theme'] . " ";
                            echo '<form action="deleteADS.php" method="POST">';
                            echo '<input type="submit" value="delete"/></br>';
                            echo '<input type="hidden" name="idishnik" value="' . $row['id1'] . '">';
                            echo '</form>';
                            echo $row['id1'];
                        }
                    }
                    ?> 
                </table> 
            </div> 

            <div class="footer">
                <a href="sindex.php"><img src="Images/ss.png"></a>
            </div> 
        </div> 

    </body> 
</html>