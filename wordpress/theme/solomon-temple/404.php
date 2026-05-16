<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Page Not Found &mdash; Solomon Temple M.B.C.</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,600&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --navy:   #0e2260;
  --royal:  #1b3d8f;
  --gold:   #c8991a;
  --gold-lt:#e8b830;
  --gold-dim:#9a7412;
}
html,body{height:100%}
body{
  font-family:'Source Sans 3',sans-serif;
  background:var(--navy) !important;
  color:#fff !important;
  min-height:100vh;
  display:flex;
  flex-direction:column;
  position:relative;
  overflow-x:hidden;
}

/* ── Background texture (matches hero/countdown) ── */
.bg-grad{
  position:fixed;inset:0;pointer-events:none;z-index:0;
  background:
    radial-gradient(ellipse 75% 60% at 85% 35%, rgba(200,153,26,.10) 0%, transparent 60%),
    radial-gradient(ellipse 55% 70% at 10% 80%, rgba(42,82,176,.25) 0%, transparent 55%);
}
.bg-grid{
  position:fixed;inset:0;pointer-events:none;z-index:0;opacity:.03;
  background-image:
    repeating-linear-gradient(0deg,transparent,transparent 40px,rgba(255,255,255,1) 40px,rgba(255,255,255,1) 41px),
    repeating-linear-gradient(90deg,transparent,transparent 40px,rgba(255,255,255,1) 40px,rgba(255,255,255,1) 41px);
}

/* ── Gold stripes (position:fixed !important overrides style.css position:absolute) ── */
.stripe-top,.stripe-bot{
  position:fixed !important;left:0;right:0;height:4px;z-index:10;
  background:linear-gradient(90deg,var(--gold-dim),var(--gold-lt) 50%,var(--gold-dim)) !important;
}
.stripe-top{top:0 !important;bottom:auto !important}
.stripe-bot{bottom:0 !important;top:auto !important}

/* ── Layout ── */
.page{
  position:relative;z-index:1;
  flex:1;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
  padding:5rem 1.5rem 4rem;
  gap:0;
}

/* ── Logo + identity ── */
.logo{
  width:clamp(52px,7vw,72px);
  height:auto;
  filter:drop-shadow(0 4px 16px rgba(0,0,0,.5));
  margin-bottom:1rem;
}
.church-name{
  font-family:'Cormorant Garamond',serif;
  font-size:clamp(1.1rem,2.5vw,1.6rem);
  font-weight:700;
  color:#fff;
  letter-spacing:.025em;
  margin-bottom:.2rem;
}
.church-sub{
  font-size:clamp(.6rem,1vw,.78rem);
  color:rgba(232,184,48,.7);
  letter-spacing:.1em;
  text-transform:uppercase;
  margin-bottom:2.2rem;
}

/* ── Divider ── */
.rule{
  width:min(200px,50vw);
  height:2px;
  background:linear-gradient(90deg,transparent,var(--gold-dim) 20%,var(--gold-lt) 50%,var(--gold-dim) 80%,transparent);
  margin-bottom:2.5rem;
}

/* ── 404 number ── */
.four-o-four{
  font-family:'Cormorant Garamond',serif;
  font-size:clamp(6rem,20vw,14rem);
  font-weight:700;
  color:var(--gold-lt);
  line-height:1;
  letter-spacing:.04em;
  text-shadow:0 0 80px rgba(232,184,48,.18),0 6px 32px rgba(0,0,0,.6);
  margin-bottom:.2rem;
  font-variant-numeric:tabular-nums;
}

/* ── Heading ── */
.heading{
  font-family:'Cormorant Garamond',serif;
  font-size:clamp(1.4rem,3.5vw,2.4rem);
  font-weight:600;
  color:#fff;
  letter-spacing:.02em;
  margin-bottom:1rem;
  line-height:1.2;
}

/* ── Message ── */
.message{
  font-size:clamp(.85rem,1.6vw,1.05rem);
  color:rgba(214,221,232,.65);
  line-height:1.75;
  max-width:460px;
  margin-bottom:2.5rem;
}

/* ── Home button ── */
.btn-home{
  display:inline-flex;align-items:center;gap:.55rem;
  background:linear-gradient(90deg,var(--gold-dim),var(--gold),var(--gold-dim));
  color:var(--navy);
  font-family:'Source Sans 3',sans-serif;
  font-size:.92rem;
  font-weight:700;
  letter-spacing:.05em;
  text-transform:uppercase;
  text-decoration:none;
  padding:.78rem 2.2rem;
  border-radius:50px;
  box-shadow:0 4px 24px rgba(200,153,26,.3);
  transition:opacity .2s,transform .18s,box-shadow .2s;
}
.btn-home:hover{
  opacity:.92;
  transform:translateY(-2px);
  box-shadow:0 8px 32px rgba(200,153,26,.45);
}
.btn-home svg{flex-shrink:0}

/* ── Footer note ── */
.foot-note{
  margin-top:3rem;
  font-size:.72rem;
  color:rgba(255,255,255,.18);
  letter-spacing:.06em;
}
.foot-note a{color:rgba(232,184,48,.35);text-decoration:none}
.foot-note a:hover{color:rgba(232,184,48,.65)}

@media(max-width:480px){
  .page{padding:4rem 1.2rem 3rem}
  .church-sub{margin-bottom:1.6rem}
  .rule{margin-bottom:1.8rem}
  .message{margin-bottom:2rem}
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="bg-grad"></div>
<div class="bg-grid"></div>
<div class="stripe-top"></div>
<div class="stripe-bot"></div>

<div class="page">

  <img class="logo"
       src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/stmbc-logo.png"
       alt="Solomon Temple M.B.C."/>

  <div class="church-name">Solomon Temple M.B.C.</div>
  <div class="church-sub">St. Louis, MO &nbsp;&middot;&nbsp; Est. 1918</div>

  <div class="rule"></div>

  <div class="four-o-four">404</div>

  <h1 class="heading">Page Not Found</h1>

  <p class="message">
    The page you&rsquo;re looking for couldn&rsquo;t be found.<br/>
    Let us guide you back home.
  </p>

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-home">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
      <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
    </svg>
    Return to Home
  </a>

  <p class="foot-note">
    Solomon Temple Missionary Baptist Church &nbsp;&middot;&nbsp;
    <a href="tel:3143824181">(314) 382-4181</a>
  </p>

</div>

<?php wp_footer(); ?>
</body>
</html>
