<?php

$q = mysql_query('Select * from comments order by date desc');
print '<div class = "comments">';
if (!empty($q)) {
  while ($comment = mysql_fetch_array($q)) {
    
    print htmlspecialchars($comment['name']);
    print '<br/>';
    print htmlspecialchars($comment['mail']);
    print '<br/>';
    print htmlspecialchars($comment['text']);
    print '<br/>';
    print htmlspecialchars($comment['date']);
    print '<hr/>';
  }
}

print '</div>';
?>