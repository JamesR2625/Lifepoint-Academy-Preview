<?php
/**
 * LifePoint Academy CSS 05 - Responsive Rules
 *
 * All responsive media queries. Keep this snippet last.
 * Source: assets/css/style.css lines 2668-2842.
 * Enable after the JavaScript/Font Awesome asset snippet. Keep CSS snippets active in numeric order.
 */
add_action('wp_head', function () {
    ?>
    <style id="lpa-css-05-responsive">
/* ---------- Responsive ---------- */
@media (max-width: 1100px) {
  .lpa-navbar {
    height: auto;
    min-height: 80px;
    position: relative;
  }

  .lpa-nav-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: var(--white);
    flex-direction: column;
    align-items: stretch;
    padding: 16px 20px 20px;
    box-shadow: var(--shadow-lg);
    gap: 0;
  }

  .lpa-nav-menu.lpa-active { display: flex; }

  .lpa-nav-menu > li > a {
    width: 100%;
    padding: 12px 10px;
    white-space: normal;
  }

  .lpa-nav-menu .lpa-dropdown {
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
    transform: none;
    box-shadow: none;
    padding: 0 0 8px 18px;
    border-radius: 0;
  }

  .lpa-nav-menu li:hover .lpa-dropdown,
  .lpa-nav-menu li:focus-within .lpa-dropdown {
    display: none;
  }

  .lpa-nav-menu li.lpa-submenu-open .lpa-dropdown {
    display: block;
  }

  .lpa-menu-toggle { display: flex; }
}

@media (max-width: 600px) {
  .lpa-site .lpa-logo-image {
    width: 205px;
    max-width: 205px;
    height: auto;
  }
}

@media (max-width: 1024px) {
  .lpa-two-col { grid-template-columns: 1fr; gap: 40px; }
  .lpa-two-col.lpa-reverse { direction: ltr; }
  .lpa-affordability-panel { grid-template-columns: 1fr; }
  .lpa-affordability-intro,
  .lpa-affordability-visual,
  .lpa-affordability-grid {
    grid-column: auto;
    grid-row: auto;
  }
  .lpa-affordability-grid { grid-template-columns: 1fr 1fr; }
  .lpa-accreditation-showcase { grid-template-columns: 1fr; }
  .lpa-accreditation-feature { min-height: 320px; }
  .lpa-donate-hero { grid-template-columns: 1fr; gap: 38px; }
  .lpa-donate-hero-content { max-width: none; }
  .lpa-footer-grid { grid-template-columns: 1fr 1fr; }
  .lpa-values-grid { grid-template-columns: repeat(2, 1fr); }
  .lpa-faculty-promise-grid { grid-template-columns: 1fr; }
  .lpa-stats-row { grid-template-columns: repeat(2, 1fr); }
  .lpa-contact-grid { grid-template-columns: 1fr; }
  .lpa-campus-visit-grid { grid-template-columns: 1fr; }
  .lpa-support-impact-wrap { grid-template-columns: 1fr; }
  .lpa-support-impact-intro { position: static; }
  .lpa-support-story { grid-template-columns: 1fr; gap: 42px; }
  .lpa-uniforms-feature { grid-template-columns: 1fr; gap: 34px; max-width: 640px; }
  .lpa-uniforms-photo { max-width: 360px; margin: 0 auto; }
  .lpa-handbook-panel { grid-template-columns: 1fr; text-align: center; }
  .lpa-handbook-icon { margin: 0 auto; }
  .lpa-handbook-content p:not(.lpa-subtitle) { max-width: none; }
  .lpa-handbook-meta { justify-content: center; }
  .lpa-handbook-action { justify-self: center; }
  .lpa-steps-grid { grid-template-columns: 1fr; }
  .lpa-steps-grid::before { display: none; }
  .lpa-calendar-grid { grid-template-columns: 1fr; gap: 32px; }
  .lpa-principal-card { flex-direction: column; padding: 32px; }
  .lpa-principal-card .lpa-principal-photo { width: 100%; max-width: 320px; margin: 0 auto; }
}

@media (max-width: 768px) {
  .lpa-top-bar { display: none; }

  .lpa-hero { min-height: 500px; }
  .lpa-hero-content { max-width: 100%; }
  .lpa-hero-buttons { flex-direction: column; }

  .lpa-section { padding: 50px 0; }
  .lpa-features-grid { grid-template-columns: 1fr; }
  .lpa-accreditation-feature { padding: 28px; }
  .lpa-accreditation-item {
    grid-template-columns: 48px minmax(0, 1fr);
    gap: 16px;
    padding: 22px;
  }
  .lpa-accreditation-icon {
    width: 46px;
    height: 46px;
  }
  .lpa-accreditation-tag {
    grid-column: 2;
    justify-self: start;
  }
  .lpa-affordability-panel { padding: 28px; }
  .lpa-affordability-grid { grid-template-columns: 1fr; }
  .lpa-values-grid { grid-template-columns: 1fr; }
  .lpa-stats-row { grid-template-columns: 1fr 1fr; gap: 24px; }
  .lpa-footer-grid { grid-template-columns: 1fr; }
  .lpa-staff-grid { grid-template-columns: repeat(2, 1fr); gap: 24px; }
  .lpa-staff-card { padding: 10px 10px 18px; }
  .lpa-faculty-promise { padding: 18px; }

  .lpa-page-header { padding: 50px 0 40px; }
  .lpa-stats-bar { margin-top: -30px; padding: 24px; }
  .lpa-calendar-wrapper { padding: 24px; }
  .lpa-sl-nav {
    justify-content: flex-start;
    flex-wrap: nowrap;
    overflow-x: auto;
    border-radius: var(--radius-md);
  }
  .lpa-sl-nav a { flex: 0 0 auto; }
  .lpa-contact-form-card { padding: 24px; }
  .lpa-contact-actions .lpa-btn { width: 100%; justify-content: center; }
  .lpa-form-row { grid-template-columns: 1fr; gap: 0; }
  .lpa-next-steps { grid-template-columns: 1fr; }
  .lpa-campus-photo img { height: 260px; }
  .lpa-support-impact-wrap { padding: 28px; }
  .lpa-support-impact-grid { grid-template-columns: 1fr; }
  .lpa-donate-hero-photo img { height: 300px; }
  .lpa-home-feature .lpa-two-col-image img,
  .lpa-home-story .lpa-two-col-image img,
  .lpa-home-partner .lpa-two-col-image img { height: 320px; }
  .lpa-home-partner .lpa-church-photo img { height: 100%; }
  .lpa-asf-card { min-height: auto; padding: 28px; }
  .lpa-photo-depth::before { inset: 12px -8px -12px 14px; }
  .lpa-photo-caption {
    position: static;
    max-width: none;
    border-radius: 0 0 var(--radius-md) var(--radius-md);
  }
  .lpa-support-story-image img { height: 320px; }
  .lpa-support-story-content { padding: 28px; }
  .lpa-support-story-actions .lpa-btn { width: 100%; justify-content: center; }
  .lpa-aftercare-hours { grid-template-columns: 1fr; }
  .lpa-handbook-panel { padding: 28px; }
  .lpa-handbook-action .lpa-btn { width: 100%; justify-content: center; }
}

@media (max-width: 480px) {
  .lpa-accreditation-meta { grid-template-columns: 1fr; }
  .lpa-accreditation-item { grid-template-columns: 1fr; }
  .lpa-accreditation-tag { grid-column: auto; }
  .lpa-stats-row { grid-template-columns: 1fr; }
  .lpa-staff-grid { grid-template-columns: 1fr; }
}
    </style>
    <?php
}, 34);
