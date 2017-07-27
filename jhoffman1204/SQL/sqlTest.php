<?php
    date_default_timezone_set('Europe/Cophenhagen');
    include 'connectSQL.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="newStyle.css">
    
</head>
    
<body>
        
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VNbej4gPir0" frameborder="0" allowfullscreen></iframe>
    
<?php
echo "<form method='POST' action='".setComments()."'>
        <input type = 'hidden' name='uid' value='Anonymous'>
        <input type = 'hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message'></textarea></br> 
        <button type = 'submit' name = 'commentSubmit' >Comment</button>
    </form>";
?>
        
</body>
</html>