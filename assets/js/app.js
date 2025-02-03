// Загрузка страницы //
window.addEventListener("load", () => {
  console.log("Загрузился");
  const preloader = document.getElementById("preloader");
  const content = document.querySelector(".content");

  // Убираем прелоадер
  preloader.style.opacity = "0";
  preloader.style.transition = "opacity 0.5s";

  // Показываем контент после анимации
  setTimeout(() => {
    preloader.style.display = "none";
    content.style.display = "block";
  }, 500); // 500 мс соответствует длительности transition
});

// hamburger //
window.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelectorAll(".hamburger"),
    menuClose = document.querySelectorAll(".menu__link, .menu__close"),
    menuActiv = document.querySelector(".nav");
  function menuActive() {
    if (window.innerWidth < 1070) {
      hamburger.forEach((item) => {
        item.addEventListener("click", function () {
          menuActiv.style.display = "block";
        });
      });

      menuClose.forEach((item) => {
        item.addEventListener(
          "click",
          (event) => {
            event.preventDefault();

            // Добавляем задержку перед закрытием меню
            setTimeout(() => {
              menuActiv.style.display = "none";
            });
          },
          1500
        );
      });
    }
  }
  window.addEventListener("load", menuActive);
  // Вызываем функцию при изменении размера окна
  window.addEventListener("resize", menuActive);
});

// Плавная прокрутка //
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault(); // Отключаем стандартное поведение перехода по ссылке

    const targetId = this.getAttribute("href").substring(1); // Получаем ID целевого элемента
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: "smooth", // Плавная прокрутка
        block: "start", // Прокрутка к началу элемента
      });
    }
  });
});

// advantages scroll //
const advantagesScrollElements = document.querySelectorAll(
  ".advantages-wrapper, .select-card__wrapper, .progress-item__images"
);

advantagesScrollElements.forEach((advantagesScroll) => {
  let isDragging = false;
  let startX;
  let scrollLeft;

  advantagesScroll.addEventListener("mousedown", (e) => {
    isDragging = true;
    advantagesScroll.style.cursor = "grabbing";
    startX = e.pageX - advantagesScroll.offsetLeft;
    scrollLeft = advantagesScroll.scrollLeft;
  });

  advantagesScroll.addEventListener("mouseleave", () => {
    isDragging = false;
    advantagesScroll.style.cursor = "grab";
  });

  advantagesScroll.addEventListener("mouseup", () => {
    isDragging = false;
    advantagesScroll.style.cursor = "grab";
  });

  advantagesScroll.addEventListener("mousemove", (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - advantagesScroll.offsetLeft;
    const walk = (x - startX) * 1; // Скорость прокрутки
    advantagesScroll.scrollLeft = scrollLeft - walk;
  });
});

// slider //
document.addEventListener("DOMContentLoaded", () => {
  const sliderContainer = document.querySelector(".slider-container");
  const sliderWrapper = document.querySelector(".slider-wrapper");
  const sliderItems = document.querySelectorAll(".slider-item");

  let currentIndex = 0;
  let slidesToShow = 1; // Количество видимых слайдов
  let centerPadding = 130; // Паддинг по бокам центрального слайда
  let startX = 0; // Начальная позиция свайпа
  let endX = 0; // Конечная позиция свайпа

  function updateSlider() {
    const containerWidth = sliderContainer.offsetWidth;
    const itemWidth = (containerWidth - 2 * centerPadding) / slidesToShow;

    sliderWrapper.style.transform = `translateX(-${
      currentIndex * itemWidth - centerPadding
    }px)`;

    sliderItems.forEach((item, i) => {
      item.style.width = `${itemWidth}px`;

      const img = item.querySelector("img");
      if (img) {
        if (i === currentIndex || i === sliderItems.length - 1) {
          img.style.filter = "brightness(100%)";
          img.style.zIndex = "10";
        } else {
          img.style.filter = "brightness(60%)";
          img.style.zIndex = "1";
        }
      }
    });
  }

  function goToSlide(index) {
    if (index < 0) {
      currentIndex = sliderItems.length - 1;
    } else if (index >= sliderItems.length) {
      currentIndex = 0;
    } else {
      currentIndex = index;
    }
    updateSlider();
  }

  // Адаптивные настройки
  function updateResponsiveSettings() {
    const viewportWidth = window.innerWidth;

    if (viewportWidth <= 480) {
      centerPadding = 10;
    } else if (viewportWidth <= 1260) {
      centerPadding = 20;
    } else {
      centerPadding = 130;
    }

    updateSlider();
  }

  window.addEventListener("resize", updateResponsiveSettings);

  // Добавляем обработку свайпа
  sliderContainer.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX; // Сохраняем начальную точку
  });

  sliderContainer.addEventListener("touchmove", (e) => {
    endX = e.touches[0].clientX; // Обновляем конечную точку
  });

  sliderContainer.addEventListener("touchend", () => {
    const deltaX = endX - startX; // Разница между начальной и конечной точкой

    if (deltaX > 50) {
      // Свайп вправо
      goToSlide(currentIndex - 1);
    } else if (deltaX < -50) {
      // Свайп влево
      goToSlide(currentIndex + 1);
    }

    // Сбрасываем значения
    startX = 0;
    endX = 0;
  });

  // Автоматическая прокрутка (опционально)
  setInterval(() => {
    goToSlide(currentIndex + 1);
  }, 3000);

  // Добавляем обработчики кликов на слайды
  sliderItems.forEach((item, index) => {
    item.addEventListener("click", () => {
      if (index === currentIndex) {
        goToSlide(currentIndex + 1);
      } else {
        goToSlide(index);
      }
    });
  });

  // Инициализация
  updateResponsiveSettings();
  goToSlide(0);
});

//select //
const next = document.getElementById("next"),
  selectWrapper1 = document.getElementById("select1"),
  selectWrapper2 = document.getElementById("select2");

next.addEventListener("click", function () {
  selectWrapper1.classList.remove("select__wrapper-active");
  selectWrapper2.classList.add("select__wrapper-active");
});

if (window.innerWidth > 576) {
  const selectArrowLeft = document.getElementById("selectArrowLeft"),
    selectArrowRight = document.getElementById("selectArrowRight");

  let currentOffset = 0;
  const itemWidth = 400;

  // Функция для получения активного wrapper
  function getActiveWrapper() {
    return document.querySelector(".select-card__wrapper-active");
  }

  // Функция для обновления состояния кнопок
  function updateButtons() {
    const activeWrapper = getActiveWrapper();
    if (!activeWrapper) return;

    const itemCount =
      activeWrapper.querySelectorAll(".select-card__item").length;
    const minOffset = -(itemWidth * (itemCount - 1));

    selectArrowLeft.disabled = currentOffset === 0;
    selectArrowRight.disabled = currentOffset === minOffset;
  }

  // Обработчик для кнопки "влево"
  selectArrowLeft.addEventListener("click", function () {
    const activeWrapper = getActiveWrapper();
    if (!activeWrapper) return;

    if (currentOffset < 0) {
      currentOffset += itemWidth;
      activeWrapper.style.transform = `translateX(${currentOffset}px)`;
      updateButtons();
    }
  });

  // Обработчик для кнопки "вправо"
  selectArrowRight.addEventListener("click", function () {
    const activeWrapper = getActiveWrapper();
    if (!activeWrapper) return;

    const itemCount =
      activeWrapper.querySelectorAll(".select-card__item").length;
    const minOffset = -(itemWidth * (itemCount - 1));

    if (currentOffset > minOffset) {
      currentOffset -= itemWidth;
      activeWrapper.style.transform = `translateX(${currentOffset}px)`;
      updateButtons();
    }
  });

  updateButtons();
}

const floorSelect = document.getElementById("floor"),
  cardWrappers = document.querySelectorAll(".select-card__wrapper"),
  selectStepDescr = document.querySelectorAll(".select-step__descr-wrapper");

// Функция для обработки изменения значения в select
floorSelect.addEventListener("change", function () {
  const selectedValue = this.value; // Получаем выбранное значение

  // Убираем активный класс у всех блоков
  cardWrappers.forEach((wrapper) => {
    wrapper.classList.remove("select-card__wrapper-active");
  });
  selectStepDescr.forEach((wrapper) => {
    wrapper.classList.remove("select-step__descr-wrapper-active");
  });

  // Находим блок с соответствующим ID и добавляем ему класс
  const activeWrapper = document.getElementById(`cardWrapper${selectedValue}`);
  if (activeWrapper) {
    activeWrapper.classList.add("select-card__wrapper-active");
  }
  const activeStepDescr = document.getElementById(
    `selectStepDescr${selectedValue}`
  );
  if (activeStepDescr) {
    activeStepDescr.classList.add("select-step__descr-wrapper-active");
  }
});

// modal //
const modalForm = document.querySelectorAll(".openForm"),
  modalClose = document.querySelector(".modal-content__close"),
  modal = document.querySelector(".modal");

modalForm.forEach((item) => {
  item.addEventListener("click", () => {
    modal.style.display = "block";
  });
});
modalClose.addEventListener("click", () => {
  modal.style.display = "none";
});

// thanks //
const buttonForm = document.getElementById("wpforms-submit-494"),
  modalSubheader = document.querySelector(".modal-content__subheader"),
  blockForm = document.querySelector(".modal-content__form"),
  thanks = document.querySelector(".modal-content__thanks"),
  privat = document.querySelector(".modal-content__privat");

buttonForm.addEventListener("click", function () {
  modalSubheader.style.display = "none";
  blockForm.style.display = "none";
  privat.style.display = "none";
  thanks.style.display = "flex";
  modal.style.height = "70%";
});

// phone //
const phone = document.querySelectorAll(".phone");

phone.forEach((item) => {
  const phoneArr = item.innerHTML.split("");
  const res = `${phoneArr.slice(0, 2).join("")} (${phoneArr
    .slice(2, 5)
    .join("")}) ${phoneArr.slice(5, 8).join("")}-${phoneArr
    .slice(8, 10)
    .join("")}-${phoneArr.slice(10).join("")}`;
  item.innerHTML = res;
});

// mortgage //
document.addEventListener("DOMContentLoaded", () => {
  const buttonsMortgage = document.querySelectorAll(".mortgage-category");
  const tbodiesMortgage = document.querySelectorAll("tbody[data-category]");

  // Установить активный класс по умолчанию для первой кнопки
  if (buttonsMortgage.length > 0) {
    buttonsMortgage[0].classList.add("button_primary", "active");
  }

  // Показать первый tbody по умолчанию
  if (tbodiesMortgage.length > 0) {
    tbodiesMortgage.forEach((tbody, index) => {
      tbody.style.display = index === 0 ? "" : "none";
    });
  }

  // Обработчик клика для переключения
  buttonsMortgage.forEach((button) => {
    button.addEventListener("click", () => {
      const selectedCategory = button.id; // ID кнопки совпадает с категорией

      // Скрыть все tbody
      tbodiesMortgage.forEach((tbody) => {
        tbody.style.display =
          tbody.getAttribute("data-category") === selectedCategory
            ? ""
            : "none";
      });

      // Обновить классы у кнопок
      buttonsMortgage.forEach((btn) => {
        btn.classList.remove("button_primary", "active"); // Снять классы
      });
      button.classList.add("button_primary", "active"); // Добавить классы выбранной кнопке
    });
  });
});
window.addEventListener("scroll", function () {
  if (window.scrollY > 1600) {
    document.querySelector(".up").style.display = "flex";
  } else {
    document.querySelector(".up").style.display = "none";
  }
});