<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKIS|香港天氣觀測</title>
      <!-- front awesome icon-->
      <script src="https://kit.fontawesome.com/a22de04b14.js" crossorigin="anonymous"></script>
       <!-- jquery-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io//site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../sidebar.css">
    <link rel="stylesheet" href="weather.css">
    <script src="../js/sidebar.js"></script>
   <!-- <script src="http://code.jquery.com/jquery-1.11.0.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-rss/3.3.0/jquery.rss.min.js"></script>
    <script src="../js/weather.js"></script>
    
</head>
<body>
  
 
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>HKIS|香港天氣觀測</h3>
        </div>

        <ul class="list-unstyled components">
            <p>香港資訊站 <br>Hong Kong Info Station</p>             
            <li>
                        
              <a href="../index.php"><i class="fa-solid fa-house"></i> 主頁</a>
          </li>
            <li>
                <a href="../traffic.php"><i class="fa-solid fa-car-side"></i> 交通狀況</a>
            </li>
            
            <li>
              <a href="../train.php"><i class="fa-solid fa-train"></i> 實時港鐵列車信息</a>
            </li>
            <li>
                <a href="../feedback.php"><i class="fa-solid fa-comment"></i> 意見反饋</a>
            </li>
            <li>
              <a href="../disclaimers.php"><i class="fa-solid fa-info"></i> 免責聲明</a>
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
      <br><br>

      <div >
      <img  class="img-fluid float-start rounded mx-auto d-block" src="https://www.hko.gov.hk/wxinfo/ts/temp/tempchk.png" BORDER="0" >
      <img  class="img-fluid  rounded mx-auto d-block" src="https://www.hko.gov.hk/wxinfo/ts/windchk.png" BORDER="0" >
    </div>
      <br><br>
      <h1><span class="badge bg-secondary nowalert">現時生效警告</span></h1>
      <div id="rss-feeds"></div>
      <br><br>
      
      <h1><span class="badge bg-secondary">香港分區實時天氣照片</span></h1>
      <div class="flex">       
        <div>
          <h3>大埔滘(望東北)</h3>
          <a href="https://www.weather.gov.hk/tc/wxinfo/ts/webcam/TPK_photo.htm"><img src="https://www.weather.gov.hk/wxinfo/aws/hko_mica/tpk/latest_TPK.jpg" BORDER="0" width="100%"></a>
        </div>
        <div>
          <h3>環球貿易廣場(望西南)</h3>
          <a href="https://www.weather.gov.hk/tc/wxinfo/ts/webcam/IC2_photo.htm"><img src="https://www.weather.gov.hk/wxinfo/aws/hko_mica/ic2/latest_IC2.jpg" BORDER="0" width="100%"></a>
        </div>
        <div>
          <h3>中環(東望的維多利亞港)</h3>
          <a href="https://www.weather.gov.hk/tc/wxinfo/ts/webcam/CP1_photo.htm"><img src="https://www.weather.gov.hk/wxinfo/aws/hko_mica/cp1/latest_CP1.jpg" BORDER="0" width="100%"></a>
        </div>
        <div>         
          <h3>橫瀾島(望西北偏北)</h3>
          <a href="https://www.weather.gov.hk/tc/wxinfo/ts/webcam/WL2_photo.htm"><img src="https://www.weather.gov.hk/wxinfo/aws/hko_mica/wl2/latest_WL2.jpg" BORDER="0" width="100%"></a>      
          </div>
      </div>
      <div class="d-grid gap-2">
      <button type="button" class="btn btn-primary position-relative" disabled>
        在香港東南端的橫瀾島是颱風預警前哨站，較本港大部分地區能以更早時間錄得颶風風力。
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
          <span class="visually-hidden">New alerts</span>
        </span>
      </button>
    </div>

      <br>
      <h1><span class="badge bg-secondary">天氣監測</span></h1>
      <div class="plotly-charts">        
            <div class="charts box1">
              <h3>風場分佈</h3>
              <iframe frameborder="0" scrolling="no" src="https://embed.windy.com/embed2.html?lat=22.08&lon=113.49&zoom=5&level=surface&overlay=wind&menu=true&message=&marker=&forecast=12&calendar=now&location=coordinates&type=map&actualGrid=&metricWind=km%2Fh&metricTemp=%C2%B0C"></iframe>
            </div>
            <div class="charts box2">
              <h3>天氣雷達圖像 (256 公里)</h3>
              <a href="https://www.weather.gov.hk/tc/wxinfo/radars/radar256n.htm?pv_mode=playback"><img src="https://pda.weather.gov.hk/radar/rad_256_320/rad256_6.jpg" BORDER="0" width="100%"></a>
              
            </div>
            <img src="../img/radar_ref.png" BORDER="0" width="100%">
            <br>
            <div class="charts box3">
              <h3>衛星雲圖</h3>
              <a href="https://www.cwb.gov.tw/V8/C/W/OBS_Sat.html?Area=1"><img src="https://www.cwb.gov.tw/Data/satellite/LCC_IR1_CR_1000/LCC_IR1_CR_1000.jpg" BORDER="0" width="100%"></a>
            </div>     
        </div>
        <h3>熱帶氣旋路徑圖</h3>
            <a href="https://www.hko.gov.hk/tc/wxinfo/currwx/tc_fixarea.htm?tcid=2206"><img class="img-fluid" src="https://www.hko.gov.hk/wxinfo/currwx/nwp_2206.png" BORDER="0" width=auto></a>
            <a href="https://www.hko.gov.hk/tc/wxinfo/currwx/tc_fixarea.htm?tcid=2206"><img class="img-fluid" src="https://www.hko.gov.hk/wxinfo/currwx/zoom_2206.png" BORDER="0" width=auto></a>
                
  </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>