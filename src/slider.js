document.addEventListener("DOMContentLoaded", function () {
    const carouselElement = document.getElementById("carouselSlider");
    const carousel = new bootstrap.Carousel(carouselElement, { interval: false, pause: false });
    const progressBarCircle = carouselElement.querySelector(".progress-ring-circle");
    const radius = 18;
    const circumference = 2 * Math.PI * radius;
    let timer = null;

    function resetProgressRing() {
        if (progressBarCircle) {
            progressBarCircle.classList.remove("is-animating");
            progressBarCircle.style.transitionDuration = "0s";
            progressBarCircle.style.strokeDashoffset = circumference;
        }
    }
    function animateProgressRing(durationMs) {
        //console.log("Animating progress ring for duration:", durationMs);
        resetProgressRing();
        if (progressBarCircle) {
            setTimeout(() => {
                progressBarCircle.classList.add("is-animating");
                progressBarCircle.style.transitionDuration = `${durationMs / 1000}s`;
                progressBarCircle.style.strokeDashoffset = "0";
            }, 10);
        }
    }
    function playSlide() {
        clearTimeout(timer);
        const allVideos = carouselElement.querySelectorAll("video");
        allVideos.forEach((v) => {
            v.pause();
            v.onended = null;
        });
        resetProgressRing();
        const activeItem = carouselElement.querySelector(".carousel-item.active");
        if (!activeItem) return;
        const type = activeItem.getAttribute("data-type");
        const video = activeItem.querySelector("video");
        if (type === "video" && video) {
            if (video.readyState < 2) {
                video.onloadeddata = () => handleVideoPlayback(video, carousel);
            } else {
                handleVideoPlayback(video, carousel);
            }
        } else {
            let duration = parseInt(activeItem.getAttribute("data-interval"));
            if (isNaN(duration)) duration = 5000;
            animateProgressRing(duration);
            timer = setTimeout(() => {
                carousel.next();
            }, duration);
        }
    }
    function handleVideoPlayback(video, carousel) {
        const videoDurationMs = video.duration * 1000;
        animateProgressRing(videoDurationMs);
        video.currentTime = 0;
        video
            .play()
            .then(() => {
                video.onended = () => {
                    resetProgressRing();
                    carousel.next();
                };
            })
            .catch((err) => {
                console.error("Video oynatılamadı:", err);
                timer = setTimeout(() => carousel.next(), 4000);
            });
    }
    playSlide();
    carouselElement.addEventListener("slid.bs.carousel", playSlide);
    carouselElement.addEventListener("slide.bs.carousel", () => {
        clearTimeout(timer);
        resetProgressRing();
    });
});
