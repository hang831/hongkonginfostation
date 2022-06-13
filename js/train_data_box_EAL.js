

$(document).ready(function() {


    const select = document.getElementById("select");
    const change = document.getElementById("accordionExample11");
    const change3 = document.getElementById("accordionExample12"); //12 is up
    const change2 = document.getElementById("accordionExample13"); //13 is down
    const change4 = document.getElementById("accordionExample14");
    let line_item='';
    var count=0;
    //let controller = new AbortController(); //disable pervious rubbish fetch
    // var test99 =setInterval(loop99,4000);    

    //  function loop99()  {   
    //  // console.log(a);
    //       var b=a;
    //       //console.log(b)   ;         
    //       b.click()             

    //  }   
    var test99 =setInterval(loop99,30000);    
     function loop99()  {                                       
        line_item.click(); 
        } 
    
    select.addEventListener('change', () => { 
        //console.log( document.getElementById("select").value, typeof "AEL");
        
       
   

        if (select.value == "EAL"){ 
            $('.collapse').collapse('hide');
             var arr=[];
             var ticker = null;
             document.querySelector(".AEL_UP").style.display="none";  
             document.querySelector(".AEL_DOWN").style.display="none";
             document.querySelector(".TCL_DOWN").style.display="none";
             document.querySelector(".TCL_UP").style.display="none";
             document.querySelector(".TML_UP").style.display="none";
             document.querySelector(".TML_DOWN").style.display="none";
             document.querySelector(".TKL_UP").style.display="none";
             document.querySelector(".TKL_DOWN").style.display="none";
             document.querySelector(".TKL2_UP").style.display="none";
             document.querySelector(".TKL2_DOWN").style.display="none";
             document.querySelector(".EAL_UP").style.display="block";
             document.querySelector(".EAL_DOWN").style.display="none";
             document.querySelector(".EAL2_UP").style.display="none";
             document.querySelector(".EAL2_DOWN").style.display="none";
             //change.innerHTML= " <div class='container'> <div class='accordion accordion-flush' id='accordionExample' > <div class='accordion-item' > <h2 class='accordion-header' id='headingOne' > <button id ='HOK' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'> 香港 </button> </h2> <div id='collapseOne' class='accordion-collapse collapse ' aria-labelledby='headingOne' data-bs-parent='#accordionExample'> <div class='accordion-body content0'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingTwo'> <button id ='KOW' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'> 九龍 </button> </h2> <div id='collapseTwo' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'> <div class='accordion-body content1'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingThree'> <button id ='TSY' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'> 青衣 </button> </h2> <div id='collapseThree' class='accordion-collapse collapse' aria-labelledby='headingThree' data-bs-parent='#accordionExample'> <div class='accordion-body content2'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFour'> <button id ='AIR' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='false' aria-controls='collapseFour'> 機場 </button> </h2> <div id='collapseFour' class='accordion-collapse collapse' aria-labelledby='headingFour' data-bs-parent='#accordionExample'> <div class='accordion-body content3'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFive'> <button id ='AWE' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive' aria-expanded='false' aria-controls='collapseFive'> 亞洲國際博覽館 </button> </h2> <div id='collapseFive' class='accordion-collapse collapse' aria-labelledby='headingFive' data-bs-parent='#accordionExample'> <div class='accordion-body content4'> test </div> </div> </div> </div> </div>   "
             change.onclick= (event) => { 
             //change.onclick =  function(event) { 
             
             count=0;
             const first3 = event.target.id.substring(0, 3);  
             line_item=event.target;
               
            console.log(event.target);

             fetch(`https://rt.data.gov.hk/v1/transport/mtr/getSchedule.php?line=EAL&sta=${first3}&lang=tc` )
             .then(res => res.json())
             .then(res =>{
             //console.log(res);
             var station="EAL-"+first3 
             //console.log(station);
            arr=[];     
           
                 for(i=0;i<res.data[station]["UP"].length;)  {
                     //console.log(res.data[station]);
                 var plat=res.data[station]["UP"][i].plat;
                 var time=res.data[station]["UP"][i].ttnt;
                 //console.log(plat);
                 //console.log(time);
                 arr[i]=time+'分鐘 - '+plat+'號月台';
                 i++;
                 }
                 for(i=0;i<13;i++){ //should14  one station suspended
                 var contentname= ".EALcontent"+[i];
                 document.querySelector(contentname).innerHTML= arr.join("<p></p>"); 
                 } //end printforloop
     
     
     
         })//end .then 
         .catch(function() {
             //console.log('failure');
         })
     } //end change.onclick     
     }
    //  var test =setInterval(loop,40000);    

    //  function loop()  {   
      
    //      clearInterval(test);                    
    //      change.click()               
    //      clearInterval(test);
    //     //ticker=null; 
    //  }       
           
        

           if(select.value == "EAL2"){
            $('.collapse').collapse('hide');
           
           // controller.abort();     //disable pervious rubbish fetch
            //console.log("box2 click");
            var arr2=[];  
            var ticker2 = null;
            document.querySelector(".AEL_UP").style.display="none";  
            document.querySelector(".AEL_DOWN").style.display="none";
            document.querySelector(".TCL_UP").style.display="none";  
            document.querySelector(".TCL_DOWN").style.display="none";
            document.querySelector(".TML_UP").style.display="none";
            document.querySelector(".TML_DOWN").style.display="none";
            document.querySelector(".TKL_UP").style.display="none";
            document.querySelector(".TKL_DOWN").style.display="none";
            document.querySelector(".TKL2_UP").style.display="none";
            document.querySelector(".TKL2_DOWN").style.display="none";
            document.querySelector(".EAL_UP").style.display="none";
            document.querySelector(".EAL_DOWN").style.display="block";
            document.querySelector(".EAL2_UP").style.display="none";
            document.querySelector(".EAL2_DOWN").style.display="none";
            change2.onclick = function(event2) {    
            const first3_2 = event2.target.id.substring(0, 3);
            count=0;   
            line_item=event2.target;
             
            console.log(event2.target);

            fetch(`https://rt.data.gov.hk/v1/transport/mtr/getSchedule.php?line=EAL&sta=${first3_2}&lang=tc`)
            .then(res2 => res2.json())
            .then(res2 =>{
           // console.log(res2);
           //console.log(res2.data["AEL-AWE"]["DOWN"][1]);
           
            var station2="EAL-"+first3_2  
            //console.log(station2);
            arr2=[];      
               
                for(i=0;i<res2.data[station2]["DOWN"].length;)  {
                    //console.log(res.data[station]);
                var plat2=res2.data[station2]["DOWN"][i].plat;
                var time2=res2.data[station2]["DOWN"][i].ttnt;
                //console.log(plat);
                //console.log(time);
                arr2[i]=time2+'分鐘 - '+plat2+'號月台';
                i++;}
                
                for(i=1;i<14;i++){ //1 should change to 0 
                    var contentname2= ".EAL3content"+[i];
                   
                    document.querySelector(contentname2).innerHTML= arr2.join("<p></p>"); }

                
    
            }) 
            .catch(function() {
                //console.log('failure');
            })    
        }         
        }

           

            if (select.value == "EAL3"){ 
                $('.collapse').collapse('hide');
               
                 var arr3=[];
                 var ticker3 = null;
                 document.querySelector(".AEL_UP").style.display="none";  
                 document.querySelector(".AEL_DOWN").style.display="none";
                 document.querySelector(".TCL_DOWN").style.display="none";
                 document.querySelector(".TCL_UP").style.display="none";
                 document.querySelector(".TML_UP").style.display="none";
                 document.querySelector(".TML_DOWN").style.display="none";
                 document.querySelector(".TKL_UP").style.display="none";
                 document.querySelector(".TKL_DOWN").style.display="none";
                 document.querySelector(".TKL2_UP").style.display="none";
                 document.querySelector(".TKL2_DOWN").style.display="none";
                 document.querySelector(".EAL_UP").style.display="none";
                 document.querySelector(".EAL_DOWN").style.display="none";
                 document.querySelector(".EAL2_UP").style.display="block";
                 document.querySelector(".EAL2_DOWN").style.display="none";
                 //change.innerHTML= " <div class='container'> <div class='accordion accordion-flush' id='accordionExample' > <div class='accordion-item' > <h2 class='accordion-header' id='headingOne' > <button id ='HOK' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'> 香港 </button> </h2> <div id='collapseOne' class='accordion-collapse collapse ' aria-labelledby='headingOne' data-bs-parent='#accordionExample'> <div class='accordion-body content0'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingTwo'> <button id ='KOW' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'> 九龍 </button> </h2> <div id='collapseTwo' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'> <div class='accordion-body content1'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingThree'> <button id ='TSY' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'> 青衣 </button> </h2> <div id='collapseThree' class='accordion-collapse collapse' aria-labelledby='headingThree' data-bs-parent='#accordionExample'> <div class='accordion-body content2'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFour'> <button id ='AIR' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='false' aria-controls='collapseFour'> 機場 </button> </h2> <div id='collapseFour' class='accordion-collapse collapse' aria-labelledby='headingFour' data-bs-parent='#accordionExample'> <div class='accordion-body content3'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFive'> <button id ='AWE' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive' aria-expanded='false' aria-controls='collapseFive'> 亞洲國際博覽館 </button> </h2> <div id='collapseFive' class='accordion-collapse collapse' aria-labelledby='headingFive' data-bs-parent='#accordionExample'> <div class='accordion-body content4'> test </div> </div> </div> </div> </div>   "
                 change3.onclick= (event3) => { 
                 //change.onclick =  function(event) {  
                    count=0;   
                 const first3_3 = event3.target.id.substring(0, 3);    
                 
                 line_item=event3.target;
                 console.log(event3.target);

                 
                 fetch(`https://rt.data.gov.hk/v1/transport/mtr/getSchedule.php?line=EAL&sta=${first3_3}&lang=tc`)
                 .then(res3 => res3.json())
                 .then(res3 =>{
                arr3=[];
                 var station3="EAL-"+first3_3 
                 //console.log(station);
                 //console.log(res.data[station]["UP"][i].dest);    
                    
                     for(i=0;i<res3.data[station3]["UP"].length;)  {
                    
                     var plat3=res3.data[station3]["UP"][i].plat;
                     var time3=res3.data[station3]["UP"][i].ttnt;
                     //console.log(plat);
                     //console.log(time);
                     arr3[i]=time3+'分鐘 - '+plat3+'號月台';
                     i++; 
                     }
                     for(i=0;i<13;i++){ 
                     var contentname3= ".EAL2content"+[i];
                     document.querySelector(contentname3).innerHTML= arr3.join("<p></p>"); 
                     } //end printforloop
             })//end .then 
             .catch(function() {
                 //console.log('failure');
             })
             } //end change.onclick     
               
               }//end if value = line


               if (select.value == "EAL4"){ 
                $('.collapse').collapse('hide');
               
                // console.log("test");
                 var arr4=[];
                 var ticker4 = null;
                 document.querySelector(".AEL_UP").style.display="none";  
                 document.querySelector(".AEL_DOWN").style.display="none";
                 document.querySelector(".TCL_DOWN").style.display="none";
                 document.querySelector(".TCL_UP").style.display="none";
                 document.querySelector(".TML_UP").style.display="none";
                 document.querySelector(".TML_DOWN").style.display="none";
                 document.querySelector(".TKL_UP").style.display="none";
                 document.querySelector(".TKL_DOWN").style.display="none";
                 document.querySelector(".TKL2_UP").style.display="none";
                 document.querySelector(".TKL2_DOWN").style.display="none";
                 document.querySelector(".EAL_UP").style.display="none";
                 document.querySelector(".EAL_DOWN").style.display="none";
                 document.querySelector(".EAL2_UP").style.display="none";
                 document.querySelector(".EAL2_DOWN").style.display="block";
                 //change.innerHTML= " <div class='container'> <div class='accordion accordion-flush' id='accordionExample' > <div class='accordion-item' > <h2 class='accordion-header' id='headingOne' > <button id ='HOK' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'> 香港 </button> </h2> <div id='collapseOne' class='accordion-collapse collapse ' aria-labelledby='headingOne' data-bs-parent='#accordionExample'> <div class='accordion-body content0'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingTwo'> <button id ='KOW' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'> 九龍 </button> </h2> <div id='collapseTwo' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'> <div class='accordion-body content1'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingThree'> <button id ='TSY' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'> 青衣 </button> </h2> <div id='collapseThree' class='accordion-collapse collapse' aria-labelledby='headingThree' data-bs-parent='#accordionExample'> <div class='accordion-body content2'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFour'> <button id ='AIR' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='false' aria-controls='collapseFour'> 機場 </button> </h2> <div id='collapseFour' class='accordion-collapse collapse' aria-labelledby='headingFour' data-bs-parent='#accordionExample'> <div class='accordion-body content3'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFive'> <button id ='AWE' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive' aria-expanded='false' aria-controls='collapseFive'> 亞洲國際博覽館 </button> </h2> <div id='collapseFive' class='accordion-collapse collapse' aria-labelledby='headingFive' data-bs-parent='#accordionExample'> <div class='accordion-body content4'> test </div> </div> </div> </div> </div>   "
                 change4.onclick= (event4) => { 
                 //change.onclick =  function(event) {  
                 const first3_4 = event4.target.id.substring(0, 3); 
                 count=0;
                 line_item=event4.target;
                 console.log(event4.target);
              
                 fetch(`https://rt.data.gov.hk/v1/transport/mtr/getSchedule.php?line=EAL&sta=${first3_4}&lang=tc`)
                 .then(res4 => res4.json())
                 .then(res4 =>{
                    
                 var station4="EAL-"+first3_4 
                 //console.log(station);
                 //console.log(res.data[station]["UP"][i].dest);    
                arr4=[];
                     for(i=0;i<res4.data[station4]["DOWN"].length;)  {
                    
                     var plat4=res4.data[station4]["DOWN"][i].plat;
                     var time4=res4.data[station4]["DOWN"][i].ttnt;
                     //console.log(plat);
                     //console.log(time);
                     arr4[i]=time4+'分鐘 - '+plat4+'號月台';
                     i++; 
                     //console.log(arr.length); console.log(arr)
                     }
                     for(i=1;i<14;i++){ 
                     var contentname4= ".EAL4content"+[i];
                     document.querySelector(contentname4).innerHTML= arr4.join("<p></p>"); 
                     } //end printforloop
             })//end .then 
             .catch(function() {
                 //console.log('failure');
             })
             } //end change.onclick     
               
               }//end if value = line

               if (select.value != "EAL" && select.value != "EAL2" && select.value != "EAL3" && select.value != "EAL4" ){                    
                  //console.log("before:",count);
                   count=0;
                  // console.log("after:",count);
                   count=count+1;
                  // console.log("final:",count);
                   
                   clearInterval(test99);

               }

               if ( (select.value == "EAL" || select.value == "EAL2" || select.value == "EAL3" || select.value == "EAL4")&&(count==1) ){    
                line_item=null;
                test99 =setInterval(loop99,30000); 
            }

})//end select.change

});//end document load
