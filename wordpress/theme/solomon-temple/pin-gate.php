<?php
/**
 * Shared PIN gate — included by protected staff pages.
 * Expects $GLOBALS['_st_gate_title'] and $GLOBALS['_st_pin_error'] to be set.
 */
$_title = isset( $GLOBALS['_st_gate_title'] ) ? $GLOBALS['_st_gate_title'] : 'Staff Access';
$_error = ! empty( $GLOBALS['_st_pin_error'] );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Solomon Temple — Staff Access</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet"/>
<?php wp_head(); ?>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
body{background:#0e2260;display:flex;align-items:center;justify-content:center;min-height:100vh;font-family:'Source Sans 3',sans-serif}
.gate{background:#fff;border-radius:12px;padding:2.5rem 2rem;width:100%;max-width:340px;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,.5)}
.gate .ico{margin-bottom:.75rem}.gate .ico img{width:64px;height:70px;object-fit:contain;filter:drop-shadow(0 2px 8px rgba(0,0,0,.35))}
.gate h1{font-family:'Cormorant Garamond',serif;color:#0e2260;font-size:1.5rem;font-weight:700;margin-bottom:.3rem}
.gate .sub{color:#5a6a82;font-size:.84rem;margin-bottom:1.8rem;line-height:1.5}
.gate input{width:100%;padding:.8rem 1rem;border:2px solid #edf0f8;border-radius:8px;font-size:1.4rem;text-align:center;letter-spacing:.5em;outline:none;transition:border-color .2s;margin-bottom:1rem;color:#0e2260}
.gate input:focus{border-color:#c8991a}
.gate button{width:100%;background:#c8991a;color:#0e2260;border:none;border-radius:8px;padding:.85rem;font-size:.95rem;font-weight:700;cursor:pointer;transition:background .2s,transform .15s;font-family:inherit}
.gate button:hover{background:#e8b830;transform:translateY(-1px)}
.gate .no-access{color:#c0392b;font-size:.88rem;margin-top:1rem;font-weight:700;padding:.6rem 1rem;background:#fdf0f0;border-radius:6px;border:1px solid #f5c6c6}
</style>
</head>
<body>
<div class="gate">
  <div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/stmbc-logo.png" alt="Solomon Temple Logo"/></div>
  <h1>Solomon Temple M.B.C.</h1>
  <p class="sub"><?php echo esc_html( $_title ); ?><br/>Staff access only</p>
  <form method="POST">
    <input type="password" name="st_pin" placeholder="· · · ·" maxlength="8" autofocus autocomplete="off"/>
    <button type="submit">Enter</button>
    <?php if ( $_error ) : ?>
    <p class="no-access">⛔ No access. Incorrect PIN.</p>
    <?php endif; ?>
  </form>
</div>
<?php wp_footer(); ?>
</body>
</html>