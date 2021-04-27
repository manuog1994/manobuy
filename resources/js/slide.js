import Swiper from 'swiper/bundle';

  // init Swiper:
if(document.getElementsByClassName('swiper-container')){
  let swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

if(document.getElementsByClassName('swiper-containerd')){
  let swiper = new Swiper('.swiper-containerCategories');
}

if(document.getElementsByClassName('swiper-containerd')){
  let swiper = new Swiper('.swiper-containerd', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}


