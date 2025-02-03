// progress //
document.addEventListener("DOMContentLoaded", () => {
  const buttonsProgress = document.querySelectorAll(".progress__year");
  const divProgress = document.querySelectorAll("div[data-category]");

  // Установить активный класс по умолчанию для первой кнопки
  if (buttonsProgress.length > 0) {
    buttonsProgress[0].classList.add("button_primary", "active");
  }

  // Показать первый tbody по умолчанию
  if (divProgress.length > 0) {
    divProgress.forEach((div, index) => {
      div.style.display = index === 0 ? "" : "none";
    });
  }

  // Обработчик клика для переключения
  buttonsProgress.forEach((button) => {
    button.addEventListener("click", () => {
      const selectedCategory = button.id; // ID кнопки совпадает с категорией

      // Скрыть все tbody
      divProgress.forEach((div) => {
        div.style.display =
          div.getAttribute("data-category") === selectedCategory ? "" : "none";
      });

      // Обновить классы у кнопок
      buttonsProgress.forEach((btn) => {
        btn.classList.remove("button_primary", "active"); // Снять классы
      });
      button.classList.add("button_primary", "active"); // Добавить классы выбранной кнопке
    });
  });
});
