console.log('Hello!');

  const header = document.querySelector(".calendar h1");
  const dates = document.querySelector(".dates");
  const navs = document.querySelectorAll("#prev, #next");
  
  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  
  let date = new Date();
  let month = date.getMonth();
  let year = date.getFullYear();
  
  function renderCalendar() {
    // first day of the month
    const start = new Date(year, month, 1).getDay();
    // last date of the month
    const endDate = new Date(year, month + 1, 0).getDate();
    // last day of the month
    const end = new Date(year, month, endDate).getDay();
    // last date of the previous month
    const endDatePrev = new Date(year, month, 0).getDate();
  
    let datesHtml = "";
  
    for (let i = start; i > 0; i--) {
      datesHtml += `<li class="inactive">${endDatePrev - i + 1}</li>`;
    }
  
    for (let i = 1; i <= endDate; i++) {
      let className =
        i === date.getDate() &&
        month === new Date().getMonth() &&
        year === new Date().getFullYear()
          ? ' class="today"'
          : "";
      datesHtml += `<li${className}>${i}</li>`;
    }
  
    for (let i = end; i < 6; i++) {
      datesHtml += `<li class="inactive">${i - end + 1}</li>`;
    }
  
    dates.innerHTML = datesHtml;
    header.textContent = `${months[month]} ${year}`;
  }
  
  navs.forEach((nav) => {
    nav.addEventListener("click", (e) => {
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
      year = date.getFullYear();
      month = date.getMonth();
  
      renderCalendar();
    });
  });
  
  renderCalendar();

  const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget // Tombol yang memicu modal
    const recipient = button.getAttribute('data-bs-whatever') // Ambil nilai dari data-bs-whatever

    const modalTitle = exampleModal.querySelector('.modal-title') // Judul modal
    const modalBodyInput = exampleModal.querySelector('.modal-body input') // Input field dalam modal

    // Menyesuaikan konten modal berdasarkan tombol yang dipilih
    modalTitle.textContent = `Subscribe for ${recipient}`
    modalBodyInput.value = recipient
  })
}

let button = document.getElementById("switch");
let body = document.querySelector("body");
let nav = document.querySelector(".semua-nav");
let icon = document.getElementById("icon");

let isToggled = false;

button.onclick = () => {
  isToggled = !isToggled;

  // Perbarui tema warna
  body.style.backgroundColor = isToggled ? "black" : "white";
  body.style.color = isToggled ? "white" : "black";

  // Perbarui warna navbar
  nav.style.backgroundColor = isToggled ? "black" : "white";
  nav.style.boxShadow = isToggled
    ? "0 4px 8px rgba(255, 255, 255, 0.3)" // Shadow terang untuk mode gelap
    : "0 4px 8px rgba(0, 0, 0, 0.3)"; // Shadow gelap untuk mode terang

    
  // Perbarui warna .do
  let links = document.querySelectorAll(".do");
  links.forEach(link => {
    link.style.color = isToggled
      ? "rgba(255, 255, 255, 0.65)"
      : "rgba(0, 0, 0, 0.65)";
  });

  // Perbarui ikon
  if (isToggled) {
    icon.classList.remove("bi-moon-fill");
    icon.classList.add("bi-sun-fill");
  } else {
    icon.classList.remove("bi-sun-fill");
    icon.classList.add("bi-moon-fill");
  }
};
