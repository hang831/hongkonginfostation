<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HKIS|實時港鐵列車信息</title>
      <!-- front awesome icon-->
      <script src="https://kit.fontawesome.com/a22de04b14.js" crossorigin="anonymous"></script>
       <!-- jquery-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io//site.webmanifest">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="sidebar.css">
    <script  src="js/train_data_box_none.js"></script> 
    <script  src="js/train_data_box_AEL.js"></script>
    <script  src="js/train_data_box_TCL.js"></script>
    <script  src="js/train_data_box_TKL.js"></script>
    <script  src="js/train_data_box_TML.js"></script>
    <script  src="js/train_data_box_EAL.js"></script>
    <script  src="js/sidebar.js"></script>

    
</head>
<body>
  
  
  <div class="wrapper" >
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>HKIS|實時港鐵列車信息</h3>
        </div>

        <ul class="list-unstyled components">
            <p>香港資訊站 <br>Hong Kong Info Station</p> 
            
            <li>
              <a  href="index.php"><i class="fa-solid fa-house"></i> 主頁</a>
          </li>
            <li>
                <a  href="traffic.php"><i class="fa-solid fa-car-side"></i> 交通狀況</a>
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
   <br> <br> 
    <select id="select" class="form-select" aria-label="Default select example">
    <option value="nothing" selected>Open this select menu 選擇路線</option>
    <option style="background:#00888A" value="AEL"  class="font-weight-bold text-white ">機場快綫(由香港站往博覽館站)</option>
    <option style="background:#00888A" value="AEL2" class="font-weight-bold text-white ">機場快綫(由博覽館站往香港站)</option>
    <option style="background:#F7943E" value="TCL"  class="font-weight-bold text-white ">東涌綫(由香港站往東涌站)</option>
    <option style="background:#F7943E" value="TCL2" class="font-weight-bold text-white ">東涌綫(由東涌站往香港站)</option>
    <option style="background:#923011" value="TML"  class="font-weight-bold text-white ">屯馬綫(由烏溪沙站往屯門站)</option>
    <option style="background:#923011" value="TML2" class="font-weight-bold text-white ">屯馬綫(由屯門站往烏溪沙站)</option>
    <option style="background:#7D499D" value="TKL"  class="font-weight-bold text-white ">將軍澳綫(由北角站往寶琳站)</option>
    <option style="background:#7D499D" value="TKL2" class="font-weight-bold text-white ">將軍澳綫(由寶琳站往北角站)</option>
    <option style="background:#7D499D" value="TKL3" class="font-weight-bold text-white ">將軍澳綫(由調景嶺站往康城站)</option>
    <option style="background:#7D499D" value="TKL4" class="font-weight-bold text-white ">將軍澳綫(由康城站往調景嶺站)</option>
    <option style="background:#53B7E8" value="EAL"  class="font-weight-bold text-white">東鐵綫(由金鐘站往羅湖站)</option>
    <option style="background:#53B7E8" value="EAL2"  class="font-weight-bold text-white">東鐵綫(由羅湖站往金鐘站)</option>
    <option style="background:#53B7E8" value="EAL3"  class="font-weight-bold text-white">東鐵綫(由金鐘站往落馬洲站)</option>  
    <option style="background:#53B7E8" value="EAL4"  class="font-weight-bold text-white">東鐵綫(由落馬洲站往金鐘站)</option>
    </select>

    <br><br>
        <div>
        <!--AEL-->
        <div class='container AEL_UP' style="display:none">
          <div class='accordion-flush' id='accordionExample' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne' >
                  <button id ='HOK'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                    1.香港
                  </button>
                </h2>
                <div id='collapseOne' class='accordion-collapse collapse' aria-labelledby='headingOne' data-bs-parent='#accordionExample'>
                  <div class='accordion-body AELcontent0'>
                    No record Found
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo'>
                  <button id ='KOW' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>
                    2.九龍
                  </button>
                </h2>
                <div id='collapseTwo' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'>
                  <div class='accordion-body AELcontent1'>
                    No record Found
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree'>
                  <button id ='TSY'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>
                    3.青衣
                  </button>
                </h2>
                <div id='collapseThree' class='accordion-collapse collapse' aria-labelledby='headingThree' data-bs-parent='#accordionExample'>
                  <div class='accordion-body AELcontent2'>
                    No record Found
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour'>
                  <button id ='AIR' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='false' aria-controls='collapseFour'>
                    4.機場
                  </button>
                </h2>
                <div id='collapseFour' class='accordion-collapse collapse' aria-labelledby='headingFour' data-bs-parent='#accordionExample'>
                  <div class='accordion-body AELcontent3'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive'>
                  <button id ='AWE' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive' aria-expanded='false' aria-controls='collapseFive'>
                    5.亞洲國際博覽館
                  </button>
                </h2>
                <div id='collapseFive' class='accordion-collapse collapse' aria-labelledby='headingFive' data-bs-parent='#accordionExample'>
                  <div class='accordion-body AELcontent4'>
                    尾站
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--AEL2-->
        <div class='container AEL_DOWN' style="display:none">
            <div class='accordion-flush' id='accordionExample2' >
                <div class='accordion-item' >
                  <h2 class='accordion-header' id='headingOne2' >
                    <button id ='AWE2'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne2' aria-expanded='true' aria-controls='collapseOne2'>
                      1.亞洲國際博覽館
                    </button>
                  </h2>
                  <div id='collapseOne2' class='accordion-collapse collapse' aria-labelledby='headingOne2' data-bs-parent='#accordionExample2'>
                    <div class='accordion-body AEL2content0'>
                      No record Found
                    </div>
                  </div>
                </div>
                <div class='accordion-item'>
                  <h2 class='accordion-header' id='headingTwo2'>
                    <button id ='AIR2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo2' aria-expanded='false' aria-controls='collapseTwo2'>
                      2.機場
                    </button>
                  </h2>
                  <div id='collapseTwo2' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample2'>
                    <div class='accordion-body AEL2content1'>
                      No record Found
                    </div>
                  </div>
                </div>
                <div class='accordion-item'>
                  <h2 class='accordion-header' id='headingThree2'>
                    <button id ='TSY2'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree2' aria-expanded='false' aria-controls='collapseThree2'>
                      3.青衣
                    </button>
                  </h2>
                  <div id='collapseThree2' class='accordion-collapse collapse' aria-labelledby='headingThree2' data-bs-parent='#accordionExample2'>
                    <div class='accordion-body AEL2content2'>
                      No record Found
                    </div>
                  </div>
                </div>
         <div class='accordion-item'>
                  <h2 class='accordion-header' id='headingFour2'>
                    <button id ='KOW2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour2' aria-expanded='false' aria-controls='collapseFour2'>
                      4.九龍
                    </button>
                  </h2>
                  <div id='collapseFour2' class='accordion-collapse collapse' aria-labelledby='headingFour2' data-bs-parent='#accordionExample2'>
                    <div class='accordion-body AEL2content3'>
                        No record Found.
                    </div>
                  </div>
                </div>
         <div class='accordion-item'>
                  <h2 class='accordion-header' id='headingFive2'>
                    <button id ='HOK2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive2' aria-expanded='false' aria-controls='collapseFive2'>
                      5.香港
                    </button>
                  </h2>
                  <div id='collapseFive2' class='accordion-collapse collapse' aria-labelledby='headingFive2' data-bs-parent='#accordionExample2'>
                    <div class='accordion-body AEL2content4'>
                      尾站
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <!--TCL-->
        <div class='container TCL_UP' style="display:none">
          <div class='accordion-flush' id='accordionExample3' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne3' >
                  <button id ='HOK1_TCL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne3' aria-expanded='true' aria-controls='collapseOne3'>
                    1.香港
                  </button>
                </h2>
                <div id='collapseOne3' class='accordion-collapse collapse' aria-labelledby='headingOne3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo3'>
                  <button id ='KOW1_TCL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo3' aria-expanded='false' aria-controls='collapseTwo3'>
                    2.九龍
                  </button>
                </h2>
                <div id='collapseTwo3' class='accordion-collapse collapse' aria-labelledby='headingTwo3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree3'>
                  <button id ='OLY'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree3' aria-expanded='false' aria-controls='collapseThree3'>
                    3.奧運
                  </button>
                </h2>
                <div id='collapseThree3' class='accordion-collapse collapse' aria-labelledby='headingThree3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour3'>
                  <button id ='NAC' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour3' aria-expanded='false' aria-controls='collapseFour3'>
                    4.南昌
                  </button>
                </h2>
                <div id='collapseFour3' class='accordion-collapse collapse' aria-labelledby='headingFour3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive3'>
                  <button id ='LAK' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive3' aria-expanded='false' aria-controls='collapseFive3'>
                    5.荔景
                  </button>
                </h2>
                <div id='collapseFive3' class='accordion-collapse collapse' aria-labelledby='headingFive3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix3'>
                  <button id ='TSY1_TCL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix3' aria-expanded='false' aria-controls='collapseSix3'>
                    6.青衣
                  </button>
                </h2>
                <div id='collapseSix3' class='accordion-collapse collapse' aria-labelledby='headingSix3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven3'>
                  <button id ='SUN' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven3' aria-expanded='false' aria-controls='collapseSeven3'>
                    7.欣澳
                  </button>
                </h2>
                <div id='collapseSeven3' class='accordion-collapse collapse' aria-labelledby='headingSeven3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent6'>
                    No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEight3'>
                  <button id ='TUC' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight3' aria-expanded='false' aria-controls='collapseEight3'>
                    8.東涌
                  </button>
                </h2>
                <div id='collapseEight3' class='accordion-collapse collapse' aria-labelledby='headingEight3' data-bs-parent='#accordionExample3'>
                  <div class='accordion-body TCLcontent7'>
                    尾站
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--TCL2-->
        <div class='container TCL_DOWN' style="display:none">
          <div class='accordion-flush' id='accordionExample4' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne4' >
                  <button id ='TUC2'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne4' aria-expanded='true' aria-controls='collapseOne4'>
                    1.東涌
                  </button>
                </h2>
                <div id='collapseOne4' class='accordion-collapse collapse' aria-labelledby='headingOne4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo4'>
                  <button id ='SUN2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo4' aria-expanded='false' aria-controls='collapseTwo4'>
                    2.欣澳
                  </button>
                </h2>
                <div id='collapseTwo4' class='accordion-collapse collapse' aria-labelledby='headingTwo4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree4'>
                  <button id ='TSY2_TCL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree4' aria-expanded='false' aria-controls='collapseThree4'>
                    3.青衣
                  </button>
                </h2>
                <div id='collapseThree4' class='accordion-collapse collapse' aria-labelledby='headingThree4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content2'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour4'>
                  <button id ='LAK2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour4' aria-expanded='false' aria-controls='collapseFour4'>
                    4.荔景
                  </button>
                </h2>
                <div id='collapseFour4' class='accordion-collapse collapse' aria-labelledby='headingFour4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content3'>
                      No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive4'>
                  <button id ='NAC2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive4' aria-expanded='false' aria-controls='collapseFive4'>
                    5.南昌
                  </button>
                </h2>
                <div id='collapseFive4' class='accordion-collapse collapse' aria-labelledby='headingFive4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix4'>
                  <button id ='OLY2' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix4' aria-expanded='false' aria-controls='collapseSix4'>
                    6.奧運
                  </button>
                </h2>
                <div id='collapseSix4' class='accordion-collapse collapse' aria-labelledby='headingSix4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven4'>
                  <button id ='KOW2_TCL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven4' aria-expanded='false' aria-controls='collapseSeven4'>
                    7.九龍
                  </button>
                </h2>
                <div id='collapseSeven4' class='accordion-collapse collapse' aria-labelledby='headingSeven4' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content6'>
                    No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEight4'>
                  <button id ='HOK2_TCL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight4' aria-expanded='false' aria-controls='collapseEight4'>
                    8.香港
                  </button>
                </h2>
                <div id='collapseEight4' class='accordion-collapse collapse' aria-labelledby='headingEight3' data-bs-parent='#accordionExample4'>
                  <div class='accordion-body TCL2content7'>
                    尾站
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--TML-->
        <div class='container TML_UP' style="display:none" > 
          <div class='accordion-flush open' id='accordionExample5' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne5' >
                  <button id ='WKS_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne5' aria-expanded='true' aria-controls='collapseOne5'>
                    1.烏溪沙
                  </button>
                </h2>
                <div id='collapseOne5' class='accordion-collapse collapse' aria-labelledby='headingOne5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo5'>
                  <button id ='MOS_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo5' aria-expanded='false' aria-controls='collapseTwo5'>
                    2.馬鞍山
                  </button>
                </h2>
                <div id='collapseTwo5' class='accordion-collapse collapse' aria-labelledby='headingTwo5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree5'>
                  <button id ='HEO_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree5' aria-expanded='false' aria-controls='collapseThree5'>
                    3.恆安
                  </button>
                </h2>
                <div id='collapseThree5' class='accordion-collapse collapse' aria-labelledby='headingThree5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour5'>
                  <button id ='TSH_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour5' aria-expanded='false' aria-controls='collapseFour5'>
                    4.大水坑
                  </button>
                </h2>
                <div id='collapseFour5' class='accordion-collapse collapse' aria-labelledby='headingFour5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive5'>
                  <button id ='SHM_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive5' aria-expanded='false' aria-controls='collapseFive5'>
                    5.石門
                  </button>
                </h2>
                <div id='collapseFive5' class='accordion-collapse collapse' aria-labelledby='headingFive5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix5'>
                  <button id ='CIO_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix5' aria-expanded='false' aria-controls='collapseSix5'>
                    6.第一城
                  </button>
                </h2>
                <div id='collapseSix5' class='accordion-collapse collapse' aria-labelledby='headingSix5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven5'>
                  <button id ='STW_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven5' aria-expanded='false' aria-controls='collapseSeven5'>
                    7.沙田圍	
                  </button>
                </h2>
                <div id='collapseSeven5' class='accordion-collapse collapse' aria-labelledby='headingSeven5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent6'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingEight5' >
                  <button id ='CKT_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight5' aria-expanded='true' aria-controls='collapseEight5'>
                    8.車公廟
                  </button>
                </h2>
                <div id='collapseEight5' class='accordion-collapse collapse' aria-labelledby='headingEight5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent7'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNine5'>
                  <button id ='TAW_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNine5' aria-expanded='false' aria-controls='collapseNine5'>
                    9.大圍
                  </button>
                </h2>
                <div id='collapseNine5' class='accordion-collapse collapse' aria-labelledby='headingNine5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent8'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTen5'>
                  <button id ='HIK_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTen5' aria-expanded='false' aria-controls='collapseTen5'>
                    10.顯徑
                  </button>
                </h2>
                <div id='collapseTen5' class='accordion-collapse collapse' aria-labelledby='headingTen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent9'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEleven5'>
                  <button id ='DIH_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEleven5' aria-expanded='false' aria-controls='collapseEleven5'>
                    11.鑽石山
                  </button>
                </h2>
                <div id='collapseEleven5' class='accordion-collapse collapse' aria-labelledby='headingEleven5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent10'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwelve5'>
                  <button id ='KAT_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwelve5' aria-expanded='false' aria-controls='collapseTwelve5'>
                    12.啟德
                  </button>
                </h2>
                <div id='collapseTwelve5' class='accordion-collapse collapse' aria-labelledby='headingTwelve5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent11'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThirteen5'>
                  <button id ='SUW_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThirteen5' aria-expanded='false' aria-controls='collapseThirteen5'>
                    13.宋皇臺
                  </button>
                </h2>
                <div id='collapseThirteen5' class='accordion-collapse collapse' aria-labelledby='headingThirteen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent12'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFourteen5'>
                  <button id ='TKW_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFourteen5' aria-expanded='false' aria-controls='collapseFourteen5'>
                    14.土瓜灣
                  </button>
                </h2>
                <div id='collapseFourteen5' class='accordion-collapse collapse' aria-labelledby='headingFourteen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent13'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFifteen5'>
                  <button id ='HOM_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFifteen5' aria-expanded='false' aria-controls='collapseFifteen5'>
                    15.何文田
                  </button>
                </h2>
                <div id='collapseFifteen5' class='accordion-collapse collapse' aria-labelledby='headingFifteen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent14'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSixteen5'>
                  <button id ='HUM_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSixteen5' aria-expanded='false' aria-controls='collapseSixteen5'>
                    16.紅磡
                  </button>
                </h2>
                <div id='collapseSixteen5' class='accordion-collapse collapse' aria-labelledby='headingSixteen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent15'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeventeen5'>
                  <button id ='ETS_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeventeen5' aria-expanded='false' aria-controls='collapseSeventeen5'>
                    17.尖東
                  </button>
                </h2>
                <div id='collapseSeventeen5' class='accordion-collapse collapse' aria-labelledby='headingSeventeen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent16'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEighteen5'>
                  <button id ='AUS_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEighteen5' aria-expanded='false' aria-controls='collapseEighteen5'>
                    18.柯士甸
                  </button>
                </h2>
                <div id='collapseEighteen5' class='accordion-collapse collapse' aria-labelledby='headingEighteen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent17'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNineteen5'>
                  <button id ='NAC_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNineteen5' aria-expanded='false' aria-controls='collapseNineteen5'>
                    19.南昌
                  </button>
                </h2>
                <div id='collapseNineteen5' class='accordion-collapse collapse' aria-labelledby='headingNineteen5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent18'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty5'>
                  <button id ='MEF_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty5' aria-expanded='false' aria-controls='collapseTwenty5'>
                    20.美孚
                  </button>
                </h2>
                <div id='collapseTwenty5' class='accordion-collapse collapse' aria-labelledby='headingTwenty5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent19'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingTwenty_one5' >
                  <button id ='TWW_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_one5' aria-expanded='true' aria-controls='collapseTwenty_one5'>
                    21.荃灣西
                  </button>
                </h2>
                <div id='collapseTwenty_one5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_one5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent20'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_two5'>
                  <button id ='KSR_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_two5' aria-expanded='false' aria-controls='collapseTwenty_two5'>
                    22.錦上路
                  </button>
                </h2>
                <div id='collapseTwenty_two5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_two5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent21'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_three5'>
                  <button id ='YUL_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_three5' aria-expanded='false' aria-controls='collapseTwenty_three5'>
                    23.元朗
                  </button>
                </h2>
                <div id='collapseTwenty_three5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_three5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent22'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_four5'>
                  <button id ='LOP_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_four5' aria-expanded='false' aria-controls='collapseTwenty_four5'>
                    24.朗屏
                  </button>
                </h2>
                <div id='collapseTwenty_four5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_four5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent23'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_five5'>
                  <button id ='TIS_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_five5' aria-expanded='false' aria-controls='collapseTwenty_five5'>
                    25.天水圍
                  </button>
                </h2>
                <div id='collapseTwenty_five5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_five5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent24'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_six5'>
                  <button id ='SIH_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_six5' aria-expanded='false' aria-controls='collapseTwenty_six5'>
                    26.兆康
                  </button>
                </h2>
                <div id='collapseTwenty_six5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_six5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent25'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_seven5'>
                  <button id ='TUM_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_seven5' aria-expanded='false' aria-controls='collapseTwenty_seven5'>
                    27.屯門
                  </button>
                </h2>
                <div id='collapseTwenty_seven5' class='accordion-collapse collapse' aria-labelledby='headingTwenty_seven5' data-bs-parent='#accordionExample5'>
                  <div class='accordion-body TMLcontent26'>
                    尾站
                  </div>
                </div>
              </div>

       



            </div>
          </div>    
        <!--TML2-->
        <div class='container TML_DOWN' style="display:none" > 
          <div class='accordion-flush open' id='accordionExample6' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne6' >
                  <button id ='TUM2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne6' aria-expanded='true' aria-controls='collapseOne6'>
                    1.屯門
                  </button>
                </h2>
                <div id='collapseOne6' class='accordion-collapse collapse' aria-labelledby='headingOne6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo6'>
                  <button id ='SIH2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo6' aria-expanded='false' aria-controls='collapseTwo6'>
                    2.兆康
                  </button>
                </h2>
                <div id='collapseTwo6' class='accordion-collapse collapse' aria-labelledby='headingTwo6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree6'>
                  <button id ='TIS2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree6' aria-expanded='false' aria-controls='collapseThree6'>
                    3.天水圍
                  </button>
                </h2>
                <div id='collapseThree6' class='accordion-collapse collapse' aria-labelledby='headingThree6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour6'>
                  <button id ='LOP2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour6' aria-expanded='false' aria-controls='collapseFour6'>
                    4.朗屏
                  </button>
                </h2>
                <div id='collapseFour6' class='accordion-collapse collapse' aria-labelledby='headingFour6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive6'>
                  <button id ='YUL2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive6' aria-expanded='false' aria-controls='collapseFive6'>
                    5.元朗
                  </button>
                </h2>
                <div id='collapseFive6' class='accordion-collapse collapse' aria-labelledby='headingFive6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix6'>
                  <button id ='KSR2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix6' aria-expanded='false' aria-controls='collapseSix6'>
                    6.錦上路
                  </button>
                </h2>
                <div id='collapseSix6' class='accordion-collapse collapse' aria-labelledby='headingSix6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven6'>
                  <button id ='TWW2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven6' aria-expanded='false' aria-controls='collapseSeven6'>
                    7.荃灣西
                  </button>
                </h2>
                <div id='collapseSeven6' class='accordion-collapse collapse' aria-labelledby='headingSeven6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content6'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingEight6' >
                  <button id ='MEF2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight6' aria-expanded='true' aria-controls='collapseEight6'>
                    8.美孚
                  </button>
                </h2>
                <div id='collapseEight6' class='accordion-collapse collapse' aria-labelledby='headingEight6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content7'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNine6'>
                  <button id ='NAC2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNine6' aria-expanded='false' aria-controls='collapseNine6'>
                    9.南昌
                  </button>
                </h2>
                <div id='collapseNine6' class='accordion-collapse collapse' aria-labelledby='headingNine6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content8'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTen6'>
                  <button id ='AUS2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTen6' aria-expanded='false' aria-controls='collapseTen6'>
                    10.柯士甸
                  </button>
                </h2>
                <div id='collapseTen6' class='accordion-collapse collapse' aria-labelledby='headingTen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content9'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEleven6'>
                  <button id ='ETS2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEleven6' aria-expanded='false' aria-controls='collapseEleven6'>
                    11.尖東
                  </button>
                </h2>
                <div id='collapseEleven6' class='accordion-collapse collapse' aria-labelledby='headingEleven6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content10'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwelve6'>
                  <button id ='HUH2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwelve6' aria-expanded='false' aria-controls='collapseTwelve6'>
                    12.紅磡
                  </button>
                </h2>
                <div id='collapseTwelve6' class='accordion-collapse collapse' aria-labelledby='headingTwelve6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content11'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThirteen6'>
                  <button id ='HOM2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThirteen6' aria-expanded='false' aria-controls='collapseThirteen6'>
                    13.何文田
                  </button>
                </h2>
                <div id='collapseThirteen6' class='accordion-collapse collapse' aria-labelledby='headingThirteen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content12'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFourteen6'>
                  <button id ='TKW2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFourteen6' aria-expanded='false' aria-controls='collapseFourteen6'>
                    14.土瓜灣
                  </button>
                </h2>
                <div id='collapseFourteen6' class='accordion-collapse collapse' aria-labelledby='headingFourteen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content13'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFifteen6'>
                  <button id ='SUW_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFifteen6' aria-expanded='false' aria-controls='collapseFifteen6'>
                    15.宋皇臺
                  </button>
                </h2>
                <div id='collapseFifteen6' class='accordion-collapse collapse' aria-labelledby='headingFifteen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content14'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSixteen6'>
                  <button id ='KAT2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSixteen6' aria-expanded='false' aria-controls='collapseSixteen6'>
                    16.啟德
                  </button>
                </h2>
                <div id='collapseSixteen6' class='accordion-collapse collapse' aria-labelledby='headingSixteen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content15'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeventeen6'>
                  <button id ='DIH2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeventeen6' aria-expanded='false' aria-controls='collapseSeventeen6'>
                    17.鑽石山
                  </button>
                </h2>
                <div id='collapseSeventeen6' class='accordion-collapse collapse' aria-labelledby='headingSeventeen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content16'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEighteen6'>
                  <button id ='HIK2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEighteen6' aria-expanded='false' aria-controls='collapseEighteen6'>
                    18.顯徑
                  </button>
                </h2>
                <div id='collapseEighteen6' class='accordion-collapse collapse' aria-labelledby='headingEighteen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content17'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNineteen6'>
                  <button id ='TAW2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNineteen6' aria-expanded='false' aria-controls='collapseNineteen6'>
                    19.大圍
                  </button>
                </h2>
                <div id='collapseNineteen6' class='accordion-collapse collapse' aria-labelledby='headingNineteen6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content18'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty6'>
                  <button id ='CKT2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty6' aria-expanded='false' aria-controls='collapseTwenty6'>
                    20.車公廟
                  </button>
                </h2>
                <div id='collapseTwenty6' class='accordion-collapse collapse' aria-labelledby='headingTwenty6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content19'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingTwenty_one6' >
                  <button id ='STW2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_one6' aria-expanded='true' aria-controls='collapseTwenty_one6'>
                    21.沙田圍
                  </button>
                </h2>
                <div id='collapseTwenty_one6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_one6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content20'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_two6'>
                  <button id ='CIO2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_two6' aria-expanded='false' aria-controls='collapseTwenty_two6'>
                    22.第一城
                  </button>
                </h2>
                <div id='collapseTwenty_two6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_two6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content21'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_three6'>
                  <button id ='SHM2_TML'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_three6' aria-expanded='false' aria-controls='collapseTwenty_three6'>
                    23.石門
                  </button>
                </h2>
                <div id='collapseTwenty_three6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_three6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content22'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_four6'>
                  <button id ='TSH2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_four6' aria-expanded='false' aria-controls='collapseTwenty_four6'>
                    24.大水坑
                  </button>
                </h2>
                <div id='collapseTwenty_four6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_four6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content23'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_five6'>
                  <button id ='HEO2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_five6' aria-expanded='false' aria-controls='collapseTwenty_five6'>
                    25.恆安
                  </button>
                </h2>
                <div id='collapseTwenty_five6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_five6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content24'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_six6'>
                  <button id ='MOS2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_six6' aria-expanded='false' aria-controls='collapseTwenty_six6'>
                    26.馬鞍山
                  </button>
                </h2>
                <div id='collapseTwenty_six6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_six6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content25'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwenty_seven6'>
                  <button id ='WKS2_TML' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwenty_seven6' aria-expanded='false' aria-controls='collapseTwenty_seven6'>
                    27.烏溪沙
                  </button>
                </h2>
                <div id='collapseTwenty_seven6' class='accordion-collapse collapse' aria-labelledby='headingTwenty_seven6' data-bs-parent='#accordionExample6'>
                  <div class='accordion-body TML2content26'>
                    尾站
                  </div>
                </div>
              </div>

            </div>
          </div>  
        <!--TKL-->
        <div class='container TKL_UP' style="display:none" > 
          <div class='accordion-flush open' id='accordionExample7' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne7' >
                  <button id ='NOP_TKL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne7' aria-expanded='true' aria-controls='collapseOne7'>
                    1.北角
                  </button>
                </h2>
                <div id='collapseOne7' class='accordion-collapse collapse' aria-labelledby='headingOne7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo7'>
                  <button id ='QUB_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo7' aria-expanded='false' aria-controls='collapseTwo7'>
                    2.鰂魚涌
                  </button>
                </h2>
                <div id='collapseTwo7' class='accordion-collapse collapse' aria-labelledby='headingTwo7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree7'>
                  <button id ='YAT_TKL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree7' aria-expanded='false' aria-controls='collapseThree7'>
                    3.油塘
                  </button>
                </h2>
                <div id='collapseThree7' class='accordion-collapse collapse' aria-labelledby='headingThree7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour7'>
                  <button id ='TIK_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour7' aria-expanded='false' aria-controls='collapseFour7'>
                    4.調景嶺
                  </button>
                </h2>
                <div id='collapseFour7' class='accordion-collapse collapse' aria-labelledby='headingFour7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive7'>
                  <button id ='TKO_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive7' aria-expanded='false' aria-controls='collapseFive7'>
                    5.將軍澳
                  </button>
                </h2>
                <div id='collapseFive7' class='accordion-collapse collapse' aria-labelledby='headingFive7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix7'>
                  <button id ='HAH_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix7' aria-expanded='false' aria-controls='collapseSix7'>
                    6.坑口
                  </button>
                </h2>
                <div id='collapseSix7' class='accordion-collapse collapse' aria-labelledby='headingSix7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven7'>
                  <button id ='POA_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven7' aria-expanded='false' aria-controls='collapseSeven7'>
                    7.寶琳	
                  </button>
                </h2>
                <div id='collapseSeven7' class='accordion-collapse collapse' aria-labelledby='headingSeven7' data-bs-parent='#accordionExample7'>
                  <div class='accordion-body TKLcontent6'>
                    尾站
                  </div>
                </div>
              </div>
            </div>
          </div>  
        <!--TKL2-->
        <div class='container TKL_DOWN' style="display:none">
          <div class='accordion-flush' id='accordionExample8' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne8' >
                  <button id ='POA2_TKL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne8' aria-expanded='true' aria-controls='collapseOne8'>
                    1.寶琳
                  </button>
                </h2>
                <div id='collapseOne8' class='accordion-collapse collapse' aria-labelledby='headingOne8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo8'>
                  <button id ='HAH2_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo8' aria-expanded='false' aria-controls='collapseTwo8'>
                    2.坑口
                  </button>
                </h2>
                <div id='collapseTwo8' class='accordion-collapse collapse' aria-labelledby='headingTwo8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree8'>
                  <button id ='TKO2_TKL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree8' aria-expanded='false' aria-controls='collapseThree8'>
                    3.將軍澳
                  </button>
                </h2>
                <div id='collapseThree8' class='accordion-collapse collapse' aria-labelledby='headingThree8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour8'>
                  <button id ='TIK2_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour8' aria-expanded='false' aria-controls='collapseFour8'>
                    4.調景嶺
                  </button>
                </h2>
                <div id='collapseFour8' class='accordion-collapse collapse' aria-labelledby='headingFour8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive8'>
                  <button id ='YAT2_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive8' aria-expanded='false' aria-controls='collapseFive8'>
                    5.油塘
                  </button>
                </h2>
                <div id='collapseFive8' class='accordion-collapse collapse' aria-labelledby='headingFive8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix8'>
                  <button id ='QUB2_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix8' aria-expanded='false' aria-controls='collapseSix8'>
                    6.鰂魚涌
                  </button>
                </h2>
                <div id='collapseSix8' class='accordion-collapse collapse' aria-labelledby='headingSix8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven8'>
                  <button id ='NOP2_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven8' aria-expanded='false' aria-controls='collapseSeven8'>
                    7.北角	
                  </button>
                </h2>
                <div id='collapseSeven8' class='accordion-collapse collapse' aria-labelledby='headingSeven8' data-bs-parent='#accordionExample8'>
                  <div class='accordion-body TKL2content6'>
                    尾站
                  </div>
                </div>
              </div>
            </div>
          </div>  
        <!--TKL3-->
        <div class='container TKL2_UP' style="display:none">
          <div class='accordion-flush' id='accordionExample9' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne9' >
                  <button id ='TIK3_TKL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne9' aria-expanded='true' aria-controls='collapseOne9'>
                    1.調景嶺
                  </button>
                </h2>
                <div id='collapseOne9' class='accordion-collapse collapse' aria-labelledby='headingOne9' data-bs-parent='#accordionExample9'>
                  <div class='accordion-body TKL3content0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo9'>
                  <button id ='TKO3_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo9' aria-expanded='false' aria-controls='collapseTwo9'>
                    2.將軍澳
                  </button>
                </h2>
                <div id='collapseTwo9' class='accordion-collapse collapse' aria-labelledby='headingTwo9' data-bs-parent='#accordionExample9'>
                  <div class='accordion-body TKL3content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree9'>
                  <button id ='LHP_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree9' aria-expanded='false' aria-controls='collapseThree9'>
                    3.康城	
                  </button>
                </h2>
                <div id='collapseThree9' class='accordion-collapse collapse' aria-labelledby='headingThree9' data-bs-parent='#accordionExample9'>
                  <div class='accordion-body TKL3content2'>
                    尾站(請參閱康城往調景嶺站路綫)
                  </div>
                </div>
              </div>
            </div>
          </div>  
        <!--TKL4-->
        <div class='container TKL2_DOWN' style="display:none">
          <div class='accordion-flush' id='accordionExample10' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne10' >
                  <button id ='LHP2_TKL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne10' aria-expanded='true' aria-controls='collapseOne10'>
                    1.康城
                  </button>
                </h2>
                <div id='collapseOne10' class='accordion-collapse collapse' aria-labelledby='headingOne10' data-bs-parent='#accordionExample10'>
                  <div class='accordion-body TKL4content0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo10'>
                  <button id ='TKO4_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo10' aria-expanded='false' aria-controls='collapseTwo10'>
                    2.將軍澳
                  </button>
                </h2>
                <div id='collapseTwo10' class='accordion-collapse collapse' aria-labelledby='headingTwo10' data-bs-parent='#accordionExample10'>
                  <div class='accordion-body TKL4content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree10'>
                  <button id ='TIK4_TKL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree10' aria-expanded='false' aria-controls='collapseThree10'>
                    3.調景嶺	
                  </button>
                </h2>
                <div id='collapseThree10' class='accordion-collapse collapse' aria-labelledby='headingThree10' data-bs-parent='#accordionExample10'>
                  <div class='accordion-body TKL4content2'>
                    No record Found.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!--EAL-->
        <div class='container EAL_UP' style="display:none"  >
          <div class="alert alert-primary" role="alert">
            馬場站是專為沙田馬場而設站，只在該處舉行賽馬時、進行雙邊投注及有大型活動舉行才開放使用。
          </div>
          <div class="alert alert-primary" role="alert">
            為配合政府防疫措施，東鐵綫羅湖及落馬洲站暫時關閉，<strong>上水將更改為終點站</strong>。來往金鐘至上水站的列車服務則維持正常。 最後更新 : 2022-06-10
          </div>
          <div class='accordion-flush open' id='accordionExample11' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne11' >
                  <button id ='ADM_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne11' aria-expanded='true' aria-controls='collapseOne11'>
                    1.金鐘
                  </button>
                </h2>
                <div id='collapseOne11' class='accordion-collapse collapse' aria-labelledby='headingOne11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo11'>
                  <button id ='EXC_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo11' aria-expanded='false' aria-controls='collapseTwo11'>
                    2.會展
                  </button>
                </h2>
                <div id='collapseTwo11' class='accordion-collapse collapse' aria-labelledby='headingTwo11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree11'>
                  <button id ='HUH_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree11' aria-expanded='false' aria-controls='collapseThree11'>
                    3.紅磡
                  </button>
                </h2>
                <div id='collapseThree11' class='accordion-collapse collapse' aria-labelledby='headingThree11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour11'>
                  <button id ='MKK_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour11' aria-expanded='false' aria-controls='collapseFour11'>
                    4.旺角東
                  </button>
                </h2>
                <div id='collapseFour11' class='accordion-collapse collapse' aria-labelledby='headingFour11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive11'>
                  <button id ='KOT_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive11' aria-expanded='false' aria-controls='collapseFive11'>
                    5.九龍塘
                  </button>
                </h2>
                <div id='collapseFive11' class='accordion-collapse collapse' aria-labelledby='headingFive11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix11'>
                  <button id ='TAW_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix11' aria-expanded='false' aria-controls='collapseSix11'>
                    6.大圍
                  </button>
                </h2>
                <div id='collapseSix11' class='accordion-collapse collapse' aria-labelledby='headingSix11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven11'>
                  <button id ='SHT_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven11' aria-expanded='false' aria-controls='collapseSeven11'>
                    7.沙田
                  </button>
                </h2>
                <div id='collapseSeven11' class='accordion-collapse collapse' aria-labelledby='headingSeven11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent6'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingEight11' >
                  <button id ='FOT_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight11' aria-expanded='true' aria-controls='collapseEight11'>
                    8.火炭
                  </button>
                </h2>
                <div id='collapseEight11' class='accordion-collapse collapse' aria-labelledby='headingEight11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent7'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNine11'>
                  <button id ='RAC_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNine11' aria-expanded='false' aria-controls='collapseNine11'>
                    9.馬場
                  </button>
                </h2>
                <div id='collapseNine11' class='accordion-collapse collapse' aria-labelledby='headingNine11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent8'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTen11'>
                  <button id ='UNI_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTen11' aria-expanded='false' aria-controls='collapseTen11'>
                    10.大學
                  </button>
                </h2>
                <div id='collapseTen11' class='accordion-collapse collapse' aria-labelledby='headingTen11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent9'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEleven11'>
                  <button id ='TAP_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEleven11' aria-expanded='false' aria-controls='collapseEleven11'>
                    11.大埔墟
                  </button>
                </h2>
                <div id='collapseEleven11' class='accordion-collapse collapse' aria-labelledby='headingEleven11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent10'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwelve11'>
                  <button id ='TWO_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwelve11' aria-expanded='false' aria-controls='collapseTwelve11'>
                    12.太和
                  </button>
                </h2>
                <div id='collapseTwelve11' class='accordion-collapse collapse' aria-labelledby='headingTwelve11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent11'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThirteen11'>
                  <button id ='FAN_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThirteen11' aria-expanded='false' aria-controls='collapseThirteen11'>
                    13.粉嶺
                  </button>
                </h2>
                <div id='collapseThirteen11' class='accordion-collapse collapse' aria-labelledby='headingThirteen11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent12'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFourteen11'>
                  <button id ='SHS_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFourteen11' aria-expanded='false' aria-controls='collapseFourteen11'>
                    14.上水
                  </button>
                </h2>
                <div id='collapseFourteen11' class='accordion-collapse collapse' aria-labelledby='headingFourteen11' data-bs-parent='#accordionExample11'>
                  <div class='accordion-body EALcontent13'>
                    尾站
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                  <h2 class='accordion-header' id='headingSixteen11'>
                    <button id ='LOW_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSixteen11' aria-expanded='false' aria-controls='collapseSixteen11'>
                      15.羅湖
                    </button>
                  </h2>
                  <div id='collapseSixteen11' class='accordion-collapse collapse' aria-labelledby='headingSixteen11' data-bs-parent='#accordionExample11'>
                    <div class='accordion-body EALcontent14'>
                      車站暫停運作
                    </div>
                  </div>
                </div>           
      </div>
      </div>
        <!--EAL2-->
        <div class='container EAL2_UP' style="display:none" > 
          <div class="alert alert-primary" role="alert">
            馬場站是專為沙田馬場而設站，只在該處舉行賽馬時、進行雙邊投注及有大型活動舉行才開放使用。
          </div>
          <div class="alert alert-primary" role="alert">
            為配合政府防疫措施，東鐵綫羅湖及落馬洲站暫時關閉，<strong>上水將更改為終點站</strong>。來往金鐘至上水站的列車服務則維持正常。 最後更新 : 2022-06-10
          </div>
          <div class='accordion-flush open' id='accordionExample12' >
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingOne12' >
                  <button id ='ADM2_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne12' aria-expanded='true' aria-controls='collapseOne12'>
                    1.金鐘
                  </button>
                </h2>
                <div id='collapseOne12' class='accordion-collapse collapse' aria-labelledby='headingOne12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content0'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo12'>
                  <button id ='EXC2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo12' aria-expanded='false' aria-controls='collapseTwo12'>
                    2.會展
                  </button>
                </h2>
                <div id='collapseTwo12' class='accordion-collapse collapse' aria-labelledby='headingTwo12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree12'>
                  <button id ='HUH2_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree12' aria-expanded='false' aria-controls='collapseThree12'>
                    3.紅磡
                  </button>
                </h2>
                <div id='collapseThree12' class='accordion-collapse collapse' aria-labelledby='headingThree12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content2'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour12'>
                  <button id ='MKK2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour12' aria-expanded='false' aria-controls='collapseFour12'>
                    4.旺角東
                  </button>
                </h2>
                <div id='collapseFour12' class='accordion-collapse collapse' aria-labelledby='headingFour12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content3'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive12'>
                  <button id ='KOT2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive12' aria-expanded='false' aria-controls='collapseFive12'>
                    5.九龍塘
                  </button>
                </h2>
                <div id='collapseFive12' class='accordion-collapse collapse' aria-labelledby='headingFive12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content4'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix12'>
                  <button id ='TAW2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix12' aria-expanded='false' aria-controls='collapseSix12'>
                    6.大圍
                  </button>
                </h2>
                <div id='collapseSix12' class='accordion-collapse collapse' aria-labelledby='headingSix12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content5'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven12'>
                  <button id ='SHT2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven12' aria-expanded='false' aria-controls='collapseSeven12'>
                    7.沙田
                  </button>
                </h2>
                <div id='collapseSeven12' class='accordion-collapse collapse' aria-labelledby='headingSeven12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content6'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingEight12' >
                  <button id ='FOT2_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight12' aria-expanded='true' aria-controls='collapseEight12'>
                    8.火炭
                  </button>
                </h2>
                <div id='collapseEight12' class='accordion-collapse collapse' aria-labelledby='headingEight12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content7'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNine12'>
                  <button id ='RAC2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNine12' aria-expanded='false' aria-controls='collapseNine12'>
                    9.馬場
                  </button>
                </h2>
                <div id='collapseNine12' class='accordion-collapse collapse' aria-labelledby='headingNine12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content8'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTen12'>
                  <button id ='UNI2_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTen12' aria-expanded='false' aria-controls='collapseTen12'>
                    10.大學
                  </button>
                </h2>
                <div id='collapseTen12' class='accordion-collapse collapse' aria-labelledby='headingTen12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content9'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEleven12'>
                  <button id ='TAP2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEleven12' aria-expanded='false' aria-controls='collapseEleven12'>
                    11.大埔墟
                  </button>
                </h2>
                <div id='collapseEleven12' class='accordion-collapse collapse' aria-labelledby='headingEleven12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content10'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwelve12'>
                  <button id ='TWO2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwelve12' aria-expanded='false' aria-controls='collapseTwelve12'>
                    12.太和
                  </button>
                </h2>
                <div id='collapseTwelve12' class='accordion-collapse collapse' aria-labelledby='headingTwelve12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content11'>
                      No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThirteen12'>
                  <button id ='FAN2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThirteen12' aria-expanded='false' aria-controls='collapseThirteen12'>
                    13.粉嶺
                  </button>
                </h2>
                <div id='collapseThirteen12' class='accordion-collapse collapse' aria-labelledby='headingThirteen12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content12'>
                    No record Found.
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFourteen12'>
                  <button id ='SHS2_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFourteen12' aria-expanded='false' aria-controls='collapseFourteen12'>
                    14.上水
                  </button>
                </h2>
                <div id='collapseFourteen12' class='accordion-collapse collapse' aria-labelledby='headingFourteen12' data-bs-parent='#accordionExample12'>
                  <div class='accordion-body EAL2content13'>
                    尾站
                  </div>
                </div>
              </div>
       <div class='accordion-item'>
                  <h2 class='accordion-header' id='headingSixteen12'>
                    <button id ='LMC2_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSixteen12' aria-expanded='false' aria-controls='collapseSixteen12'>
                      15.落馬洲
                    </button>
                  </h2>
                  <div id='collapseSixteen12' class='accordion-collapse collapse' aria-labelledby='headingSixteen12' data-bs-parent='#accordionExample12'>
                    <div class='accordion-body EAL2content14'>
                      車站暫停運作
                    </div>
                  </div>
                </div>           
      </div>
      </div>
        <!--EAL3-->
        <div class='container EAL_DOWN' style="display:none" > 
          <div class="alert alert-primary" role="alert">
            馬場站是專為沙田馬場而設站，只在該處舉行賽馬時、進行雙邊投注及有大型活動舉行才開放使用。
          </div>
          <div class="alert alert-primary" role="alert">
            為配合政府防疫措施，東鐵綫羅湖及落馬洲站暫時關閉，<strong>上水將更改為終點站</strong>。來往金鐘至上水站的列車服務則維持正常。最後更新 : 2022-06-10
          </div>
          <div class='accordion-flush open' id='accordionExample13' >           
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo13'>
                  <button id ='LOW3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo13' aria-expanded='false' aria-controls='collapseTwo13'>
                    1.羅湖
                  </button>
                </h2>
                <div id='collapseTwo13' class='accordion-collapse collapse' aria-labelledby='headingTwo13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content0'>
                    車站暫停運作
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree13'>
                  <button id ='SHS3_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree13' aria-expanded='false' aria-controls='collapseThree13'>
                    2.上水
                  </button>
                </h2>
                <div id='collapseThree13' class='accordion-collapse collapse' aria-labelledby='headingThree13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour13'>
                  <button id ='FAN3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour13' aria-expanded='false' aria-controls='collapseFour13'>
                    3.粉嶺
                  </button>
                </h2>
                <div id='collapseFour13' class='accordion-collapse collapse' aria-labelledby='headingFour13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content2'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive13'>
                  <button id ='TWO3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive13' aria-expanded='false' aria-controls='collapseFive13'>
                    4.太和
                  </button>
                </h2>
                <div id='collapseFive13' class='accordion-collapse collapse' aria-labelledby='headingFive13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content3'>
                      No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix13'>
                  <button id ='TAP3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix13' aria-expanded='false' aria-controls='collapseSix13'>
                    5.大埔墟
                  </button>
                </h2>
                <div id='collapseSix13' class='accordion-collapse collapse' aria-labelledby='headingSix13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content4'>
                    No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven13'>
                  <button id ='UNI3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven13' aria-expanded='false' aria-controls='collapseSeven13'>
                    6.大學
                  </button>
                </h2>
                <div id='collapseSeven13' class='accordion-collapse collapse' aria-labelledby='headingSeven13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content5'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingEight13' >
                  <button id ='RAC3_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight13' aria-expanded='true' aria-controls='collapseEight13'>
                    7.馬場
                  </button>
                </h2>
                <div id='collapseEight13' class='accordion-collapse collapse' aria-labelledby='headingEight13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content6'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNine13'>
                  <button id ='FOT3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNine13' aria-expanded='false' aria-controls='collapseNine13'>
                    8.火炭
                  </button>
                </h2>
                <div id='collapseNine13' class='accordion-collapse collapse' aria-labelledby='headingNine13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content7'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTen13'>
                  <button id ='SHT3_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTen13' aria-expanded='false' aria-controls='collapseTen13'>
                    9.沙田
                  </button>
                </h2>
                <div id='collapseTen13' class='accordion-collapse collapse' aria-labelledby='headingTen13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content8'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEleven13'>
                  <button id ='TAW3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEleven13' aria-expanded='false' aria-controls='collapseEleven13'>
                    10.大圍
                  </button>
                </h2>
                <div id='collapseEleven13' class='accordion-collapse collapse' aria-labelledby='headingEleven13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content9'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwelve13'>
                  <button id ='KOT3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwelve13' aria-expanded='false' aria-controls='collapseTwelve13'>
                    11.九龍塘
                  </button>
                </h2>
                <div id='collapseTwelve13' class='accordion-collapse collapse' aria-labelledby='headingTwelve13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content10'>
                      No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThirteen13'>
                  <button id ='MKK3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThirteen13' aria-expanded='false' aria-controls='collapseThirteen13'>
                    12.旺角東
                  </button>
                </h2>
                <div id='collapseThirteen13' class='accordion-collapse collapse' aria-labelledby='headingThirteen13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content11'>
                    No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFourteen13'>
                  <button id ='HUH3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFourteen13' aria-expanded='false' aria-controls='collapseFourteen13'>
                    13.紅磡
                  </button>
                </h2>
                <div id='collapseFourteen13' class='accordion-collapse collapse' aria-labelledby='headingFourteen13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content12'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFifteen13'>
                  <button id ='EXC3_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFifteen13' aria-expanded='false' aria-controls='collapseFifteen13'>
                    14.會展
                  </button>
                </h2>
                <div id='collapseFifteen13' class='accordion-collapse collapse' aria-labelledby='headingFifteen13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content13'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSixteen13'>
                  <button id ='ADM3_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSixteen13' aria-expanded='false' aria-controls='collapseSixteen13'>
                    15.金鐘
                  </button>
                </h2>
                <div id='collapseSixteen13' class='accordion-collapse collapse' aria-labelledby='headingSixteen13' data-bs-parent='#accordionExample13'>
                  <div class='accordion-body EAL3content14'>
                    尾站
                  </div>
                </div>
              </div>
      </div>
      </div>
        <!--EAL4-->
        <div class='container EAL2_DOWN' style="display:none" > 
          <div class="alert alert-primary" role="alert">
            馬場站是專為沙田馬場而設站，只在該處舉行賽馬時、進行雙邊投注及有大型活動舉行才開放使用。
          </div>
          <div class="alert alert-primary" role="alert">
            為配合政府防疫措施，東鐵綫羅湖及落馬洲站暫時關閉，<strong>上水將更改為終點站</strong>。來往金鐘至上水站的列車服務則維持正常。 最後更新 : 2022-06-10
          </div>
          <div class='accordion-flush open' id='accordionExample14' >           
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwo14'>
                  <button id ='LMC4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo14' aria-expanded='false' aria-controls='collapseTwo14'>
                    1.落馬洲
                  </button>
                </h2>
                <div id='collapseTwo14' class='accordion-collapse collapse' aria-labelledby='headingTwo14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content0'>
                    車站暫停運作
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThree14'>
                  <button id ='SHS4_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree14' aria-expanded='false' aria-controls='collapseThree14'>
                    2.上水
                  </button>
                </h2>
                <div id='collapseThree14' class='accordion-collapse collapse' aria-labelledby='headingThree14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content1'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFour14'>
                  <button id ='FAN4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour14' aria-expanded='false' aria-controls='collapseFour14'>
                    3.粉嶺
                  </button>
                </h2>
                <div id='collapseFour14' class='accordion-collapse collapse' aria-labelledby='headingFour14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content2'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFive14'>
                  <button id ='TWO4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive14' aria-expanded='false' aria-controls='collapseFive14'>
                    4.太和
                  </button>
                </h2>
                <div id='collapseFive14' class='accordion-collapse collapse' aria-labelledby='headingFive14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content3'>
                      No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSix14'>
                  <button id ='TAP4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSix14' aria-expanded='false' aria-controls='collapseSix14'>
                    5.大埔墟
                  </button>
                </h2>
                <div id='collapseSix14' class='accordion-collapse collapse' aria-labelledby='headingSix14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content4'>
                    No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSeven14'>
                  <button id ='UNI4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSeven14' aria-expanded='false' aria-controls='collapseSeven14'>
                    6.大學
                  </button>
                </h2>
                <div id='collapseSeven14' class='accordion-collapse collapse' aria-labelledby='headingSeven14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content5'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item' >
                <h2 class='accordion-header' id='headingEight14' >
                  <button id ='RAC4_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEight14' aria-expanded='true' aria-controls='collapseEight14'>
                    7.馬場
                  </button>
                </h2>
                <div id='collapseEight14' class='accordion-collapse collapse' aria-labelledby='headingEight14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content6'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingNine14'>
                  <button id ='FOT4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseNine14' aria-expanded='false' aria-controls='collapseNine14'>
                    8.火炭
                  </button>
                </h2>
                <div id='collapseNine14' class='accordion-collapse collapse' aria-labelledby='headingNine14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content7'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTen14'>
                  <button id ='SHT4_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTen14' aria-expanded='false' aria-controls='collapseTen14'>
                    9.沙田
                  </button>
                </h2>
                <div id='collapseTen14' class='accordion-collapse collapse' aria-labelledby='headingTen14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content8'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingEleven14'>
                  <button id ='TAW4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseEleven14' aria-expanded='false' aria-controls='collapseEleven14'>
                    10.大圍
                  </button>
                </h2>
                <div id='collapseEleven14' class='accordion-collapse collapse' aria-labelledby='headingEleven14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content9'>
                      No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingTwelve14'>
                  <button id ='KOT4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwelve14' aria-expanded='false' aria-controls='collapseTwelve14'>
                    11.九龍塘
                  </button>
                </h2>
                <div id='collapseTwelve14' class='accordion-collapse collapse' aria-labelledby='headingTwelve14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content10'>
                      No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingThirteen14'>
                  <button id ='MKK4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThirteen14' aria-expanded='false' aria-controls='collapseThirteen14'>
                    12.旺角東
                  </button>
                </h2>
                <div id='collapseThirteen14' class='accordion-collapse collapse' aria-labelledby='headingThirteen14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content11'>
                    No record Found.
                  </div>
                </div>
              </div>
      <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFourteen14'>
                  <button id ='HUH4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFourteen14' aria-expanded='false' aria-controls='collapseFourteen14'>
                    13.紅磡
                  </button>
                </h2>
                <div id='collapseFourteen14' class='accordion-collapse collapse' aria-labelledby='headingFourteen14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content12'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingFifteen14'>
                  <button id ='EXC4_EAL' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFifteen14' aria-expanded='false' aria-controls='collapseFifteen14'>
                    14.會展
                  </button>
                </h2>
                <div id='collapseFifteen14' class='accordion-collapse collapse' aria-labelledby='headingFifteen14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content13'>
                    No record Found.
                  </div>
                </div>
              </div>
              <div class='accordion-item'>
                <h2 class='accordion-header' id='headingSixteen14'>
                  <button id ='ADM4_EAL'  class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseSixteen14' aria-expanded='false' aria-controls='collapseSixteen14'>
                    15.金鐘
                  </button>
                </h2>
                <div id='collapseSixteen14' class='accordion-collapse collapse' aria-labelledby='headingSixteen14' data-bs-parent='#accordionExample14'>
                  <div class='accordion-body EAL4content14'>
                    尾站
                  </div>
                </div>
              </div>
      </div>
      </div>

   
      <img src="img/MTR_routemap_510.jpg" class="img-fluid" alt="Responsive image">
    </div>
</div></div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>