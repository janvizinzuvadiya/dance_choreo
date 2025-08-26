    console.log("turnthevideo.js loaded ✅");
    
    document.addEventListener("DOMContentLoaded", function () {
    
    const changeVideoBtn = document.getElementById("changeVideoBtn");
    const videoInput = document.getElementById("videoInput");
    const videoElement = document.querySelector(".custom-video");
    const originalSrc = videoElement.querySelector("source").src;

    // When button clicked -> open file picker
    changeVideoBtn.addEventListener("click", function () {
        videoInput.click();
    });

    // When user selects a video
    videoInput.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const newVideoURL = URL.createObjectURL(file);

            // Update video source
            videoElement.src = newVideoURL;
            videoElement.play();

            // Reset to original after 30 seconds
            setTimeout(() => {
                videoElement.src = originalSrc;
                videoElement.play();
                URL.revokeObjectURL(newVideoURL); // Clean up
            }, 30000);
        }
    });
});

