<?php

  if(isset($_POST['submit'])) {
    if (!empty($_POST['user']) and !empty($_POST['mail']) and !empty($_POST['comment'])) {
      mysql_query('insert into comments set name="'.$_POST['user'].'", 
        mail="'.$_POST['mail'].'", text="'.$_POST['comment'].'", date="'.date('Y-m-d H:i:s').'"');
    }
    
  }
  
?>