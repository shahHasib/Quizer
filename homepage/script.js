var hamberger=document.querySelector(".menu");
var bar1=document.querySelector(".bar1");
var bar2=document.querySelector(".bar2");
var bar3=document.querySelector(".bar3");
var menu=document.querySelector(".links")
var color=document.querySelector("#color");
var container=document.querySelector('.cards');
var leaderboardbtn=document.querySelector('.btnLeaderboard');
var leaderboard=document.querySelector('#ld');
var btnquiz=document.querySelector(".btnQuizzes");

var progress=document.querySelector('.progress-bar');

window.addEventListener('scroll',()=>{
  var winscreen=document.documentElement.scrollTop;
console.log(winscreen);
var height=document.documentElement.scrollHeight - document.documentElement.clientHeight;
console.log(height);
var scrolled=winscreen / height * 100;
console.log(scrolled)
progress.style.width =scrolled + "%";

})




hamberger.addEventListener('click',()=>{
    menu.classList.toggle("active");
  bar1.classList.toggle("bar-1");
  bar2.classList.toggle("bar-2");
  bar3.classList.toggle("bar-3");
})

// color.addEventListener('change',(e)=>{
// if(e.target.value=="red"){
//  document.documentElement.style.setProperty('--main-color','red');
// }

// if(e.target.value=="blue"){
//   document.documentElement.style.setProperty('--main-color','blue');
//  }
//  if(e.target.value=="green"){
//   document.documentElement.style.setProperty('--main-color','green');
//  }
//  if(e.target.value=="aqua"){
//   document.documentElement.style.setProperty('--main-color','aqua');
//  }
//  if(e.target.value=="gray"){
//   document.documentElement.style.setProperty('--main-color','grey');
//  }
//  if(e.target.value=="black"){
//   document.documentElement.style.setProperty('--main-color','black');
//  }
 

// })

leaderboardbtn.addEventListener('click',function(){
 // alert(0)
  container.style="display:none";
  leaderboard.style="display:block";
  btnquiz.style="border-bottom:none";
  leaderboardbtn.style="border-bottom:2px solid";
})

btnquiz.addEventListener('click',function(){
  
   container.style="display:flex";
   leaderboard.style="display:none";
   btnquiz.style="border-bottom:2px solid";
   leaderboardbtn.style="border-bottom:none";
 })

// Sabhi buttons jinke class 'btnPlay' hai unko select karo
document.querySelectorAll('.btnPlay').forEach(button => {
  
  button.addEventListener('click', function() {
     
      const card = this.closest('.card');
      
      // Card se category, grade aur level ko retrieve karo
      const category = card.getAttribute('data-category');
      const grade = card.getAttribute('data-grade');
      const level = card.getAttribute('data-level');
    
      window.location.href = `../questions/question.php?category=${encodeURIComponent(category)}&grade=${encodeURIComponent(grade)}&level=${encodeURIComponent(level)}`;
  });
});



