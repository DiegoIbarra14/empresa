const swiper = new Swiper('.swiper-hero', {
    // Optional parameters
    direction:"horizontal",
    loop: true,
    // effect:"fade",
    autoplay:{
      delay:4000,
      disableOnInteraction:false
    },
    
    fadeEffect: {
      crossFade: true,
    }, 

  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
      dynamicBullets:true,
    },
  
    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    //   scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });




//Este es el slider de la section nosotros

