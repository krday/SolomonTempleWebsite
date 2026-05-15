<?php
/**
 * Front Page Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!-- ═══ TOPBAR ═══ -->
<div class="topbar">
  <div class="topbar-left">
    <span class="topbar-addr">📍 <a href="https://www.google.com/maps/search/?api=1&query=4859+St+Louis+Ave+St+Louis+MO+63115" target="_blank" rel="noopener" class="addr-link">4859 Rev. A.L. Manson, Sr. Way · St. Louis, MO 63115</a></span>
    <span class="sep">|</span>
    <a href="tel:3143824181">☎ (314) 382-4181</a>
    <span class="sep">|</span>
    <span>Sunday 10 AM</span>
  </div>
  <div class="topbar-right">
    <a href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" style="display:inline-flex;align-items:center;gap:.35rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg> Facebook</a>
    <a href="https://youtube.com/@solomontemplem.b.c.-st.lou8789?si=XnI0OeUjF1ZdPfuX" target="_blank" style="display:inline-flex;align-items:center;gap:.35rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg> YouTube</a>
  </div>
</div>

<!-- ═══ NAV ═══ -->
<nav id="top">
  <div class="nav-inner">
    <a href="#home" class="brand">      <img src="<?php echo get_template_directory_uri(); ?>/images/stmbc-logo.png" alt="Solomon Temple Logo" style="width:50px;height:54px;object-fit:contain;filter:drop-shadow(0 2px 8px rgba(0,0,0,.4))"/>
      <div class="brand-text">
        <div class="cn">Solomon Temple M.B.C.</div>
        <div class="cs">4859 Rev. A.L. Manson, Sr. Way · St. Louis, MO 63115</div>
      </div>
    </a>
    <!-- Desktop links -->
    <div class="nav-links">
      <a href="#about">Pastor</a>
      <a href="#history">History</a>
      <a href="#announcements">Announcements</a>
          <a href="#ministries">Ministries</a>
      <a href="#gallery">Gallery</a>
      <a href="#media">Watch</a>
      <a href="#prayer">Prayer</a>
      <a href="#events">Events</a>
      <a href="#contact">Contact</a>
      <a href="#giving" class="give">Give Online</a>
    </div>
    <!-- Hamburger - mobile only, right side -->
    <button class="hamburger" aria-label="Open menu" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </button>
  </div>
  <!-- Mobile drawer - sits below nav bar -->
  <div class="mobile-menu" id="mobileMenu">
    <!-- About -->
    <div style="padding:.5rem 1.5rem .2rem;font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(200,153,26,.7);font-weight:700">About</div>
    <a href="#about" onclick="closeMenu()">Our Pastor</a>
    <a href="#history" onclick="closeMenu()">Church History</a>
    <a href="#believe" onclick="closeMenu()">What We Believe</a>
    <a href="#ministries" onclick="closeMenu()">Ministries</a>
    <!-- Connect -->
    <div style="padding:.6rem 1.5rem .2rem;font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(200,153,26,.7);font-weight:700;border-top:1px solid rgba(255,255,255,.06);margin-top:.3rem">Connect</div>
    <a href="#new-members" onclick="closeMenu()">New Members</a>
    <a href="#prayer" onclick="closeMenu()">Prayer Request</a>
    <a href="#gallery" onclick="closeMenu()">Photo Gallery</a>
    <a href="#events" onclick="closeMenu()">Church Calendar</a>
    <a href="#contact" onclick="closeMenu()">Contact Us</a>
    <!-- Worship -->
    <div style="padding:.6rem 1.5rem .2rem;font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(200,153,26,.7);font-weight:700;border-top:1px solid rgba(255,255,255,.06);margin-top:.3rem">Worship</div>
    <a href="#media" onclick="closeMenu()">Watch Online</a>
    <a href="#giving" class="give-m" onclick="closeMenu()">💛 Give Online</a>
  </div>
</nav>

<!-- ═══ HERO ═══ -->
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="stripe-top"></div>
  <div class="stripe-bot"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">✝ Solomon Temple Missionary Baptist Church · Est. 1918</div>
    <h1>Welcome to<br/><span class="accent">Solomon Temple</span><br/>M.B. Church</h1>
    <div class="est">Founded August 14, 1918 · Over 100 Years Serving St. Louis</div>
    <div class="hero-motto">"A Caring and Sharing Church"</div>
    <p>Come as you are. Experience the liberating Gospel of Jesus Christ with a family rooted in love, faith, and service. <em>"Do Everything Out of Love."</em></p>
    <div class="hero-btns">
      <a href="#giving" class="btn-gold">💛 Give Online</a>
      <a href="#media" class="btn-ghost">▶ Watch Live</a>
    </div>
  </div>
  <div class="hero-badge">
    <div class="lbl">Join Us Every</div>
    <div class="day">Sunday</div>
    <div class="time">10</div>
    <div class="am">AM · In-Person &amp; Online</div>
  </div>
</section>

<!-- ═══ STRIP ═══ -->
<div class="strip">
  <div class="item"><span class="ic">🕙</span> Sunday - 10:00 AM</div>
  <div class="item"><span class="ic">☎</span><a href="tel:3143824181">(314) 382-4181</a></div>
  <div class="item"><span class="ic">📍</span> <a href="https://www.google.com/maps/search/?api=1&query=4859+St+Louis+Ave+St+Louis+MO+63115" target="_blank" rel="noopener" class="addr-link">4859 Rev. A.L. Manson, Sr. Way</a></div>
  <div class="item"><span class="ic">📺</span> Live on YouTube &amp; Facebook · Wed Bible Study 7 PM Zoom</div>
</div>

<!-- ═══ MOTTO BANNER ═══ -->
<div class="motto-banner">
  <div class="tag">Our Identity · Our Promise · Acts 2:44–45</div>
  <h2>"A Caring and Sharing Church"</h2>
  <div class="ref">"All the believers were together and had everything in common." - Acts 2:44</div>
  <div class="chips">
    <div class="chip">"Solomon Temple Strong"</div>
    <div class="chip">"The Best Is Yet to Come"</div>
    <div class="chip">"Do Everything Out of Love"</div>
    <div class="chip">"Standing On The Promises of God"</div>
    <div class="chip">"Doing Our Best for the LORD"</div>
    <div class="chip">"Lord, I Am Available To You"</div>
  </div>
</div>

<!-- ═══ QUICK LINKS ═══ -->
<section class="ql" id="quicklinks">
  <div class="container">
    <span class="sec-label">How Can We Help?</span>
    <h2 class="sec-title">We're Here for You</h2>
    <div class="divider"></div>
    <div class="ql-grid">
      <a href="#giving" class="ql-card">
        <div class="qico">💛</div>
        <h3>Give Online</h3>
        <p>Support the ministry securely - one-time or recurring giving.</p>
      </a>
      <a href="#prayer" class="ql-card">
        <div class="qico">🙏</div>
        <h3>Prayer Request</h3>
        <p>Our prayer team lifts every request before the Lord.</p>
      </a>
      <a href="#media" class="ql-card">
        <div class="qico">▶️</div>
        <h3>Watch a Sermon</h3>
        <p>Live on YouTube &amp; Facebook every Sunday at 10 AM. Past sermons archived on YouTube.</p>
      </a>
      <a href="#new-members" class="ql-card">
        <p>Interested in joining our family? Learn about New Member Orientation.</p>
      </a>
    </div>
  </div>
</section>

<!-- ═══ ANNOUNCEMENTS ═══ -->
<section class="announcements-sec" id="announcements" style="padding:4rem 0;background:linear-gradient(180deg,#0a1628,#0e2260);border-top:3px solid rgba(200,153,26,.4);border-bottom:3px solid rgba(200,153,26,.4)">
  <div class="container">
    <span class="sec-label" style="color:var(--gold)">Stay Informed</span>
    <h2 class="sec-title" style="color:#fff;text-shadow:0 2px 12px rgba(0,0,0,.6)">Church Announcements</h2>
    <div id="ann-display" class="ann-display-grid">
      <?php
      $ann_months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
      $ann_all    = json_decode(get_option("st_announcements","[]"),true) ?: [];
      $ann_today  = date("Y-m-d");
      $ann_active = array_values(array_filter($ann_all, function($a) use ($ann_today) {
        return isset($a["start"],$a["end"]) && $a["start"] <= $ann_today && $a["end"] >= $ann_today;
      }));
      if (empty($ann_active)) : ?>
        <div class="ann-display-card" style="text-align:center;color:rgba(214,221,232,.7);font-style:italic;grid-column:1/-1;padding:2rem">
          There are no announcements at this time.
        </div>
      <?php else : foreach ($ann_active as $ann) :
        $ann_parts  = explode("-", $ann["end"]);
        $ann_endStr = $ann_months[(int)$ann_parts[1]-1]." ".(int)$ann_parts[2].", ".$ann_parts[0];
      ?>
        <div class="ann-display-card">
          <div class="ann-display-title"><?php echo esc_html($ann["title"]); ?></div>
          <div class="ann-display-text"><?php echo esc_html($ann["text"]); ?></div>
          <div class="ann-display-date">Through <?php echo esc_html($ann_endStr); ?></div>
        </div>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>


<!-- ═══ PASTOR ═══ -->
<section class="pastor" id="about">
  <div class="container">
    <span class="sec-label">Our Shepherd</span>
    <h2 class="sec-title sec-title-wht">Rev. Dr. Albert L. Manson, Jr.</h2>
    <div class="divider"></div>
    <div class="pastor-grid">
      <div class="pastor-photo-col">
        <div class="pastor-oval">          <img src="<?php echo get_template_directory_uri(); ?>/images/pastor-manson.png" alt="Rev. Dr. Albert L. Manson, Jr." style="width:100%;height:100%;object-fit:cover;object-position:center 15%"/>
        </div>
        <div class="pastor-plate">
          Rev. Dr. Albert L. Manson, Jr.<br/>
          <span style="font-size:.85em;font-weight:400">Pastor · Solomon Temple M.B.C.</span>
        </div>
      </div>
      <div class="pastor-text">
        <div class="verse-pull">"I have been abased and abound, but whatever state I find myself; I am there within to be content." - Philippians 4:12</div>
        <div class="legacy">The Legacy Continues</div>
        <p>What an honor to serve as the Pastor of this Glorious Church! Rev. Dr. Manson, Jr. accepted his call to ministry on April 28, 2002, preaching his first sermon on June 9, 2002 under the spiritual leadership of his father, Rev. Albert L. Manson, Sr.</p>
        <p>He earned a Bachelor of Science in Christian Theological Seminary from St. Louis Christian College and a degree in Business Administration from Chattahoochee State College. He was ordained October 29, 2006 and has served our congregation with vision, love, and dedication.</p>
        <p>Rev. Dr. Manson, Jr. is committed to honoring the historic traditions of Solomon Temple while engaging our community in a contemporary context - fostering intergenerational involvement and calling us all to <em style="color:var(--gold-lt)">"Do Everything Out of Love."</em></p>
        <a href="#history" class="btn-gold" style="margin-top:1.3rem;display:inline-flex">Read Our Full History</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BUILDING ═══ -->
<section class="building" id="church">
  <div class="container">
    <div class="building-grid">
      <div class="building-img">        <img src="<?php echo get_template_directory_uri(); ?>/images/church-exterior.png" alt="Solomon Temple Missionary Baptist Church" style="width:100%;display:block;object-fit:cover"/>
      </div>
      <div class="building-text">
        <span class="sec-label">Our Home</span>
        <h2 class="sec-title">Solomon Temple<br/>Missionary Baptist Church</h2>
        <div class="divider"></div>
        <p>Our beautiful church home was built through faith, sacrifice, and over 100 years of dedication. On <strong>January 2, 2005</strong>, our congregation marched into this new sanctuary - a testament to God's faithfulness through every storm.</p>
        <div class="info-row"><div class="ic">📍</div><span><strong>Address:</strong> <a href="https://www.google.com/maps/search/?api=1&query=4859+St+Louis+Ave+St+Louis+MO+63115" target="_blank" rel="noopener" class="addr-link">4859 Rev. A.L. Manson, Sr. Way · St. Louis, MO 63115</a></span></div>
        <div class="info-row"><div class="ic">☎</div><span><strong>Phone:</strong> <a href="tel:3143824181">(314) 382-4181</a></span></div>
        <div class="info-row"><div class="ic">🕙</div><span><strong>Sunday Worship:</strong> 10:00 AM - In-Person &amp; Online</span></div>
        <div class="info-row"><div class="ic">✝</div><span><strong>Founded:</strong> August 14, 1918 · Originally Mt. Hebron Baptist Church</span></div>

      </div>
    </div>
  </div>
</section>

<!-- ═══ MINISTRIES ═══ -->
<section class="ministries" id="ministries">
  <div class="container">
    <span class="sec-label" style="color:var(--gold)">Our Ministries</span>
    <h2 class="sec-title sec-title-wht">Serving Together in Faith</h2>
    <div class="divider"></div>
    <p class="sec-sub sec-sub-wht">Every ministry is a vital part of the body of Christ. Find your place to serve, grow, and belong.</p>
    <div class="min-grid">
      <div class="min-card"><div class="ico">🙌</div><h4>Laymen Ministry</h4></div>
      <div class="min-card"><div class="ico">👩‍👧</div><h4>Women's Ministry</h4></div>
      <div class="min-card"><div class="ico">👑</div><h4>Mother's Ministry</h4></div>
      <div class="min-card"><div class="ico">👶</div><h4>Children's Ministry</h4></div>
      <div class="min-card"><div class="ico">🎵</div><h4>Music Ministry</h4></div>
      <div class="min-card"><div class="ico">🤝</div><h4>Usher Ministry</h4></div>
      <div class="min-card"><div class="ico">👋</div><h4>Greeters Ministry</h4></div>
      <div class="min-card"><div class="ico">📡</div><h4>Media Network</h4></div>
    </div>
  </div>
</section>

<!-- ═══ HISTORY ═══ -->
<section class="history" id="history">
  <div class="container">
    <span class="sec-label">Our Heritage</span>
    <h2 class="sec-title">Over 100 Years of Kingdom Building</h2>
    <div class="divider"></div>
    <p class="history-lead">Solomon Temple Missionary Baptist Church was organized <strong>August 14, 1918</strong> by the late Rev. R.N. Martin and Rev. Conway as Mt. Hebron Baptist Church. Through faith, perseverance, and the grace of God - <em>"We are Still Standing."</em></p>
    <div class="timeline">
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">August 14, 1918</div>
        <div class="tl-title">Founded as Mt. Hebron Baptist Church</div>
        <div class="tl-text">Organized by Rev. R.N. Martin and Rev. Conway in St. Louis, Missouri. Pastored through 1927 by Rev. Martin, Benion, Spraggins, and Thomas.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">1935</div>
        <div class="tl-title">Renamed Solomon Temple Missionary Baptist Church</div>
        <div class="tl-text">Under Rev. Henry Poats, the church name was officially changed from Mt. Hebron to Solomon Temple Missionary Baptist Church.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">May 9, 1936 – 1964</div>
        <div class="tl-title">Rev. J.G. Greenwood - Pastor</div>
        <div class="tl-text">The church purchased a home at 2704 Clark Avenue, fully paid off by April 1948. The congregation later moved to 4859 St. Louis Avenue. Rev. Greenwood labored faithfully until his transition on August 8, 1964.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">November 1964 – December 1977</div>
        <div class="tl-title">Rev. William Thomas Jones - Pastor</div>
        <div class="tl-text">Rev. Jones kept a bedside promise to see that the church would not die. He labored faithfully until his transition on December 11, 1977.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">February 1978 - December 2020</div>
        <div class="tl-title">Rev. Albert L. Manson, Sr. - Pastor (42 Years)</div>
        <div class="tl-text">Under Pastor Manson, Sr., the church grew in membership, Spirit, and faith. He mentored seven Men of God and led the congregation to build their current church home. As a result of the pandemic, Solomon Temple became stronger in the Word of God, more loving one to another, and gave their best service. However, the devastating pandemic brought havoc to the church family. We were met with the untimely death of our Beloved Pastor. God decided that his work had been completed. He was called to Glory on <strong>December 24, 2020</strong>. We were left without a Shepherd.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">January 2, 2005</div>
        <div class="tl-title">We Marched Into Our New Church Home</div>
        <div class="tl-text">After years of sacrifice and a bond drive, the congregation marched into the newly built sanctuary at 4859 St. Louis Avenue with celebration, music, and community leaders present. A miracle of faith.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">October 2018</div>
        <div class="tl-title">100th Church Anniversary - A Century of Faith</div>
        <div class="tl-text">The centennial was celebrated with a banquet at the Red Lion Hotel. The congregation adopted the motto "Solomon Temple Strong" and marched into the 2nd century of ministry.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">August 15, 2021</div>
        <div class="tl-title">Rev. Dr. Albert L. Manson, Jr. Installed as Pastor</div>
        <div class="tl-text">Following the succession plan of his father, Rev. Dr. Manson, Jr. was called and officially installed as the new Shepherd of Solomon Temple. He came with great vision, establishing new ministries including Greeters, Media Network, and expanding our online presence.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">February 2023</div>
        <div class="tl-title">Honorary Street - Rev. A.L. Manson, Sr. Way</div>
        <div class="tl-text">City Ordinance 71583 granted the Honorary Street name change. A Ribbon Cutting Ceremony was held - St. Louis history was made honoring our beloved founding pastor.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">October 8, 2023</div>
        <div class="tl-title">105th Church Anniversary - 1918 to 2023</div>
        <div class="tl-text">Solomon Temple celebrated 105 years of kingdom building - still standing, still growing, still caring and sharing. <em>"The Best Is Yet to Come."</em></div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">April 2025</div>
        <div class="tl-title">Church Loan Refinanced with First Bank</div>
        <div class="tl-text">After much prayer, research, and resources, Solomon Temple secured a loan with First Bank to refinance the current loan that had matured in 2017 — ending years of interest-only payments and moving the church forward financially.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">May 16, 2025</div>
        <div class="tl-title">BUT GOD - The E6 Tornado</div>
        <div class="tl-text">The City of St. Louis was struck by an E6 tornado. Houses surrounding Solomon Temple were destroyed - no roofs, no walls, no sides, no electricity. BUT GOD - Solomon Temple sustained minimum damage and stood as a beacon of hope, opening its doors to neighboring churches and all families impacted by the storm.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">May 18, 2025</div>
        <div class="tl-title">Family and Friends Day - A Day of Gratefulness</div>
        <div class="tl-text">Just two days after the tornado, the congregation navigated downed power lines and fallen trees to worship together in the sanctuary. Family and Friends Day 2025 became a powerful testimony of gratefulness and faithfulness - Solomon Temple Strong.</div>
      </div>
      <div class="tl-item">
        <div class="tl-dot">✝</div>
        <div class="tl-year">May 24, 2025</div>
        <div class="tl-title">Community Day of Giving Back</div>
        <div class="tl-text">Solomon Temple sponsored a day of giving back - serving and feeding displaced tornado victims and blessing three families of Solomon Temple. A Caring and Sharing Church living out its motto. <em>"We have been through the Flood, the Fire, the Rain, and the Storm, but we are Still Standing."</em></div>
      </div>
    </div>
    <!-- Past Pastors -->
    <div class="past-pastors">
      <h3>In Loving Memory - Our Past Shepherds</h3>
      <div class="pastors-row">
        <div class="p-card">          <div class="pico"><img src="<?php echo get_template_directory_uri(); ?>/images/rev-greenwood.png" alt="Rev. J.G. Greenwood"/></div>
          <h4>Rev. J.G. Greenwood</h4>
          <div class="yrs">1936 – 1964</div>
          <p>Purchased our first church home &amp; moved the congregation forward in faith</p>
        </div>
        <div class="p-card">          <div class="pico"><img src="<?php echo get_template_directory_uri(); ?>/images/rev-jones.png" alt="Rev. William Thomas Jones"/></div>
          <h4>Rev. William Thomas Jones</h4>
          <div class="yrs">1964 – 1977</div>
          <p>Kept his promise - the church would not die under his watch</p>
        </div>
        <div class="p-card">          <div class="pico"><img src="<?php echo get_template_directory_uri(); ?>/images/rev-al-manson-sr.png" alt="Rev. Albert L. Manson, Sr."/></div>
          <h4>Rev. Albert L. Manson, Sr.</h4>
          <div class="yrs">1978 - 2020</div>
          <p>42 years of faithful service - builder of our current home, mentor to many, called to Glory December 24, 2020</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ GALLERY ═══ -->
<section class="gallery" id="gallery">
  <div class="container">
    <span class="sec-label">Photo Gallery</span>
    <h2 class="sec-title">Our Congregation &amp; Community</h2>
    <div class="divider"></div>
    <p class="sec-sub">A glimpse into the life of Solomon Temple. <em>Photos will be updated - placeholders shown below.</em></p>
    <div class="gal-filter">
      <button class="active" onclick="filterGal('all',this)">All Photos</button>
      <button onclick="filterGal('worship',this)">Worship</button>
      <button onclick="filterGal('fellowship',this)">Fellowship</button>
      <button onclick="filterGal('ministry',this)">Ministry</button>
      <button onclick="filterGal('events',this)">Special Events</button>
    </div>
    <div class="gal-grid" id="galGrid">
      <div class="g-item wide gc1" data-cat="worship" onclick="openLB(0)">
        <div class="g-bg">🙏<span class="g-ph-label">Sunday Worship</span></div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>Sunday Morning Worship</p></div>
      </div>
      <div class="g-item gc2" data-cat="fellowship" onclick="openLB(1)">
        <div class="g-bg">🤝</div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>After Service Fellowship</p></div>
      </div>
      <div class="g-item tall gc3" data-cat="ministry" onclick="openLB(2)">
        <div class="g-bg">👩‍👧<span class="g-ph-label">Women's Ministry</span></div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>Women's Ministry</p></div>
      </div>
      <div class="g-item gc4" data-cat="events" onclick="openLB(3)">
        <div class="g-bg">✝</div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>Pastor Installation - Aug 15, 2021</p></div>
      </div>
      <div class="g-item gc5" data-cat="ministry" onclick="openLB(4)">
        <div class="g-bg">👶</div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>Children's Ministry</p></div>
      </div>
      <div class="g-item gc6" data-cat="worship" onclick="openLB(5)">
        <div class="g-bg">🎵</div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>Music Ministry</p></div>
      </div>
      <div class="g-item gc7" data-cat="fellowship" onclick="openLB(6)">
        <div class="g-bg">🌍</div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>Community Outreach</p></div>
      </div>
      <div class="g-item wide gc8" data-cat="events" onclick="openLB(7)">
        <div class="g-bg">📖<span class="g-ph-label">105th Anniversary · 1918–2023</span></div>
        <div class="g-overlay"><div class="zoom">🔍</div><p>105th Church Anniversary - Oct. 8, 2023</p></div>
      </div>
    </div>
    <div style="text-align:center;margin-top:2rem">
      <a href="https://www.facebook.com/Solomontemplestl/" target="_blank" class="btn-gold" style="display:inline-flex">📸 View More on Facebook</a>
    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lb" onclick="closeLBOut(event)">
  <button class="lb-close" onclick="closeLB()">✕</button>
  <div class="lb-img" id="lbImg">🙏</div>
  <div class="lb-cap" id="lbCap"></div>
  <div class="lb-nav">
    <button onclick="lbMove(-1)">← Previous</button>
    <button onclick="lbMove(1)">Next →</button>
  </div>
</div>

<!-- ═══ GIVING ═══ -->
<section class="giving" id="giving">
  <div class="container">
    <span class="sec-label">Online Giving</span>
    <h2 class="sec-title sec-title-wht">Support the Ministry</h2>
    <div class="divider"></div>
    <div class="giving-grid">
      <div class="giving-text">
        <div class="verse-pull">"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver." - 2 Corinthians 9:7</div>
        <p>Your generous gifts make it possible to serve our congregation, support our community, and spread the liberating Gospel of Jesus Christ.</p>
        <p>Give your tithes and offerings securely online. Every gift is an act of worship and a seed sown into the Kingdom.</p>
      </div>
      <div class="give-cards">
        <a href="#" class="give-card">
          <div class="gico" style="background:none;padding:0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><rect width="24" height="24" rx="5" fill="#00D632"/><path fill="#fff" d="M23.59 3.47A11.93 11.93 0 0 0 20.53.41C18.69-.35 16.09 0 12 0 7.91 0 5.31-.35 3.47.41A11.93 11.93 0 0 0 .41 3.47C-.35 5.31 0 7.91 0 12c0 4.09-.35 6.69.41 8.53a11.93 11.93 0 0 0 3.06 3.06C5.31 24.35 7.91 24 12 24c4.09 0 6.69.35 8.53-.41a11.93 11.93 0 0 0 3.06-3.06C24.35 18.69 24 16.09 24 12c0-4.09.35-6.69-.41-8.53zm-8.73 12.08a4.37 4.37 0 0 1-2.12 1.07l.26 1.07a.44.44 0 0 1-.43.54h-1.14a.44.44 0 0 1-.43-.36l-.27-1.12a7.41 7.41 0 0 1-2.7-.88.44.44 0 0 1-.13-.63l.7-1.06a.44.44 0 0 1 .6-.12 5.15 5.15 0 0 0 2.55.72c.73 0 1.27-.28 1.27-.83 0-.49-.38-.78-1.53-1.13C10 12.48 8.4 11.74 8.4 9.88a3.76 3.76 0 0 1 1.96-3.24l-.26-1.07a.44.44 0 0 1 .43-.54h1.14c.22 0 .4.16.43.37l.26 1.1a6.75 6.75 0 0 1 2.23.68.44.44 0 0 1 .16.63l-.64 1.06a.44.44 0 0 1-.6.15 4.7 4.7 0 0 0-2.24-.6c-.82 0-1.1.35-1.1.73 0 .45.47.72 1.77 1.13 1.83.55 3.04 1.35 3.04 3.13a3.72 3.72 0 0 1-1.31 2.67z"/></svg></div>
          <div class="give-card-text">
            <h4>Give via Cash App</h4>
            <p>Cashtag: <strong style="color:var(--gold-lt)">$SolomonTempleMBC</strong></p>
          </div>
        </a>
        <a href="#" class="give-card">
          <div class="gico" style="background:none;padding:0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><rect width="24" height="24" rx="5" fill="#6D1ED4"/><path fill="#fff" d="M15.75 6.75H9.234l6.282 4.786H9v1.5h6.75L9.468 17.25H16.5v-1.5h-5.532L17.25 11.25V9.75H10.5l5.25-1.5z"/></svg></div>
          <div class="give-card-text">
            <h4>Give via Zelle</h4>
            <p>Zelle to: <strong style="color:var(--gold-lt)">314-324-7588</strong></p>
          </div>
        </a>
        <a href="#contact" class="give-card">
          <div class="gico">✉️</div>
          <div class="give-card-text">
            <h4>Give by Mail</h4>
            <p>Check payable to Solomon Temple M.B.C. · 4859 Rev. A.L. Manson, Sr. Way · St. Louis, MO 63115</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PRAYER ═══ -->
<section class="prayer" id="prayer">
  <div class="container">
    <span class="sec-label">Prayer Requests</span>
    <h2 class="sec-title">We're Believing with You</h2>
    <div class="divider"></div>
    <p class="sec-sub">Submit your request and our prayer team will lift you up before the Lord. You are not alone.</p>
    <div class="prayer-grid">
      <div class="prayer-form">
        <?php echo do_shortcode('[wpforms id="7" title="false"]'); ?>
      </div>
      <div>
        <div class="verse-block">
          <p>"Cast all your anxiety on Him because He cares for you."</p>
          <cite>- 1 Peter 5:7</cite>
        </div>
        <div class="verse-block">
          <p>"Do not be anxious about anything, but in every situation, by prayer and petition, with thanksgiving, present your requests to God."</p>
          <cite>- Philippians 4:6</cite>
        </div>
        <div class="verse-block">
          <p>"Is anyone among you in trouble? Let them pray. Is anyone happy? Let them sing songs of praise."</p>
          <cite>- James 5:13</cite>
        </div>
        <div class="prayer-info">
          <p>Our prayer warriors commit to lifting every request. This church family stands with you in faith.</p>
          <p>For urgent needs, call the church directly: <a href="tel:3143824181" style="color:var(--gold-dim);font-weight:700">(314) 382-4181</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MEDIA ═══ -->
<section class="media" id="media">
  <div class="container">
    <span class="sec-label">Watch &amp; Worship</span>
    <h2 class="sec-title sec-title-wht">Join Us Online Every Sunday</h2>
    <div class="divider"></div>
    <p class="sec-sub sec-sub-wht">We stream live to both YouTube and Facebook every Sunday at 10 AM - watch wherever is most convenient for you. Bible Study is every Wednesday at 7 PM via Zoom.</p>
    <div class="media-grid">
      <div>
        <div class="media-box">
          <div class="play"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"><rect width="24" height="18" x="0" y="3" rx="4" fill="#FF0000"/><path fill="#fff" d="M9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg></div>
          <h4>YouTube - Live &amp; Archived</h4>
          <p>Watch our Sunday service live at 10 AM or catch any past sermon in our archive.</p>
          <a class="wbtn yt-btn" href="https://youtube.com/@solomontemplem.b.c.-st.lou8789?si=XnI0OeUjF1ZdPfuX" target="_blank" style="display:inline-flex;align-items:center;gap:.5rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg> Watch on YouTube</a>
        </div>
      </div>
      <div>
        <div class="media-box">
          <div class="play" style="color:#1877F2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg></div>
          <h4>Facebook - Live &amp; Replays</h4>
          <p>We also stream live to Facebook every Sunday at 10 AM. Replays available on our page.</p>
          <a class="wbtn fb-btn" href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" style="display:inline-flex;align-items:center;gap:.5rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg> Watch on Facebook</a>
        </div>
      </div>
    </div>
    <!-- Bible Study callout -->
    <div style="background:rgba(255,255,255,.06);border:1px solid rgba(200,153,26,.3);border-radius:var(--radius);padding:2rem 1.8rem;margin-top:2rem;display:flex;flex-direction:column;align-items:center;text-align:center;gap:.5rem">
      <div style="font-size:2.8rem">📖</div>
      <div style="color:var(--gold-lt);font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;margin-bottom:.2rem">Bible Study - Every Wednesday at 7:00 PM</div>
      <div style="color:rgba(214,221,232,.8);font-size:.9rem;line-height:1.8">
        <strong style="color:var(--white)">Meeting Number:</strong> <span style="color:var(--gold-lt)">218 547 7340</span> &nbsp;·&nbsp;
        <strong style="color:var(--white)">Passcode:</strong> <span style="color:var(--gold-lt)">564462</span><br/>
        <strong style="color:var(--white)">Call-In:</strong> <a href="tel:3126266799" style="color:var(--gold-lt)">312-626-6799</a>
      </div>
      <a href="https://zoom.us/j/2185477340?pwd=564462" target="_blank"
         style="display:inline-flex;align-items:center;gap:.5rem;margin-top:.6rem;background:#2D8CFF;color:#fff;padding:.6rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:700;font-size:.88rem;transition:opacity .2s"
         onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M24 12c0 6.627-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0s12 5.373 12 12zM9.002 8.204v6.54c.001.9.728 1.627 1.627 1.628h6.01a.337.337 0 00.337-.337V9.494a1.627 1.627 0 00-1.626-1.627H9.34a.337.337 0 00-.337.337zm8.352 1.09l-2.585 1.666a.35.35 0 00-.163.295v1.488c0 .12.065.232.163.295l2.585 1.666a.35.35 0 00.535-.295V9.589a.35.35 0 00-.535-.295z"/></svg> Join Bible Study on Zoom
      </a>
    </div>
    <div class="media-links">
      <a href="https://youtube.com/@solomontemplem.b.c.-st.lou8789?si=XnI0OeUjF1ZdPfuX" target="_blank" class="mlink yt" style="display:inline-flex;align-items:center;gap:.5rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg> Subscribe on YouTube</a>
      <a href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" class="mlink fb" style="display:inline-flex;align-items:center;gap:.5rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg> Follow on Facebook</a>
    </div>
  </div>
</section>

<!-- ═══ EVENTS CALENDAR ═══ -->
<section class="events" id="events" style="background:var(--cream)">
  <div class="container">
    <span class="sec-label">Upcoming Events</span>
    <h2 class="sec-title">Church Calendar</h2>
    <div class="divider"></div>
    <p class="sec-sub">Stay up to date with everything happening at Solomon Temple. Our calendar is updated regularly by the church office.</p>

    <!-- Recurring weekly events -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.2rem;margin-top:2rem">
      <div style="background:var(--white);border:2px solid rgba(200,153,26,.25);border-radius:var(--radius);padding:1.5rem;display:flex;align-items:center;gap:1rem">
        <div style="background:var(--royal-dk);color:var(--gold-lt);border-radius:8px;padding:.7rem;text-align:center;min-width:56px;flex-shrink:0">
          <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em">Every</div>
          <div style="font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;line-height:1">Sun</div>
        </div>
        <div>
          <div style="font-weight:700;color:var(--royal-dk);font-size:.97rem">Sunday Worship Service</div>
          <div style="color:var(--gray);font-size:.85rem;margin-top:.15rem">10:00 AM - In-Person &amp; Online</div>
        </div>
      </div>
      <div style="background:var(--white);border:2px solid rgba(200,153,26,.25);border-radius:var(--radius);padding:1.5rem;display:flex;align-items:center;gap:1rem">
        <div style="background:var(--royal-dk);color:var(--gold-lt);border-radius:8px;padding:.7rem;text-align:center;min-width:56px;flex-shrink:0">
          <div style="font-size:.7rem;text-transform:uppercase;letter-spacing:.08em">Every</div>
          <div style="font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;line-height:1">Wed</div>
        </div>
        <div>
          <div style="font-weight:700;color:var(--royal-dk);font-size:.97rem">Bible Study via Zoom</div>
          <div style="color:var(--gray);font-size:.85rem;margin-top:.15rem">7:00 PM - Meeting: 218 547 7340</div>
        </div>
      </div>
    </div>

    <!-- Google Calendar placeholder -->
    <div style="margin-top:2.5rem">
      <div style="background:var(--white);border:2px solid rgba(200,153,26,.25);border-radius:var(--radius);overflow:hidden">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=America%2FChicago&showTitle=0&showTz=0&src=c29sb21vbnRlbXBsZXN0bC5hZG1pbkBnbWFpbC5jb20&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039be5&color=%230b8043" style="border:solid 1px #777;width:100%;display:block" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>

  </div>
</section>

<!-- ═══ NEW MEMBERS ═══ -->
<section style="background:var(--royal-dk)" id="new-members">
  <div class="container">
    <span class="sec-label" style="color:var(--gold)">Join Our Family</span>
    <h2 class="sec-title sec-title-wht">New Members Orientation</h2>
    <div class="divider"></div>
    <p class="sec-sub sec-sub-wht">We are so glad you are considering making Solomon Temple your church home. Here is everything you need to know about joining our family.</p>

    <!-- Welcome message -->
    <div style="background:rgba(255,255,255,.05);border:1px solid rgba(200,153,26,.25);border-radius:var(--radius);padding:2rem;margin-top:2.5rem;border-left:4px solid var(--gold)">
      <div style="font-family:'Cormorant Garamond',serif;font-size:1.2rem;color:var(--gold-lt);font-style:italic;margin-bottom:.8rem">A Word of Welcome</div>
      <p style="color:rgba(214,221,232,.85);line-height:1.85;font-size:.96rem">Welcome to Solomon Temple Missionary Baptist Church — <em>A Caring and Sharing Church.</em> We believe that every person is valued and that God has a purpose for your life. We are excited to walk alongside you on your faith journey and help you find your place in the body of Christ.</p>
    </div>

    <!-- Steps grid -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1.3rem;margin-top:2rem">
      <div style="background:rgba(255,255,255,.06);border:1px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.8rem 1.5rem;text-align:center">
        <div style="font-size:2rem;margin-bottom:.7rem">✝</div>
        <h4 style="font-family:'Cormorant Garamond',serif;color:var(--white);font-size:1.1rem;margin-bottom:.5rem">Step 1 - Visit Us</h4>
        <p style="color:rgba(214,221,232,.7);font-size:.86rem;line-height:1.6">Join us any Sunday at 10:00 AM. You are welcome just as you are. No appointment needed.</p>
      </div>
      <div style="background:rgba(255,255,255,.06);border:1px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.8rem 1.5rem;text-align:center">
        <div style="font-size:2rem;margin-bottom:.7rem">🤝</div>
        <h4 style="font-family:'Cormorant Garamond',serif;color:var(--white);font-size:1.1rem;margin-bottom:.5rem">Step 2 - Meet the Pastor</h4>
        <p style="color:rgba(214,221,232,.7);font-size:.86rem;line-height:1.6">Rev. Dr. Manson, Jr. and our leadership team would love to meet you and answer any questions you may have.</p>
      </div>
      <div style="background:rgba(255,255,255,.06);border:1px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.8rem 1.5rem;text-align:center">
        <div style="font-size:2rem;margin-bottom:.7rem">📖</div>
        <h4 style="font-family:'Cormorant Garamond',serif;color:var(--white);font-size:1.1rem;margin-bottom:.5rem">Step 3 - Orientation</h4>
        <p style="color:rgba(214,221,232,.7);font-size:.86rem;line-height:1.6">Attend our New Member Orientation class to learn about the church, our beliefs, and how to get involved in ministry.</p>
      </div>
      <div style="background:rgba(255,255,255,.06);border:1px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.8rem 1.5rem;text-align:center">
        <div style="font-size:2rem;margin-bottom:.7rem">🙌</div>
        <h4 style="font-family:'Cormorant Garamond',serif;color:var(--white);font-size:1.1rem;margin-bottom:.5rem">Step 4 - Get Involved</h4>
        <p style="color:rgba(214,221,232,.7);font-size:.86rem;line-height:1.6">Find your ministry, serve your community, and grow in your faith alongside our church family.</p>
      </div>
    </div>

    <!-- CTA -->
    <div style="text-align:center;margin-top:2.5rem;display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a href="#contact" class="btn-gold" style="display:inline-flex">📞 Contact Us to Learn More</a>
      <a href="#prayer" class="btn-ghost" style="display:inline-flex">🙏 Submit a Prayer Request</a>
    </div>
  </div>
</section>

<!-- ═══ WHAT WE BELIEVE ═══ -->
<section style="background:var(--white);padding:5rem 1.5rem" id="believe">
  <div class="container">
    <span class="sec-label">Our Faith</span>
    <h2 class="sec-title">What We Believe</h2>
    <div class="divider"></div>
    <p class="sec-sub">Solomon Temple Missionary Baptist Church is founded on the Word of God. These core beliefs guide our worship, our service, and our lives.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.2rem;margin-top:2rem">
      <div style="background:var(--cream);border:2px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.5rem;border-top:4px solid var(--gold)">
        <h4 style="color:var(--royal-dk);font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:.6rem">The Holy Scriptures</h4>
        <p style="color:var(--gray);font-size:.88rem;line-height:1.7">We believe the Holy Bible was written by men divinely inspired by God and is His perfect revelation to man. It is the supreme standard by which all human conduct and religious opinions should be measured.</p>
      </div>
      <div style="background:var(--cream);border:2px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.5rem;border-top:4px solid var(--gold)">
        <h4 style="color:var(--royal-dk);font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:.6rem">God</h4>
        <p style="color:var(--gray);font-size:.88rem;line-height:1.7">There is one living and true God - eternal, all-powerful, and all-knowing. He reveals Himself as Father, Son, and Holy Spirit, three persons of one nature, essence, and being.</p>
      </div>
      <div style="background:var(--cream);border:2px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.5rem;border-top:4px solid var(--gold)">
        <h4 style="color:var(--royal-dk);font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:.6rem">Salvation</h4>
        <p style="color:var(--gray);font-size:.88rem;line-height:1.7">Salvation is offered freely to all who accept Jesus Christ as Lord and Savior. There is no salvation apart from personal faith in Jesus Christ - including regeneration, justification, sanctification, and glorification.</p>
      </div>
      <div style="background:var(--cream);border:2px solid rgba(200,153,26,.2);border-radius:var(--radius);padding:1.5rem;border-top:4px solid var(--gold)">
        <h4 style="color:var(--royal-dk);font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:.6rem">The Church</h4>
        <p style="color:var(--gray);font-size:.88rem;line-height:1.7">We are a Missionary Baptist Church committed to preaching the liberating Gospel of Jesus Christ, serving our community, and fostering the growth of every believer in faith and purpose.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CONTACT ═══ -->
<section class="contact" id="contact">
  <div class="container">
    <span class="sec-label">Get in Touch</span>
    <h2 class="sec-title">We'd Love to Hear from You</h2>
    <div class="divider"></div>
    <p class="sec-sub">Your questions, visits, and needs always matter to us. We'd love to connect with you.</p>
    <div class="contact-grid">
      <div class="c-card">
        <div class="ico">📍</div>
        <h4>Visit Us</h4>
        <p><a href="https://www.google.com/maps/search/?api=1&query=4859+St+Louis+Ave+St+Louis+MO+63115" target="_blank" rel="noopener" class="addr-link">4859 Rev. A.L. Manson, Sr. Way<br/>St. Louis, Missouri 63115</a></p>
      </div>
      <div class="c-card">
        <div class="ico">📞</div>
        <h4>Call Us</h4>
        <p><a href="tel:3143824181"><strong>(314) 382-4181</strong></a><br/><br/>Sunday Worship<br/><strong>10:00 AM</strong><br/>In-Person &amp; Online</p>
      </div>
      <div class="c-card">
        <div class="ico">📱</div>
        <h4>Connect Online</h4>
        <p>
          <a href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" style="display:inline-flex;align-items:center;gap:.4rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg> Follow on Facebook</a><br/>
          <a href="#media" style="display:inline-flex;align-items:center;gap:.4rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg> Watch on YouTube</a><br/>
          <a href="mailto:solomontemplestl@gmail.com">✉️ solomontemplestl@gmail.com</a><br/>
          <a href="#prayer">🙏 Submit a Prayer</a><br/>
          <a href="#giving">💛 Give Online</a>
        </p>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6230.1790144035795!2d-90.25509462353175!3d38.66981096009987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87df4b3cc96b119f%3A0xd694764a08ad5d61!2s4859%20St%20Louis%20Ave!5e0!3m2!1sen!2sus!4v1778801894995!5m2!1sen!2sus" width="100%" height="450" style="border:0;border-radius:var(--radius);display:block;margin-top:2rem" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="fb-col">
        <div class="name">Solomon Temple M.B.C.</div>
        <div class="motto-ft">"A Caring and Sharing Church"</div>
        <p><a href="https://www.google.com/maps/search/?api=1&query=4859+St+Louis+Ave+St+Louis+MO+63115" target="_blank" rel="noopener" class="addr-link">4859 Rev. A.L. Manson, Sr. Way<br/>St. Louis, Missouri 63115</a><br/>(314) 382-4181<br/><a href="mailto:solomontemplestl@gmail.com" style="color:var(--gold);text-decoration:none">solomontemplestl@gmail.com</a></p>
        <div class="soc-icons">
          <a href="https://www.facebook.com/share/1Dqtzys4F4/" target="_blank" title="Facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M24 12.1C24 5.4 18.6 0 12 0S0 5.4 0 12.1c0 6 4.4 11 10.1 11.9v-8.4H7.1v-3.5h3V9.4c0-3 1.8-4.6 4.5-4.6 1.3 0 2.7.2 2.7.2v2.9h-1.5c-1.5 0-1.9.9-1.9 1.9v2.2h3.3l-.5 3.5h-2.8V24C19.6 23.1 24 18.1 24 12.1z"/></svg></a>
          <a href="https://youtube.com/@solomontemplem.b.c.-st.lou8789?si=XnI0OeUjF1ZdPfuX" target="_blank" title="YouTube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M23.5 6.2s-.2-1.6-1-2.3c-.9-1-1.9-1-2.4-1C17 2.8 12 2.8 12 2.8s-5 0-8.1.1c-.5.1-1.5.1-2.4 1C.7 4.6.5 6.2.5 6.2S.3 8 .3 9.9v1.7c0 1.8.2 3.7.2 3.7s.2 1.6 1 2.3c.9 1 2.1.9 2.6 1C5.8 18.8 12 18.8 12 18.8s5 0 8.1-.2c.5-.1 1.5-.1 2.4-1 .7-.7 1-2.3 1-2.3s.2-1.8.2-3.7V9.9c0-1.8-.2-3.7-.2-3.7zM9.7 14.7V8.5l6.5 3.1-6.5 3.1z"/></svg></a>
        </div>
      </div>
      <div class="fc">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#about">Our Pastor</a></li>
          <li><a href="#announcements">Announcements</a>
          <a href="#ministries">Ministries</a></li>
          <li><a href="#gallery">Photo Gallery</a></li>
          <li><a href="#events">Church Calendar</a></li>
          <li><a href="#giving">Give Online</a></li>
          <li><a href="#prayer">Prayer Request</a></li>
        </ul>
      </div>
      <div class="fc">
        <h5>About</h5>
        <ul>
          <li><a href="#history">Church History</a></li>
          <li><a href="#church">Our Building</a></li>
          <li><a href="#history">Past Pastors</a></li>
          <li><a href="#announcements">Announcements</a>
          <a href="#ministries">Ministries</a></li>
          <li><a href="#new-members">New Members</a></li>
        </ul>
      </div>
      <div class="fc">
        <h5>Worship</h5>
        <ul>
          <li><a href="#media">Sunday Livestream</a></li>
          <li><a href="#media">Past Sermons</a></li>
          <li><a href="#prayer">Submit a Prayer</a></li>
          <li><a href="#giving">Tithes &amp; Offerings</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Solomon Temple Missionary Baptist Church · Est. 1918 · St. Louis, MO</span>
      <span><a href="#top">Back to Top ↑</a></span>
    </div>
  </div>
</footer>


<script>
// ── Mobile menu
function toggleMenu(){document.getElementById('mobileMenu').classList.toggle('open')}
function closeMenu(){document.getElementById('mobileMenu').classList.remove('open')}
// Close menu if clicking outside
document.addEventListener('click',function(e){
  if(!e.target.closest('nav'))closeMenu();
});

// ── Gallery
const pics=[
  {e:'🙏',l:'Sunday Morning Worship'},
  {e:'🤝',l:'After Service Fellowship'},
  {e:'👩‍👧',l:"Women's Ministry"},
  {e:'✝',l:'Pastor Installation Service - August 15, 2021'},
  {e:'👶',l:"Children's Ministry"},
  {e:'🎵',l:'Music Ministry'},
  {e:'🌍',l:'Community Outreach'},
  {e:'📖',l:'105th Church Anniversary - October 8, 2023'},
];
let cur=0;
function openLB(i){cur=i;updLB();document.getElementById('lb').classList.add('open');document.body.style.overflow='hidden'}
function closeLB(){document.getElementById('lb').classList.remove('open');document.body.style.overflow=''}
function closeLBOut(e){if(e.target===document.getElementById('lb'))closeLB()}
function updLB(){
  document.getElementById('lbImg').textContent=pics[cur].e;
  document.getElementById('lbCap').textContent=pics[cur].l+' - '+(cur+1)+' of '+pics.length;
}
function lbMove(d){cur=(cur+d+pics.length)%pics.length;updLB()}
document.addEventListener('keydown',e=>{
  if(!document.getElementById('lb').classList.contains('open'))return;
  if(e.key==='ArrowLeft')lbMove(-1);
  if(e.key==='ArrowRight')lbMove(1);
  if(e.key==='Escape')closeLB();
});
function filterGal(cat,btn){
  document.querySelectorAll('.gal-filter button').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#galGrid .g-item').forEach(el=>{
    el.style.display=(cat==='all'||el.dataset.cat===cat)?'':'none';
  });
}
</script>
<?php wp_footer(); ?>
</body>
</html>
