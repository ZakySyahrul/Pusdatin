<style>
  /* Tambahkan efek transisi ke elemen teks */
  .welcome-text {
    transition: opacity 0.5s ease-in-out;
  }

  /* Tambahkan efek animasi pada pergantian kata */
  .welcome-text.animate {
    opacity: 0;
  }
</style>
<script>
  const words = ["Wilujeung Sumping", "Sugeng rawuh", "Welcome", "ようこそ", "欢迎", "환영합니다", "ยินดีต้อนรับ",
    "Добро пожаловать", "أهلاً وسهلاً",
    "Bienvenidola"
  ]; // Daftar kata yang ingin digunakan
  let currentWordIndex = 0; // Index kata saat ini

  function changeWord() {
    const textElement = document.querySelector(".welcome-text");

    // Tambahkan kelas animate ke elemen teks
    textElement.classList.add("animate");

    // Tunggu hingga animasi selesai
    setTimeout(() => {
      // Ubah teks kata saat ini
      textElement.textContent = words[currentWordIndex];
      // Naikkan index kata saat ini
      currentWordIndex = (currentWordIndex + 1) % words.length;
      // Hapus kelas animate dari elemen teks
      textElement.classList.remove("animate");
    }, 500); // Waktu tunggu harus sama dengan durasi animasi CSS
  }


  // Jalankan fungsi changeWord() setiap 3 detik
  setInterval(changeWord, 3000);
</script>

<!-- <nav class="navbarwelcome navbar-light bg-success">
  <div class="container-fluid d-flex justify-content-center">
    <h1 class="navbar-brand fs-3 text-decoration-none mt-2 welcome-text" style="color:white; font-family:sans-serif;">
      Selamat Datang!</h1>
  </div>
</nav> -->
<nav class="navbar navbar-expand-sm navbar-light bg-success">
  <div class="container-fluid d-flex justify-content-center">
    <h1 class="navbar-brand fs-3 text-decoration-none welcome-text text-white">Selamat Datang!</h1>
  </div>
</nav>