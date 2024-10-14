<section
  id="booking"
  class="section-indentation"
  aria-labelledby="booking-heading"
>
  <div class="container">
    <h2 id="booking-heading" class="visually-hidden">Форма бронювання</h2>
    <div class="contact-wrap">
      <div class="contact-item">
    <div class="contact-box">
        <svg class="contact-icon" width="20" height="20" aria-label="Адреса">
            <use href="./assets/img/symbol-defs.svg#icon-city"></use>
        </svg>
        <span class="contact-text">
            Вул. Прорізна, 7, Київ, 01601, Україна
        </span>
    </div>
    <div class="contact-box">
        <svg class="contact-icon" width="20" height="20" aria-label="Телефон">
            <use href="./assets/img/symbol-defs.svg#icon-phone"></use>
        </svg>
        <span class="contact-text">+380 67 123 45 67</span>
    </div>
    <div class="contact-box">
        <svg class="contact-icon" width="20" height="20" aria-label="Email">
            <use href="./assets/img/symbol-defs.svg#icon-email"></use>
        </svg>
        <a
            class="contact-link"
            href="mailto:info@svichkymaysternya.com"
            aria-label="Написати на email"
            >info@svichkymaysternya.com</a
        >
    </div>
    <div class="contact-box">
        <svg
            class="contact-icon"
            width="20"
            height="20"
            aria-label="Місцезнаходження"
        >
            <use href="./assets/img/symbol-defs.svg#icon-map"></use>
        </svg>
        <a
            class="contact-link"
            href="https://www.google.com/maps?q=Київ,+вул.+Прорізна,+7"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Відкрити на карті"
            >Перейти</a
        >
    </div>
    <img class="contact-img" src="./assets/img/map.webp" alt="карта" width="200">
</div>

      <form
        class="application-form"
        id="myForm"
        aria-labelledby="booking-heading"
      >
        <div class="input-container">
          <svg class="icon" aria-hidden="true" focusable="false">
            <use href="./assets/img/symbol-defs.svg#icon-user"></use>
          </svg>
          <input
            type="text"
            name="name"
            class="input-field"
            placeholder="Ім'я"
            required
            aria-label="Ім'я"
          />
        </div>

        <div class="input-container">
          <svg class="icon" aria-hidden="true" focusable="false">
            <use href="./assets/img/symbol-defs.svg#icon-map"></use>
          </svg>
          <input
            type="email"
            name="email"
            class="input-field"
            placeholder="Email"
            required
            aria-label="Email"
          />
        </div>

        <div class="input-container">
          <svg class="icon" aria-hidden="true" focusable="false">
            <use href="./assets/img/symbol-defs.svg#icon-phone"></use>
          </svg>
          <input
            type="tel"
            name="phone"
            class="input-field"
            placeholder="Телефон"
            required
            aria-label="Телефон"
          />
        </div>
        <div class="input-container">
          <textarea
            name="message"
            class="textarea-field"
            placeholder="Коментар до замовлення"
            aria-label="Коментар до замовлення"
          ></textarea>
        </div>

        <div class="input-container">
          <input
            type="checkbox"
            name="privacy_policy"
            id="privacy_policy"
            class="checkbox"
            required
          />
          <label for="privacy_policy" class="checkbox-label">
            Я ознайомлений з
            <a href="/privacy-policy/">політикою конфіденційності</a>
          </label>
        </div>

        <input type="submit" value="Надіслати" class="submit-button" />
      </form>
    </div>
  </div>
</section>
