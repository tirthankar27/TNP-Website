<?php
$currentPage = basename($_SERVER['PHP_SELF']);

function active($page, $isHome = false) {
  global $currentPage;

  if ($isHome) {
    return $currentPage == 'index.php'
      ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full'
      : 'text-gray-700 hover:text-black transition-colors duration-200';
  }

  return $currentPage == $page
    ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full'
    : 'text-gray-700 hover:text-black transition-colors duration-200';
}
?>

<header class="sticky top-0 z-50 bg-[#f3f3f3]">

  <div class="w-full flex items-center justify-between px-6 md:px-16 py-4 md:py-6">

    <!-- LEFT -->
    <div class="flex items-center gap-4 md:gap-6">
      <a href="/TNP/index.php">
        <img src="/TNP/assets/logo.png" class="w-14 md:w-20 cursor-pointer">
      </a>

      <div class="leading-tight">
        <p class="text-sm md:text-2xl font-semibold text-black">
          राष्ट्रीय प्रौद्योगिकी संस्थान, सिक्किम
        </p>
        <p class="text-xs md:text-xl font-medium text-black tracking-wide">
          NATIONAL INSTITUTE OF TECHNOLOGY SIKKIM
        </p>
      </div>
    </div>

    <!-- DESKTOP NAV -->
    <nav class="hidden lg:flex items-center gap-6 text-lg font-medium">
      <a href="/TNP/index.php" class="<?= active('index.php', true) ?>">
        Home
      </a>

      <a href="/TNP/pages/about.php" class="<?= active('about.php') ?>">
        About Us
      </a>

      <a href="/TNP/pages/students.php" class="<?= active('students.php') ?>">
        For Students
      </a>

      <a href="/TNP/pages/recruiters.php" class="<?= active('recruiters.php') ?>">
        For Recruiters
      </a>

      <a href="/TNP/pages/academics.php" class="<?= active('academics.php') ?>">
        Academics
      </a>

      <a href="/TNP/pages/why-nit.php" class="<?= active('why-nit.php') ?>">
        Why NIT Sikkim?
      </a>

      <a href="/TNP/pages/contact.php" class="<?= active('contact.php') ?>">
        Contact Us
      </a>
    </nav>

    <!-- HAMBURGER -->
    <button id="menuBtn" class="lg:hidden text-3xl text-black">
      ☰
    </button>

  </div>

  <!-- MOBILE MENU -->
  <div id="mobileMenu" class="hidden lg:hidden px-6 pb-6">

    <div class="flex flex-col gap-4 text-lg font-medium">
      <a href="/TNP/index.php"
         class="<?= $currentPage == 'index.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        Home
      </a>

      <a href="/TNP/pages/about.php"
         class="<?= $currentPage == 'about.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        About Us
      </a>

      <a href="/TNP/pages/students.php"
         class="<?= $currentPage == 'students.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        For Students
      </a>

      <a href="/TNP/pages/recruiters.php"
         class="<?= $currentPage == 'recruiters.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        For Recruiters
      </a>

      <a href="/TNP/pages/academics.php"
         class="<?= $currentPage == 'academics.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        Academics
      </a>

      <a href="/TNP/pages/why-nit.php"
         class="<?= $currentPage == 'why-nit.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        Why NIT Sikkim?
      </a>

      <a href="/TNP/pages/contact.php"
         class="<?= $currentPage == 'contact.php' ? 'bg-[#0f172a] text-white px-6 py-2 rounded-full w-fit' : 'text-gray-700 hover:text-black transition-colors duration-200' ?>">
        Contact Us
      </a>
    </div>

  </div>

</header>

<script>
  // Mobile menu toggle functionality
  const menuBtn = document.getElementById('menuBtn');
  const mobileMenu = document.getElementById('mobileMenu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>