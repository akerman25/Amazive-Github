
<?php
# db configurations
include "connector.php";

# db connect
function dbConnect($close=true){
  global $link;

  if (!$close) {
    mysql_close($link);
    return true;
  }

  $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysql_error();
  if (!mysql_select_db(DB_NAME, $link))
    return false;
}

dbConnect();
$query = mysql_query(
  'SELECT id, magazine_header, content, author, date, image 
  FROM articles
  ORDER BY date DESC
  LIMIT 0 , 15');
?>

<?php
while($row = mysql_fetch_array($query)) {

echo'

<div class="article-container">
            <div class="article-image">
                <img src="http://static.feber.se/article_images/38/18/16/381816_1280.jpg">
            </div>
            <div class="article-content">
                <h2 style="text-transform: uppercase;">'.$row['magazine_header'].'</h2>';
                echo nl2br ('<p>'.$row['content'].'</p>');
            echo '</div>
            <div class="article-footer">
                <h4 style="float: left; width: 50%; color: #696969;">'.$row['author'].'</h4>
                <h4 style="float: right; width: 50%; text-align: right; color: #696969;">'.$row['date'].'</h4>
            </div>
</div>



';} ?>


<!--- sät kanske ett , efter image på "select" -->