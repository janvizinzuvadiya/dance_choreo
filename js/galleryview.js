console.log("galleryview.js loaded ✅");

document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const galleryItems = document.querySelectorAll(".gallery-item");

  filterButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Remove active from all buttons
      filterButtons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const category = btn.getAttribute("data-category");

      galleryItems.forEach(item => {
        if (category === "all" || item.getAttribute("data-category") === category) {
          item.style.display = "block"; // show
        } else {
          item.style.display = "none"; // hide
        }
      });
    });
  });

    const miniPlayer = document.getElementById("mini-player");
    const miniVideo = document.getElementById("mini-video");
    const closeBtn = document.getElementById("close-player");

    galleryItems.forEach(item => {
        item.addEventListener("click", function() {
            console.log("Clicked:", this);  // ✅ Debug log
            const videoUrl = this.getAttribute("data-video");
            console.log("Video URL:", videoUrl); // ✅ Check URL
            miniVideo.src = videoUrl;
            miniPlayer.style.display = "block";
            miniVideo.play();
        });
    });

    galleryItems.forEach(item => {
        item.addEventListener("click", function() {
            const videoUrl = this.getAttribute("data-video");
            miniPlayer.style.display = "block";
            miniVideo.pause();
            miniVideo.src = videoUrl;
            miniVideo.play();
        });
    });

    closeBtn.addEventListener("click", function() {
        miniVideo.pause();
        miniVideo.src = "";
        miniPlayer.style.display = "none";
    });

    window.addEventListener("click", (e) => {
    if (e.target === miniPlayer) {
      miniVideo.pause();
      miniVideo.src = "";
      miniPlayer.style.display = "none";
    }
  });


});

