document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");

    slider.addEventListener("mouseenter", function() {
        slider.style.animationPlayState = "paused";
    });

    slider.addEventListener("mouseleave", function() {
        slider.style.animationPlayState = "running";
    });

    

});
