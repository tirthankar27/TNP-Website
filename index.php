<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>For Students</title>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.chart-btn {
  background: transparent;
  color: #374151;
}

.chart-btn.active {
  background: white;
  box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  color: black;
}
</style>
</head>

<script>
window.addEventListener("scroll", function() {
  const header = document.querySelector("header");
  if (window.scrollY > 10) {
    header.classList.add("shadow-lg");
  } else {
    header.classList.remove("shadow-lg");
  }
});
</script>

<script>
const links = document.querySelectorAll(".nav-link");

links.forEach(link => {
  link.addEventListener("click", function() {

    // Remove active styles from all
    links.forEach(l => {
      l.classList.remove("bg-[#0f172a]", "text-white", "px-6", "py-2", "rounded-full");
    });

    // Add active styles to clicked one
    this.classList.add("bg-[#0f172a]", "text-white", "px-6", "py-2", "rounded-full");

  });
});
</script>

<body class="bg-gray-100 text-gray-900 overflow-x-hidden">

<?php include 'frontend/header.php'; ?>

<!-- HERO -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 md:py-32 text-center px-6">
  <h1 class="text-4xl md:text-6xl font-extrabold mb-4">
    For Students
  </h1>
  <p class="text-lg md:text-xl text-blue-100">
    Your journey to a successful career starts here
  </p>
</section>


<!-- STUDENT RESOURCES -->
<section class="py-28 text-center max-w-7xl mx-auto px-10">
  <h2 class="text-5xl font-extrabold mb-6">Student Resources</h2>
  <p class="text-gray-500 text-lg mb-16">
    Comprehensive support to help you succeed in your placement journey
  </p>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="bg-blue-100 p-10 rounded-3xl shadow-md text-left">
      <img src="assets/book.png" class="w-14 mb-6">
      <h3 class="text-xl font-semibold mb-4">Training Programs</h3>
      <p class="text-gray-600 text-sm">
        Regular workshops on aptitude, coding, communication skills, and personality development
      </p>
    </div>

    <div class="bg-purple-100 p-10 rounded-3xl shadow-md text-left">
      <img src="assets/people.png" class="w-14 mb-6">
      <h3 class="text-xl font-semibold mb-4">Mock Interviews</h3>
      <p class="text-gray-600 text-sm">
        Practice sessions with industry experts to prepare for actual recruitment drives
      </p>
    </div>

    <div class="bg-green-100 p-10 rounded-3xl shadow-md text-left">
      <img src="assets/badge.png" class="w-14 mb-6">
      <h3 class="text-xl font-semibold mb-4">Skill Development</h3>
      <p class="text-gray-600 text-sm">
        Technical and soft skills enhancement programs to make you industry-ready
      </p>
    </div>

    <div class="bg-orange-100 p-10 rounded-3xl shadow-md text-left">
      <img src="assets/guide.png" class="w-14 mb-6">
      <h3 class="text-xl font-semibold mb-4">Career Guidance</h3>
      <p class="text-gray-600 text-sm">
        One-on-one counseling and guidance for career planning and decision making
      </p>
    </div>
  </div>
</section>


<!-- ELIGIBILITY -->
<section class="max-w-7xl mx-auto px-6 md:px-10 pb-20 md:pb-28">
  <div class="bg-gradient-to-br from-[#0b1629] to-[#071021] text-white p-16 rounded-3xl shadow-2xl">
    <h2 class="text-4xl font-bold mb-6">Eligibility Criteria</h2>
    <p class="text-gray-300 mb-12">
      Students must meet the following requirements to participate in placement drives
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
        <div class="bg-gray-700/40 p-6 rounded-xl flex items-start gap-3">
            <img src="assets/tick.png" class="w-6 mt-1">
            <p>Maintain minimum CGPA as specified by recruiting companies (usually 6.5–7.0)</p>
        </div>

        <div class="bg-gray-700/40 p-6 rounded-xl flex items-start gap-3">
            <img src="assets/tick.png" class="w-6 mt-1">
            <p>No active backlogs at the time of placement drive</p>
        </div>

        <div class="bg-gray-700/40 p-6 rounded-xl flex items-start gap-3">
            <img src="assets/tick.png" class="w-6 mt-1">
            <p>Regular attendance in training programs and pre-placement talks</p>
        </div>

        <div class="bg-gray-700/40 p-6 rounded-xl flex items-start gap-3">
            <img src="assets/tick.png" class="w-6 mt-1">
            <p>Professional conduct during the entire recruitment process</p>
        </div>

        <div class="bg-gray-700/40 p-6 rounded-xl flex items-start gap-3">
            <img src="assets/tick.png" class="w-6 mt-1">
            <p>Adherence to placement cell rules and company-specific guidelines</p>
        </div>

        <div class="bg-gray-700/40 p-6 rounded-xl flex items-start gap-3">
            <img src="assets/tick.png" class="w-6 mt-1">
            <p>One student, one offer policy (as per institute norms)</p>
        </div>
    </div>
  </div>
</section>


<!-- PLACEMENT -->
<section class="py-28 text-center max-w-7xl mx-auto px-10">
  <h2 class="text-5xl font-extrabold mb-4">Placement Statistics</h2>
  <p class="text-gray-500 text-lg mb-12">
    Consistent growth and excellence year after year
  </p>

  <div class="flex justify-center mb-12">
    <div class="bg-gray-200 p-2 rounded-2xl flex gap-4">

        <button id="btnYearly"
        class="chart-btn active px-8 py-3 rounded-xl font-medium transition">
        Yearly Trends
        </button>

        <button id="btnBranch"
        class="chart-btn px-8 py-3 rounded-xl font-medium transition">
        Branch-wise
        </button>

        <button id="btnPackage"
        class="chart-btn px-8 py-3 rounded-xl font-medium transition">
        Package Distribution
        </button>

    </div>
    </div>

  <div class="bg-gray-200 p-14 rounded-3xl shadow-inner">
    <h3 class="text-3xl font-bold text-left mb-8">
      5-Year Placement Trends
    </h3>

    <div class="relative w-full h-72 md:h-[420px]">
        <canvas id="chart"></canvas>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6 mt-12">
      <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-4xl font-bold text-blue-600">85%</h3>
        <p class="text-gray-500 mt-2">2020</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-4xl font-bold text-blue-600">88%</h3>
        <p class="text-gray-500 mt-2">2021</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-4xl font-bold text-blue-600">90%</h3>
        <p class="text-gray-500 mt-2">2022</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-4xl font-bold text-blue-600">91%</h3>
        <p class="text-gray-500 mt-2">2023</p>
      </div>
      <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-4xl font-bold text-blue-600">92%</h3>
        <p class="text-gray-500 mt-2">2024</p>
      </div>
    </div>
  </div>
</section>

<!-- INTERNSHIP OPPORTUNITIES -->
<section class="py-28 text-center max-w-7xl mx-auto px-10">
  <h2 class="text-5xl font-extrabold mb-4">Internship Opportunities</h2>
  <p class="text-gray-500 text-lg mb-16">
    Get industry experience and build your professional network
  </p>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    
    <div class="bg-white p-10 rounded-3xl shadow-xl">
      <h3 class="text-5xl font-extrabold text-blue-600">280+</h3>
      <p class="mt-4 text-gray-600 font-medium">Students Interned</p>
    </div>

    <div class="bg-white p-10 rounded-3xl shadow-xl">
      <h3 class="text-5xl font-extrabold text-purple-600">85+</h3>
      <p class="mt-4 text-gray-600 font-medium">Partner Companies</p>
    </div>

    <div class="bg-white p-10 rounded-3xl shadow-xl">
      <h3 class="text-5xl font-extrabold text-green-600">₹25K</h3>
      <p class="mt-4 text-gray-600 font-medium">Average Stipend</p>
    </div>

    <div class="bg-white p-10 rounded-3xl shadow-xl">
      <h3 class="text-5xl font-extrabold text-orange-600">45%</h3>
      <p class="mt-4 text-gray-600 font-medium">Conversion Rate</p>
    </div>

  </div>
</section>

<!-- RECRUITMENT PROCESS -->
<section class="py-24 text-center max-w-7xl mx-auto px-10">
  <h2 class="text-4xl font-bold mb-12">Recruitment Process</h2>

  <div class="bg-gradient-to-br from-gray-200 to-purple-100 p-16 rounded-3xl shadow-2xl">
    
    <h3 class="text-3xl font-semibold mb-12">Recruitment Process</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">

      <!-- Step 1 -->
      <div class="flex items-start gap-6 bg-white p-8 rounded-2xl shadow-md relative">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-600 text-white font-bold shadow-lg flex items-center justify-center aspect-square">
          1
        </div>
        <div class="text-left">
          <h4 class="font-semibold text-lg">Point of Contact</h4>
          <p class="text-gray-600 text-sm mt-2">
            The Placement Office appoints a dedicated point of contact and sends invitations to recruiting organizations
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="flex items-start gap-6 bg-white p-8 rounded-2xl shadow-md">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-purple-600 text-white font-bold shadow-lg flex items-center justify-center aspect-square">
          2
        </div>
        <div class="text-left">
          <h4 class="font-semibold text-lg">Fill Google Form</h4>
          <p class="text-gray-600 text-sm mt-2">
            Students fill out the internship application form with their details and preferences
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="flex items-start gap-6 bg-white p-8 rounded-2xl shadow-md">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-600 text-white font-bold shadow-lg flex items-center justify-center aspect-square">
          3
        </div>
        <div class="text-left">
          <h4 class="font-semibold text-lg">Profile Shortlisting</h4>
          <p class="text-gray-600 text-sm mt-2">
            Companies review applications and shortlist candidates based on eligibility criteria
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="flex items-start gap-6 bg-white p-8 rounded-2xl shadow-md">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-orange-600 text-white font-bold shadow-lg flex items-center justify-center aspect-square">
          4
        </div>
        <div class="text-left">
          <h4 class="font-semibold text-lg">Assessment & Tests</h4>
          <p class="text-gray-600 text-sm mt-2">
            Shortlisted students appear for aptitude tests, technical tests, or coding rounds
          </p>
        </div>
      </div>

      <!-- Step 5 -->
      <div class="flex items-start gap-6 bg-white p-8 rounded-2xl shadow-md">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-pink-600 text-white font-bold shadow-lg flex items-center justify-center aspect-square">
          5
        </div>
        <div class="text-left">
          <h4 class="font-semibold text-lg">Interviews</h4>
          <p class="text-gray-600 text-sm mt-2">
            Selected candidates attend technical and HR interview rounds conducted by the company
          </p>
        </div>
      </div>

      <!-- Step 6 -->
      <div class="flex items-start gap-6 bg-white p-8 rounded-2xl shadow-md">
        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-teal-600 text-white font-bold shadow-lg flex items-center justify-center aspect-square">
          6
        </div>
        <div class="text-left">
          <h4 class="font-semibold text-lg">Final Selection</h4>
          <p class="text-gray-600 text-sm mt-2">
            Companies announce final selections and internship offers are rolled out to students
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- IMPORTANT TIMELINE -->
<section class="bg-[#f3f4f6] py-16 md:py-24">

  <div class="max-w-7xl mx-auto px-8 text-center">

    <!-- Heading -->
    <h2 class="text-5xl font-bold text-gray-900">
      Important Timeline
    </h2>

    <p class="text-gray-600 mt-6 text-lg">
      Mark your calendars for these key placement activities
    </p>

    <!-- Cards -->
    <div class="mt-16 md:mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">

      <!-- Card 1 -->
      <div class="bg-white p-12 rounded-3xl shadow-lg text-left">
        <h3 class="text-4xl md:text-6xl font-bold text-blue-600 leading-tight">
          Jul-<br>Aug
        </h3>

        <h4 class="mt-10 text-2xl font-semibold text-gray-900">
          Pre-Placement Talks
        </h4>

        <p class="mt-6 text-gray-600 leading-relaxed">
          Company presentations and interaction sessions
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-12 rounded-3xl shadow-lg text-left">
        <h3 class="text-4xl md:text-6xl font-bold text-purple-600 leading-tight">
          Sep-<br>Dec
        </h3>

        <h4 class="mt-10 text-2xl font-semibold text-gray-900">
          Campus Placements
        </h4>

        <p class="mt-6 text-gray-600 leading-relaxed">
          Main recruitment drives and selection process
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-12 rounded-3xl shadow-lg text-left">
        <h3 class="text-4xl md:text-6xl font-bold text-green-600 leading-tight">
          Jan-<br>Mar
        </h3>

        <h4 class="mt-10 text-2xl font-semibold text-gray-900">
          Internship Season
        </h4>

        <p class="mt-6 text-gray-600 leading-relaxed">
          Summer internship opportunities and selections
        </p>
      </div>

    </div>

  </div>

</section>

<?php include 'frontend/footer.php'; ?>

<script>
const ctx = document.getElementById("chart").getContext("2d");

let currentChart;

function renderChart(type) {

  if (currentChart) {
    currentChart.destroy();
  }

  let config;

  if (type === "yearly") {

    config = {
      type: "bar",
      data: {
        labels: ["2020", "2021", "2022", "2023", "2024"],
        datasets: [{
          data: [119, 123, 126, 127, 129],
          backgroundColor: "#2563eb",
          borderRadius: 12
        }]
      }
    };

  }

  else if (type === "branch") {

    config = {
      type: "bar",
      data: {
        labels: ["CE", "CSE", "ECE", "EE", "ME"],
        datasets: [{
          data: [17, 39, 24, 20, 18],
          backgroundColor: "#7c3aed",
          borderRadius: 12
        }]
      }
    };

  }

  else if (type === "package") {

    config = {
      type: "pie",
      data: {
        labels: ["<5 LPA", "5-10 LPA", "10-20 LPA", ">20 LPA"],
        datasets: [{
          data: [25, 35, 50, 4],
          backgroundColor: [
            "#2563eb",
            "#10b981",
            "#f59e0b",
            "#ef4444"
          ]
        }]
      }
    };

  }

  config.options = {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
        legend: { display: type === "package" }
    },
    scales: type !== "package" ? {
        x: { grid: { display: false } },
        y: { 
        grid: { display: false },
        beginAtZero: true
        }
    } : {}
    };

  currentChart = new Chart(ctx, config);
}

function setActive(buttonId) {
  document.querySelectorAll(".chart-btn")
    .forEach(btn => btn.classList.remove("active"));

  document.getElementById(buttonId).classList.add("active");
}

document.getElementById("btnYearly").addEventListener("click", () => {
  renderChart("yearly");
  setActive("btnYearly");
});

document.getElementById("btnBranch").addEventListener("click", () => {
  renderChart("branch");
  setActive("btnBranch");
});

document.getElementById("btnPackage").addEventListener("click", () => {
  renderChart("package");
  setActive("btnPackage");
});

renderChart("yearly");
</script>

</body>
</html>