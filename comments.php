<?php

$q = mysql_query('Select * from comments order by date desc');
print '<div class = "comments">';
if (!empty($q)) {
  while ($comment = mysql_fetch_array($q)) {
    
    print $comment['name'];
    print '<br/>';
    print $comment['mail'];
    print '<br/>';
    print $comment['text'];
    print '<br/>';
    print $comment['date'];
    print '<hr/>';
  }
}

print '</div>';
?>