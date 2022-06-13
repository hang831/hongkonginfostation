// $(function (){

// $.ajax({
//      headers: {
//          'Access-Control-Allow-Origin': '*',
//          'Access-Control-Allow-Headers': 'accept',//'Origin', ContentType, XAuthToken,
//         'Access-Control-Allow-Methods': 'GET',
//      },
//     type:'GET',
//     url: 'https://tdcctv.data.one.gov.hk/image?key=BC101F',
//    crossDomain: true,   
//    cache:false,
//    xhrField:{
//    responseType: 'blob'
//    },

//     contentType: "image/jpeg",
//     //DATATYPE: 'TEXT/HTML',
//     async: true,
    
//     success: function(data){
//         console.log('success',data);
//     },
//     error: function(error){
//         console.log('error',error);
//     },
// })
// })

// var xmlhttp;
// xmlhttp=new XMLHttpRequest();
// xmlhttp.open("GET","https://tdcctv.data.one.gov.hk/K107F.JPG",true);
// xmlhttp.responseType="blob";
// xmlhttp.onload=function(){
//     console.log(this);
// }
// xmlhttp.send();



// var url = 'https://tdcctv.data.one.gov.hk/K107F.JPG';
// window.addEventListener("load", event => {
//     fetch(new Request(url, {method: 'HEAD', mode: 'no-cors'}))
//     .then(function() {
//         console.log(response);
//     })
//     .catch(function() {
//         alert('failure');
//     });
// });




// var data_received = 'https://tdcctv.data.one.gov.hk/K107F.JPG';
// /* PUT THIS INSIDE AJAX SUCCESS */
// var img = $('<img id="image_id">');
// console.log(img);
// img.attr('src', 'data:image/png;base64,' + data_received);
// img.appendTo('#order');

// $.ajax({
//     headers: {
//                 'Access-Control-Allow-Origin': "*",
                
//            },
//     url: 'https://tdcctv.data.one.gov.hk/K107F.JPG',
//     beforeSend: function (xhr) {
//         xhr.overrideMimeType('text/plain; charset=x-user-defined');
//       },
//     type: 'get',
//     contentType: "image/jpeg",
//     datatype: 'html',
//     async: false,
//     crossDomain: 'true',
//     success: function(data, status) {
//         console.log("Status: "+status+"\nData: "+data);
//         result = data;

//         /* creating image assuming data is the url of image */
//         var img = $('<img id="image_id">');
//         img.attr('src', data);
//         img.appendTo('#order'); 
//     } 
// });


        // function updateImage() {
        //    console.log(new Date().getTime()); 
        //    var youtubeimgsrc = document.getElementById("youtubeimg").src
        //    obj = document.imagename;
           
        //    obj.src = obj.src.split("?")[0] + "?" + new Date().getTime();
        
        //    //Following statement sets the delay before the function will
        
        //    //call itself again (in milliseconds)
        
        //    setTimeout(updateImage,2000);
           
        // }

//https://exchangetuts.com/auto-refresh-images-in-html-1640072704816372
        function refresh(node)
        {
           var times = 200000; // gap in Milli Seconds; 2min;
        
           (function startRefresh()
           {
              var address;
              if(node.src.indexOf('?')>-1)
               address = node.src.split('?')[0];
              else 
               address = node.src;
              node.src = address+"?time="+new Date().getTime();
        
              (startRefresh,times);
           })();     
        }
        
        //refersh image every 2min
        window.onload = function()
        {
            //document.getElementsByClassName('card-img-top').length =14
            for(i=0; i<=13; ){
        //console.log(document.getElementsByClassName('card-img-top')[i]);
          var node = document.getElementsByClassName('card-img-top')[i];
          refresh(node);
          //console.log(node);
          // you can refresh as many images you want just repeat above steps
          i++;
        }}

        //get urgent message
        function getData(){
            
            var url = "https://resource.data.one.gov.hk/td/en/specialtrafficnews.xml";
         
            var myrequest = new XMLHttpRequest();
            myrequest.open("GET", url, true);
         
            myrequest.onload = (function() {
               if (this.status == 200) {
                //console.log(this.responseText);
                var parser=new DOMParser();
                var xmlDoc=parser.parseFromString(this.responseText,"text/xml");
                //console.log(xmlDoc);
                for(i=0;i<=2;i++){
               classname= ".urgent"+[i];
               timename= ".time"+[i];
                var message = xmlDoc.getElementsByTagName("ChinText")[i];
                var date = xmlDoc.getElementsByTagName("ReferenceDate")[i];
                var textmessage = message.childNodes[0];
                var timemessage = date.childNodes[0];
                //console.log( typeof textmessage);
                //console.log( document.getElementById('urgent'));
                document.querySelector(classname).innerHTML =  textmessage.nodeValue;
                document.querySelector(timename).innerHTML =  timemessage.nodeValue;
                }               
               }setTimeout(getData, 500000); //5000 means 5 seconds    50000 means 50s          
            } );
            myrequest.send();
         }
         getData();
        
        $('#playButton1').click(function () {
            $('#homeCarousel').carousel('cycle');
        });
        $('#pauseButton1').click(function () {
            $('#homeCarousel').carousel('pause');
        });

        $('#playButton2').click(function () {
         $('#homeCarousel').carousel('cycle');
        });
         $('#pauseButton2').click(function () {
               $('#homeCarousel').carousel('pause');
        });