//themes
var color=document.querySelector("#color");
color.addEventListener('change',(e)=>{
   if(e.target.value=="red"){
    document.documentElement.style.setProperty('--main-color','red');
   }
   if(e.target.value=="blue"){
     document.documentElement.style.setProperty('--main-color','blue');
    }
    if(e.target.value=="green"){
     document.documentElement.style.setProperty('--main-color','green');
    }
    if(e.target.value=="aqua"){
     document.documentElement.style.setProperty('--main-color','aqua');
    }
    if(e.target.value=="gray"){
     document.documentElement.style.setProperty('--main-color','grey');
    }
    if(e.target.value=="black"){
     document.documentElement.style.setProperty('--main-color','black');
    }
    
   
   })



//sliding buttons
var registerBtn=document.getElementById('slide-register-btn');
var loginBtn=document.getElementById('slide-login-btn');


loginBtn.addEventListener('click', () => {
   document.querySelector('.form-inner').style.transform = 'translateX(0)';
   document.querySelector('.form-container').style.transform = 'translateX(0)';
   document.querySelector('.img').style.transform = 'translateX(0)';
   loginBtn.style.display="none";
   registerBtn.style.display="block";
});

registerBtn.addEventListener('click', () => {
   document.querySelector('.form-inner').style.transform = 'translateX(-50%)';
   document.querySelector('.form-container').style.transform = 'translateX(100%)';
   document.querySelector('.img').style.transform = 'translateX(-100%)';
   registerBtn.style.display="none";
   loginBtn.style.display="block";
});




//validation


var email = document.getElementById("email");
var pass = document.getElementById("password");
var btnSubmit = document.getElementById("btnSubmit");

var errText1 = document.querySelector(".errText-1");
var errText2 = document.querySelector(".errText-2");
var errText3 = document.querySelector(".errText-3");
var errText4 = document.querySelector(".errText-4");
var errText5 = document.querySelector(".errText-5");

var errImage1 = document.querySelector(".errImage1");
var errImage2 = document.querySelector(".errImage2");
var errImage3 = document.querySelector(".errImage3");
var errImage4 = document.querySelector(".errImage4");
var errImage5 = document.querySelector(".errImage5");

function regValidation() {
  if (email.value == "") {
    alert("Enter email");
    return false;
  }
  if(pass.value==""){
    alert("enter Password");
    return false;
  }
  return true;
}




pass.addEventListener("input", function () {
  var value = pass.value;

  if (/(?=.*[a-z])/.test(value)) {
    errImage1.src = "../resources/mark.png";
    errText1.style.color = "green";
   
}
if (/(?=.*[A-Z])/.test(value)) {
  errImage2.src = "../resources/mark.png";
  errText2.style.color = "green";
  
}
if (/(?=.*\d)/.test(value)) {
  errImage3.src = "../resources/mark.png";
  errText3.style.color = "green";
  
}
if (/(?=.*[@$!%*?&])/.test(value)) {
  errImage4.src = "../resources/mark.png";
  errText4.style.color = "green";
  
}
if (/.{8,}/.test(value)) {
  errImage5.src = "../resources/mark.png";
  errText5.style.color = "green";
 
}

if(!value){
  errImage1.src="../resources/black-circle.png";
  errText1.style.color="red";
  errImage2.src="../resources/black-circle.png";
  errText2.style.color="red";
  errImage3.src="../resources/black-circle.png";
  errText3.style.color="red";
  errImage4.src="../resources/black-circle.png";
  errText4.style.color="red";
  errImage5.src="../resources/black-circle.png";
  errText5.style.color="red";
}




  
});

pass.addEventListener('focus', function () {

  errText1.innerHTML = "At least one lowercase letter.";
   errImage1.src="../resources/black-circle.png"


  errText2.innerHTML = "At least one uppercase letter";
   errImage2.src="../resources/black-circle.png"

   errText3.innerHTML = "At least one digit";
   errImage3.src="../resources/black-circle.png";

   errText4.innerHTML = "At least one special character";
   errImage4.src="../resources/black-circle.png";

   errText5.innerHTML = "Minimum 8 character required.";
   errImage5.src="../resources/black-circle.png";
   
});



