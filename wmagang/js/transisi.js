document.querySelector("a").addEventListener("click", function (event) {
    event.preventDefault();
    const targetPage = this.getAttribute("href");
    document.querySelector(".page-transition").classList.add("fade-in");
    setTimeout(function () {
      window.location.href = targetPage;
    }, 500); // Waktu animasi
  });
  