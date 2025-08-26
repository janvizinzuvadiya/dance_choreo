console.log("pickvibe.js loaded ✅");

document.addEventListener("DOMContentLoaded", function () {
    const vibeButtons = document.querySelectorAll(".tag");
    const vibesInput = document.getElementById("vibesInput");

    vibeButtons.forEach(button => {
        button.addEventListener("click", function () {
            this.classList.toggle("selected");

            // Collect selected vibes
            const selectedVibes = [...vibeButtons]
                .filter(btn => btn.classList.contains("selected"))
                .map(btn => btn.dataset.vibe);

            vibesInput.value = selectedVibes.join(","); // Store in hidden input
        });
    });
});


