function toggleMobileMenu() {
  const menu = document.getElementById("mobileMenu");
  menu.classList.toggle("hidden");
}

function initParallax() {
  const layers = document.querySelectorAll(".parallax-layer");
  let ticking = false;

  function update() {
    const windowHeight = window.innerHeight;

    layers.forEach((layer) => {
      const rect = layer.getBoundingClientRect();

      if (rect.top < windowHeight && rect.bottom > 0) {
        // 1. Movimiento Parallax
        const speed = parseFloat(layer.getAttribute("data-speed")) || 0.15;
        const movement = Math.round(window.scrollY * speed * -0.6);
        layer.style.transform = `translate3d(0, ${movement}px, 0)`;

        // 2. Lógica: Desaparecer cuando el 50% de la foto pasó el tope
        const halfHeight = rect.height / 2;

        // Si el tope es negativo, significa que ya empezó a salir
        if (rect.top < -halfHeight) {
          // Calculamos la opacidad basándonos en la otra mitad restante
          // Se volverá invisible cuando rect.top llegue a -rect.height
          let opacity = 1 - (Math.abs(rect.top) - halfHeight) / halfHeight;
          layer.style.opacity = Math.max(0, Math.min(1, opacity));
        } else {
          layer.style.opacity = 1; // Sigue visible mientras no pase el 50%
        }
      }
    });
    ticking = false;
  }

  window.addEventListener("scroll", () => {
    if (!ticking) {
      requestAnimationFrame(update);
      ticking = true;
    }
  });
}

// Tour Dates Data – Replace with ACF output in production ?
// In WordPress: Use PHP to echo ACF repeater as JSON and assign to window.tourDates
const tourDates = [
  {
    date: "2026-05-29<",
    project: "Kabah",
    city: "La Paz",
    venue: "La Paz",
    ticket_link: "#", // Replace with real link
  },
  {
    date: "2026-05-30",
    project: "Okrilu",
    city: "Ciudad de Mexico",
    venue: "Arena Ciudad de Mexico",
    ticket_link:
      "https://boletosde.com/kabah/arena-cdmx/sabado-30-mayo-2026-21-00/resale", // Replace with real link
  },
  {
    date: "2026-06-13",
    project: "Antro",
    city: "Villahermosa",
    venue: "TBC",
    ticket_link: "#", // Replace with real link
  },
  {
    date: "2026-06-27",
    project: "Kabah",
    city: "Tijuana",
    venue: "TBC",
    ticket_link: "#", // Replace with real link
  },
  {
    date: "2026-08-22",
    project: "Kabah",
    city: "Monterrey",
    venue: "Foro GNP",
    ticket_link: "#", // Replace with real link
  },
  {
    date: "2026-09-18",
    project: "Antro",
    city: "Guadalajara",
    venue: "Arena Guadalajara",
    ticket_link:
      "https://www.superboletos.com/landing-evento/UQ9esZeqP5p8rT7t7d_ZxQ",
  },
  // Add more as needed from ACF
];

function renderTourDates() {
  const container = document.getElementById("tour-dates-container");
  if (container) {
    container.innerHTML = "";

    tourDates.forEach((tour) => {
      const card = document.createElement("div");
      card.className =
        "tour-card bg-zinc-900 rounded-3xl p-8 border border-white/10";
      card.innerHTML = `
          <div class="text-blue-400 text-sm font-medium">${tour.project}</div>
          <div class="text-blue-400 text-sm font-medium">${tour.date}</div>
          <div class="text-2xl font-semibold mt-2">${tour.city}</div>
          <div class="text-zinc-400">${tour.venue}</div>
          <a href="${tour.ticket_link}" target="_blank" 
            class="mt-6 inline-block w-full text-center py-4 bg-blue-400 hover:bg-blue-300 text-black font-semibold rounded-2xl">
            GET TICKETS
          </a>
        `;
      container.appendChild(card);
    });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  initParallax();
  renderTourDates();

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", (e) => {
      const target = document.querySelector(link.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  // Configuración del observador
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show"); // Añade la clase cuando es visible
      }
    });
  });

  // Selecciona todos los elementos que quieres animar
  const hiddenElements = document.querySelectorAll(".hidden");
  hiddenElements.forEach((el) => observer.observe(el));

  console.log(
    "%c✅ Sergio O'Farrill !",
    "color:#f5c542; font-family:monospace;",
  );
});

// 1. Función para elegir idioma y guardar selección
function setLanguage(lang) {
  // Guardamos la elección para que no vuelva a salir
  localStorage.setItem("user_lang_selected", lang);
  console.log(lang);
  const popup = document.getElementById("region-popup");
  if (popup) popup.classList.replace("flex", "hidden");

  // Redirección
  if (lang === "es") {
    window.location.href = "/es-sergio-ofarrill";
  } else {
    window.location.href = "/";
  }
}

window.onload = function () {
  // 1. Declarar la constante al inicio
  const selectedLang = localStorage.getItem("user_lang_selected");

  // 2. Referenciar el botón de home (ajústalo al ID de tu menú)
  const homeLink =
    document.getElementById("home-link") ||
    document.querySelector(".menu-item-home a");

  // 3. Aplicar la lógica de redirección del enlace
  if (homeLink && selectedLang) {
    if (selectedLang === "es") {
      homeLink.href = "/es-sergio-ofarrill";
    } else {
      homeLink.href = "/";
    }
  }

  // 4. Si ya existe el idioma, terminamos aquí para no mostrar el popup
  if (selectedLang !== null) {
    return;
  }

  // 3. Consultar ubicación
  fetch("https://ipapi.co/json/")
    .then((response) => {
      if (!response.ok) throw new Error(`Error: ${response.status}`);

      const contentType = response.headers.get("content-type");
      if (!contentType || !contentType.includes("application/json")) {
        throw new TypeError("No se recibió un JSON válido");
      }
      return response.json();
    })
    .then((data) => {
      console.log("Datos recibidos:", data);

      // Actualizar texto del país
      const countrySpan = document.getElementById("user-country");
      if (countrySpan) {
        countrySpan.innerText = data.country_name;
      }

      // Mostrar popup con Tailwind v4
      const popup = document.getElementById("region-popup");
      if (popup) {
        popup.classList.remove("hidden");
        popup.classList.add("flex");
      }
    })
    .catch((error) => {
      console.error("Error en el proceso:", error);
      // Opcional: Mostrar el popup incluso si falla la API (por si acaso)
      const popup = document.getElementById("region-popup");
      if (popup) {
        popup.classList.remove("hidden");
        popup.classList.add("flex");
      }
    });
};

// Funcion para spam de correo

// Usamos DOMContentLoaded para asegurar que el HTML ya exista
window.addEventListener("DOMContentLoaded", (event) => {
  const encodedEmail = "cGFydG5lcnNAc2VyZ2lvb2ZhcnJpbGwuY29t";
  const decodedEmail = atob(encodedEmail);
  const link = document.getElementById("email-link");

  // Verificamos que el elemento exista antes de asignarle cosas
  if (link) {
    link.href = "mailto:" + decodedEmail;
    link.textContent = "Partnership & booking inquiries";
  }
});
