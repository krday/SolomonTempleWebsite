<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// ── PIN gate ───────────────────────────────────────────────────────────────
if ( ! session_id() ) session_start();

define( 'ST_PIN_HASH', '2481982f08f27b3f86c38c49691301694409aa5513c77bf1c1e8db39d2e9bff5' );
define( 'ST_PIN_SALT', 'st_solomon_temple_2024' );

if ( isset( $_POST['st_pin'] ) ) {
    $check = hash( 'sha256', trim( $_POST['st_pin'] ) . ST_PIN_SALT );
    if ( hash_equals( ST_PIN_HASH, $check ) ) {
        $_SESSION['st_admin_auth'] = true;
    } else {
        $GLOBALS['_st_pin_error'] = true;
    }
}

if ( empty( $_SESSION['st_admin_auth'] ) ) {
    $GLOBALS['_st_gate_title'] = 'Announcements Manager';
    include get_template_directory() . '/pin-gate.php';
    exit;
}
// ── End gate ───────────────────────────────────────────────────────────────
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Solomon Temple — Announcements Manager</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Source+Sans+3:wght@300;400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --navy:#0e2260;--royal:#1b3d8f;--gold:#c8991a;--gold-lt:#e8b830;
  --gold-dim:#9a7412;--white:#fff;
  --bg:#060e1e;--card:#0d1f4a;--border:rgba(200,153,26,.2);
  --text:rgba(214,221,232,.85);--radius:12px;
}
body{font-family:'Source Sans 3',sans-serif;background:var(--bg);color:var(--white);min-height:100vh}

.page-header{
  background:linear-gradient(135deg,#0e2260,#1b3d8f);
  border-bottom:3px solid #9a7412;
  padding:.85rem 1.5rem;display:flex;align-items:center;justify-content:space-between;gap:1rem;
}
.page-header-brand{display:flex;align-items:center;gap:.75rem}
.page-header img{width:44px;height:44px;object-fit:contain;filter:drop-shadow(0 2px 6px rgba(0,0,0,.4))}
.page-header-brand-text .ph-name{font-family:'Cormorant Garamond',serif;font-size:1rem;font-weight:700;color:#fff;line-height:1.2}
.page-header-brand-text .ph-tag{font-size:.62rem;color:rgba(232,184,48,.85);letter-spacing:.04em}
.page-header h1{font-family:'Cinzel',serif;font-size:1rem;font-weight:600;color:#e8b830;letter-spacing:.08em;text-align:center}
.page-header-badge{background:rgba(200,153,26,.15);border:1px solid rgba(200,153,26,.4);color:#e8b830;font-size:.65rem;letter-spacing:.12em;text-transform:uppercase;padding:.28rem .9rem;border-radius:50px;font-weight:600;white-space:nowrap}

.main{max-width:860px;margin:0 auto;padding:2rem 1.5rem}

.section-title{
  font-family:'Cinzel',serif;font-size:.72rem;letter-spacing:.15em;
  text-transform:uppercase;color:var(--gold);font-weight:700;
  margin-bottom:1rem;display:flex;align-items:center;gap:.6rem;
}
.section-title::after{content:'';flex:1;height:1px;background:var(--border)}

/* FORM */
.add-form{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);padding:1.5rem;margin-bottom:2rem}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem}
.fg{margin-bottom:0}
.fg label{display:block;color:rgba(214,221,232,.55);font-size:.72rem;font-weight:600;letter-spacing:.05em;text-transform:uppercase;margin-bottom:.3rem}
.fg input,.fg textarea{
  width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(200,153,26,.2);
  border-radius:8px;color:var(--white);padding:.6rem .9rem;
  font-family:'Source Sans 3',sans-serif;font-size:.9rem;outline:none;transition:border-color .2s;
}
.fg input:focus,.fg textarea:focus{border-color:var(--gold)}
.fg input::placeholder,.fg textarea::placeholder{color:rgba(214,221,232,.2)}
.fg textarea{min-height:80px;resize:vertical;margin-bottom:1rem}
.fg input[type="date"]{color-scheme:dark}
.date-row{display:grid;grid-template-columns:1fr 1fr;gap:.8rem;margin-bottom:1rem}
.btn-add{
  background:linear-gradient(90deg,var(--gold-dim),var(--gold),var(--gold-dim));
  color:var(--navy);padding:.7rem 2rem;border-radius:8px;font-weight:700;
  font-size:.9rem;border:none;cursor:pointer;font-family:inherit;
  letter-spacing:.04em;transition:opacity .2s,transform .15s;
}
.btn-add:hover{opacity:.9;transform:translateY(-1px)}

/* CARDS */
.ann-list{display:flex;flex-direction:column;gap:.85rem}
.ann-card{
  background:var(--card);border:1px solid var(--border);border-radius:var(--radius);
  padding:1.1rem 1.3rem;display:flex;justify-content:space-between;
  align-items:flex-start;gap:1rem;position:relative;overflow:hidden;
}
.ann-card::before{content:'';position:absolute;left:0;top:0;bottom:0;width:4px;background:linear-gradient(180deg,var(--gold),var(--gold-dim))}
.ann-card.expired{opacity:.4}
.ann-card.expired::before{background:rgba(255,255,255,.15)}
.ann-body{flex:1}
.ann-title{font-family:'Cinzel',serif;font-size:.95rem;font-weight:600;color:var(--white);margin-bottom:.3rem}
.ann-text{font-size:.85rem;color:var(--text);line-height:1.6}
.ann-dates{font-size:.7rem;color:rgba(200,153,26,.6);margin-top:.4rem}
.ann-right{display:flex;flex-direction:column;align-items:flex-end;gap:.5rem;flex-shrink:0}
.ann-status{font-family:'Cinzel',serif;font-size:.58rem;letter-spacing:.1em;text-transform:uppercase;padding:.2rem .6rem;border-radius:50px;border:1px solid;white-space:nowrap}
.ann-status.active{color:var(--gold-lt);border-color:rgba(200,153,26,.4);background:rgba(200,153,26,.12)}
.ann-status.upcoming{color:#38bdf8;border-color:rgba(56,189,248,.4);background:rgba(56,189,248,.1)}
.ann-status.expired{color:rgba(255,255,255,.3);border-color:rgba(255,255,255,.1);background:rgba(255,255,255,.05)}
.btn-del{background:rgba(220,38,38,.12);border:1px solid rgba(220,38,38,.3);color:rgba(220,100,100,.8);padding:.25rem .7rem;border-radius:6px;font-size:.72rem;cursor:pointer;font-family:inherit;transition:all .2s}
.btn-del:hover{background:rgba(220,38,38,.25);color:#fca5a5}
.empty{text-align:center;padding:2.5rem;color:rgba(214,221,232,.3);font-style:italic}

@media(max-width:600px){
  .form-row,.date-row{grid-template-columns:1fr}
  .main{padding:1.2rem 1rem}
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-header">
  <div class="page-header-brand">
    <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Solomon Temple M.B.C." style="flex-shrink:0"><defs><linearGradient id="st-g" x1="0" y1="0" x2="40" y2="40" gradientUnits="userSpaceOnUse"><stop stop-color="#c8991a"/><stop offset="1" stop-color="#7a5a0e"/></linearGradient></defs><circle cx="20" cy="20" r="19" fill="url(#st-g)" stroke="rgba(232,184,48,.35)" stroke-width="1.5"/><line x1="20" y1="7" x2="20" y2="33" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/><line x1="11" y1="14" x2="29" y2="14" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/><circle cx="20" cy="20" r="3.5" fill="rgba(255,255,255,.18)" stroke="rgba(255,255,255,.5)" stroke-width="1"/></svg>
    <div class="page-header-brand-text">
      <div class="ph-name">Solomon Temple M.B.C.</div>
      <div class="ph-tag">St. Louis, MO &middot; Est. 1918</div>
    </div>
  </div>
  <h1>Announcements Manager</h1>
  <div class="page-header-badge">Internal Use Only</div>
</div>

<div class="main">

  <div class="section-title">Add New Announcement</div>
  <div class="add-form">
    <div class="fg" style="margin-bottom:1rem">
      <label>Title / Header</label>
      <input type="text" id="inTitle" placeholder="e.g. Bible Study This Wednesday"/>
    </div>
    <div class="fg">
      <label>Announcement Text</label>
      <textarea id="inText" placeholder="Enter the full announcement text here..."></textarea>
    </div>
    <div class="date-row">
      <div class="fg"><label>Start Date</label><input type="date" id="inStart"/></div>
      <div class="fg"><label>End Date</label><input type="date" id="inEnd"/></div>
    </div>
    <button class="btn-add" onclick="addAnn()">✦ Add Announcement</button>
  </div>

  <div class="section-title">All Announcements</div>
  <div class="ann-list" id="annList">
    <div class="empty">No announcements yet. Add one above!</div>
  </div>

</div>

<script>
let data = JSON.parse(localStorage.getItem('st_ann')||'[]');

function saveAndRender(){
  localStorage.setItem('st_ann', JSON.stringify(data));
  render();
}

function today(){ return new Date().toISOString().split('T')[0]; }

function status(a){
  const t = today();
  if(a.end < t) return 'expired';
  if(a.start > t) return 'upcoming';
  return 'active';
}

function fmtDate(d){
  if(!d) return '';
  const [y,m,day] = d.split('-');
  return ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'][+m-1]+' '+parseInt(day)+', '+y;
}

function addAnn(){
  const title = document.getElementById('inTitle').value.trim();
  const text  = document.getElementById('inText').value.trim();
  const start = document.getElementById('inStart').value;
  const end   = document.getElementById('inEnd').value;
  if(!title){ alert('Please enter a title.'); return; }
  if(!text){  alert('Please enter announcement text.'); return; }
  if(!start||!end){ alert('Please enter both dates.'); return; }
  if(end < start){ alert('End date must be after start date.'); return; }
  data.unshift({id:Date.now(), title, text, start, end});
  saveAndRender();
  document.getElementById('inTitle').value='';
  document.getElementById('inText').value='';
  setDefaultDates();
}

function delAnn(id){
  if(!confirm('Delete this announcement?')) return;
  data = data.filter(a=>a.id!==id);
  saveAndRender();
}

function render(){
  const list = document.getElementById('annList');
  if(!data.length){ list.innerHTML='<div class="empty">No announcements yet. Add one above!</div>'; return; }
  const sorted = [...data].sort((a,b)=>{
    const o={active:0,upcoming:1,expired:2};
    return o[status(a)]-o[status(b)];
  });
  list.innerHTML = sorted.map(a=>{
    const s = status(a);
    return `<div class="ann-card ${s==='expired'?'expired':''}">
      <div class="ann-body">
        <div class="ann-title">${a.title}</div>
        <div class="ann-text">${a.text}</div>
        <div class="ann-dates">📅 ${fmtDate(a.start)} — ${fmtDate(a.end)}</div>
      </div>
      <div class="ann-right">
        <span class="ann-status ${s}">${s}</span>
        <button class="btn-del" onclick="delAnn(${a.id})">✕ Delete</button>
      </div>
    </div>`;
  }).join('');
}

function setDefaultDates(){
  const t = new Date();
  const t7 = new Date(t); t7.setDate(t7.getDate()+7);
  document.getElementById('inStart').value = t.toISOString().split('T')[0];
  document.getElementById('inEnd').value = t7.toISOString().split('T')[0];
}

setDefaultDates();
render();
</script>
<?php wp_footer(); ?>
</body>
</html>
