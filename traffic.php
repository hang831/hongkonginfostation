<!-- https://mdbootstrap.com/docs/standard/extended/gallery/-->
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKIS|交通狀況</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
      

    <!-- Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/> 
    
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="traffic.css">
    <script src="js/sidebar.js"></script>   
    <script src="js/traffic.js"></script>
    

       
</head>
<body >
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>HKIS|交通狀況</h3>
            </div>
    
            <ul class="list-unstyled components ">
                <p>香港資訊站 <br>Hong Kong Info Station</p> 
                <li>
                  <a href="index.php"><i class="fa-solid fa-house"></i> 主頁</a>
              </li>
                <li >
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
                    <a href="https://github.com/hang831?tab=repositories" class="download"><i class="fa-brands fa-github"></i> Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li> -->
            </ul>
        </nav>
   
        <!-- Page Content  -->
    <div id="content" >
        <div class="container mobile_show" >
            <nav aria-label="breadcrumb"  style="background: whitesmoke; padding:10px; font-size: 25px; ">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">主頁</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#"><u>交通狀況</u></a></li>
                </ol>
              </nav>
        </div>

        <br>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>特別交通消息</strong>
            <span class="badge bg-secondary time0">Time</span>
            <p class="urgent0 p-3 mb-2 text-dark fw-bold fw-bolder">Message</p> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>特別交通消息</strong>
            <span class="badge bg-secondary time1">Time</span>
            <p class="urgent1 p-3 mb-2 text-dark fw-bold fw-bolder">Message</p> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>特別交通消息</strong>
            <span class="badge bg-secondary time2">Time</span>
            <p class="urgent2 p-3 mb-2 text-dark fw-bold fw-bolder">Message</p> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            <!--<button type="button" id="sidebarCollapse" class="btn btn-lg btn-info">
                <i class="fa-solid fa-bars"></i>
                  <span>Toggle Sidebar</span>
            </button> -->
            <br><br><div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                
                  </svg>
                  <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div class="fw-bolder">
                        交通情況快拍圖像:(每2分鐘自動更新)
                    </div>
                    <div id="carouselButtons">
                        <button id="playButton1" type="button" class="btn btn-default ">
                            <i class="fa-solid fa-play"></i>
                         </button>
                        <button id="pauseButton1" type="button" class="btn btn-default ">
                            <i class="fa-solid fa-pause"></i>
                        </button>
                    </div>
                </div>
            </div>
        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center first" data-mdb-ride="carousel" >
            
            <!-- Controls -->
            <div class="d-flex justify-content-center mb-4">
            <button
                class="carousel-control-prev position-relative"
                type="button"
                data-mdb-target="#carouselMultiItemExample"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>          
            <button
                class="carousel-control-next position-relative"
                type="button"
                data-mdb-target="#carouselMultiItemExample"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner py-4" > 
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4" >
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/K107F.JPG"  />
                     
                        <div class="card-body">
                        <h5 class="card-title">紅磡海底隧道九龍入口</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p>
                        <a href="https://tdcctv.data.one.gov.hk/H207F.JPG" target="_blank" class="btn btn-primary">紅磡海底隧道香港入口</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 ">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/K952F.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">東區海底隧道九龍入口</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p>
                        <a href="https://tdcctv.data.one.gov.hk/H702F.JPG" target="_blank" class="btn btn-primary">東區走廊近東區海底隧道 - 西行</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 ">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/K901F.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">西區海底隧道九龍入口</h5>
                        <p class="card-text">
                            車速限制80km/h（正常時段）
                        </p>
                        <a href="https://tdcctv.data.one.gov.hk/H702F.JPG" target="_blank" class="btn btn-primary">西區海底隧道香港入口</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/AID01124.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">獅子山隧道公路近收費廣場 - 北行</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p> 
                        <a href="https://tdcctv.data.one.gov.hk/AID01126.JPG" target="_blank" class="btn btn-primary">獅子山隧道公路近隔田村 - 北行 (1)</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID01127.JPG" target="_blank" class="btn btn-primary">獅子山隧道公路近隔田村 - 北行 (2)</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID01123.JPG" target="_blank" class="btn btn-primary">獅子山隧道公路近九龍入口 - 北行</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID01125.JPG" target="_blank" class="btn btn-primary">獅子山隧道公路近世界花園 - 北行</a>        
                        <a href="https://tdcctv.data.one.gov.hk/AID01128.JPG" target="_blank" class="btn btn-primary">獅子山隧道公路近豐盛苑 - 北行</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 ">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/AID02118.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">大老山隧道近收費廣場 - 北行</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p>
                        <a href="https://tdcctv.data.one.gov.hk/ST942F.JPG" target="_blank" class="btn btn-success">大老山隧道沙田入口</a>
                        <a href="https://tdcctv.data.one.gov.hk/K931F.JPG" target="_blank" class="btn btn-success">大老山隧道九龍入口</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 ">
                    <div class="card"> 
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/TK904F.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">將軍澳隧道將軍澳入口</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p>
                        <a href="https://tdcctv.data.one.gov.hk/AID07104.JPG" target="_blank" class="btn btn-danger">將軍澳隧道公路近將軍澳隧道入口 - 西行</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID07103.JPG" target="_blank" class="btn btn-danger">將軍澳隧道公路近將軍澳電話機房 - 西行</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID07229.JPG" target="_blank" class="btn btn-danger">將軍澳隧道公路近將軍澳隧道入口 - 東行</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID07230.JPG" target="_blank" class="btn btn-danger">將軍澳隧道公路近寶康公園 - 東行</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID07231.JPG" target="_blank" class="btn btn-danger">環保大道近將軍澳隧道公路 - 東行</a>
                        
                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/H210F.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">香港仔隧道灣仔入口</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p>
                        
                        <a href="https://tdcctv.data.one.gov.hk/H421F.JPG" target="_blank" class="btn btn-primary">香港仔隧道香港仔入口</a>
                        <a href="https://tdcctv.data.one.gov.hk/H401F.JPG" target="_blank" class="btn btn-primary">黃竹坑道近香港仔隧道</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID01107.JPG" target="_blank" class="btn btn-primary">香港仔隧道近黃竹坑醫院 - 東行</a>
                        <a href="https://tdcctv.data.one.gov.hk/AID01217.JPG" target="_blank" class="btn btn-primary">香港仔隧道近收費廣場 - 西行</a>
                        
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/CW103F.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">中環及灣仔繞道中環入口</h5>
                        <p class="card-text">
                            車速限制80km/h（正常時段）
                        </p>
                        <a href="https://tdcctv.data.one.gov.hk/CW803F.JPG" target="_blank" class="btn btn-dark">中環及灣仔繞道城市花園入口</a>
                        
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0 ">
                    <div class="card">
                        <img class="card-img-top"  src="https://tdcctv.data.one.gov.hk/K404F.JPG"   />
                        <div class="card-body">
                        <h5 class="card-title">啟德隧道九龍城入口</h5>
                        <p class="card-text">
                            車速限制70km/h（正常時段）
                        </p>                       
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- Inner -->

<!-------------- ///////////////////////////////////////////////////Second card\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\---------------->

            <br><br><div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                
                  </svg>
                  <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div class="fw-bolder">
                        行車速度屏圖像(每5分鐘自動更新): <span style="color:red">紅色</span>代表交通擠塞，行車十分緩慢，<span style="color:yellow">黃色</span>代表行車較緩慢，而<span style="color:green">綠色</span>代表交通暢順，行車速度正常。
                    </div>
                    <div id="carouselButtons">
                        <button id="playButton2" type="button" class="btn btn-default btn-xs">
                            <i class="fa-solid fa-play"></i>
                         </button>
                        <button id="pauseButton2" type="button" class="btn btn-default btn-xs">
                            <i class="fa-solid fa-pause"></i>
                        </button>
                    </div>
                </div>
            </div>
        <div class="container ">
             <!-- Carousel wrapper -->
            <div id="carouselMultiItemExample2" class="carousel slide carousel-dark text-center second" data-mdb-ride="carousel">
                
                <!-- Controls -->
                <div class="d-flex justify-content-center mb-4">
                    <button
                        class="carousel-control-prev position-relative"
                        type="button"
                        data-mdb-target="#carouselMultiItemExample2"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next position-relative"
                        type="button"
                        data-mdb-target="#carouselMultiItemExample2"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
                
                <!-- Inner -->       
                <div class="carousel-inner py-4" >
                        
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <div class="container" >                                
                                <div class="row">
                                    <div class="col-lg-4" >
                                        <div class="card">
                                            <img class="card-img-top"  src="https://resource.data.one.gov.hk/td/jss/sj1.tc.png"  />
                         
                                            <div class="card-body">
                                            <h5 class="card-title">大埔道沙田段南行近馬場</h5>
                                            <p class="card-text">
                                                位於大埔道沙田段南行近馬場的行車速度屏的圖像，顯示主要幹道的行車狀況及平均行車時間。
                                            </p>
                                            
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <img class="card-img-top"  src="https://resource.data.one.gov.hk/td/jss/sj2.tc.png"   />
                                            <div class="card-body">
                                            <h5 class="card-title">大老山隧道南行近石門</h5>
                                            <p class="card-text">
                                                位於大老山隧道南行近石門的行車速度屏的圖像，顯示主要幹道的行車狀況及平均行車時間。
                                            </p>
                                            
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <img class="card-img-top"  src="https://resource.data.one.gov.hk/td/jss/sj3.tc.png"   />
                                            <div class="card-body">
                                            <h5 class="card-title">吐露港公路南行近科學園</h5>
                                            <p class="card-text">
                                                位於吐露港公路南行近科學園的行車速度屏的圖像，顯示主要幹道的行車狀況及平均行車時間。
                                            </p>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!--first  item-->
                        
                        <!-- Single item -->
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="card">
                                        <img class="card-img-top"  src="https://resource.data.one.gov.hk/td/jss/sj4.tc.png"   />
                                        <div class="card-body">
                                        <h5 class="card-title">新田公路南行近錦繡花園往機場</h5>
                                        <p class="card-text">
                                            位於新田公路南行近錦繡花園的行車速度屏的圖像，顯示主要幹道的行車狀況及平均行車時間。
                                        </p> 
                                      
                                        </div>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-4 ">
                                        <div class="card">
                                            <img class="card-img-top"  src="https://resource.data.one.gov.hk/td/jss/sj5.tc.png"   />
                                            <div class="card-body">
                                            <h5 class="card-title">屯門公路南行近屯門新墟</h5>
                                            <p class="card-text">
                                                位於屯門公路南行近屯門新墟的行車速度屏的圖像，顯示主要幹道的行車狀況及平均行車時間。
                                            </p>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  <!--second  item-->             
                </div>
                <!-- Inner -->
                  
            

            </div>
        </div> 
<!-- Carousel wrapper -->



</div></div>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>