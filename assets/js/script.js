 let menu=document.querySelector(".menu-mobile-items");
 var buton=document.getElementById("menu-toggle");
 let exit=document.querySelector(".save");
 let nav=document.querySelector(".bar");
let navmb=document.querySelector(".header");

window.onscroll=function(){
  if(window.innerWidth>550){
    var imgemp=document.querySelector(".content-empresa");

    var position=window.pageYOffset || document.documentElement.scrollTop;
    imgemp.style.right= (position)*0.1+"px";


  }
  
  // console.log(position);
  
  

}











 function toogle(){
  menu.classList.remove("menu-mobile-closed");
  console.log("abrir");
    
  }

function cambio(){
  menu.classList.add("menu-mobile-closed");
  console.log("cerrar");
    
}


buton.addEventListener("click",toogle);
exit.addEventListener("click",cambio);




window.addEventListener("scroll",()=>{
  
    nav.classList.toggle("stiki",window.scrollY > 0);
    navmb.classList.toggle("stiki",window.scrollY > 0);


 
 

})






















//  window.addEventListener("resize",(e)=>{
//    let ancho=window.innerWidth;
//    if ((ancho>=1180 )&& menu.classList.contains("menu-mobile-closed")){
//     menu.classList.add("menu-mobile-closed");
//   }
    

//    })
//    buton.addEventListener("click",toogle);
 
