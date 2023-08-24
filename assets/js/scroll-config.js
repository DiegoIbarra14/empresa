
const pr=document.querySelector(".we__image");
let frase=document.querySelector(".production-frase");
 const cargar=(entradas)=>{
    entradas.forEach((entrada) => {
        
        if(entrada.isIntersecting){
             
             
            
        }
        
    });


 }

 const observador=new IntersectionObserver(cargar,{
     root:null,
     rootMargin:"0px 0px 0px 0px",
     threshold: 1.0
 });
 observador.observe(pr);
 







