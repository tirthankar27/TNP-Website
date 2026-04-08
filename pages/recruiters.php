<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>T&P Cell — NIT Sikkim | For Recruiters</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<style>
:root{
  --maroon:#560319;
  --maroon-deep:#3a0210;
  --maroon-light:#7E191B;
  --amber:#F4A024;
  --amber-light:#fbbf50;
  --cream:#fdf6ee;
  --off-white:#f9f4ef;
  --text:#1a0a0e;
  --text-muted:#7a5060;
  --border:#e8d5cc;
  --white:#ffffff;
  --card-bg:#fffaf7;
  --shadow:0 4px 32px rgba(86,3,25,0.10);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
body{font-family:'DM Sans',sans-serif;background:var(--cream);color:var(--text);overflow-x:hidden;}

/* ── TOP BAR ── */
.topbar{background:var(--maroon);display:flex;align-items:center;justify-content:space-between;padding:7px 40px;font-size:12.5px;gap:12px;flex-wrap:wrap;}
.topbar a{color:rgba(255,255,255,.82);text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:color .2s;}
.topbar a:hover{color:var(--amber);}
.topbar-left{display:flex;gap:22px;flex-wrap:wrap;}
.topbar-right a{color:rgba(255,255,255,.82);}
.topbar-right a:hover{color:var(--amber);}

/* ── NAVBAR ── */
nav{background:var(--white);border-bottom:4px solid var(--amber);position:sticky;top:0;z-index:1000;box-shadow:0 2px 20px rgba(86,3,25,.08);}
.nav-inner{max-width:1280px;margin:auto;padding:0 40px;display:flex;align-items:center;justify-content:space-between;height:70px;}
.logo{display:flex;align-items:center;gap:12px;text-decoration:none;}
.logo-badge{width:46px;height:46px;background:var(--maroon);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--amber);font-family:'Playfair Display',serif;font-size:18px;font-weight:900;letter-spacing:-1px;}
.logo-text{line-height:1.15;}
.logo-text strong{display:block;font-family:'Playfair Display',serif;font-size:16px;color:var(--maroon);font-weight:900;}
.logo-text span{font-size:11px;color:var(--text-muted);letter-spacing:.5px;font-weight:500;}
.nav-links{display:flex;gap:4px;align-items:center;}
.nav-links a{padding:8px 14px;border-radius:8px;font-size:13.5px;font-weight:500;color:var(--text);text-decoration:none;transition:background .2s,color .2s;position:relative;}
.nav-links a:hover,.nav-links a.active{background:var(--cream);color:var(--maroon);}
.nav-links a.active::after{content:'';position:absolute;bottom:-4px;left:14px;right:14px;height:2px;background:var(--amber);border-radius:2px;}
.nav-cta{background:var(--maroon);color:var(--white)!important;border-radius:8px;padding:8px 18px!important;font-weight:600!important;}
.nav-cta:hover{background:var(--maroon-light)!important;color:var(--white)!important;}
.hamburger{display:none;background:none;border:none;cursor:pointer;padding:4px;}
.hamburger span{display:block;width:24px;height:2px;background:var(--maroon);margin:5px 0;transition:.3s;}

/* ── PAGE SHELL ── */
.page{display:none;animation:fadeIn .35s ease;}
.page.active{display:block;}
@keyframes fadeIn{from{opacity:0;transform:translateY(8px);}to{opacity:1;transform:translateY(0);}}

/* ── HERO BANNER ── */
.hero{background:var(--maroon);position:relative;padding:72px 40px 56px;overflow:hidden;}
.hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 70% 50%,rgba(244,160,36,.18) 0%,transparent 65%),radial-gradient(ellipse at 20% 80%,rgba(126,25,27,.6) 0%,transparent 60%);}
.hero-grain{position:absolute;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");opacity:.4;}
.hero-content{position:relative;max-width:1280px;margin:auto;}
.breadcrumb{display:flex;gap:8px;align-items:center;margin-bottom:16px;font-size:12.5px;color:rgba(255,255,255,.55);}
.breadcrumb a{color:rgba(255,255,255,.55);text-decoration:none;}
.breadcrumb a:hover{color:var(--amber);}
.breadcrumb span{color:rgba(255,255,255,.3);}
.hero h1{font-family:'Playfair Display',serif;font-size:clamp(2rem,5vw,3.2rem);color:var(--white);font-weight:900;line-height:1.1;margin-bottom:10px;}
.hero h1 em{color:var(--amber);font-style:normal;}
.hero p{color:rgba(255,255,255,.68);max-width:520px;font-size:15px;line-height:1.7;font-weight:300;}
.hero-tag{display:inline-block;background:rgba(244,160,36,.18);border:1px solid rgba(244,160,36,.35);color:var(--amber);font-size:11px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;padding:4px 12px;border-radius:20px;margin-bottom:18px;}
.hero-decor{position:absolute;right:40px;top:50%;transform:translateY(-50%);width:220px;height:220px;border:2px solid rgba(244,160,36,.15);border-radius:50%;display:flex;align-items:center;justify-content:center;}
.hero-decor::before{content:'';position:absolute;inset:20px;border:1px solid rgba(244,160,36,.1);border-radius:50%;}
.hero-decor-icon{font-size:64px;color:rgba(244,160,36,.2);}

/* ── CONTAINER ── */
.container{max-width:1200px;margin:auto;padding:0 40px;}

/* ── SECTION HEADER ── */
.section-header{padding:56px 0 28px;}
.section-label{font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--amber);margin-bottom:8px;}
.section-title{font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:900;color:var(--maroon);line-height:1.15;}
.section-title em{color:var(--maroon-light);font-style:normal;}
.section-divider{width:48px;height:3px;background:var(--amber);border-radius:2px;margin-top:14px;}

/* ── CALENDAR CARDS ── */
.calendar-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:40px;}
@media(max-width:680px){.calendar-grid{grid-template-columns:1fr;}}
.cal-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:30px;position:relative;overflow:hidden;transition:box-shadow .25s,transform .25s;}
.cal-card:hover{box-shadow:var(--shadow);transform:translateY(-3px);}
.cal-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:var(--amber);}
.cal-card.slot2::before{background:var(--maroon-light);}
.cal-slot-num{font-family:'DM Mono',monospace;font-size:11px;font-weight:500;letter-spacing:1.5px;color:var(--text-muted);text-transform:uppercase;margin-bottom:10px;}
.cal-slot-name{font-family:'Playfair Display',serif;font-size:1.25rem;font-weight:700;color:var(--maroon);margin-bottom:6px;}
.cal-dates{font-size:13.5px;color:var(--text-muted);font-weight:400;display:flex;align-items:center;gap:8px;flex-wrap:wrap;}
.cal-dates i{color:var(--amber);font-size:11px;}
.cal-badge{position:absolute;top:20px;right:20px;background:var(--cream);border:1px solid var(--border);border-radius:8px;padding:6px 12px;font-size:11px;font-weight:600;color:var(--maroon-light);}
.cal-note{background:var(--off-white);border-left:3px solid var(--amber);border-radius:0 10px 10px 0;padding:16px 20px;font-size:14px;color:var(--text-muted);line-height:1.7;margin-bottom:48px;}

/* ── PROCESS STEPS ── */
.process-steps{display:flex;flex-direction:column;gap:0;margin-bottom:56px;position:relative;}
.process-steps::before{content:'';position:absolute;left:28px;top:28px;bottom:28px;width:2px;background:linear-gradient(to bottom,var(--amber),var(--maroon-light));border-radius:2px;}
.step{display:flex;gap:24px;align-items:flex-start;padding:22px 0;}
.step-num{width:56px;height:56px;min-width:56px;background:var(--white);border:2px solid var(--amber);border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:'DM Mono',monospace;font-size:14px;font-weight:500;color:var(--maroon);position:relative;z-index:1;}
.step:hover .step-num{background:var(--amber);color:var(--white);border-color:var(--amber);}
.step-body{background:var(--white);border:1px solid var(--border);border-radius:14px;padding:18px 22px;flex:1;transition:box-shadow .2s;}
.step:hover .step-body{box-shadow:var(--shadow);}
.step-body p{font-size:14px;line-height:1.75;color:var(--text-muted);}
.step-body a{color:var(--maroon);font-weight:600;text-decoration:underline;text-underline-offset:2px;}

/* ── LOGIN PAGE ── */
.login-wrap{display:flex;justify-content:center;align-items:flex-start;gap:48px;padding:56px 0;flex-wrap:wrap;}
.login-info{flex:1;min-width:260px;max-width:400px;}
.login-info h2{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:900;color:var(--maroon);margin-bottom:14px;line-height:1.2;}
.login-info p{font-size:14px;color:var(--text-muted);line-height:1.75;margin-bottom:20px;}
.login-perks{display:flex;flex-direction:column;gap:12px;}
.perk{display:flex;align-items:flex-start;gap:12px;font-size:13.5px;color:var(--text-muted);}
.perk i{color:var(--amber);margin-top:2px;font-size:15px;}
.login-card{background:var(--white);border:1px solid var(--border);border-radius:20px;padding:36px;width:100%;max-width:420px;box-shadow:var(--shadow);}
.tab-row{display:flex;gap:4px;background:var(--cream);border-radius:10px;padding:4px;margin-bottom:28px;}
.tab-btn{flex:1;padding:9px;border:none;background:none;border-radius:7px;font-size:13.5px;font-weight:600;cursor:pointer;color:var(--text-muted);transition:.2s;}
.tab-btn.active{background:var(--white);color:var(--maroon);box-shadow:0 1px 8px rgba(86,3,25,.08);}
.form-panel{display:none;}
.form-panel.active{display:block;}
.form-panel h3{font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--maroon);margin-bottom:20px;text-align:center;}
.field{margin-bottom:16px;}
.field label{display:block;font-size:12px;font-weight:600;letter-spacing:.5px;text-transform:uppercase;color:var(--text-muted);margin-bottom:6px;}
.field input{width:100%;padding:11px 14px;border:1.5px solid var(--border);border-radius:10px;font-size:14px;font-family:'DM Sans',sans-serif;background:var(--cream);color:var(--text);outline:none;transition:border-color .2s;}
.field input:focus{border-color:var(--maroon);}
.forgot{font-size:12.5px;color:var(--text-muted);text-decoration:underline;cursor:pointer;display:block;text-align:right;margin-bottom:18px;}
.forgot:hover{color:var(--maroon);}
.btn-primary{width:100%;padding:13px;background:var(--maroon);color:var(--white);border:none;border-radius:10px;font-size:14.5px;font-weight:700;font-family:'DM Sans',sans-serif;cursor:pointer;letter-spacing:.5px;transition:background .2s;}
.btn-primary:hover{background:var(--maroon-deep);}
.form-divider{text-align:center;font-size:12px;color:var(--text-muted);margin:14px 0;position:relative;}
.form-divider::before,.form-divider::after{content:'';position:absolute;top:50%;width:38%;height:1px;background:var(--border);}
.form-divider::before{left:0;}.form-divider::after{right:0;}

/* ── POLICY PAGE ── */
.policy-layout{display:grid;grid-template-columns:220px 1fr;gap:40px;padding:56px 0;align-items:start;}
@media(max-width:800px){.policy-layout{grid-template-columns:1fr;}}
.policy-nav{position:sticky;top:90px;background:var(--white);border:1px solid var(--border);border-radius:14px;overflow:hidden;}
.policy-nav a{display:block;padding:12px 18px;font-size:13px;color:var(--text-muted);text-decoration:none;border-bottom:1px solid var(--border);transition:background .2s,color .2s;font-weight:500;}
.policy-nav a:last-child{border-bottom:none;}
.policy-nav a:hover,.policy-nav a.active{background:var(--cream);color:var(--maroon);border-left:3px solid var(--amber);}
.policy-section{margin-bottom:48px;padding-top:8px;}
.policy-section h3{font-family:'Playfair Display',serif;font-size:1.25rem;font-weight:700;color:var(--maroon);margin-bottom:14px;padding-bottom:10px;border-bottom:2px solid var(--border);}
.policy-section li{font-size:14px;line-height:1.8;color:var(--text-muted);margin-bottom:14px;padding-left:20px;position:relative;}
.policy-section li::before{content:'›';position:absolute;left:0;color:var(--amber);font-weight:700;font-size:16px;}

/* ── DEMOGRAPHY ── */
.demo-grid{display:grid;grid-template-columns:1fr 1fr;gap:28px;margin-bottom:48px;}
@media(max-width:700px){.demo-grid{grid-template-columns:1fr;}}
.chart-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:28px;box-shadow:var(--shadow);}
.chart-card h4{font-family:'Playfair Display',serif;font-size:1.1rem;font-weight:700;color:var(--maroon);text-align:center;margin-bottom:24px;}
.bar-chart{display:flex;flex-direction:column;gap:14px;}
.bar-row{display:flex;align-items:center;gap:12px;}
.bar-label{font-size:12.5px;font-weight:600;color:var(--text-muted);width:52px;text-align:right;flex-shrink:0;}
.bar-track{flex:1;height:26px;background:var(--cream);border-radius:6px;overflow:hidden;position:relative;}
.bar-fill{height:100%;border-radius:6px;background:linear-gradient(90deg,var(--maroon),var(--maroon-light));position:relative;display:flex;align-items:center;justify-content:flex-end;padding-right:10px;animation:barGrow .8s ease forwards;transform-origin:left;}
@keyframes barGrow{from{width:0!important;}to{}}
.bar-val{font-size:11.5px;font-weight:700;color:var(--white);font-family:'DM Mono',monospace;}

/* ── COLLABORATIONS ── */
.collab-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:22px;margin-bottom:56px;}
.collab-card{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:26px;position:relative;overflow:hidden;transition:box-shadow .25s,transform .25s;}
.collab-card:hover{box-shadow:var(--shadow);transform:translateY(-3px);}
.collab-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--amber),var(--maroon-light));}
.collab-icon{width:52px;height:52px;background:var(--cream);border:1px solid var(--border);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;color:var(--maroon);margin-bottom:16px;font-weight:900;font-family:'Playfair Display',serif;}
.collab-card h3{font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--maroon);margin-bottom:8px;}
.collab-card p{font-size:13px;color:var(--text-muted);line-height:1.7;}
.collab-card .read-more-btn{margin-top:12px;background:none;border:1px solid var(--border);border-radius:8px;padding:7px 14px;font-size:12.5px;font-weight:600;color:var(--maroon);cursor:pointer;transition:.2s;}
.collab-card .read-more-btn:hover{background:var(--cream);border-color:var(--amber);}
.collab-extra{display:none;margin-top:12px;font-size:13px;color:var(--text-muted);line-height:1.7;border-top:1px solid var(--border);padding-top:12px;}

/* ── PLACES ── */
.places-intro{background:var(--white);border:1px solid var(--border);border-radius:16px;padding:28px;margin-bottom:36px;font-size:14px;line-height:1.8;color:var(--text-muted);}
.places-intro h3{font-family:'Playfair Display',serif;font-size:1.2rem;color:var(--maroon);margin-bottom:12px;font-weight:700;}
.places-list{display:flex;flex-direction:column;gap:14px;margin-bottom:32px;}
.place-item{display:flex;gap:16px;background:var(--white);border:1px solid var(--border);border-radius:12px;padding:18px;align-items:flex-start;transition:box-shadow .2s;}
.place-item:hover{box-shadow:var(--shadow);}
.place-item-icon{width:40px;height:40px;min-width:40px;background:var(--cream);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--amber);font-size:17px;}
.place-item h4{font-size:14px;font-weight:700;color:var(--maroon);margin-bottom:4px;}
.place-item p{font-size:13px;color:var(--text-muted);line-height:1.65;}
.gallery-section h3{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;color:var(--maroon);margin-bottom:20px;}
.gallery-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:12px;margin-bottom:56px;}
.gallery-item{background:var(--white);border:1px solid var(--border);border-radius:12px;aspect-ratio:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:8px;font-size:12.5px;font-weight:600;color:var(--text-muted);text-align:center;padding:14px;transition:all .2s;cursor:pointer;}
.gallery-item:hover{background:var(--maroon);color:var(--white);border-color:var(--maroon);transform:scale(1.04);}
.gallery-item i{font-size:22px;color:var(--amber);}
.gallery-item:hover i{color:var(--amber-light);}

/* ── BROCHURE ── */
.brochure-wrap{display:flex;flex-direction:column;align-items:center;justify-content:center;padding:80px 20px;text-align:center;}
.brochure-icon{width:90px;height:90px;background:var(--cream);border:2px dashed var(--border);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:36px;color:var(--maroon);margin-bottom:28px;}
.brochure-wrap h2{font-family:'Playfair Display',serif;font-size:1.9rem;font-weight:900;color:var(--maroon);margin-bottom:12px;}
.brochure-wrap p{font-size:15px;color:var(--text-muted);max-width:440px;line-height:1.7;margin-bottom:28px;}
.btn-download{display:inline-flex;align-items:center;gap:10px;background:var(--maroon);color:var(--white);padding:14px 28px;border-radius:12px;font-size:15px;font-weight:700;text-decoration:none;transition:background .2s;font-family:'DM Sans',sans-serif;}
.btn-download:hover{background:var(--maroon-deep);}

/* ── FOOTER ── */
footer{background:var(--maroon-deep);color:rgba(255,255,255,.75);margin-top:72px;}
.footer-main{max-width:1200px;margin:auto;padding:52px 40px 36px;display:grid;grid-template-columns:2fr 1fr 1fr;gap:48px;}
@media(max-width:800px){.footer-main{grid-template-columns:1fr;gap:32px;}}
.footer-about h3{font-family:'Playfair Display',serif;color:var(--white);font-size:1.2rem;margin-bottom:14px;padding-bottom:10px;border-bottom:2px solid var(--amber);}
.footer-about p{font-size:13.5px;line-height:1.8;margin-bottom:14px;}
.footer-contact a{display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.7);text-decoration:none;font-size:13px;margin-bottom:8px;transition:color .2s;}
.footer-contact a:hover{color:var(--amber);}
.footer-contact a i{color:var(--amber);width:16px;}
.social-row{display:flex;gap:10px;margin-top:18px;}
.social-row a{width:36px;height:36px;border:1px solid rgba(255,255,255,.15);border-radius:8px;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);font-size:15px;text-decoration:none;transition:.2s;}
.social-row a:hover{border-color:var(--amber);color:var(--amber);}
.footer-links-col h4{font-family:'Playfair Display',serif;color:var(--white);margin-bottom:14px;font-size:1rem;padding-bottom:10px;border-bottom:2px solid var(--amber);}
.footer-links-col a{display:block;font-size:13px;color:rgba(255,255,255,.6);text-decoration:none;margin-bottom:8px;transition:color .2s;}
.footer-links-col a:hover{color:var(--amber);}
.footer-bottom{background:rgba(0,0,0,.2);text-align:center;padding:14px;font-size:12.5px;color:rgba(255,255,255,.4);}

/* ── RESPONSIVE ── */
@media(max-width:768px){
  .nav-inner{padding:0 20px;}
  .nav-links{display:none;flex-direction:column;position:absolute;top:70px;left:0;right:0;background:var(--white);border-bottom:4px solid var(--amber);padding:16px;gap:4px;box-shadow:0 8px 24px rgba(0,0,0,.08);}
  .nav-links.open{display:flex;}
  .nav-links a{padding:10px 14px;}
  .hamburger{display:block;}
  .hero{padding:52px 20px 40px;}
  .hero-decor{display:none;}
  .container{padding:0 20px;}
  .topbar{padding:6px 20px;font-size:11.5px;}
  .footer-main{padding:36px 20px;}
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-left">
    <a href="tel:+918653002455"><i class="fas fa-phone"></i> +91 86 5300 2455</a>
    <a href="mailto:tnpcell@nitsikkim.ac.in"><i class="fas fa-envelope"></i> tnpcell@nitsikkim.ac.in</a>
    <a href="mailto:internshiptnp@nitsikkim.ac.in"><i class="fas fa-envelope-open"></i> internshiptnp@nitsikkim.ac.in</a>
  </div>
  <div class="topbar-right">
    <a href="https://nitsikkim.ac.in" target="_blank"><i class="fas fa-home"></i> Home</a>
  </div>
</div>

<!-- NAVBAR -->
<nav>
  <div class="nav-inner">
    <a class="logo" href="#">
      <div class="logo-badge">T&P</div>
      <div class="logo-text">
        <strong>NIT Sikkim</strong>
        <span>Training &amp; Placement Cell</span>
      </div>
    </a>
    <div class="nav-links" id="navLinks">
      <a href="../index.php"><i class="fas fa-home" style="margin-right:5px;"></i>Home</a>
      <a href="#" onclick="showPage('recruiters')" class="active" id="nav-recruiters">For Recruiters</a>
      <a href="#" onclick="showPage('login')" id="nav-login">Recruiter Login</a>
      <a href="#" onclick="showPage('policy')" id="nav-policy">Placement Policy</a>
      <a href="#" onclick="showPage('demography')" id="nav-demography">Demography</a>
      <a href="#" onclick="showPage('collaboration')" id="nav-collaboration">Collaborations</a>
      <a href="#" onclick="showPage('places')" id="nav-places">Places to Visit</a>
      <a href="#" onclick="showPage('brochure')" class="nav-cta" id="nav-brochure">Brochure</a>
    </div>
    <button class="hamburger" onclick="toggleNav()" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- ═══════════════════════════════════════════════
     PAGE: FOR RECRUITERS
═══════════════════════════════════════════════ -->
<div class="page active" id="page-recruiters">
  <div class="hero">
    <div class="hero-decor"><i class="fas fa-building hero-decor-icon"></i></div>
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="#">Home</a><span>›</span><span>For Recruiters</span></div>
      <div class="hero-tag">Placement Season 2025–26</div>
      <h1>For <em>Recruiters</em></h1>
      <p>Partner with NIT Sikkim to access talented engineers and scientists ready to make an impact. Our streamlined placement process ensures a seamless recruitment experience.</p>
    </div>
  </div>

  <div class="container">
    <div class="section-header" id="section-one">
      <div class="section-label">Timeline</div>
      <div class="section-title">Placement <em>Calendar</em></div>
      <div class="section-divider"></div>
    </div>

    <p style="font-size:14.5px;color:var(--text-muted);margin-bottom:24px;line-height:1.75;">The placement season for the <strong>2026 batch</strong> (B.Tech, M.Tech &amp; M.Sc) commences on <strong>29th July 2025</strong>. The entire season is divided into two slots:</p>

    <div class="calendar-grid">
      <div class="cal-card">
        <div class="cal-badge">Slot 1</div>
        <div class="cal-slot-num">Monsoon Semester</div>
        <div class="cal-slot-name">July – December</div>
        <div class="cal-dates"><i class="fas fa-circle-dot"></i> 29th July 2025 &nbsp;→&nbsp; 27th December 2025</div>
      </div>
      <div class="cal-card slot2" id="section-two">
        <div class="cal-badge" style="color:var(--maroon-light)">Slot 2</div>
        <div class="cal-slot-num">Winter Semester</div>
        <div class="cal-slot-name">January – June</div>
        <div class="cal-dates"><i class="fas fa-circle-dot" style="color:var(--maroon-light)"></i> 20th January 2026 &nbsp;→&nbsp; June 2026</div>
      </div>
    </div>

    <div class="cal-note">
      <i class="fas fa-info-circle" style="color:var(--amber);margin-right:8px;"></i>
      Recruiters are invited to conduct their entire selection process on mutually convenient dates during this period. Dates beyond these sessions may also be considered, keeping in mind the convenience of both recruiters and the institute.
    </div>

    <div class="section-header" style="padding-top:8px;">
      <div class="section-label">How It Works</div>
      <div class="section-title">Placement <em>Process</em></div>
      <div class="section-divider"></div>
    </div>

    <p style="font-size:14.5px;color:var(--text-muted);margin-bottom:32px;line-height:1.75;">The Placement Office has implemented a highly efficient online system to facilitate the placement process. Campus placement follows the steps outlined below:</p>

    <div class="process-steps">
      <div class="step">
        <div class="step-num">01</div>
        <div class="step-body"><p>The <strong>Placement Office</strong> (or the student Placement Cell) sends invitations and pertinent details to companies and organisations interested in recruiting from NIT Sikkim.</p></div>
      </div>
      <div class="step">
        <div class="step-num">02</div>
        <div class="step-body"><p>Companies/Organisations interested in recruiting can <strong><a href="#" onclick="showPage('login')">register on our platform</a></strong> and complete their profile to get started.</p></div>
      </div>
      <div class="step">
        <div class="step-num">03</div>
        <div class="step-body"><p>Upon successful registration, login credentials are sent via email. The registration is finalised once the company logs in and completes the <strong>Job Announcement Form (JAF)</strong>.</p></div>
      </div>
      <div class="step">
        <div class="step-num">04</div>
        <div class="step-body"><p>If interested, companies may request a <strong>Pre-Placement Talk (PPT)</strong> along with preferred dates. The JAF is then made available to eligible students.</p></div>
      </div>
      <div class="step">
        <div class="step-num">05</div>
        <div class="step-body"><p>Students who meet the eligibility criteria and express interest sign the JAF. The Placement Office coordinates with companies to finalise <strong>recruitment dates</strong>.</p></div>
      </div>
      <div class="step">
        <div class="step-num">06</div>
        <div class="step-body"><p>Companies review resumes, shortlist candidates, and on the designated date(s), <strong>visit campus</strong> to conduct tests and/or interviews as per their process.</p></div>
      </div>
      <div class="step">
        <div class="step-num">07</div>
        <div class="step-body"><p>The company furnishes the <strong>final list of selected students</strong> on the interview date. The Placement Office facilitates offer letter signing and prompt delivery.</p></div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PAGE: COMPANY LOGIN
═══════════════════════════════════════════════ -->
<div class="page" id="page-login">
  <div class="hero">
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="#" onclick="showPage('recruiters')">For Recruiters</a><span>›</span><span>Recruiter Login</span></div>
      <div class="hero-tag">Secure Portal</div>
      <h1>Recruiter <em>Login</em></h1>
      <p>Access the placement portal to post jobs, review resumes, and manage your recruitment process at NIT Sikkim.</p>
    </div>
  </div>

  <div class="container">
    <div class="login-wrap">
      <div class="login-info">
        <h2>Welcome to the Recruiter Portal</h2>
        <p>Register your organisation to connect with top engineering talent from NIT Sikkim. Our portal streamlines every step of campus recruitment.</p>
        <div class="login-perks">
          <div class="perk"><i class="fas fa-check-circle"></i><span>Post Job Announcement Forms (JAF) directly</span></div>
          <div class="perk"><i class="fas fa-check-circle"></i><span>Browse and filter student resumes by department</span></div>
          <div class="perk"><i class="fas fa-check-circle"></i><span>Schedule Pre-Placement Talks &amp; interviews</span></div>
          <div class="perk"><i class="fas fa-check-circle"></i><span>Receive offer letter confirmations online</span></div>
          <div class="perk"><i class="fas fa-check-circle"></i><span>Dedicated placement coordinator support</span></div>
        </div>
      </div>

      <div class="login-card">
        <div class="tab-row">
          <button class="tab-btn active" onclick="switchTab('login-tab','signup-tab',this,document.querySelectorAll('.tab-btn')[1])">Log In</button>
          <button class="tab-btn" onclick="switchTab('signup-tab','login-tab',this,document.querySelectorAll('.tab-btn')[0])">Register</button>
        </div>

        <div class="form-panel active" id="login-tab">
          <h3>Company Login</h3>
          <div class="field"><label>Email / Username</label><input type="email" placeholder="company@example.com"/></div>
          <div class="field"><label>Password</label><input type="password" placeholder="••••••••"/></div>
          <span class="forgot">Forgot your password?</span>
          <button class="btn-primary">LOG IN</button>
        </div>

        <div class="form-panel" id="signup-tab">
          <h3>Company Registration</h3>
          <div class="field"><label>Company Name</label><input type="text" placeholder="Acme Corp Pvt. Ltd."/></div>
          <div class="field"><label>HR Name</label><input type="text" placeholder="HR Contact Name"/></div>
          <div class="field"><label>Designation</label><input type="text" placeholder="HR Manager"/></div>
          <div class="field"><label>Official Email</label><input type="email" placeholder="hr@company.com"/></div>
          <div class="field"><label>Contact Number</label><input type="tel" placeholder="10-digit mobile number"/></div>
          <div class="field"><label>Address</label><input type="text" placeholder="Company headquarters address"/></div>
          <button class="btn-primary">REGISTER</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PAGE: PLACEMENT POLICY
═══════════════════════════════════════════════ -->
<div class="page" id="page-policy">
  <div class="hero">
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="#" onclick="showPage('recruiters')">For Recruiters</a><span>›</span><span>Placement Policy</span></div>
      <div class="hero-tag">Rules &amp; Guidelines</div>
      <h1>Placement <em>Policy</em></h1>
      <p>This season, the entire placement process has been made online to facilitate both students and recruiters effectively.</p>
    </div>
  </div>

  <div class="container">
    <div class="policy-layout">
      <div class="policy-nav">
        <a href="#p1" class="active" onclick="highlightPolicyNav(this)">Eligibility &amp; Registration</a>
        <a href="#p2" onclick="highlightPolicyNav(this)">SIF and Resume</a>
        <a href="#p3" onclick="highlightPolicyNav(this)">Application Rules</a>
        <a href="#p4" onclick="highlightPolicyNav(this)">Withdrawal Rules</a>
        <a href="#p5" onclick="highlightPolicyNav(this)">Selection Process</a>
        <a href="#p6" onclick="highlightPolicyNav(this)">Disciplinary Policy</a>
        <a href="#p7" onclick="highlightPolicyNav(this)">Ph.D. Students</a>
        <a href="#p8" onclick="highlightPolicyNav(this)">General Advice</a>
      </div>
      <div>
        <div class="policy-section" id="p1">
          <h3>Eligibility &amp; Registration</h3>
          <li>Eligibility for the recruitment process is open to all full-time final-year students (B.Tech, M.Tech, M.Sc, and PhD) except QIP and Industry Sponsored students. PhD students who have not submitted their synopsis are not eligible. Students with specific backlogs may or may not be allowed, depending on company criteria.</li>
          <li>Online registration on the T&amp;P Cell website is mandatory for all eligible students. Once registered, students securely log in to complete the Student Information Form (SIF) and upload their resumes. Maintaining password confidentiality is solely the student's responsibility.</li>
        </div>
        <div class="policy-section" id="p2">
          <h3>Student Information Form and Resume</h3>
          <li>Upon registration, students must promptly fill out the SIF and upload updated resumes by the communicated deadline. Failure to adhere to the deadline results in ineligibility for on-campus placements. Late requests will not be considered.</li>
          <li>Students are expected to provide accurate and authentic information. Ongoing verification is conducted by the TnP Cell. Discrepancies detected during verification may lead to strict disciplinary action.</li>
        </div>
        <div class="policy-section" id="p3">
          <h3>Application Rules</h3>
          <li>After completing the SIF and uploading their resume, students can view registered companies and their eligibility criteria. They may confirm or reject participation within the specified deadline.</li>
          <li>Choices must be made wisely — no changes are allowed after the deadline. Students should carefully consider their options and respond promptly to ensure participation in desired companies.</li>
        </div>
        <div class="policy-section" id="p4">
          <h3>Rules of Withdrawing an Application</h3>
          <li>Students who have registered and filled the SIF can view companies with completed JAFs along with eligibility criteria. They may withdraw their application from a company until the specified deadline, after which no changes will be accepted.</li>
        </div>
        <div class="policy-section" id="p5">
          <h3>Selection Process</h3>
          <li>The T&amp;P Cell has established specific bands based on annual CTC offered by companies. Each student is permitted to accept only one on-campus job within a particular band, except for the Dream Job offer. Band details are communicated to students well in advance. The Dream Job offer will be determined dynamically.</li>
        </div>
        <div class="policy-section" id="p6">
          <h3>Student Conduct and Disciplinary Policy</h3>
          <li><strong>Absenteeism Policy:</strong> If a student confirms participation through their T&amp;P student account but fails to attend without a valid reason, they will face stringent disciplinary consequences.</li>
          <li>Participating in unfair practices during any phase of the recruitment process is a significant violation. Students caught using unfair means will face immediate deregistration and referral to relevant authorities for disciplinary action.</li>
        </div>
        <div class="policy-section" id="p7">
          <h3>Ph.D. Students</h3>
          <li>For Ph.D. students, all policies remain the same as for other students with one exception: interviews can be conducted on any day suitable to both the company and the candidates. Unlike other students, placements for PhDs are open throughout the year — recruiters need not wait till December to initiate the interview process.</li>
        </div>
        <div class="policy-section" id="p8">
          <h3>General Advice</h3>
          <li>Students must have their I-cards at all times during interviews and screening tests. Entry to the test/interview venue requires the I-card; individuals without it will not be permitted to enter.</li>
          <li>The date/time/venue of interviews may change at short notice. Students must keep themselves informed by visiting the T&amp;P website regularly (via their Student Account after logging in).</li>
          <li>When appearing for interviews, students should bring a comprehensive file containing multiple copies of their resume, original certificates (if feasible), and photocopies of the same.</li>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PAGE: STUDENT DEMOGRAPHY
═══════════════════════════════════════════════ -->
<div class="page" id="page-demography">
  <div class="hero">
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="#" onclick="showPage('recruiters')">For Recruiters</a><span>›</span><span>Student Demography</span></div>
      <div class="hero-tag">Student Intake Data</div>
      <h1>Student <em>Demography</em></h1>
      <p>An overview of the student intake across departments at NIT Sikkim for the current academic cycle.</p>
    </div>
  </div>

  <div class="container">
    <div class="section-header">
      <div class="section-label">Seat Matrix</div>
      <div class="section-title">Student <em>Intake</em></div>
      <div class="section-divider"></div>
    </div>

    <div class="demo-grid">
      <div class="chart-card">
        <h4>B.Tech Seat Matrix</h4>
        <div class="bar-chart">
          <div class="bar-row"><div class="bar-label">CSE</div><div class="bar-track"><div class="bar-fill" style="width:100%"><span class="bar-val">41</span></div></div></div>
          <div class="bar-row"><div class="bar-label">ECE</div><div class="bar-track"><div class="bar-fill" style="width:71%"><span class="bar-val">29</span></div></div></div>
          <div class="bar-row"><div class="bar-label">EEE</div><div class="bar-track"><div class="bar-fill" style="width:71%"><span class="bar-val">29</span></div></div></div>
          <div class="bar-row"><div class="bar-label">ME</div><div class="bar-track"><div class="bar-fill" style="width:71%"><span class="bar-val">29</span></div></div></div>
          <div class="bar-row"><div class="bar-label">CE</div><div class="bar-track"><div class="bar-fill" style="width:71%"><span class="bar-val">29</span></div></div></div>
        </div>
      </div>
      <div class="chart-card">
        <h4>M.Tech Seat Matrix</h4>
        <div class="bar-chart">
          <div class="bar-row"><div class="bar-label">Chem.</div><div class="bar-track"><div class="bar-fill" style="width:100%"><span class="bar-val">9</span></div></div></div>
          <div class="bar-row"><div class="bar-label">EEE</div><div class="bar-track"><div class="bar-fill" style="width:22%"><span class="bar-val">2</span></div></div></div>
        </div>
      </div>
    </div>

    <div style="background:var(--white);border:1px solid var(--border);border-radius:16px;padding:28px;margin-bottom:56px;">
      <h4 style="font-family:'Playfair Display',serif;color:var(--maroon);margin-bottom:16px;font-size:1.1rem;">About NIT Sikkim Talent Pool</h4>
      <p style="font-size:14px;color:var(--text-muted);line-height:1.8;">NIT Sikkim students undergo rigorous academic training across B.Tech, M.Tech, M.Sc and PhD programmes in Engineering and Sciences. Strong industry partnerships, MoUs with premier IITs, and a robust selection process through JEE Advanced ensure that our graduates are well-equipped to contribute from day one. Our talent pool spans software, electronics, electrical, mechanical, civil and interdisciplinary domains.</p>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PAGE: COLLABORATIONS
═══════════════════════════════════════════════ -->
<div class="page" id="page-collaboration">
  <div class="hero">
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="#" onclick="showPage('recruiters')">For Recruiters</a><span>›</span><span>Collaborations</span></div>
      <div class="hero-tag">MoUs &amp; Partnerships</div>
      <h1>MoUs &amp; <em>Collaborations</em></h1>
      <p>NIT Sikkim's strong academic network with premier institutions across India and the world reflects the quality and exposure of our students.</p>
    </div>
  </div>

  <div class="container">
    <div class="section-header">
      <div class="section-label">Institutional Network</div>
      <div class="section-title">Our <em>Collaborations</em></div>
      <div class="section-divider"></div>
    </div>

    <div class="collab-grid">
      <!-- IIT Guwahati -->
      <div class="collab-card">
        <div class="collab-icon">G</div>
        <h3>IIT Guwahati</h3>
        <p>NIT Sikkim and IIT Guwahati formalised their long informal relationship into a strong academic MoU covering R&amp;D, faculty exchange, and shared placement drives.</p>
        <button class="read-more-btn" onclick="toggleExtra(this)">Read More</button>
        <div class="collab-extra">
          <strong>MoU Benefits include:</strong><br><br>
          1. Informal faculty exchange for knowledge sharing.<br><br>
          2. Lab assistance for B.Tech students at IIT Guwahati — students in ECE, CSE and EEE have studied there.<br><br>
          3. Access to IIT Guwahati's placement drives — inaugural batch students secured jobs through these drives.<br><br>
          4. Access to library, laboratories, and departments for NIT Sikkim faculty.
        </div>
      </div>
      <!-- IIT Kharagpur -->
      <div class="collab-card">
        <div class="collab-icon">K</div>
        <h3>IIT Kharagpur</h3>
        <p>NIT Sikkim and IIT KGP have engaged in collaborative partnerships for diverse academic endeavours including pool campus drives and research access.</p>
        <button class="read-more-btn" onclick="toggleExtra(this)">Read More</button>
        <div class="collab-extra">
          1. NIT Sikkim students participate in pool campus drives at IIT KGP.<br><br>
          2. Faculty members granted access to IIT KGP's library, labs and research centres.<br><br>
          3. Certain laboratory sessions for NIT Sikkim students have been conducted at IIT KGP.<br><br>
          4. Senior members of both institutes collaborate on research and innovative planning.
        </div>
      </div>
      <!-- IIT Hyderabad -->
      <div class="collab-card">
        <div class="collab-icon">H</div>
        <h3>IIT Hyderabad</h3>
        <p>MoU signed to promote institutional collaboration in education and research, fostering interaction among faculty members, research staff, and students.</p>
      </div>
      <!-- IIT Bhilai -->
      <div class="collab-card">
        <div class="collab-icon">B</div>
        <h3>IIT Bhilai</h3>
        <p>Partnership for collaboration in research and academic activities, fostering knowledge exchange and promoting joint initiatives between the two prestigious institutions.</p>
      </div>
      <!-- IIT Bombay -->
      <div class="collab-card">
        <div class="collab-icon">B</div>
        <h3>IIT Bombay</h3>
        <p>MoU to facilitate student exchange, academic cooperation, and research collaboration among faculty members, enhancing exposure and opportunity for students.</p>
      </div>
      <!-- IIT Delhi -->
      <div class="collab-card">
        <div class="collab-icon">D</div>
        <h3>IIT Delhi</h3>
        <p>MoU for academic and research collaboration. NIT Sikkim B.Tech students qualify for direct admission to IIT Delhi's PhD programmes without GATE or national-level exams.</p>
      </div>
      <!-- IIT Gandhinagar -->
      <div class="collab-card">
        <div class="collab-icon">G</div>
        <h3>IIT Gandhinagar</h3>
        <p>MoU to facilitate student exchange, academic cooperation, and research collaboration among faculty members of both institutions.</p>
      </div>
      <!-- IIT Roorkee -->
      <div class="collab-card">
        <div class="collab-icon">R</div>
        <h3>IIT Roorkee</h3>
        <p>MoU to foster collaboration and cooperation — facilitating knowledge exchange, research collaborations, and joint academic initiatives in engineering.</p>
      </div>
      <!-- MNIT Jaipur -->
      <div class="collab-card">
        <div class="collab-icon">J</div>
        <h3>MNIT Jaipur</h3>
        <p>Transformative partnership for collaborative research, innovation, and academic exchange — leveraging respective strengths to drive excellence in engineering education.</p>
      </div>
      <!-- DRDO -->
      <div class="collab-card">
        <div class="collab-icon"><i class="fas fa-shield-halved" style="font-size:18px;"></i></div>
        <h3>DGRE-DRDO</h3>
        <p>MoU for R&amp;D collaboration in defence-related fields, facilitating knowledge exchange, joint research activities, and skill development initiatives.</p>
      </div>
      <!-- NIPER Kolkata -->
      <div class="collab-card">
        <div class="collab-icon">N</div>
        <h3>NIPER Kolkata</h3>
        <p>MoU uniting both institutions for collaborative endeavours in research, knowledge exchange, and academic synergy in pharmaceutical education.</p>
      </div>
      <!-- International -->
      <div class="collab-card">
        <div class="collab-icon"><i class="fas fa-globe" style="font-size:18px;"></i></div>
        <h3>International (TUD &amp; UB Germany)</h3>
        <p>Learning agreement with TU Dresden (ZIH) for student exchange, and joint PhD programme partnership with University of Bremen under the CLINK programme of the European Union.</p>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PAGE: PLACES TO VISIT
═══════════════════════════════════════════════ -->
<div class="page" id="page-places">
  <div class="hero">
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="#" onclick="showPage('recruiters')">For Recruiters</a><span>›</span><span>Places to Visit</span></div>
      <div class="hero-tag">Sikkim Tourism</div>
      <h1>Places to <em>Visit</em></h1>
      <p>Nestled in the Himalayas, Ravangla and the surrounding region offer breathtaking landscapes, spiritual sites, and rich biodiversity.</p>
    </div>
  </div>

  <div class="container">
    <div class="section-header">
      <div class="section-label">Ravangla &amp; Surroundings</div>
      <div class="section-title">Explore <em>Sikkim</em></div>
      <div class="section-divider"></div>
    </div>

    <div class="places-intro">
      <h3>About Ravangla</h3>
      <p>Ravangla, a charming town nestled in the Himalayas, offers stunning views of Mount Kanchenjunga and other majestic peaks. With moderate trekking options, monasteries, hot springs, lakes, waterfalls, and tea gardens, Ravangla is a sought-after destination for those seeking peace and natural beauty. Resting in the lap of the Himalayas and surrounded by the chilly breeze — it is indeed the "Singapore of India."</p>
    </div>

    <div class="places-list">
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-place-of-worship"></i></div><div><h4>Tathagata Tsal (Buddha Park)</h4><p>Located near NIT Sikkim in Ravangla, nestled amidst Himalayan mountains at ~7,000 feet elevation offering panoramic views of surrounding valleys.</p></div></div>
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-hot-tub-person"></i></div><div><h4>Borong &amp; Ralang Hot Springs</h4><p>Traditional winter spas with healing effects. Tourists from India, Bhutan, and Nepal visit annually to soak in the medicinal mineral-rich waters.</p></div></div>
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-torii-gate"></i></div><div><h4>Doling Monastery</h4><p>Situated among cardamom plantations, this is one of the oldest monasteries of Sikkim — a deeply historical place in the state.</p></div></div>
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-mug-hot"></i></div><div><h4>Temi Tea Garden</h4><p>~18 km from NIT Sikkim. The only tea estate in Sikkim, known for high-quality organic tea. Walk through lush green gardens and savour freshly brewed tea.</p></div></div>
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-om"></i></div><div><h4>Siddheswar Dham</h4><p>~20 km away. A popular pilgrimage site dedicated to Lord Shiva, featuring a replica of Char Dham and a magnificent 108-foot statue of Lord Shiva.</p></div></div>
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-paw"></i></div><div><h4>Maenam Wildlife Sanctuary</h4><p>~10 km away. Known for diverse flora and fauna including red pandas and Himalayan black bears. Offers trekking and panoramic mountain views.</p></div></div>
      <div class="place-item"><div class="place-item-icon"><i class="fas fa-mountain-sun"></i></div><div><h4>Tendong Hill</h4><p>~15 km away. Panoramic viewpoint overlooking valleys, tea gardens, and snow-capped Himalayas. Great for nature walks, picnics, and birdwatching.</p></div></div>
    </div>

    <div class="gallery-section">
      <h3>Iconic Destinations Across Sikkim</h3>
      <div class="gallery-grid">
        <div class="gallery-item"><i class="fas fa-water"></i>Gurudongmar Lake</div>
        <div class="gallery-item"><i class="fas fa-water"></i>Cholamu Lake</div>
        <div class="gallery-item"><i class="fas fa-mountain"></i>Chopta Valley</div>
        <div class="gallery-item"><i class="fas fa-water"></i>Green Lake</div>
        <div class="gallery-item"><i class="fas fa-tree"></i>Kabi Lungchok</div>
        <div class="gallery-item"><i class="fas fa-mountain-city"></i>Lachung</div>
        <div class="gallery-item"><i class="fas fa-city"></i>Mangan</div>
        <div class="gallery-item"><i class="fas fa-snowflake"></i>Mt. Katao</div>
        <div class="gallery-item"><i class="fas fa-torii-gate"></i>Phensang Monastery</div>
        <div class="gallery-item"><i class="fas fa-torii-gate"></i>Phodong Monastery</div>
        <div class="gallery-item"><i class="fas fa-waterfall"></i>Seven Sisters Falls</div>
        <div class="gallery-item"><i class="fas fa-mountain"></i>Yumthang Valley</div>
        <div class="gallery-item"><i class="fas fa-water"></i>Tosar Lake</div>
        <div class="gallery-item"><i class="fas fa-mountain"></i>Yume Samdong</div>
        <div class="gallery-item"><i class="fas fa-place-of-worship"></i>Char Dham</div>
        <div class="gallery-item"><i class="fas fa-leaf"></i>Tinkitam Village</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     PAGE: BROCHURE
═══════════════════════════════════════════════ -->
<div class="page" id="page-brochure">
  <div class="hero">
    <div class="hero-grain"></div>
    <div class="hero-content">
      <div class="breadcrumb"><a href="https://placement.nitsikkim.ac.in/documents/National_Institute_of_Technology_Sikkim_Placement_Brochure_2025-26.pdf" target="_blank">
  Placement Brochure
</a><span>›</span><span>Placement Brochure</span></div>
      <div class="hero-tag">Official Document</div>
      <h1>Placement <em>Brochure</em></h1>
      <p>Download the official Placement Brochure 2025–26 for a comprehensive overview of NIT Sikkim's academic programs, student profile, and placement statistics.</p>
    </div>
  </div>

  <div class="container">
    <div class="brochure-wrap">
      <div class="brochure-icon"><i class="fas fa-file-pdf"></i></div>
      <h2>NIT Sikkim Placement Brochure 2025–26</h2>
      <p>Our official placement brochure provides detailed information about academic programs, student demographics, past recruiters, infrastructure, and the complete recruitment process.</p>
      <a class="btn-download" href="https://placement.nitsikkim.ac.in/documents/National_Institute_of_Technology_Sikkim_Placement_Brochure_2025-26.pdf" target="_blank">
        <i class="fas fa-download"></i> Download Brochure (PDF)
      </a>
      <p style="margin-top:20px;font-size:13px;color:var(--text-muted);">You will be redirected to the official NIT Sikkim placement portal to download the document.</p>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════ -->
<footer>
  <div class="footer-main">
    <div class="footer-about">
      <h3>About T&amp;P Cell</h3>
      <p>Training and Placement Cell, National Institute of Technology Sikkim (TnP Cell) is the official intermediary between companies and students. The placement season commences from July and lasts till May every academic session.</p>
      <p>79X4+2W7, Barfung Block, Ravangla, Sikkim 737139</p>
      <div class="footer-contact">
        <a href="tel:+918653002455"><i class="fas fa-phone"></i> +91 86 5300 2455</a>
        <a href="mailto:tnpcell@nitsikkim.ac.in"><i class="fas fa-envelope"></i> tnpcell@nitsikkim.ac.in</a>
        <a href="https://nitsikkim.ac.in" target="_blank"><i class="fas fa-globe"></i> www.nitsikkim.ac.in</a>
      </div>
      <div class="social-row">
        <a href="https://www.facebook.com/placement.nitsikkim.ac.in/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/nitsikkim1" target="_blank"><i class="fab fa-x-twitter"></i></a>
        <a href="https://www.linkedin.com/company/tnpcellnitsikkim/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <div class="footer-links-col">
      <h4>Quick Links</h4>
      <a href="https://placement.nitsikkim.ac.in/documents/National_Institute_of_Technology_Sikkim_Placement_Brochure_2025-26.pdf" target="_blank">Placement Brochure</a>
      <a href="https://nitsikkim.ac.in/" target="_blank">NIT Sikkim Home</a>
      <a href="https://www.education.gov.in/technical-education-5" target="_blank">MHRD</a>
      <a href="https://en.wikipedia.org/wiki/National_Institute_of_Technology,_Sikkim" target="_blank">Wikipedia</a>
      <a href="https://www.kic.nitsikkim.ac.in/" target="_blank">KIC</a>
    </div>
    <div class="footer-links-col">
      <h4>Recruiter Links</h4>
      <a href="#" onclick="showPage('recruiters')">For Recruiters</a>
      <a href="#" onclick="showPage('login')">Recruiter Login</a>
      <a href="#" onclick="showPage('policy')">Placement Policy</a>
      <a href="#" onclick="showPage('demography')">Student Demography</a>
      <a href="#" onclick="showPage('collaboration')">Collaborations</a>
      <a href="#" onclick="showPage('places')">Places to Visit</a>
    </div>
  </div>
  <div class="footer-bottom">Copyright &copy; 2024 Training and Placement Cell, NIT Sikkim. All Rights Reserved.</div>
</footer>

<script>
function showPage(id){
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  document.getElementById('page-'+id).classList.add('active');
  document.querySelectorAll('.nav-links a').forEach(a=>a.classList.remove('active'));
  const navEl=document.getElementById('nav-'+id);
  if(navEl)navEl.classList.add('active');
  window.scrollTo({top:0,behavior:'smooth'});
  // close mobile nav
  document.getElementById('navLinks').classList.remove('open');
  return false;
}

function toggleNav(){
  document.getElementById('navLinks').classList.toggle('open');
}

function switchTab(showId,hideId,activeBtn,inactiveBtn){
  document.getElementById(showId).classList.add('active');
  document.getElementById(hideId).classList.remove('active');
  activeBtn.classList.add('active');
  inactiveBtn.classList.remove('active');
}

function toggleExtra(btn){
  const extra=btn.nextElementSibling;
  const visible=extra.style.display==='block';
  extra.style.display=visible?'none':'block';
  btn.textContent=visible?'Read More':'Read Less';
}

function highlightPolicyNav(el){
  document.querySelectorAll('.policy-nav a').forEach(a=>a.classList.remove('active'));
  el.classList.add('active');
}
</script>
</body>
</html>