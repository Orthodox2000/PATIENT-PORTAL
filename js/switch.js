function switcher()
{    
     let a=document.getElementById('switche');
     if(a.style.justifyContent=="left")
          {//display login form
               document.getElementById('switche').style.justifyContent="right"; 
     document.getElementById("switc").innerHTML="SIGNUP"; 
     document.getElementById("shift1").style.display="none";
     document.getElementById("one").style.opacity="100%";
     document.getElementById("two").style.opacity="0"; 
     document.getElementById("shift2").style.display="initial"; 
     document.getElementById("shift2").style.display="flex";  
          }
     else
    { //display signup form
      
     document.getElementById('switche').style.justifyContent="left"; 
     document.getElementById("switc").innerHTML="LOGIN  ";   
     document.getElementById("two").style.opacity="100%"; 
     document.getElementById("one").style.opacity="0";
     document.getElementById("shift1").style.display="flex";
     document.getElementById("shift2").style.display="none";

    } 

}

function gb()
{  
    window.history.back();

}
