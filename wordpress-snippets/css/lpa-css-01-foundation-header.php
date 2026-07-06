<?php
/**
 * LifePoint Academy CSS 01 - Foundation, Header, Hero
 *
 * Variables, reset/base styles, buttons, top bar, navigation, hero, page headers, section subtitles.
 * Source: assets/css/style.css lines 1-589.
 * Enable after the JavaScript/Font Awesome asset snippet. Keep CSS snippets active in numeric order.
 */
add_action('wp_head', function () {
    ?>
    <style id="lpa-css-01-foundation-header">
/* ---------- CSS Variables ----------
   Brand palette per LPA Style Guide:
   Nautical Blue (Pantone 19-4050 TPX, #1C4F91), White, Black.
   --gold* tokens are legacy names retained to minimize churn — they now map
   to neutrals (white/navy) so accents stay on-brand.
   ---------------------------------- */
:root {
  --navy: #1C4F91;
  --navy-light: #3A6CAB;
  --navy-dark: #0F2F5E;
  --gold: #FFFFFF;
  --gold-light: #FFFFFF;
  --gold-dark: #1C4F91;
  --white: #FFFFFF;
  --off-white: #F8F9FA;
  --light-gray: #E9ECEF;
  --gray: #6C757D;
  --dark: #000000;
  --blue-accent: #1C4F91;
  --success: #28A745;
  --red-muted: #D9534F;
  --font-heading: Tahoma, Geneva, Verdana, sans-serif;
  --font-body: Tahoma, Geneva, Verdana, sans-serif;
  --shadow-sm: 0 2px 4px rgba(0,0,0,0.06);
  --shadow-soft: 0 4px 20px -2px rgba(0,0,0,0.05);
  --shadow-md: 0 4px 12px rgba(0,0,0,0.1);
  --shadow-lg: 0 8px 30px rgba(0,0,0,0.12);
  --shadow-xl: 0 20px 60px rgba(0,0,0,0.15);
  --shadow-glow: 0 0 15px rgba(255,255,255,0.35);
  --radius-sm: 6px;
  --radius-md: 12px;
  --radius-lg: 20px;
  --radius-xl: 24px;
  --transition: all 0.3s ease;
}

body:has(.lpa-site),
.site:has(.lpa-site),
.site-main:has(.lpa-site),
.content-area:has(.lpa-site),
.entry-content-wrap:has(.lpa-site),
.entry-content:has(.lpa-site),
.wp-site-blocks:has(.lpa-site),
.wp-block-post-content:has(.lpa-site) {
  background: var(--navy-dark);
}

/* ---------- Reset & Base ---------- */
.lpa-site,
.lpa-site *,
.lpa-site *::before,
.lpa-site *::after {
  box-sizing: border-box;
}

.lpa-site * {
  margin: 0;
  padding: 0;
}

.lpa-site {
  font-family: var(--font-body);
  color: var(--dark);
  line-height: 1.7;
  background: var(--navy-dark);
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
}

.lpa-site img { max-width: 100%; height: auto; display: block; }
.lpa-site a { color: var(--navy); text-decoration: none; transition: var(--transition); }
.lpa-site a:hover { color: var(--navy-light); }

.lpa-site h1,
.lpa-site h2,
.lpa-site h3,
.lpa-site h4,
.lpa-site h5,
.lpa-site h6 {
  font-family: var(--font-heading);
  color: var(--navy);
  line-height: 1.3;
  margin-bottom: 0.5em;
}

.lpa-site h1 { font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 700; }
.lpa-site h2 { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 700; }
.lpa-site h3 { font-size: clamp(1.3rem, 3vw, 1.8rem); font-weight: 600; }
.lpa-site h4 { font-size: 1.25rem; font-weight: 600; }

.lpa-site p { margin-bottom: 1rem; color: #444; }

.lpa-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}

.lpa-section {
  background: #fcfcfc;
  padding: 80px 0;
}
.lpa-section-alt { background: var(--off-white); }

/* ---------- Scroll Reveal Animations ---------- */
.lpa-reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s cubic-bezier(0.5, 0, 0, 1), transform 0.8s cubic-bezier(0.5, 0, 0, 1);
}
.lpa-reveal.lpa-visible {
  opacity: 1;
  transform: translateY(0);
}

/* Dot pattern overlay (decorative) */
.lpa-bg-pattern {
  background-image: radial-gradient(var(--white) 1px, transparent 1px);
  background-size: 20px 20px;
  opacity: 0.08;
}

/* ---------- Buttons ---------- */
.lpa-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 32px;
  font-family: var(--font-body);
  font-size: 0.95rem;
  font-weight: 600;
  border-radius: 50px;
  border: 2px solid transparent;
  cursor: pointer;
  transition: var(--transition);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.lpa-site .lpa-btn-primary {
  background: var(--white);
  color: var(--navy);
  border-color: var(--white);
}
.lpa-site .lpa-btn-primary:hover {
  background: var(--navy);
  border-color: var(--navy);
  color: var(--white);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.lpa-site .lpa-btn-outline {
  background: transparent;
  color: var(--white);
  border-color: rgba(255,255,255,0.4);
  backdrop-filter: blur(6px);
}
.lpa-site .lpa-btn-outline:hover {
  background: var(--white);
  color: var(--navy);
  border-color: var(--white);
  transform: translateY(-2px);
}

.lpa-site .lpa-btn-outline-navy {
  background: var(--white);
  color: var(--navy);
  border-color: rgba(28,79,145,0.35);
  backdrop-filter: none;
}
.lpa-site .lpa-btn-outline-navy:hover {
  background: var(--navy);
  color: var(--white);
  border-color: var(--navy);
}

.lpa-site .lpa-btn-navy {
  background: var(--navy);
  color: var(--white);
  border-color: var(--navy);
}
.lpa-site .lpa-btn-navy:hover {
  background: var(--navy-light);
  border-color: var(--navy-light);
  color: var(--white);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

/* ---------- Top Bar ---------- */
.lpa-top-bar {
  background: var(--navy-dark);
  color: var(--white);
  padding: 8px 0;
  font-size: 0.85rem;
  position: relative;
  z-index: 1001;
}

.lpa-top-bar .lpa-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 8px;
}

.lpa-top-bar a { color: rgba(255,255,255,0.85); }
.lpa-top-bar a:hover { color: var(--white); }

.lpa-top-bar-left {
  display: flex;
  align-items: center;
  gap: 20px;
}

.lpa-top-bar-right {
  display: flex;
  align-items: center;
  gap: 16px;
}

.lpa-top-bar-right a {
  display: flex;
  align-items: center;
  gap: 6px;
}

.lpa-social-links {
  display: flex;
  gap: 12px;
}

.lpa-social-links a {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.8rem;
  transition: var(--transition);
}
.lpa-social-links a:hover {
  background: var(--white);
  color: var(--navy);
  transform: scale(1.1);
}

/* ---------- Header / Navbar (Glassmorphism) ---------- */
.lpa-site-header {
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(0,0,0,0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
  transition: var(--transition);
}

.lpa-site-header.lpa-scrolled {
  box-shadow: var(--shadow-md);
  background: rgba(255,255,255,0.98);
}

.lpa-navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 0;
  height: 80px;
}

.lpa-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-shrink: 0;
}

.lpa-site .lpa-logo-image {
  width: 270px;
  max-width: 270px;
  height: auto;
  max-height: 74px;
  object-fit: contain;
}

.lpa-logo-icon {
  width: 48px;
  height: 48px;
  background: var(--navy);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--white);
  font-size: 1.4rem;
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}

.lpa-logo:hover .lpa-logo-icon {
  box-shadow: var(--shadow-glow);
}

.lpa-logo-text { line-height: 1.1; }

.lpa-logo-text .lpa-name {
  font-family: var(--font-heading);
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--navy);
  letter-spacing: 0;
}

.lpa-logo-text .lpa-name span { color: var(--gray); }

.lpa-logo-text .lpa-tagline {
  font-size: 0.65rem;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: var(--navy);
  font-weight: 700;
  margin-top: 2px;
}

.lpa-nav-menu {
  display: flex;
  list-style: none;
  gap: 4px;
  align-items: center;
}

.lpa-nav-menu > li { position: relative; }

.lpa-nav-menu > li > a {
  display: block;
  padding: 10px 16px;
  font-size: 0.88rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: var(--navy);
  border-radius: var(--radius-sm);
  transition: var(--transition);
  position: relative;
  white-space: nowrap;
}

/* Fancy underline hover on nav */
.lpa-nav-menu > li > a::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 4px;
  left: 50%;
  transform: translateX(-50%);
  background: var(--navy);
  transition: width 0.3s ease;
  border-radius: 2px;
}

.lpa-nav-menu > li > a:hover::after,
.lpa-nav-menu > li.lpa-active > a::after {
  width: 60%;
}

.lpa-nav-menu > li.lpa-active > a { color: var(--navy-light); }
.lpa-nav-menu > li > a:hover { color: var(--navy-light); }

/* Dropdown */
.lpa-nav-menu .lpa-dropdown {
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 220px;
  background: var(--white);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-lg);
  padding: 8px;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: var(--transition);
  list-style: none;
  z-index: 100;
}

.lpa-nav-menu li:hover .lpa-dropdown,
.lpa-nav-menu li:focus-within .lpa-dropdown,
.lpa-nav-menu li.lpa-submenu-open .lpa-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.lpa-dropdown li a {
  display: block;
  padding: 10px 16px;
  font-size: 0.88rem;
  color: var(--dark);
  border-radius: var(--radius-sm);
}

.lpa-dropdown li a:hover {
  background: var(--off-white);
  color: var(--navy-light);
}

/* Mobile menu toggle */
.lpa-menu-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 8px;
}
.lpa-menu-toggle span {
  width: 26px;
  height: 3px;
  background: var(--navy);
  border-radius: 2px;
  transition: var(--transition);
}

.lpa-nav-cta {
  background: var(--navy) !important;
  color: var(--white) !important;
  border-radius: 50px !important;
  padding: 10px 24px !important;
  font-weight: 700 !important;
  box-shadow: var(--shadow-sm);
}
.lpa-nav-cta::after { display: none !important; }
.lpa-nav-cta:hover {
  background: var(--navy-dark) !important;
  color: var(--white) !important;
  transform: translateY(-1px);
  box-shadow: var(--shadow-md) !important;
}

/* ---------- Hero Section ---------- */
.lpa-hero {
  position: relative;
  min-height: 82vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background: var(--navy-dark);
}

.lpa-hero-bg {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.lpa-hero-bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 42% 42%, rgba(28,79,145,0.38) 0%, rgba(28,79,145,0.05) 34%, transparent 58%),
    linear-gradient(to right, rgba(15,47,94,0.96) 0%, rgba(15,47,94,0.82) 42%, rgba(15,47,94,0.32) 100%);
}

.lpa-hero-content {
  position: relative;
  z-index: 2;
  max-width: 720px;
  color: var(--white);
  padding: 40px 0;
}

.lpa-hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,0.16);
  border: 1px solid rgba(255,255,255,0.42);
  color: var(--white);
  padding: 9px 18px;
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 700;
  margin: 2px 0 18px;
  backdrop-filter: blur(4px);
  box-shadow: 0 12px 28px rgba(0,0,0,0.18);
}

.lpa-hero h1 {
  color: var(--white);
  margin-bottom: 20px;
  font-size: clamp(2.8rem, 5.4vw, 4.8rem);
  line-height: 1.15;
  text-shadow: 0 8px 28px rgba(0,0,0,0.42);
}

.lpa-hero h1 em {
  font-style: italic;
  color: var(--white);
  text-decoration: underline;
  text-decoration-color: rgba(255,255,255,0.4);
  text-underline-offset: 6px;
}

.lpa-hero p {
  color: rgba(255,255,255,0.92);
  font-size: 1.18rem;
  margin-bottom: 20px;
  line-height: 1.8;
  font-weight: 500;
  max-width: 650px;
  text-shadow: 0 4px 16px rgba(0,0,0,0.36);
}

.lpa-hero-buttons {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

/* ---------- Page Header (interior pages) ---------- */
.lpa-page-header {
  background: var(--navy);
  padding: 80px 0 60px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.lpa-page-header::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: radial-gradient(var(--white) 1px, transparent 1px);
  background-size: 20px 20px;
  opacity: 0.06;
}

.lpa-page-header h1 {
  color: var(--white);
  margin-bottom: 12px;
  position: relative;
  z-index: 1;
}

.lpa-page-header .lpa-breadcrumb {
  color: rgba(255,255,255,0.85);
  font-size: 0.9rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  z-index: 1;
}

.lpa-page-header .lpa-breadcrumb a {
  color: rgba(255,255,255,0.7);
}
.lpa-page-header .lpa-breadcrumb a:hover { color: var(--white); }

/* ---------- Subtitle with brand accent line ---------- */
.lpa-subtitle {
  color: var(--navy);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.85rem;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.lpa-subtitle::before {
  content: '';
  width: 32px;
  height: 2px;
  background: var(--navy);
  flex-shrink: 0;
}

.lpa-subtitle.lpa-centered {
  justify-content: center;
}

.lpa-section-header .lpa-subtitle {
  justify-content: center;
}

    </style>
    <?php
}, 30);
