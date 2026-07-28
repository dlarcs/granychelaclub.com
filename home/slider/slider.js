"use strict";

document.addEventListener("DOMContentLoaded", () => {
  const revealElements =
    document.querySelectorAll(".gs-reveal");

  if (revealElements.length === 0) {
    return;
  }

  /*
   * Shows the slider when it enters
   * the visible area of the screen.
   */
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add("show");
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.3,
    }
  );

  revealElements.forEach((element) => {
    observer.observe(element);
  });
});
