<?php

  if(isset($_POST['submit'])) {
	$_POST['user'] = htmlspecialchars('$_POST['user']);
	$_POST['mail'] = htmlspecialchars('$_POST['mail']);
	$_POST['comment'] = htmlspecialchars('$_POST['comment']);
    if (!empty($_POST['user']) and !empty($_POST['mail']) and !empty($_POST['comment'])) {
      mysql_query('insert into comments set name="'.$_POST['user'].'", 
        mail="'.$_POST['mail'].'", text="'.$_POST['comment'].'", date="'.date('Y-m-d H:i:s').'"');
    }
    
  }
  
?>
