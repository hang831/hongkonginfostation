
<?php
//https://www.webslesson.info/2017/12/comments-system-using-php-and-ajax.html
//fetch_comment.php

$connect = new PDO('mysql:host=remotemysql.com;dbname=XqIN44Xy8T', 'XqIN44Xy8T', 'ywaLsBOQhd');
//$connect = new mysqli("remotemysql.com", "XqIN44Xy8T", "ywaLsBOQhd", "XqIN44Xy8T");
$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="card border-dark">
  <div class="card-header bg-info">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="card-body">'.$row["comment"].'</div>
  <div class="card-footer bg-info" align="right"><button type="button" class="btn btn-dark reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 <br>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="card border-dark" style="margin-left:'.$marginleft.'px">
    <div class="card-header ">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="card-body">'.$row["comment"].'</div>
    <div class="card-footer " align="right"><button type="button" class="btn btn-light reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>