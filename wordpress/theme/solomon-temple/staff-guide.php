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
    $GLOBALS['_st_gate_title'] = 'Staff Guide';
    include get_template_directory() . '/pin-gate.php';
    exit;
}
// ── End gate ───────────────────────────────────────────────────────────────
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Solomon Temple — Staff Guide</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Source+Sans+3:wght@300;400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --navy:#0e2260;--royal:#1b3d8f;--gold:#c8991a;--gold-lt:#e8b830;
  --gold-dim:#9a7412;--white:#fff;
  --bg:#060e1e;--card:#0d1f4a;--border:rgba(200,153,26,.2);
  --text:rgba(214,221,232,.85);--radius:12px;
}
body{font-family:'Source Sans 3',sans-serif;background:var(--bg);color:var(--text);min-height:100vh}

/* ── PAGE HEADER ── */
.page-header{
  background:linear-gradient(135deg,#0e2260,#1b3d8f);
  border-bottom:3px solid #9a7412;
  padding:.85rem 1.5rem;display:flex;align-items:center;justify-content:space-between;gap:1rem;
}
.page-header-brand{display:flex;align-items:center;gap:.75rem}
.page-header-brand img{width:44px;height:50px;object-fit:contain;filter:drop-shadow(0 2px 6px rgba(0,0,0,.4))}
.page-header-brand-text .ph-name{font-family:'Cormorant Garamond',serif;font-size:1rem;font-weight:700;color:#fff;line-height:1.2}
.page-header-brand-text .ph-tag{font-size:.62rem;color:rgba(232,184,48,.85);letter-spacing:.04em}
.page-header h1{font-family:'Cinzel',serif;font-size:1rem;font-weight:600;color:#e8b830;letter-spacing:.08em;text-align:center}
.page-header-badge{background:rgba(200,153,26,.15);border:1px solid rgba(200,153,26,.4);color:#e8b830;font-size:.65rem;letter-spacing:.12em;text-transform:uppercase;padding:.28rem .9rem;border-radius:50px;font-weight:600;white-space:nowrap}

/* ── STAFF NAV LINKS ── */
.staff-nav{
  background:rgba(14,34,96,.6);border-bottom:1px solid rgba(200,153,26,.15);
  padding:.5rem 1.5rem;display:flex;gap:1.5rem;flex-wrap:wrap;
}
.staff-nav a{
  color:rgba(232,184,48,.7);font-size:.75rem;letter-spacing:.06em;text-transform:uppercase;
  text-decoration:none;font-weight:600;transition:color .2s;
}
.staff-nav a:hover{color:#e8b830}
.staff-nav a.active{color:#e8b830;border-bottom:2px solid #c8991a;padding-bottom:.15rem}

/* ── MAIN ── */
.main{max-width:860px;margin:0 auto;padding:2rem 1.5rem}

/* ── QUICK REF ── */
.quick-ref{
  background:var(--card);border:1px solid var(--border);border-radius:var(--radius);
  padding:1.2rem 1.5rem;margin-bottom:2rem;
}
.quick-ref-title{
  font-family:'Cinzel',serif;font-size:.72rem;letter-spacing:.15em;text-transform:uppercase;
  color:var(--gold);font-weight:700;margin-bottom:.9rem;
  display:flex;align-items:center;gap:.6rem;
}
.quick-ref-title::after{content:'';flex:1;height:1px;background:var(--border)}
table{width:100%;border-collapse:collapse;font-size:.85rem}
thead th{
  background:rgba(14,34,96,.8);color:rgba(232,184,48,.9);
  text-align:left;padding:.4rem .8rem;font-size:.72rem;letter-spacing:.07em;font-weight:700;
}
tbody tr:nth-child(even){background:rgba(255,255,255,.03)}
tbody td{padding:.4rem .8rem;border-bottom:1px solid rgba(200,153,26,.08);color:var(--text)}
tbody td:first-child{font-weight:600;color:#fff}
code{font-family:'Courier New',monospace;font-size:.8rem;color:var(--gold-lt);background:rgba(200,153,26,.08);padding:.1rem .3rem;border-radius:3px}

/* ── SECTIONS ── */
.section{margin-bottom:2rem}
.section-header{
  display:flex;align-items:center;gap:.7rem;
  background:linear-gradient(90deg,var(--navy),var(--royal));
  padding:.55rem 1rem;border-radius:8px;margin-bottom:1rem;
}
.section-num{
  background:var(--gold);color:var(--navy);font-weight:800;font-size:.8rem;
  width:22px;height:22px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.section-header h2{font-family:'Cinzel',serif;font-size:1rem;font-weight:700;color:#fff;letter-spacing:.05em}

h3{
  font-family:'Cinzel',serif;font-size:.78rem;letter-spacing:.1em;text-transform:uppercase;
  color:var(--gold);font-weight:700;margin:1.1rem 0 .5rem;
  display:flex;align-items:center;gap:.5rem;
}
h3::after{content:'';flex:1;height:1px;background:var(--border)}

p{margin-bottom:.6rem;line-height:1.7}
ol,ul{margin:.4rem 0 .8rem 1.4rem}
li{margin-bottom:.3rem;line-height:1.65}
li strong{color:#fff}
strong{color:#fff}

.tip-box{
  background:rgba(27,61,143,.25);border:1px solid rgba(27,61,143,.4);
  border-left:4px solid var(--royal);border-radius:6px;
  padding:.7rem 1rem;margin:.6rem 0 .8rem;font-size:.88rem;
}
.warn-box{
  background:rgba(200,153,26,.08);border:1px solid rgba(200,153,26,.25);
  border-left:4px solid var(--gold);border-radius:6px;
  padding:.7rem 1rem;margin:.6rem 0 .8rem;font-size:.88rem;
}
.email-box{
  background:rgba(14,34,96,.5);border:1px solid var(--border);border-radius:6px;
  padding:.8rem 1rem;margin:.6rem 0 .8rem;font-size:.88rem;line-height:1.8;
}
.email-box strong{display:block}

/* badges */
.badge{display:inline-block;font-size:.65rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:.1rem .5rem;border-radius:50px;border:1px solid}
.badge.active{color:#e8b830;border-color:rgba(200,153,26,.4);background:rgba(200,153,26,.12)}
.badge.upcoming{color:#38bdf8;border-color:rgba(56,189,248,.4);background:rgba(56,189,248,.1)}
.badge.expired{color:rgba(255,255,255,.3);border-color:rgba(255,255,255,.1);background:rgba(255,255,255,.05)}

/* troubleshooting */
.trouble-item{background:var(--card);border:1px solid var(--border);border-radius:8px;padding:.9rem 1.1rem;margin-bottom:.7rem}
.trouble-q{font-family:'Cinzel',serif;font-size:.78rem;font-weight:700;color:var(--gold-lt);margin-bottom:.35rem;letter-spacing:.04em}
.trouble-a{font-size:.88rem;color:var(--text);line-height:1.65}

@media(max-width:600px){
  .main{padding:1.2rem 1rem}
  .staff-nav{gap:1rem;padding:.5rem 1rem}
  table{font-size:.78rem}
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="page-header">
  <div class="page-header-brand">
    <img src="<?php echo get_template_directory_uri(); ?>/images/stmbc-logo.png" alt="Solomon Temple Logo"/>
    <div class="page-header-brand-text">
      <div class="ph-name">Solomon Temple M.B.C.</div>
      <div class="ph-tag">St. Louis, MO &middot; Est. 1918</div>
    </div>
  </div>
  <h1>Staff Guide</h1>
  <div class="page-header-badge">Internal Use Only</div>
</div>

<nav class="staff-nav">
  <a href="/staff-guide" class="active">Staff Guide</a>
  <a href="/announcements-manager">Announcements</a>
  <a href="/flyer-generator">Flyer Generator</a>
</nav>

<div class="main">

  <!-- QUICK REFERENCE -->
  <div class="quick-ref">
    <div class="quick-ref-title">Quick Reference</div>
    <table>
      <thead><tr><th>Tool</th><th>How to Access</th></tr></thead>
      <tbody>
        <tr><td>Announcements Manager</td><td><code>solomontemplestl.org/announcements-manager</code></td></tr>
        <tr><td>Flyer Generator</td><td><code>solomontemplestl.org/flyer-generator</code></td></tr>
        <tr><td>Google Calendar</td><td><code>calendar.google.com</code> &mdash; sign in with admin account</td></tr>
        <tr><td>Prayer Requests</td><td>Delivered to <code>solomontemplestl@gmail.com</code> automatically</td></tr>
        <tr><td>WordPress Admin</td><td><code>solomontemplestl.org/wp-admin</code></td></tr>
        <tr><td>Bluehost</td><td><code>bluehost.com</code> &mdash; click Google icon, no password</td></tr>
        <tr><td>Zoom</td><td><code>zoom.com</code> &mdash; username &amp; password from Bitwarden</td></tr>
        <tr><td>Passwords</td><td>Bitwarden &mdash; see Section 1</td></tr>
      </tbody>
    </table>
  </div>

  <!-- SECTION 1: BITWARDEN -->
  <div class="section">
    <div class="section-header"><div class="section-num">1</div><h2>Bitwarden &mdash; Password Manager</h2></div>
    <p>Bitwarden stores all church passwords securely. You will need it to access almost everything in this guide. Never write passwords down or share them by text or email.</p>

    <h3>How to Access</h3>
    <ol>
      <li>Go to <strong>bitwarden.com</strong> and click <em>Log In</em> &mdash; or open the Bitwarden app on your phone</li>
      <li>Sign in with the church Bitwarden account:
        <ul>
          <li><strong>Email:</strong> provided in person by the web administrator</li>
          <li><strong>Master Password:</strong> provided in person &mdash; never stored digitally</li>
        </ul>
      </li>
    </ol>

    <h3>Finding a Password</h3>
    <ol>
      <li>Use the <strong>Search</strong> bar to find what you need</li>
      <li>Click the item to view it</li>
      <li>Click the <strong>copy icon</strong> next to the password to copy it without showing it on screen</li>
    </ol>

    <h3>Passwords Stored in Bitwarden</h3>
    <table>
      <thead><tr><th>Item Name</th><th>What It Is For</th></tr></thead>
      <tbody>
        <tr><td>Solomon Temple Website &mdash; Staff PIN</td><td>Announcements Manager &amp; Flyer Generator</td></tr>
        <tr><td>Solomon Temple &mdash; Google Account</td><td>Google Calendar &amp; Bluehost (<code>solomontemplestl.admin@gmail.com</code>)</td></tr>
        <tr><td>Solomon Temple &mdash; WordPress Admin</td><td>Website backend (wp-admin)</td></tr>
        <tr><td>Bluehost (solomontemplestl.admin)</td><td>Web hosting &mdash; sign in via Google icon, no password</td></tr>
        <tr><td>Solomon Temple &mdash; Zoom</td><td>Zoom meetings &mdash; username &amp; password login</td></tr>
      </tbody>
    </table>

    <div class="warn-box"><strong>Important:</strong> Never share the Master Password by text or email &mdash; share it in person only. If you believe it has been compromised, contact the web administrator immediately.</div>
  </div>

  <!-- SECTION 2: ANNOUNCEMENTS MANAGER -->
  <div class="section">
    <div class="section-header"><div class="section-num">2</div><h2>Announcements Manager</h2></div>
    <p>Posts announcements to the church website homepage. Announcements display automatically during the dates you set and disappear on their own when the end date passes.</p>

    <h3>How to Access</h3>
    <ol>
      <li>Go to: <code>solomontemplestl.org/announcements-manager</code> &mdash; or click <strong>Announcements</strong> in the menu above</li>
      <li>Enter the staff PIN (stored in Bitwarden under <strong>"Solomon Temple Website &mdash; Staff PIN"</strong>)</li>
    </ol>

    <h3>Adding an Announcement</h3>
    <ol>
      <li>Fill in <strong>Title</strong>, <strong>Announcement Text</strong>, <strong>Start Date</strong>, and <strong>End Date</strong></li>
      <li>Click <strong>&#x2736; Add Announcement</strong></li>
    </ol>
    <div class="tip-box"><strong>Tips:</strong> Set Start Date to today for immediate display. Set End Date to the day of the event &mdash; it clears itself automatically. Keep the title short.</div>

    <h3>Deleting an Announcement</h3>
    <p>Click <strong>&#x2715; Delete</strong> on the card. Expired announcements stop showing on the website automatically &mdash; you only need to delete them if you want to clean up the list.</p>

    <h3>Status Labels</h3>
    <ul>
      <li><span class="badge active">active</span> &mdash; Currently showing on the website</li>
      <li><span class="badge upcoming">upcoming</span> &mdash; Scheduled, not yet visible</li>
      <li><span class="badge expired">expired</span> &mdash; End date passed; no longer on the website</li>
    </ul>
  </div>

  <!-- SECTION 3: FLYER GENERATOR -->
  <div class="section">
    <div class="section-header"><div class="section-num">3</div><h2>Flyer Generator</h2></div>
    <p>Creates formatted event flyers you can download and share by text, email, or social media.</p>

    <h3>How to Access</h3>
    <ol>
      <li>Go to: <code>solomontemplestl.org/flyer-generator</code> &mdash; or click <strong>Flyer Generator</strong> in the menu above</li>
      <li>Enter the staff PIN (same PIN as the Announcements Manager)</li>
    </ol>

    <h3>Creating a Flyer</h3>
    <ol>
      <li>Fill in the event details on the left: <strong>Event Name</strong>, <strong>Day</strong>, <strong>Date</strong>, <strong>Time</strong>, <strong>Location</strong>, <strong>Speaker</strong>, <strong>Description</strong>, <strong>Tagline</strong></li>
      <li>The preview on the right updates as you type</li>
      <li>Click <strong>Download Flyer</strong> to save the image to your device</li>
    </ol>
    <div class="tip-box"><strong>Tips:</strong> Leave any field blank and it will not appear on the flyer. The flyer is sized for phone screens and social media. To print, download and print from your phone or computer.</div>
  </div>

  <!-- SECTION 4: GOOGLE CALENDAR -->
  <div class="section">
    <div class="section-header"><div class="section-num">4</div><h2>Google Calendar</h2></div>
    <p>Embedded on the church website and updates automatically. Anything you add in Google appears on the website within a few minutes.</p>

    <h3>How to Access</h3>
    <ol>
      <li>Go to <strong>calendar.google.com</strong></li>
      <li>Sign in with <strong>solomontemplestl.admin@gmail.com</strong> &mdash; credentials in Bitwarden under <strong>"Solomon Temple &mdash; Google Account"</strong></li>
    </ol>

    <h3>Adding an Event</h3>
    <ol>
      <li>Click the date, then click <strong>More options</strong></li>
      <li>Fill in the title, date, time, and location</li>
      <li>Make sure the event is on the <strong>Solomon Temple MBC</strong> calendar &mdash; not a personal calendar</li>
      <li>Click <strong>Save</strong></li>
    </ol>

    <h3>Editing or Deleting</h3>
    <p>Click the event, then the <strong>pencil icon</strong> to edit or <strong>trash icon</strong> to delete. For recurring events, choose whether to change just that event or all future ones.</p>
  </div>

  <!-- SECTION 5: PRAYER REQUESTS -->
  <div class="section">
    <div class="section-header"><div class="section-num">5</div><h2>Prayer Requests</h2></div>
    <p>The prayer request form on the homepage sends submissions directly to the church email. No action is needed on the website.</p>

    <div class="email-box">
      <strong>&#9993; Two church email accounts &mdash; do not confuse them:</strong>
      <strong>solomontemplestl@gmail.com</strong> &mdash; Church email. Prayer requests are delivered here.<br/>
      <strong>solomontemplestl.admin@gmail.com</strong> &mdash; Admin account. Used for Bluehost, Google Calendar, and WordPress.
    </div>

    <h3>Viewing Prayer Requests</h3>
    <ol>
      <li>Log in to <strong>solomontemplestl@gmail.com</strong></li>
      <li>Look for emails with subject beginning <strong>"New Entry"</strong></li>
    </ol>
    <div class="warn-box"><strong>Privacy:</strong> Prayer requests are confidential. Share them only with those responsible for the prayer ministry.</div>
    <div class="tip-box"><strong>Spam tip:</strong> If emails go to spam, open one and click <em>Not Spam</em> to train the filter.</div>
  </div>

  <!-- SECTION 6: WORDPRESS & BLUEHOST -->
  <div class="section">
    <div class="section-header"><div class="section-num">6</div><h2>WordPress Admin &amp; Bluehost</h2></div>
    <p>WordPress Admin is the website backend. Most day-to-day tasks do not require it, but it is useful for settings and theme updates.</p>

    <h3>WordPress Admin</h3>
    <ol>
      <li>Go to: <code>solomontemplestl.org/wp-admin</code></li>
      <li>Log in with credentials from Bitwarden under <strong>"Solomon Temple &mdash; WordPress Admin"</strong></li>
    </ol>

    <h3>Bluehost (Web Hosting)</h3>
    <ol>
      <li>Go to <strong>bluehost.com</strong> and click <strong>Log In</strong></li>
      <li>Click the <strong>Google icon</strong> &mdash; do <em>not</em> enter a username and password; no password login is set up</li>
      <li>Sign in with <strong>solomontemplestl.admin@gmail.com</strong> when prompted</li>
    </ol>
    <div class="warn-box"><strong>Important:</strong> Always use the Google sign-in button on Bluehost. Do not create or set a separate Bluehost password.</div>
  </div>

  <!-- SECTION 7: ZOOM -->
  <div class="section">
    <div class="section-header"><div class="section-num">7</div><h2>Zoom</h2></div>
    <p>Used to host virtual church meetings, Bible study sessions, and ministry calls.</p>

    <h3>How to Log In</h3>
    <ol>
      <li>Go to <strong>zoom.com</strong> and click <strong>Sign In</strong></li>
      <li>Enter the username and password from Bitwarden under <strong>"Solomon Temple &mdash; Zoom"</strong></li>
      <li>The account email is <strong>solomontemplestl.admin@gmail.com</strong></li>
    </ol>

    <h3>Scheduling a Meeting</h3>
    <ol>
      <li>Click <strong>Schedule a Meeting</strong></li>
      <li>Fill in the name, date, time, and duration, then click <strong>Save</strong></li>
      <li>Copy the meeting link and share it by text, email, or the bulletin</li>
    </ol>

    <h3>Starting a Meeting</h3>
    <ol>
      <li>Sign in to zoom.com, click <strong>Meetings</strong> in the left menu</li>
      <li>Click <strong>Start</strong> next to the meeting</li>
    </ol>
    <div class="tip-box"><strong>Tip:</strong> Download the Zoom app for the best experience &mdash; free at zoom.com/download.</div>
  </div>

  <!-- SECTION 8: TROUBLESHOOTING -->
  <div class="section">
    <div class="section-header"><div class="section-num">8</div><h2>Troubleshooting</h2></div>

    <div class="trouble-item">
      <div class="trouble-q">The staff PIN is not working</div>
      <div class="trouble-a">Copy the PIN from Bitwarden. Try clearing your browser history and cookies, then try again. Contact the web administrator if it continues.</div>
    </div>
    <div class="trouble-item">
      <div class="trouble-q">An announcement is not showing on the website</div>
      <div class="trouble-a">Check that today falls between the Start and End dates. Confirm it shows as <span class="badge active">active</span> in the manager &mdash; not <span class="badge upcoming">upcoming</span> or <span class="badge expired">expired</span>. Refresh with Ctrl+Shift+R (Cmd+Shift+R on Mac).</div>
    </div>
    <div class="trouble-item">
      <div class="trouble-q">A Google Calendar event is not showing on the website</div>
      <div class="trouble-a">Make sure the event was added to the <strong>Solomon Temple MBC</strong> calendar, not a personal one. Wait a few minutes and refresh the church website.</div>
    </div>
    <div class="trouble-item">
      <div class="trouble-q">Prayer request emails are not coming through</div>
      <div class="trouble-a">Check the spam folder in <strong>solomontemplestl@gmail.com</strong>. Mark one as <em>Not Spam</em> to fix future delivery.</div>
    </div>
    <div class="trouble-item">
      <div class="trouble-q">Cannot access wp-admin or Bluehost</div>
      <div class="trouble-a">Use the correct credentials from Bitwarden. For Bluehost, use the Google icon &mdash; do not enter a password directly.</div>
    </div>
    <div class="trouble-item">
      <div class="trouble-q">Cannot log in to Zoom</div>
      <div class="trouble-a">Get the username and password from Bitwarden under <strong>"Solomon Temple &mdash; Zoom"</strong>. Use the email and password fields directly &mdash; do not use Sign in with Google.</div>
    </div>
  </div>

</div>

<?php wp_footer(); ?>
</body>
</html>