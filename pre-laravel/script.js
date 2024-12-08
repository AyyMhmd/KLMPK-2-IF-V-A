// Logging pesan awal
console.log("Hello!");

// Variabel kalender
const header = document.querySelector(".calendar h1");
const dates = document.querySelector(".dates");
const navs = document.querySelectorAll("#prev, #next");

const months = [
  "January", "February", "March", "April", "May", "June", 
  "July", "August", "September", "October", "November", "December"
];

let date = new Date();
let month = date.getMonth();
let year = date.getFullYear();

// Fungsi untuk merender kalender
function renderCalendar() {
  const start = new Date(year, month, 1).getDay(); // Hari pertama bulan
  const endDate = new Date(year, month + 1, 0).getDate(); // Tanggal terakhir bulan
  const end = new Date(year, month, endDate).getDay(); // Hari terakhir bulan
  const endDatePrev = new Date(year, month, 0).getDate(); // Tanggal terakhir bulan sebelumnya

  let datesHtml = "";

  // Tanggal bulan sebelumnya
  for (let i = start; i > 0; i--) {
    datesHtml += `<li class="inactive">${endDatePrev - i + 1}</li>`;
  }

  // Tanggal bulan ini
  for (let i = 1; i <= endDate; i++) {
    const isToday =
      i === date.getDate() &&
      month === new Date().getMonth() &&
      year === new Date().getFullYear();

    datesHtml += `<li${isToday ? ' class="today"' : ""}>${i}</li>`;
  }

  // Tanggal bulan berikutnya
  for (let i = end; i < 6; i++) {
    datesHtml += `<li class="inactive">${i - end + 1}</li>`;
  }

  // Update DOM
  dates.innerHTML = datesHtml;
  header.textContent = `${months[month]} ${year}`;
}

// Event listener untuk navigasi kalender
navs.forEach(nav => {
  nav.addEventListener("click", e => {
    const btnId = e.target.id;

    if (btnId === "prev" && month === 0) {
      year--;
      month = 11;
    } else if (btnId === "next" && month === 11) {
      year++;
      month = 0;
    } else {
      month = btnId === "next" ? month + 1 : month - 1;
    }

    date = new Date(year, month, new Date().getDate());
    renderCalendar();
  });
});

// Render kalender awal
renderCalendar();

// Event untuk modal Bootstrap
const exampleModal = document.getElementById("exampleModal");
if (exampleModal) {
  exampleModal.addEventListener("show.bs.modal", event => {
    const button = event.relatedTarget; // Tombol pemicu modal
    const recipient = button.getAttribute("data-bs-whatever"); // Nilai data-bs-whatever

    const modalTitle = exampleModal.querySelector(".modal-title");
    const modalBodyInput = exampleModal.querySelector(".modal-body input");

    // Update konten modal
    modalTitle.textContent = `Subscribe for ${recipient}`;
    modalBodyInput.value = recipient;
  });
}

// Mode gelap
const button = document.getElementById("switch");
const body = document.querySelector("body");
const nav = document.querySelector(".semua-nav");
const links = document.querySelectorAll(".do");
const icon = document.querySelector("i");

let isToggled = false;

button.onclick = () => {
  isToggled = !isToggled;

  // Toggle mode gelap
  body.classList.toggle("dark-mode", isToggled);
  nav.classList.toggle("dark-mode", isToggled);
  links.forEach(link => link.classList.toggle("dark-mode", isToggled));

  // Update ikon
  if (isToggled) {
    icon.classList.remove("bi-moon-fill");
    icon.classList.add("bi-sun-fill");
  } else {
    icon.classList.remove("bi-sun-fill");
    icon.classList.add("bi-moon-fill");
  }
};

// Slider konten
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".slider");
  const prevBtn = document.querySelector(".prev");
  const nextBtn = document.querySelector(".next");
  const scrollAmount = 370;

  prevBtn.addEventListener("click", () => {
    slider.scrollBy({ left: -scrollAmount, behavior: "smooth" });
  });

  nextBtn.addEventListener("click", () => {
    slider.scrollBy({ left: scrollAmount, behavior: "smooth" });
  });
});
