<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="香港資訊站Hong Kong Info Station 天氣,交通狀況,實時港鐵列車信息">
    <title>HKIS|主頁</title>
      <!-- front awesome icon-->
      <script src="https://kit.fontawesome.com/a22de04b14.js" crossorigin="anonymous"></script>
       <!-- jquery-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io//site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet" href="sidebar.css">
    <script src="js/script.js"></script>
    <script src="js/sidebar.js"></script>

    
</head>
<body>
  
  <div id="preloader" class="bg"><span>HONGKONG</span></div>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>HKIS|主頁</h3>
        </div>

        <ul class="list-unstyled components">
            <p>香港資訊站 <br>Hong Kong Info Station</p> 
            
            <li>
              
              
              <a href="index.php"><i class="fa-solid fa-house"></i> 主頁</a>
          </li>
            <li>
                <a href="traffic.php"><i class="fa-solid fa-car-side"></i> 交通狀況</a>
            </li>
            
            <li>
              <a href="train.php"><i class="fa-solid fa-train"></i> 實時港鐵列車信息</a>
            </li>
            <li>
                <a href="feedback.php"><i class="fa-solid fa-comment"></i> 意見反饋</a>
            </li>
            <li>
              <a href="disclaimers.php"><i class="fa-solid fa-info"></i> 免責聲明</a>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <!-- <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li> -->
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">


      <button type="button" id="sidebarCollapse" class="btn btn-lg btn-info">
        <i class="fa-solid fa-bars"></i>
          <span>Toggle Sidebar</span>
      </button>


        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
              <i class="fa-solid fa-bars"></i>
                <span>Toggle Sidebar</span>
            </button>
   
        </div>
        </nav> 
      -->

  
   <!-- Main part-->
    
    <div class="container hide" style="display:none">
        <div class="card card-1">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <!-- <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul> -->
              
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="row">
                        <div class="col-6">

                          <div class="weather loading">
                            <h2 class="city">Weather in Hong Kong</h2>
                            <div><h1 class="temp">數據加載失敗 Data load fail</h1></div><!--30°C-->
                            <div class="description">數據加載失敗 Data load fail</div><!--Cloudy-->
                            <br>
                            <div class="humidity">數據加載失敗 Data load fail</div><!--Humidity: 60%-->
                            <div class="wind">數據加載失敗 Data load fail</div> <!--Wind speed: 6.2 km/h-->
                            <!--//////////////Modal message box\\\\\\\\\\\\\\\\\-->

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              天氣展望
                            </button>
                            <button type="button" class="btn btn-success"><a href="index/weather.php">香港天氣觀測</a></button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">八天天氣預報 8-day Weather Forecast</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    數據加載失敗 Data load fail
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div> <!--End modal-->

                          </div>
                        </div>

                        <div class="col-6  justify-content">
                          <div id="time">時間加載失敗</div> <div id="date">日期加載失敗</div>
                          <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon img-fluid" />                         
                        </div>
                      </div>      <!-- End row-->                
                  </div>       <!-- End carousel-item active-->  
                </div>      <!-- End carousel-inner-->        
              </div>  <!-- End carousel slide-->  
        </div> <!-- End card-1-->
        
        
        <div class="card card-2">
          <div id="demo" class="carousel slide" data-ride="carousel">
            
            <!-- Indicators -->
            <!-- <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0"></li>
              <li data-target="#demo" data-slide-to="1" class="active"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul> -->
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col">
                    <div class="row row1 "> <h6 class="overtemp0"> </h6> </div>                   
                    <div class="row row2" id="description0" title="description"><img class="ForecastIcon0" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week0">weekData</div>
                    <div class="row row4 day0 fw-bold">dayData</div>
                   
                    <!--<div class="overdescription" style="color:red;">description</div> -->
                  </div>
                  <div class="col">
                    <div class="row row1"> <h6 class="overtemp1"> </h6> </div>                   
                    <div class="row row2" id="description1" title="description"><img class="ForecastIcon1" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week1">weekData</div>
                    <div class="row row4 day1 fw-bold">dayData</div>
                  </div>
                  <div class="col">
                    <div class="row row1"> <h6 class="overtemp2"> </h6> </div>                   
                    <div class="row row2" id="description2" title="description"><img class="ForecastIcon2" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week2">weekData</div>
                    <div class="row row4 day2 fw-bold">dayData</div>
                  </div>
                  <div class="col">
                    <div class="row row1"> <h6 class="overtemp3"> </h6> </div>                   
                    <div class="row row2" id="description3" title="description"><img class="ForecastIcon3" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week3">weekData</div>
                    <div class="row row4 day3 fw-bold">dayData</div>
                  </div>
                 
                </div>                 
              </div>
            </div>     
          </div>        
        </div> <!-- End card 2-->

        <div class="card card-3">
          <div id="demo" class="carousel slide" data-ride="carousel">
            
            <!-- Indicators -->
            <!-- <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0"></li>
              <li data-target="#demo" data-slide-to="1" ></li>
              <li data-target="#demo" data-slide-to="2" class="active"></li>
            </ul> -->
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col">
                    <div class="row row1"> <h6 class="overtemp4"> </h6> </div>                   
                    <div class="row row2" id="description4" title="description"><img class="ForecastIcon4" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week4">weekData</div>
                    <div class="row row4 day4 fw-bold">dayData</div>
                   
                    <!--<div class="overdescription" style="color:red;">description</div> -->
                  </div>
                  <div class="col">
                    <div class="row row1 "> <h6 class="overtemp5"> </h6> </div>                   
                    <div class="row row2" id="description5" title="description"><img class="ForecastIcon5" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week5">weekData</div>
                    <div class="row row4 day5 fw-bold">dayData</div>
                  </div>
                  <div class="col">
                    <div class="row row1 "> <h6 class="overtemp6"> </h6> </div>                   
                    <div class="row row2" id="description6" title="description"><img class="ForecastIcon6" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week6">weekData</div>
                    <div class="row row4 day6 fw-bold">dayData</div>
                  </div>
                  <div class="col">
                    <div class="row row1 "> <h6 class="overtemp7"> </h6> </div>                   
                    <div class="row row2" id="description7" title="description"><img class="ForecastIcon7" src="https://img.icons8.com/ios/100/000000/sun.png"/></div>               
                    <div class="row row3 week7">weekData</div>
                    <div class="row row4 day7 fw-bold">dayData</div>
                  </div>
                 
                </div>                 
              </div>
            </div>     
          </div>        
        </div> <!-- End card 3-->
        
                 
              </div>
            </div>          
          </div>
        </div>
    </div>


  </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/index_weather.js"></script>
</body>
</html>