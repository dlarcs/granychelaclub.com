"use strict";

const gcToggle = document.querySelector(".gc-toggle");
const gcMenu = document.querySelector("#gc-menu");

/**
 * Opens or closes the navigation menu.
 *
 * @param {boolean} open
 */
function setGcMenu(open) {
  if (!gcToggle || !gcMenu) {
    return;
  }

  gcMenu.classList.toggle("open", open);
  gcToggle.classList.toggle("active", open);

  gcToggle.setAttribute(
    "aria-expanded",
    open ? "true" : "false"
  );

  gcToggle.setAttribute(
    "aria-label",
    open ? "Cerrar menú" : "Abrir menú"
  );
}

/**
 * Detects whether the menu is currently open.
 *
 * @returns {boolean}
 */
function isGcMenuOpen() {
  return gcMenu?.classList.contains("open") ?? false;
}

if (gcToggle && gcMenu) {
  gcToggle.addEventListener("click", () => {
    setGcMenu(!isGcMenuOpen());
  });

  document.addEventListener("click", (event) => {
    const clickedElement = event.target;

    if (!(clickedElement instanceof Node)) {
      return;
    }

    const clickedMenu = gcMenu.contains(clickedElement);
    const clickedToggle = gcToggle.contains(clickedElement);

    if (!clickedMenu && !clickedToggle) {
      setGcMenu(false);
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && isGcMenuOpen()) {
      setGcMenu(false);
      gcToggle.focus();
    }
  });

  gcMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      setGcMenu(false);
    });
  });
}
