<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $type = $_POST['type'];

  $company_name = $_POST['company_name'];
  $mca_registration_date = $_POST['mca_registration_date'];
  $allowed_branches = json_encode($_POST['allowed_branches'] ?? []);
  $job_role = $_POST['job_role'];
  $selection_rounds = $_POST['selection_rounds'];

  $hr_name = $_POST['hr_name'];
  $hr_email = $_POST['hr_email'];
  $hr_phone = $_POST['hr_phone'];

  if ($type == "placement") {
    if (
        empty($company_name) || empty($mca_registration_date) || empty($job_role) ||
        empty($selection_rounds) || empty($hr_name) || empty($hr_email) ||
        empty($hr_phone) || empty($_POST['ctc'])
    ) {
        die("All placement fields are required");
    }

  } else {
      if (
          empty($company_name) || empty($mca_registration_date) || empty($job_role) ||
          empty($selection_rounds) || empty($hr_name) || empty($hr_email) ||
          empty($hr_phone) || empty($_POST['duration_months']) || empty($_POST['stipend'])
      ) {
          die("All internship fields except PPO are required");
      }
  }

  mysqli_query($conn, $sql);
  echo "<script>alert('Form submitted successfully');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NIT Sikkim | Placement & Internship</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
.noise-bg {
  background-image: url('data:image/svg+xml;base64,...');
}
.glass-deep {
  backdrop-filter: blur(12px);
  background: rgba(255, 255, 255, 0.9);
}
.premium-shadow {
  box-shadow: 0 25px 50px -12px rgba(0, 20, 60, 0.25);
}
.input-premium:focus {
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
}
</style>
</head>

<body class="bg-slate-50 text-slate-800">

<?php include '../includes/header.php'; ?>

<!-- HERO -->
<section class="bg-gradient-to-r from-blue-700 to-indigo-900 text-white py-24 text-center">
  <h1 class="text-5xl font-bold">Placement & Internship</h1>
  <p class="mt-4 text-lg">Submit company details easily</p>
</section>

<!-- MAIN -->
<section class="-mt-16 px-4 pb-20">
<div class="max-w-6xl mx-auto space-y-8">

<!-- ✅ GUIDELINES CARD -->
<div class="glass-deep noise-bg rounded-3xl premium-shadow p-8 border">
  <div class="flex flex-col md:flex-row gap-6">

    <div class="flex-1">
      <h2 class="text-2xl font-bold text-blue-900 mb-4">📋 Quick Guidelines</h2>

      <div class="grid md:grid-cols-2 gap-3 text-slate-700">
        <div class="flex gap-2"><i class="fas fa-check text-blue-500 mt-1"></i>Fill all mandatory fields</div>
        <div class="flex gap-2"><i class="fas fa-check text-blue-500 mt-1"></i>Use official email ID</div>
        <div class="flex gap-2"><i class="fas fa-check text-blue-500 mt-1"></i>Ensure company details are correct</div>
        <div class="flex gap-2"><i class="fas fa-check text-blue-500 mt-1"></i>Data will be verified by placement cell</div>
      </div>
    </div>

    <div class="bg-blue-50 rounded-2xl p-6 text-center border">
      <span class="text-3xl font-bold text-blue-800">100%</span>
      <p class="text-sm text-blue-600">verification accuracy</p>
    </div>

  </div>
</div>

<!-- FORM CARD -->
<div class="bg-white rounded-3xl premium-shadow p-8">

<!-- TOGGLE -->
<div class="flex justify-center mb-8">
  <div class="relative bg-blue-100 p-1.5 rounded-full flex">

    <span id="toggleBg"
      class="absolute top-1.5 left-1.5 h-[36px] w-[140px] bg-blue-600 rounded-full transition-all duration-300">
    </span>

    <button onclick="loadForm('placement')" id="placementBtn"
      class="relative z-10 w-[140px] h-[36px] text-sm font-semibold text-white">
      Placement
    </button>

    <button onclick="loadForm('internship')" id="internshipBtn"
      class="relative z-10 w-[140px] h-[36px] text-sm font-semibold text-blue-700">
      Internship
    </button>

  </div>
</div>

<!-- FORM -->
<form method="POST" class="grid md:grid-cols-2 gap-6">

<input type="hidden" name="type" id="formType" value="placement">

<!-- COMMON -->
<input id="company_name" name="company_name" required placeholder="Company Name" class="p-3 border rounded-xl input-premium">

<input id="mca_date" type="date" name="mca_registration_date" class="p-3 border rounded-xl input-premium">

<input id="job_role" name="job_role" placeholder="Job Role" class="p-3 border rounded-xl input-premium">

<div class="md:col-span-2">
  <label class="block mb-2 font-semibold text-slate-700">Allowed Branches</label>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 bg-white p-4 rounded-xl border">

    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" name="allowed_branches[]" value="CE" class="accent-blue-600">
      Civil Engineering
    </label>

    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" name="allowed_branches[]" value="CSE" class="accent-blue-600">
      Computer Science and Engineering
    </label>

    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" name="allowed_branches[]" value="ECE" class="accent-blue-600">
      Electronics and Communication Engineering
    </label>

    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" name="allowed_branches[]" value="EEE" class="accent-blue-600">
      Electrical and Electronics Engineering
    </label>

    <label class="flex items-center gap-2 cursor-pointer">
      <input type="checkbox" name="allowed_branches[]" value="ME" class="accent-blue-600">
      Mechanical Engineering
    </label>

  </div>
</div>

<textarea id="rounds" name="selection_rounds" placeholder="Selection Rounds" class="md:col-span-2 p-3 border rounded-xl input-premium"></textarea>

<!-- PLACEMENT -->
<div id="placementFields" class="contents">
  <input id="ctc" name="ctc" placeholder="CTC (LPA)" class="p-3 border rounded-xl input-premium">
</div>

<!-- INTERNSHIP -->
<div id="internshipFields" class="hidden contents">
  <input id="duration" name="duration_months" placeholder="Duration (days)" class="p-3 border rounded-xl input-premium">
  <input id="stipend" name="stipend" placeholder="Stipend" class="p-3 border rounded-xl input-premium">
  <input id="ppo" name="ppo_ctc" placeholder="PPO CTC" class="p-3 border rounded-xl input-premium">
</div>

<input id="hr_name" name="hr_name" placeholder="HR Name" class="p-3 border rounded-xl input-premium">
<input id="hr_email" name="hr_email" placeholder="HR Email" class="p-3 border rounded-xl input-premium">
<input id="hr_phone" name="hr_phone" placeholder="HR Phone" class="p-3 border rounded-xl input-premium">

<div class="md:col-span-2 text-center">
  <button class="bg-blue-600 text-white px-8 py-3 rounded-xl hover:bg-blue-700 transition">
    Submit
  </button>
</div>

</form>

</div>
</div>
</section>

<?php include '../includes/footer.php'; ?>

<script>
function setRequiredPlacement() {
  document.getElementById("ctc").required = true;

  document.getElementById("duration").required = false;
  document.getElementById("stipend").required = false;
  document.getElementById("ppo").required = false;

  setCommonRequired(true);
}

function setRequiredInternship() {
  document.getElementById("ctc").required = false;

  document.getElementById("duration").required = true;
  document.getElementById("stipend").required = true;
  document.getElementById("ppo").required = false; // optional

  setCommonRequired(true);
}

function setCommonRequired(flag) {
  document.getElementById("company_name").required = flag;
  document.getElementById("mca_date").required = flag;
  document.getElementById("job_role").required = flag;
  document.getElementById("branches").required = flag;
  document.getElementById("rounds").required = flag;
  document.getElementById("hr_name").required = flag;
  document.getElementById("hr_email").required = flag;
  document.getElementById("hr_phone").required = flag;
}

function loadForm(type) {
  const placementFields = document.getElementById("placementFields");
  const internshipFields = document.getElementById("internshipFields");

  const toggleBg = document.getElementById("toggleBg");
  const placementBtn = document.getElementById("placementBtn");
  const internshipBtn = document.getElementById("internshipBtn");

  document.getElementById("formType").value = type;

  if (type === "placement") {
    placementFields.classList.remove("hidden");
    internshipFields.classList.add("hidden");

    toggleBg.style.transform = "translateX(0px)";
    placementBtn.classList.add("text-white");
    internshipBtn.classList.remove("text-white");

    setRequiredPlacement();

  } else {
    internshipFields.classList.remove("hidden");
    placementFields.classList.add("hidden");

    toggleBg.style.transform = "translateX(140px)";
    internshipBtn.classList.add("text-white");
    placementBtn.classList.remove("text-white");

    setRequiredInternship();
  }
}

function validateBranches() {
  const checkboxes = document.querySelectorAll('input[name="allowed_branches[]"]');
  return Array.from(checkboxes).some(cb => cb.checked);
}

document.querySelector("form").addEventListener("submit", function(e) {
  if (!validateBranches()) {
    alert("Please select at least one branch");
    e.preventDefault();
  }
});

window.onload = () => loadForm('placement');
</script>

</body>
</html>