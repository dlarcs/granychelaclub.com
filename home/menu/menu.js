// Animación al hacer scroll
const featuredPlaces = document.querySelectorAll(".visible");

if (featuredPlaces.length > 0) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.3,
    }
  );

  featuredPlaces.forEach((place) => {
    observer.observe(place);
  });
}



document.addEventListener("DOMContentLoaded", () => {
  const videos = document.querySelectorAll(".menu-card-video");

  videos.forEach((video) => {
    // Intenta reproducir automáticamente
    const playPromise = video.play();

    if (playPromise !== undefined) {
      playPromise.catch(() => {
        video.classList.add("video-paused");
      });
    }

    // Click para reproducir o parar
    video.addEventListener("click", () => {
      if (video.paused) {
        video.play();
        video.classList.remove("video-paused");
      } else {
        video.pause();
        video.classList.add("video-paused");
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const videos = document.querySelectorAll(".menu-card-video");

  videos.forEach((video) => {
    // Intenta reproducir automáticamente
    const playPromise = video.play();

    if (playPromise !== undefined) {
      playPromise.catch(() => {
        video.classList.add("video-paused");
      });
    }

    // Click para reproducir o parar
    video.addEventListener("click", () => {
      if (video.paused) {
        video.play();
        video.classList.remove("video-paused");
      } else {
        video.pause();
        video.classList.add("video-paused");
      }
    });
  });
});
