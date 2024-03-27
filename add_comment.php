
<?php
//https://www.webslesson.info/2017/12/comments-system-using-php-and-ajax.html
//add_comment.php
$connect = new PDO('mysql:host=sql112.infinityfree.com;dbname=if0_36245822_comment', 'if0_36245822', 'GC3ZMs9Wfxh');
//$connect = new mysqli("remotemysql.com", "XqIN44Xy8T", "ywaLsBOQhd", "XqIN44Xy8T");
$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<div class="alert alert-danger" role="alert">Name is required</div>';
}
else if($_POST["comment_name"] =='Admin')
{
    $error .= '<div class="alert alert-danger" role="alert">Please use other name. You cannot use [Admin]</div>';
}
else{
    $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<div class="alert alert-danger" role="alert">Comment is required</div>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
