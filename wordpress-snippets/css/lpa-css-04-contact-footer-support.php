<?php
/**
 * LifePoint Academy CSS 04 - Contact, Footer, Utilities, Support
 *
 * Contact form, campus map, CTA banner, footer, utility classes, support page, student-life anchor nav, and staff section headings.
 * Source: assets/css/style.css lines 1981-2666.
 * Enable after the JavaScript/Font Awesome asset snippet. Keep CSS snippets active in numeric order.
 */
add_action('wp_head', function () {
    ?>
    <style id="lpa-css-04-contact-footer-support">
/* ---------- Contact Form ---------- */
.lpa-contact-grid {
  display: grid;
  grid-template-columns: 3fr 2fr;
  gap: 48px;
}

.lpa-contact-form-card {
  background: var(--white);
  padding: 40px 48px;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-soft);
  border: 1px solid var(--light-gray);
}

.lpa-contact-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-bottom: 30px;
}

.lpa-form-group {
  margin-bottom: 20px;
}

.lpa-form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

.lpa-form-group label {
  display: block;
  font-weight: 600;
  margin-bottom: 6px;
  font-size: 0.9rem;
  color: var(--navy);
}

.lpa-form-group input,
.lpa-form-group textarea,
.lpa-form-group select {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid var(--light-gray);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: 0.95rem;
  transition: var(--transition);
  background: var(--off-white);
}

.lpa-form-group input:focus,
.lpa-form-group textarea:focus,
.lpa-form-group select:focus {
  outline: none;
  border-color: var(--navy);
  box-shadow: 0 0 0 3px rgba(77,105,177,0.15);
  background: var(--white);
}

.lpa-form-group textarea {
  resize: vertical;
  min-height: 140px;
}

.lpa-next-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 14px;
  margin-top: 28px;
  padding-top: 24px;
  border-top: 1px solid var(--light-gray);
}

.lpa-next-step {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.lpa-next-step span {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  background: var(--navy);
  color: var(--white);
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 700;
}

.lpa-next-step p {
  margin: 0;
  color: var(--gray);
  font-size: 0.84rem;
  line-height: 1.5;
}

.lpa-next-step strong {
  color: var(--navy);
}

.lpa-contact-info-card {
  background: var(--royal-dark);
  color: var(--white);
  padding: 40px;
  border-radius: var(--radius-xl);
  height: fit-content;
  position: relative;
  overflow: hidden;
}

.lpa-contact-info-card::after {
  content: '\f14e';
  font-family: 'Font Awesome 6 Free';
  font-weight: 900;
  position: absolute;
  bottom: -20px;
  right: -20px;
  font-size: 8rem;
  color: rgba(255,255,255,0.03);
}

.lpa-contact-info-card h3 {
  color: var(--white);
  margin-bottom: 28px;
}

.lpa-contact-item {
  display: flex;
  gap: 16px;
  margin-bottom: 24px;
  align-items: flex-start;
}

.lpa-contact-item-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--white);
  font-size: 1.1rem;
}

.lpa-contact-item-text h4 {
  color: var(--white);
  font-size: 0.95rem;
  margin-bottom: 2px;
}

.lpa-contact-item-text p {
  color: rgba(255,255,255,0.78);
  font-size: 0.9rem;
  margin: 0;
}

.lpa-contact-item-text a { color: var(--white); }

.lpa-contact-info-card .lpa-social-links a {
  width: 36px;
  height: 36px;
  background: rgba(255,255,255,0.2);
  color: var(--white);
}

.lpa-contact-info-card .lpa-social-links a:hover {
  background: var(--white);
  color: var(--navy);
}

/* ---------- Map ---------- */
.lpa-campus-visit-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: 42px;
  align-items: center;
  margin-bottom: 34px;
}

.lpa-campus-photo {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  background: var(--white);
}

.lpa-campus-photo img {
  display: block;
  width: 100%;
  height: 360px;
  object-fit: cover;
}

.lpa-campus-visit-content h2 {
  margin-bottom: 14px;
}

.lpa-campus-visit-content > p:not(.lpa-subtitle) {
  color: var(--gray);
  margin-bottom: 24px;
}

.lpa-map-container {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  margin-top: 30px;
}

.lpa-map-container iframe {
  width: 100%;
  height: 400px;
  border: none;
}

/* ---------- CTA Banner ---------- */
.lpa-cta-banner {
  background: linear-gradient(to right, var(--navy-dark) 0%, var(--royal-dark) 100%);
  padding: 80px 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.lpa-cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: radial-gradient(var(--white) 1px, transparent 1px);
  background-size: 20px 20px;
  opacity: 0.06;
}

.lpa-cta-banner h2 {
  color: var(--white);
  margin-bottom: 16px;
  position: relative; z-index: 1;
}

.lpa-cta-banner p {
  color: rgba(255,255,255,0.7);
  font-size: 1.1rem;
  margin-bottom: 30px;
  position: relative; z-index: 1;
}

.lpa-cta-banner .lpa-btn { position: relative; z-index: 1; }

/* ---------- Footer ---------- */
.lpa-site-footer {
  background: var(--navy-dark);
  color: rgba(255,255,255,0.7);
  padding: 60px 0 0;
  border-top: 1px solid rgba(255,255,255,0.05);
}

.lpa-footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 40px;
  padding-bottom: 40px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}

.lpa-footer-about .lpa-logo-text .lpa-name {
  color: var(--white);
  font-size: 1.4rem;
}

.lpa-site .lpa-footer-logo-image {
  width: 260px;
  max-width: 100%;
  height: auto;
  object-fit: contain;
  background: var(--white);
  border-radius: var(--radius-sm);
  padding: 10px 14px;
  box-shadow: var(--shadow-sm);
}

.lpa-footer-about p {
  color: rgba(255,255,255,0.78);
  font-size: 0.9rem;
  margin-top: 16px;
  line-height: 1.7;
}

.lpa-footer-col h4 {
  color: var(--white);
  font-family: var(--font-body);
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 20px;
  font-weight: 700;
}

.lpa-footer-links { list-style: none; }
.lpa-footer-links li { margin-bottom: 10px; }

.lpa-footer-links a {
  color: rgba(255,255,255,0.78);
  font-size: 0.9rem;
  transition: all 0.2s ease;
}

.lpa-footer-links a:hover {
  color: var(--white);
  padding-left: 4px;
}

.lpa-footer-bottom {
  padding: 24px 0;
  text-align: center;
  font-size: 0.8rem;
  color: rgba(255,255,255,0.58);
}

.lpa-footer-bottom a { color: rgba(255,255,255,0.9); }

/* ---------- Non-Discrimination ---------- */
.lpa-non-discrimination {
  padding: 24px 0;
  font-size: 0.78rem;
  color: rgba(255,255,255,0.6);
  text-align: center;
  line-height: 1.6;
  border-top: 1px solid rgba(255,255,255,0.05);
  max-width: 800px;
  margin: 0 auto;
}

.lpa-site-footer .lpa-social-links a {
  background: rgba(255,255,255,0.14);
  color: var(--white);
}

.lpa-site-footer .lpa-social-links a:hover {
  background: var(--white);
  color: var(--navy);
}

.lpa-site-footer .lpa-footer-links li {
  color: rgba(255,255,255,0.82);
}

.lpa-site-footer .lpa-footer-links i {
  color: var(--white) !important;
}

/* ---------- Utility Classes ---------- */
.lpa-text-center { text-align: center; }
.lpa-text-gold { color: var(--navy); } /* legacy name — now navy */
.lpa-text-navy { color: var(--navy); }
.lpa-mb-0 { margin-bottom: 0; }
.lpa-mb-16 { margin-bottom: 16px; }
.lpa-mb-24 { margin-bottom: 24px; }
.lpa-mb-40 { margin-bottom: 40px; }
.lpa-mt-40 { margin-top: 40px; }

.lpa-section-header {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 50px;
}

.lpa-section-header p {
  color: var(--gray);
  font-size: 1.05rem;
}

.lpa-divider {
  width: 80px;
  height: 3px;
  background: var(--navy);
  border-radius: 2px;
  margin: 16px auto;
}

/* Info callout box */
.lpa-info-callout {
  background: #EFF6FF;
  border-left: 4px solid var(--blue-accent);
  padding: 20px 24px;
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  display: flex;
  gap: 16px;
  align-items: flex-start;
}

.lpa-info-callout i { color: var(--blue-accent); font-size: 1.4rem; margin-top: 2px; }
.lpa-info-callout p { margin: 0; color: var(--navy); font-weight: 500; }

/* Support/Donate page */
.lpa-donate-section {
  text-align: center;
  max-width: 700px;
  margin: 0 auto;
}

.lpa-donate-section p {
  font-size: 1.1rem;
  line-height: 1.8;
}

.lpa-donate-hero {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 58px;
  align-items: center;
}

.lpa-donate-hero-content {
  max-width: 590px;
}

.lpa-donate-icon {
  width: 66px;
  height: 66px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--navy) 0%, var(--navy-dark) 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 22px;
  font-size: 1.6rem;
  color: var(--white);
}

.lpa-donate-hero-content .lpa-divider {
  margin-left: 0;
  margin-right: 0;
}

.lpa-donate-hero-content p {
  font-size: 1.05rem;
  line-height: 1.8;
}

.lpa-donate-hero-photo {
  position: relative;
}

.lpa-donate-hero-photo img {
  width: 100%;
  height: 430px;
  object-fit: cover;
  border-radius: var(--radius-xl);
}

.lpa-photo-depth {
  position: relative;
  filter: drop-shadow(0 22px 34px rgba(31,46,86,0.18));
}

.lpa-photo-depth::before {
  content: '';
  position: absolute;
  inset: 18px -16px -18px 24px;
  border-radius: var(--radius-xl);
  background: rgba(77,105,177,0.12);
  z-index: -1;
}

.lpa-photo-caption {
  position: absolute;
  right: 22px;
  bottom: 22px;
  max-width: 340px;
  padding: 16px 18px;
  border-radius: var(--radius-md);
  background: rgba(31,46,86,0.88);
  color: var(--white);
  font-size: 0.9rem;
  line-height: 1.55;
  box-shadow: var(--shadow-md);
}

.lpa-support-impact-wrap {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 46px;
  align-items: start;
  background: var(--white);
  border: 1px solid var(--light-gray);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-soft);
  padding: 44px;
}

.lpa-support-impact-intro {
  position: sticky;
  top: 120px;
}

.lpa-support-impact-intro h2 {
  margin-bottom: 16px;
}

.lpa-support-impact-intro p:not(.lpa-subtitle) {
  color: var(--gray);
  font-size: 1.02rem;
}

.lpa-support-impact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
}

.lpa-support-impact-item {
  display: flex;
  gap: 16px;
  padding: 22px;
  border: 1px solid var(--light-gray);
  border-radius: var(--radius-md);
  background: var(--off-white);
}

.lpa-support-impact-item i {
  width: 42px;
  height: 42px;
  border-radius: var(--radius-sm);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  background: var(--navy);
  color: var(--white);
  font-size: 1.05rem;
}

.lpa-support-impact-item h3 {
  font-size: 1rem;
  margin-bottom: 6px;
}

.lpa-support-impact-item p {
  margin: 0;
  color: var(--gray);
  font-size: 0.9rem;
  line-height: 1.6;
}

.lpa-support-story {
  display: grid;
  grid-template-columns: 0.95fr 1.05fr;
  gap: 64px;
  align-items: center;
}

.lpa-support-story-image img {
  width: 100%;
  height: 520px;
  object-fit: cover;
  border-radius: var(--radius-xl);
}

.lpa-support-story-content {
  position: relative;
  padding: 42px;
  border-radius: var(--radius-xl);
  background: linear-gradient(135deg, var(--white) 0%, #F4F8FC 100%);
  border: 1px solid var(--light-gray);
  box-shadow: var(--shadow-soft);
}

.lpa-support-story-content::before {
  content: '';
  position: absolute;
  top: 26px;
  right: 28px;
  width: 72px;
  height: 72px;
  border-radius: 50%;
  background: rgba(77,105,177,0.08);
}

.lpa-support-story-content h2 {
  margin-bottom: 18px;
}

.lpa-support-lead {
  color: #4D4D4D;
  font-size: 1.12rem;
  line-height: 1.85;
}

.lpa-support-story-card {
  display: flex;
  gap: 16px;
  align-items: flex-start;
  margin: 28px 0;
  padding: 22px 24px;
  border-left: 4px solid var(--navy);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  background: var(--white);
  box-shadow: var(--shadow-sm);
}

.lpa-support-story-card i {
  color: var(--navy);
  margin-top: 4px;
}

.lpa-support-story-card p {
  margin: 0;
  color: var(--navy-dark);
  font-weight: 500;
}

.lpa-support-story-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
}

/* Student Life section nav pills */
.lpa-sl-nav {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  justify-content: center;
  max-width: 940px;
  margin: 0 auto;
  padding: 10px;
  border: 1px solid var(--light-gray);
  border-radius: 999px;
  background: var(--white);
  box-shadow: var(--shadow-soft);
}

.lpa-sl-nav a {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 18px;
  border-radius: 50px;
  background: var(--off-white);
  color: var(--navy);
  font-weight: 600;
  font-size: 0.85rem;
  border: 2px solid transparent;
  transition: var(--transition);
}

.lpa-sl-nav a i {
  margin: 0;
}

.lpa-sl-nav a:hover {
  background: var(--navy);
  color: var(--white);
  border-color: var(--navy);
}

.lpa-sl-section { scroll-margin-top: 100px; }

/* Staff section heading */
.lpa-staff-section-title {
  text-align: center;
  color: var(--navy);
  margin: 10px 0 30px;
  font-size: 1.55rem;
  position: relative;
}

.lpa-staff-section-title::after {
  content: '';
  display: block;
  width: 64px;
  height: 3px;
  border-radius: 999px;
  background: var(--navy);
  margin: 12px auto 0;
}

    </style>
    <?php
}, 33);
