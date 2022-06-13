$(document).ready(function() {


    const select = document.getElementById("select");
    const change = document.getElementById("accordionExample5");
    const change2 = document.getElementById("accordionExample6");

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
        
       
   

        if (select.value == "TML"){ 
            $('.collapse').collapse('hide');
             var arr=[];
             document.querySelector(".AEL_UP").style.display="none";  
             document.querySelector(".AEL_DOWN").style.display="none";
             document.querySelector(".TCL_DOWN").style.display="none";
             document.querySelector(".TCL_UP").style.display="none";
             document.querySelector(".TML_UP").style.display="block";
             document.querySelector(".TML_DOWN").style.display="none";
             document.querySelector(".TKL_UP").style.display="none";
             document.querySelector(".TKL_DOWN").style.display="none";
             document.querySelector(".TKL2_UP").style.display="none";
             document.querySelector(".TKL2_DOWN").style.display="none";
             document.querySelector(".EAL_UP").style.display="none";
             document.querySelector(".EAL_DOWN").style.display="none";
             document.querySelector(".EAL2_UP").style.display="none";
             document.querySelector(".EAL2_DOWN").style.display="none";

             //change.innerHTML= " <div class='container'> <div class='accordion accordion-flush' id='accordionExample' > <div class='accordion-item' > <h2 class='accordion-header' id='headingOne' > <button id ='HOK' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'> 香港 </button> </h2> <div id='collapseOne' class='accordion-collapse collapse ' aria-labelledby='headingOne' data-bs-parent='#accordionExample'> <div class='accordion-body content0'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingTwo'> <button id ='KOW' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'> 九龍 </button> </h2> <div id='collapseTwo' class='accordion-collapse collapse' aria-labelledby='headingTwo' data-bs-parent='#accordionExample'> <div class='accordion-body content1'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingThree'> <button id ='TSY' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'> 青衣 </button> </h2> <div id='collapseThree' class='accordion-collapse collapse' aria-labelledby='headingThree' data-bs-parent='#accordionExample'> <div class='accordion-body content2'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFour'> <button id ='AIR' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='false' aria-controls='collapseFour'> 機場 </button> </h2> <div id='collapseFour' class='accordion-collapse collapse' aria-labelledby='headingFour' data-bs-parent='#accordionExample'> <div class='accordion-body content3'> test </div> </div> </div> <div class='accordion-item'> <h2 class='accordion-header' id='headingFive'> <button id ='AWE' class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFive' aria-expanded='false' aria-controls='collapseFive'> 亞洲國際博覽館 </button> </h2> <div id='collapseFive' class='accordion-collapse collapse' aria-labelledby='headingFive' data-bs-parent='#accordionExample'> <div class='accordion-body content4'> test </div> </div> </div> </div> </div>   "
             change.onclick= (event) => { 

             count=0;
             const first3 = event.target.id.substring(0, 3);  
             line_item=event.target;
               
            console.log(event.target);
                   
                    
             // document.getElementById(event.target.id).click();
             // setTimeout(function(){ 
             //     document.getElementById(event.target.id).click(); 
             // },1000);
     
     
             //clearInterval(ticker);
             //ticker = null;
             // (this.clicked != undefined) ?
             // this.clicked = !this.clicked : 
             // this.clicked = true;
             // console.log(this.clicked);
             // console.log(event.target.clicked);
            
             //console.log(`${new Date().getTime()}`);
             
             fetch(`https://rt.data.gov.hk/v1/transport/mtr/getSchedule.php?line=TML&sta=${first3}&lang=tc` )
             .then(res => res.json())
             .then(res =>{
             //console.log(res);
             var station="TML-"+first3 
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
                 for(i=0;i<26;i++){ //27station
                 var contentname= ".TMLcontent"+[i];
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
           
        

           if(select.value == "TML2"){
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
            document.querySelector(".TML_DOWN").style.display="block";
            document.querySelector(".TKL_UP").style.display="none";
            document.querySelector(".TKL_DOWN").style.display="none";
            document.querySelector(".TKL2_UP").style.display="none";
            document.querySelector(".TKL2_DOWN").style.display="none";
            document.querySelector(".EAL_UP").style.display="none";
            document.querySelector(".EAL_DOWN").style.display="none";
            document.querySelector(".EAL2_UP").style.display="none";
            document.querySelector(".EAL2_DOWN").style.display="none";

            change2.onclick = function(event2) {
            //controller.abort();     
            const first3_2 = event2.target.id.substring(0, 3);
            count=0;   
            line_item=event2.target;
             
            console.log(event2.target);
            // clearInterval(test2);     
    
            // ticker2=null;    
            // ticker2=event2.target;
            // console.log(ticker2);
            // var test2 =setInterval(loop2,40000);    
     
 
            // function loop2()  {      
                
            //     clearInterval(test2); 
            //     ticker2.click()
            //     clearInterval(test2);
            //     //ticker2=null;  
            // }        
            
            fetch(`https://rt.data.gov.hk/v1/transport/mtr/getSchedule.php?line=TML&sta=${first3_2}&lang=tc`)
            .then(res2 => res2.json())
            .then(res2 =>{
           // console.log(res2);
           //console.log(res2.data["AEL-AWE"]["DOWN"][1]);
           
            var station2="TML-"+first3_2  
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
                
                for(i=0;i<26;i++){ //27record in this line
                    var contentname2= ".TML2content"+[i];
                   
                    document.querySelector(contentname2).innerHTML= arr2.join("<p></p>"); }

                
    
            }) 
            .catch(function() {
                //console.log('failure');
            })    
        }         
        }

           

           

               if (select.value != "TML" && select.value != "TML2" ){                    
                  //console.log("before:",count);
                   count=0;
                  // console.log("after:",count);
                   count=count+1;
                  // console.log("final:",count);
                   
                   clearInterval(test99);

               }

               if ( (select.value == "TML" || select.value == "TML2")&&(count==1) ){    
                line_item=null;
                test99 =setInterval(loop99,30000); 
            }

})//end select.change

});//end document load
