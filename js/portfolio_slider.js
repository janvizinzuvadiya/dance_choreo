document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.ptf_mySwiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    breakpoints: { 
      0: { slidesPerView: 1 }, 
      768: { slidesPerView: 2 }, 
      1024: { slidesPerView: 3 } 
    }
  });

  const popup = document.getElementById('popup-player');
  const popupVideo = document.getElementById('popup-video');
  const popupTitle = document.getElementById('popup-title');
  const popupDescription = document.getElementById('popup-description');
  const closeBtn = document.querySelector('.close-btn');

  // Open popup on slide click
  document.querySelectorAll('.ptf_swiper-slide').forEach(slide => {
    slide.addEventListener('click', function () {
      popupVideo.src = this.dataset.video;
      popupTitle.textContent = this.dataset.title || '';
      popupDescription.textContent = this.dataset.description || '';
      popup.style.display = 'flex';
      popupVideo.play();
    });
  });

  // Close popup
  function closePopup() {
    popupVideo.pause();
    popupVideo.src = '';
    popup.style.display = 'none';
  }

  closeBtn.addEventListener('click', closePopup);
  window.addEventListener('click', e => { if (e.target === popup) closePopup(); });
});
