// ========================================
// SCROLL REVEAL ANIMATION
// ========================================

const featuredPlaces =
  document.querySelectorAll(".visible");

if (featuredPlaces.length > 0) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add(
            "is-visible"
          );

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


// ========================================
// VIDEO PLAY AND PAUSE
// ========================================

const videos =
  document.querySelectorAll(
    ".menu-card-video"
  );

videos.forEach((video) => {
  // El video debe estar silenciado para
  // permitir la reproducción automática.
  video.muted = true;

  // Intenta reproducir el video.
  const playPromise = video.play();

  if (playPromise !== undefined) {
    playPromise
      .then(() => {
        video.classList.remove(
          "video-paused"
        );
      })
      .catch(() => {
        video.classList.add(
          "video-paused"
        );
      });
  }

  // Reproduce o pausa al hacer clic.
  video.addEventListener("click", () => {
    if (video.paused) {
      video
        .play()
        .then(() => {
          video.classList.remove(
            "video-paused"
          );
        })
        .catch((error) => {
          console.error(
            "The video could not be played:",
            error
          );
        });
    } else {
      video.pause();

      video.classList.add(
        "video-paused"
      );
    }
  });
});
