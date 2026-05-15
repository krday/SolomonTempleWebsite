<?php if ( ! defined( "ABSPATH" ) ) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Mothers' Ministry – Solomon Temple M.B.C.</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --royal:   #1b3d8f;
  --royal-dk:#0e2260;
  --royal-lt:#2a52b0;
  --gold:    #c8991a;
  --gold-lt: #e8b830;
  --gold-dim:#9a7412;
  --cream:   #fdf9f0;
  --white:   #ffffff;
  --text:    #1a1a2e;
  --gray:    #5a6a82;
  --light:   #edf0f8;
  --radius:  10px;
}
html{scroll-behavior:smooth}
body{font-family:'Source Sans 3',sans-serif;background:var(--cream);color:var(--text);overflow-x:hidden}

/* ─── TOPBAR ─── */
.topbar{
  background:var(--royal-dk);
  display:flex;justify-content:space-between;align-items:center;
  padding:.45rem 1.5rem;gap:.5rem;flex-wrap:nowrap;
}
.topbar-left{
  display:flex;align-items:center;gap:.6rem;
  color:rgba(255,255,255,.8);font-size:.72rem;white-space:nowrap;flex-shrink:1;min-width:0;
}
.topbar-left a{color:var(--gold-lt);text-decoration:none;white-space:nowrap}
.topbar-left .sep{color:rgba(255,255,255,.3)}
.topbar-right{display:flex;gap:.9rem;flex-shrink:0}
.topbar-right a{
  color:var(--gold-lt);text-decoration:none;font-size:.72rem;
  font-weight:600;white-space:nowrap;display:flex;align-items:center;gap:.3rem;
}
.topbar-right a:hover{color:var(--white)}
@media(max-width:640px){
  .topbar-addr{display:none}
  .topbar-left .sep{display:none}
  .topbar .soc{display:none}
}

/* ─── NAV ─── */
nav{
  background:var(--royal);
  position:sticky;top:0;z-index:200;
  box-shadow:0 4px 20px rgba(0,0,0,.4);
  border-bottom:3px solid var(--gold-dim);
}
.nav-inner{
  display:flex;align-items:center;justify-content:space-between;
  padding:.85rem 1.5rem;max-width:1200px;margin:0 auto;
}
.brand{display:flex;align-items:center;gap:.85rem;text-decoration:none}
.brand svg{width:44px;height:44px;flex-shrink:0;filter:drop-shadow(0 2px 6px rgba(0,0,0,.4))}
.brand-text .cn{font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--white);line-height:1.2}
.brand-text .cs{font-size:.65rem;color:rgba(232,184,48,.85);letter-spacing:.03em;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:260px}
.nav-links{display:flex;align-items:center;gap:.1rem;flex-wrap:nowrap}
.nav-links a{padding:.42rem .72rem;border-radius:6px;text-decoration:none;font-size:.84rem;font-weight:600;color:rgba(255,255,255,.85);transition:background .18s,color .18s;white-space:nowrap}
.nav-links a:hover,.nav-links a.active{background:rgba(255,255,255,.1);color:var(--gold-lt)}
.nav-links .give{background:var(--gold);color:var(--royal-dk);padding:.42rem 1rem;margin-left:.4rem;border-radius:6px;font-weight:700;transition:background .18s}
.nav-links .give:hover{background:var(--gold-lt)}
.hamburger{
  display:none;cursor:pointer;
  flex-direction:column;justify-content:center;gap:5px;
  width:38px;height:38px;padding:4px;
  background:rgba(255,255,255,.08);border-radius:6px;flex-shrink:0;
  border:none;
}
.hamburger span{width:22px;height:2.5px;background:rgba(255,255,255,.85);border-radius:2px;display:block;transition:all .25s}
.mobile-menu{
  display:none;flex-direction:column;
  background:var(--royal-dk);border-top:2px solid var(--gold-dim);
  padding:.5rem 0;
}
.mobile-menu.open{display:flex}
.mobile-menu a{
  padding:.8rem 1.5rem;text-decoration:none;font-size:.95rem;
  font-weight:600;color:rgba(255,255,255,.85);border-bottom:1px solid rgba(255,255,255,.05);
  transition:background .15s,color .15s;
}
.mobile-menu a:hover{background:rgba(255,255,255,.07);color:var(--gold-lt)}
.mobile-menu .give-m{
  margin:1rem 1.5rem .5rem;background:var(--gold);color:var(--royal-dk);
  border-radius:8px;text-align:center;padding:.75rem;font-weight:700;
  border-bottom:none;font-size:1rem;
}
.mobile-menu .give-m:hover{background:var(--gold-lt);color:var(--royal-dk)}
@media(max-width:820px){
  .nav-links{display:none}
  .hamburger{display:flex}
}

/* ─── BREADCRUMB ─── */
.breadcrumb{
  background:var(--royal-dk);
  padding:.55rem 1.5rem;
  border-bottom:1px solid rgba(200,153,26,.2);
}
.breadcrumb a{
  color:var(--gold);text-decoration:none;font-size:.82rem;font-weight:600;
  display:inline-flex;align-items:center;gap:.35rem;transition:color .18s;
}
.breadcrumb a:hover{color:var(--gold-lt)}

/* ─── HERO ─── */
.hero{
  background:var(--royal-dk);
  min-height:52vh;display:flex;align-items:center;
  position:relative;overflow:hidden;padding:5rem 1.5rem;
}
.hero-bg{
  position:absolute;inset:0;
  background:
    radial-gradient(ellipse 80% 70% at 85% 50%, rgba(200,153,26,.12) 0%, transparent 60%),
    radial-gradient(ellipse 60% 80% at 5% 90%, rgba(42,82,176,.3) 0%, transparent 55%);
}
.hero-grid{
  position:absolute;inset:0;opacity:.04;
  background-image:
    repeating-linear-gradient(0deg,transparent,transparent 40px,rgba(255,255,255,1) 40px,rgba(255,255,255,1) 41px),
    repeating-linear-gradient(90deg,transparent,transparent 40px,rgba(255,255,255,1) 40px,rgba(255,255,255,1) 41px);
}
.stripe-top{position:absolute;top:0;left:0;right:0;height:5px;background:linear-gradient(90deg,var(--gold-dim),var(--gold-lt) 50%,var(--gold-dim))}
.stripe-bot{position:absolute;bottom:0;left:0;right:0;height:5px;background:linear-gradient(90deg,var(--gold-dim),var(--gold-lt) 50%,var(--gold-dim))}
.hero-content{position:relative;z-index:2;max-width:700px;margin:0 auto;text-align:center}
.hero-eyebrow{
  display:inline-flex;align-items:center;gap:.5rem;
  background:rgba(200,153,26,.15);border:1px solid rgba(200,153,26,.4);
  color:var(--gold-lt);font-size:.72rem;letter-spacing:.15em;text-transform:uppercase;
  padding:.3rem .9rem;border-radius:50px;margin-bottom:1.4rem;font-variant:small-caps;
}
.hero h1{
  font-family:'Cormorant Garamond',serif;
  font-size:clamp(2.6rem,7vw,4.6rem);font-weight:700;
  color:var(--white);line-height:1.05;margin-bottom:.9rem;
}
.hero-sub{
  font-family:'Cormorant Garamond',serif;font-style:italic;
  color:var(--gold-lt);font-size:1.3rem;line-height:1.45;
  border-top:1px solid rgba(200,153,26,.35);
  border-bottom:1px solid rgba(200,153,26,.35);
  padding:.6rem 0;
}
@media(max-width:560px){.hero{min-height:44vh;padding:4rem 1.2rem}}

/* ─── SHARED SECTION ─── */
section{padding:5rem 1.5rem}
.container{max-width:1100px;margin:0 auto}
.sec-label{display:inline-block;color:var(--gold-dim);font-size:.75rem;letter-spacing:.18em;text-transform:uppercase;font-weight:700;margin-bottom:.5rem}
.sec-title{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,4vw,2.7rem);color:var(--royal-dk);line-height:1.15;margin-bottom:.8rem}
.divider{width:52px;height:4px;background:linear-gradient(90deg,var(--gold),var(--gold-lt));border-radius:2px;margin:.65rem 0 1.2rem}
@media(max-width:560px){section{padding:3.5rem 1.1rem}}

/* ─── ABOUT ─── */
.about-body{
  color:#3a3a5a;line-height:1.85;font-size:1.08rem;
  max-width:820px;
}

/* ─── MOTHERS GRID ─── */
.mothers-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:2.5rem}
.mother-card{
  background:var(--white);
  border:2px solid rgba(200,153,26,.35);
  border-radius:var(--radius);
  padding:1.6rem 1.4rem;text-align:center;
  transition:transform .2s,border-color .2s,box-shadow .2s;
}
.mother-card:hover{
  transform:translateY(-3px);
  border-color:var(--gold);
  box-shadow:0 8px 24px rgba(200,153,26,.16);
}
.card-symbol{
  display:block;font-size:1.35rem;color:var(--gold);
  margin-bottom:.8rem;
}
.mother-label{
  font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;
  color:var(--gold);font-weight:600;margin-bottom:.15rem;
}
.mother-name{
  font-family:'Cormorant Garamond',serif;font-size:1.2rem;
  color:var(--royal-dk);font-weight:700;line-height:1.3;
}
@media(max-width:820px){.mothers-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.mothers-grid{grid-template-columns:1fr}}

/* ─── ANNOUNCEMENTS ─── */
.ann-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.2rem;margin-top:2rem}
.ann-card{
  background:var(--white);border-radius:var(--radius);
  border-left:4px solid var(--gold);padding:1.4rem 1.6rem;
  box-shadow:0 2px 12px rgba(0,0,0,.06);
}
.ann-date{font-size:.75rem;color:var(--gold-dim);font-weight:700;letter-spacing:.06em;text-transform:uppercase;margin-bottom:.38rem}
.ann-title{font-family:'Cormorant Garamond',serif;font-size:1.15rem;color:var(--royal-dk);margin-bottom:.5rem;font-weight:600}
.ann-body{color:var(--gray);font-size:1rem;line-height:1.8}

/* ─── GALLERY PLACEHOLDER ─── */
.mm-gal-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:2rem}
.mm-ph-cell{
  border-radius:8px;aspect-ratio:4/3;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  gap:.55rem;font-size:2.2rem;
}
.mm-ph-label{font-size:.82rem;color:rgba(232,184,48,.65);text-align:center;line-height:1.4}
.gc1{background:linear-gradient(135deg,#0e2260,#1b3d8f)}
.gc2{background:linear-gradient(135deg,#0e2260,#2a52b0)}
.gc3{background:linear-gradient(135deg,#1b3d8f,#0e2260)}
.gc4{background:linear-gradient(135deg,#2a52b0,#0e2260)}
.gc5{background:linear-gradient(135deg,#0a1c5a,#1b3d8f)}
.gc6{background:linear-gradient(135deg,#1b3d8f,#2a52b0)}
@media(max-width:820px){.mm-gal-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.mm-gal-grid{grid-template-columns:1fr}}

/* ─── FOOTER ─── */
footer{background:#060f1a;color:#5a6070;padding:3.5rem 1.5rem 1.5rem}
.footer-inner{max-width:1100px;margin:0 auto}
.footer-grid{display:grid;grid-template-columns:1.6fr 1fr 1fr 1fr;gap:2.5rem;padding-bottom:2.5rem;border-bottom:1px solid rgba(255,255,255,.07)}
.fb-col .name{font-family:'Cormorant Garamond',serif;color:#fff;font-size:1.1rem;margin-bottom:.25rem}
.fb-col .motto-ft{font-family:'Cormorant Garamond',serif;font-style:italic;color:var(--gold);font-size:.9rem;margin-bottom:.8rem}
.fb-col p{font-size:.84rem;line-height:1.7;margin-bottom:1rem}
.soc-icons{display:flex;gap:.6rem}
.soc-icons a{width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.07);display:flex;align-items:center;justify-content:center;text-decoration:none;font-size:.9rem;color:#8899b5;transition:background .2s}
.soc-icons a:hover{background:var(--gold);color:var(--royal-dk)}
.fc h5{color:#fff;font-size:.76rem;letter-spacing:.1em;text-transform:uppercase;margin-bottom:.9rem}
.fc ul{list-style:none}
.fc ul li{margin-bottom:.48rem}
.fc ul li a{color:#5a6070;text-decoration:none;font-size:.86rem;transition:color .18s}
.fc ul li a:hover{color:var(--gold-lt)}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;padding-top:1.5rem;font-size:.76rem;flex-wrap:wrap;gap:.5rem}
.footer-bottom a{color:var(--gold);text-decoration:none}
@media(max-width:820px){.footer-grid{grid-template-columns:1fr 1fr}}
@media(max-width:560px){.footer-grid{grid-template-columns:1fr}}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ═══ TOPBAR ═══ -->
<div class="topbar">
  <div class="topbar-left">
    <span class="topbar-addr">📍 4859 Rev. A.L. Manson, Sr. Way · St. Louis, MO 63115</span>
    <span class="sep">|</span>
    <a href="tel:3143824181">☎ (314) 382-4181</a>
    <span class="sep">|</span>
    <span>Sunday 10 AM</span>
  </div>
  <div class="topbar-right">
    <a href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" style="display:inline-flex;align-items:center;gap:.35rem">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg>
      Facebook
    </a>
    <a href="https://youtube.com/@solomontemplem.b.c.-st.lou8789?si=XnI0OeUjF1ZdPfuX" target="_blank" style="display:inline-flex;align-items:center;gap:.35rem">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg>
      YouTube
    </a>
  </div>
</div>

<!-- ═══ NAV ═══ -->
<nav id="top">
  <div class="nav-inner">
    <a href="/" class="brand">
      <svg width="44" height="44" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-label="Solomon Temple M.B.C.">
        <defs>
          <linearGradient id="st-g" x1="0" y1="0" x2="40" y2="40" gradientUnits="userSpaceOnUse">
            <stop stop-color="#c8991a"/>
            <stop offset="1" stop-color="#7a5a0e"/>
          </linearGradient>
        </defs>
        <circle cx="20" cy="20" r="19" fill="url(#st-g)" stroke="rgba(232,184,48,.35)" stroke-width="1.5"/>
        <line x1="20" y1="7" x2="20" y2="33" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="11" y1="14" x2="29" y2="14" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
        <circle cx="20" cy="20" r="3.5" fill="rgba(255,255,255,.18)" stroke="rgba(255,255,255,.5)" stroke-width="1"/>
      </svg>
      <div class="brand-text">
        <div class="cn">Solomon Temple M.B.C.</div>
        <div class="cs">4859 Rev. A.L. Manson, Sr. Way · St. Louis, MO 63115</div>
      </div>
    </a>

    <!-- Desktop links -->
    <div class="nav-links">
      <a href="/#about">Pastor</a>
      <a href="/#history">History</a>
      <a href="/#announcements">Announcements</a>
      <a href="/#ministries" class="active">Ministries</a>
      <a href="/#gallery">Gallery</a>
      <a href="/#media">Watch</a>
      <a href="/#prayer">Prayer</a>
      <a href="/#events">Events</a>
      <a href="/#contact">Contact</a>
      <a href="/#giving" class="give">Give Online</a>
    </div>

    <!-- Hamburger - mobile only -->
    <button class="hamburger" aria-label="Open menu" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </button>
  </div>

  <!-- Mobile drawer -->
  <div class="mobile-menu" id="mobileMenu">
    <div style="padding:.5rem 1.5rem .2rem;font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(200,153,26,.7);font-weight:700">About</div>
    <a href="/#about" onclick="closeMenu()">Our Pastor</a>
    <a href="/#history" onclick="closeMenu()">Church History</a>
    <a href="/#believe" onclick="closeMenu()">What We Believe</a>
    <a href="/#ministries" onclick="closeMenu()">Ministries</a>
    <div style="padding:.6rem 1.5rem .2rem;font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(200,153,26,.7);font-weight:700;border-top:1px solid rgba(255,255,255,.06);margin-top:.3rem">Connect</div>
    <a href="/#new-members" onclick="closeMenu()">New Members</a>
    <a href="/#prayer" onclick="closeMenu()">Prayer Request</a>
    <a href="/#gallery" onclick="closeMenu()">Photo Gallery</a>
    <a href="/#events" onclick="closeMenu()">Church Calendar</a>
    <a href="/#contact" onclick="closeMenu()">Contact Us</a>
    <div style="padding:.6rem 1.5rem .2rem;font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(200,153,26,.7);font-weight:700;border-top:1px solid rgba(255,255,255,.06);margin-top:.3rem">Worship</div>
    <a href="/#media" onclick="closeMenu()">Watch Online</a>
    <a href="/#giving" class="give-m" onclick="closeMenu()">💛 Give Online</a>
  </div>
</nav>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="/">← Back to Home</a>
</div>

<!-- ═══ HERO ═══ -->
<div class="hero">
  <div class="stripe-top"></div>
  <div class="stripe-bot"></div>
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">Solomon Temple M.B.C.</div>
    <h1>Mothers' Ministry</h1>
    <p class="hero-sub">Honoring the Women Who Carried This Church</p>
  </div>
</div>

<!-- ═══ ABOUT ═══ -->
<section style="background:var(--cream)">
  <div class="container">
    <span class="sec-label">About</span>
    <h2 class="sec-title">The Mothers of Solomon Temple</h2>
    <div class="divider"></div>
    <p class="about-body">The Mothers are the spiritual anchors of Solomon Temple M.B.C. — women of deep faith who have served, prayed, and persevered through decades of ministry. They are honored members of this congregation whose wisdom, sacrifice, and love have shaped the life of this church. Solomon Temple is grateful for their enduring presence and their continued covering over this body.</p>
  </div>
</section>

<!-- ═══ OUR MOTHERS ═══ -->
<section style="background:var(--white)">
  <div class="container">
    <span class="sec-label">Our Mothers</span>
    <h2 class="sec-title">Women of Faith &amp; Legacy</h2>
    <div class="divider"></div>
    <div class="mothers-grid">

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Joyce Nunley</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Margaret Taylor</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Dorothy Jones</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Hattie Hardin</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Anne Bell Adams</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Marietta Ross</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Billie McMillan</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Darlene Pitts</div>
      </div>

      <div class="mother-card">
        <span class="card-symbol">✦</span>
        <div class="mother-label">Mother</div>
        <div class="mother-name">Delois Pitts</div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ ANNOUNCEMENTS ═══ -->
<section style="background:var(--light)">
  <div class="container">
    <span class="sec-label">Announcements</span>
    <h2 class="sec-title">Ministry Updates</h2>
    <div class="divider"></div>
    <!-- ANNOUNCEMENTS: Cards will be dynamically injected here by the announcements manager. Filter tag: "mothers-ministry" -->
    <div class="ann-grid">
      <div class="ann-card">
        <div class="ann-date">May 2026</div>
        <div class="ann-title">No Announcements at This Time</div>
        <div class="ann-body">Check back soon for updates from the Mothers' Ministry. We look forward to sharing upcoming events and news with you.</div>
      </div>
      <div class="ann-card">
        <div class="ann-date">Upcoming</div>
        <div class="ann-title">Ministry Events Coming Soon</div>
        <div class="ann-body">Special gatherings and fellowship opportunities will be posted here as they are scheduled. Please check back regularly.</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PHOTOS ═══ -->
<section style="background:var(--royal-dk)">
  <div class="container">
    <span class="sec-label" style="color:var(--gold)">Gallery</span>
    <h2 class="sec-title" style="color:var(--white)">Moments &amp; Memories</h2>
    <div class="divider"></div>
    <!-- GALLERY: Replace placeholder divs with <img> tags when photos are available -->
    <div class="mm-gal-grid">
      <div class="mm-ph-cell gc1">
        <span>📷</span>
        <span class="mm-ph-label">Photo Coming Soon</span>
      </div>
      <div class="mm-ph-cell gc2">
        <span>📷</span>
        <span class="mm-ph-label">Photo Coming Soon</span>
      </div>
      <div class="mm-ph-cell gc3">
        <span>📷</span>
        <span class="mm-ph-label">Photo Coming Soon</span>
      </div>
      <div class="mm-ph-cell gc4">
        <span>📷</span>
        <span class="mm-ph-label">Photo Coming Soon</span>
      </div>
      <div class="mm-ph-cell gc5">
        <span>📷</span>
        <span class="mm-ph-label">Photo Coming Soon</span>
      </div>
      <div class="mm-ph-cell gc6">
        <span>📷</span>
        <span class="mm-ph-label">Photo Coming Soon</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="fb-col">
        <div class="name">Solomon Temple M.B.C.</div>
        <div class="motto-ft">"A Caring and Sharing Church"</div>
        <p>4859 Rev. A.L. Manson, Sr. Way<br/>St. Louis, Missouri 63115<br/>(314) 382-4181<br/><a href="mailto:solomontemplestl@gmail.com" style="color:var(--gold);text-decoration:none">solomontemplestl@gmail.com</a></p>
        <div class="soc-icons">
          <a href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" title="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg>
          </a>
          <a href="https://youtube.com/@solomontemplem.b.c.-st.lou8789?si=XnI0OeUjF1ZdPfuX" target="_blank" title="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg>
          </a>
        </div>
      </div>
      <div class="fc">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="/#about">Our Pastor</a></li>
          <li><a href="/#announcements">Announcements</a></li>
          <li><a href="/#ministries">Ministries</a></li>
          <li><a href="/#gallery">Photo Gallery</a></li>
          <li><a href="/#events">Church Calendar</a></li>
          <li><a href="/#giving">Give Online</a></li>
          <li><a href="/#prayer">Prayer Request</a></li>
        </ul>
      </div>
      <div class="fc">
        <h5>About</h5>
        <ul>
          <li><a href="/#history">Church History</a></li>
          <li><a href="/#church">Our Building</a></li>
          <li><a href="/#history">Past Pastors</a></li>
          <li><a href="/#ministries">Ministries</a></li>
          <li><a href="/#new-members">New Members</a></li>
        </ul>
      </div>
      <div class="fc">
        <h5>Worship</h5>
        <ul>
          <li><a href="/#media">Sunday Livestream</a></li>
          <li><a href="/#media">Past Sermons</a></li>
          <li><a href="/#prayer">Submit a Prayer</a></li>
          <li><a href="/#giving">Tithes &amp; Offerings</a></li>
          <li><a href="/#contact">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Solomon Temple Missionary Baptist Church · Est. 1918 · St. Louis, MO</span>
      <span><a href="#top">Back to Top →</a></span>
    </div>
  </div>
</footer>

<script>
function toggleMenu(){document.getElementById('mobileMenu').classList.toggle('open')}
function closeMenu(){document.getElementById('mobileMenu').classList.remove('open')}
document.addEventListener('click',function(e){
  if(!e.target.closest('nav'))closeMenu();
});
</script>
<?php wp_footer(); ?>
</body>
</html>
