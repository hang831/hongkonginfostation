

$(document).ready(function() {


    const select = document.getElementById("select");

  
    select.addEventListener('change', () => { 
        //console.log( document.getElementById("select").value, typeof "AEL");

        if (select.value == "nothing"){ 

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
             document.querySelector(".EAL2_DOWN").style.display="none";
        }

})//end select.change

});//end document load
