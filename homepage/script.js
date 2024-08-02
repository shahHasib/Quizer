var hamberger=document.querySelector(".menu");
var bar1=document.querySelector(".bar1");
var bar2=document.querySelector(".bar2");
var bar3=document.querySelector(".bar3");
var menu=document.querySelector(".links")
var color=document.querySelector("#color");
hamberger.addEventListener('click',()=>{
    menu.classList.toggle("active");
  bar1.classList.toggle("bar-1");
  bar2.classList.toggle("bar-2");
  bar3.classList.toggle("bar-3");
})

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

function startQuiz(language) {
  window.location.href = `../questions/question.html?lang=${language}`;
}
