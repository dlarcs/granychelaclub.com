const granchelaMenuButton = document.querySelector(
  ".granchela-menu-button"
);

const granchelaMenu = document.querySelector(
  "#granchela-menu"
);

function closeGranchelaMenu() {
  granchelaMenu.classList.remove("granchela-menu-open");

  granchelaMenuButton.classList.remove(
    "granchela-button-active"
  );

  granchelaMenuButton.setAttribute(
    "aria-expanded",
    "false"
  );
}

granchelaMenuButton.addEventListener("click", () => {
  const isOpen = granchelaMenu.classList.toggle(
    "granchela-menu-open"
  );

  granchelaMenuButton.classList.toggle(
    "granchela-button-active",
    isOpen
  );

  granchelaMenuButton.setAttribute(
    "aria-expanded",
    isOpen ? "true" : "false"
  );
});

document.addEventListener("click", (event) => {
  const clickedInsideMenu = granchelaMenu.contains(
    event.target
  );

  const clickedInsideButton =
    granchelaMenuButton.contains(event.target);

  if (!clickedInsideMenu && !clickedInsideButton) {
    closeGranchelaMenu();
  }
});

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    closeGranchelaMenu();
  }
});
