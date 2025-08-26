    document.addEventListener("DOMContentLoaded", () => {
   
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 200,
                    modifier: 1,
                    slideShadows: false,
                },
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });

        
        const cards = document.querySelectorAll(".card");

        cards.forEach(card => {
            card.addEventListener("click", () => {
            const img = card.querySelector("img");
            const video = card.querySelector(".reel-video");

            // Hide image & show video
            img.style.display = "none";
            video.style.display = "block";

            // Play video
            video.currentTime = 0; // restart
            video.play();
            });

        });
    });