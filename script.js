console.log('Hello!');
// animasi ketika di scroll di page informatika

  document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.informatika .row .content h3, .informatika .row .content p');

    const options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target); // Menghentikan pengamatan pada elemen setelah terlihat
        }
      });
    }, options);

    elements.forEach(element => {
      element.classList.add('fade-in');
      observer.observe(element);
    });
  });
