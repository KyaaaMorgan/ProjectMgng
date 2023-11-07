// Fungsi untuk menampilkan/menyembunyikan tombol saat menggulir
window.onscroll = function() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    // Tombol muncul secara smooth
    document.getElementById("floating-button").style.display = "block";
  } else {
    // Tombol hilang secara smooth
    document.getElementById("floating-button").style.display = "none";
  }
};

// Fungsi untuk melakukan scroll halaman ke atas secara smooth saat tombol diklik
document.getElementById("floating-button").addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});