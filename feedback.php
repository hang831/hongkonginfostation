<?php
//feedback.php
//https://www.webslesson.info/2017/12/comments-system-using-php-and-ajax.html
?>
<!DOCTYPE html>
<html>
 <head>
 <title>HKIS|意見反饋</title>
  <!-- front awesome icon-->
  <script src="https://kit.fontawesome.com/a22de04b14.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io//site.webmanifest">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sidebar.css">
    <script src="js/sidebar.js"></script>
 </head>
 <body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>HKIS|意見反饋</h3>
        </div>

        <ul class="list-unstyled components">
            <p>香港資訊站 <br>Hong Kong Info Station</p> 
            
            <li>
              
              
              <a href="index.php"><i class="fa-solid fa-house"></i> 主頁</a>
          </li>
            <li>
                <a href="traffic.html"><i class="fa-solid fa-car-side"></i> 交通狀況</a>
            </li>
            
            <li>
              <a href="train.html"><i class="fa-solid fa-train"></i> 實時港鐵列車信息</a>
            </li>
            <li>
                <a href="feedback.php"><i class="fa-solid fa-comment"></i> 意見反饋</a>
            </li>
            <li>
              <a href="disclaimers.html"><i class="fa-solid fa-info"></i> 免責聲明</a>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">


      <button type="button" id="sidebarCollapse" class="btn btn-lg btn-info">
        <i class="fa-solid fa-bars"></i>
          <span>Toggle Sidebar</span>
      </button>

  <br /><br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Please Enter Name 請輸入姓名" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Please Enter Comment 請輸入意見" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <br>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>

  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>