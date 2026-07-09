<?php
/**
 * LifePoint Academy CSS 02 - Layout, Home, Student Life Blocks
 *
 * Shared feature layouts, stats, two-column content, homepage feature sections, student-life feature blocks, and handbook styles.
 * Source: assets/css/style.css lines 608-1256.
 * Enable after the JavaScript/Font Awesome asset snippet. Keep CSS snippets active in numeric order.
 */
add_action('wp_head', function () {
    ?>
    <style id="lpa-css-02-layout-home-student-life">
/* ---------- Feature Cards ---------- */
.lpa-features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.lpa-feature-card {
  background: var(--off-white);
  border-radius: var(--radius-xl);
  padding: 36px 28px;
  box-shadow: var(--shadow-soft);
  border: 1px solid var(--light-gray);
  transition: all 0.3s ease;
  text-align: center;
}

.lpa-feature-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: transparent;
}

.lpa-feature-icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-md);
  background: var(--navy);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  font-size: 1.6rem;
  color: var(--white);
  transition: transform 0.3s ease;
}

.lpa-feature-card:hover .lpa-feature-icon {
  transform: scale(1.1);
}

.lpa-feature-card h3 {
  font-size: 1.15rem;
  margin-bottom: 12px;
}

.lpa-feature-card p {
  font-size: 0.92rem;
  color: var(--gray);
}

/* ---------- Stats Bar (floating card) ---------- */
.lpa-stats-bar {
  background: var(--white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: 40px;
  margin-top: -60px;
  position: relative;
  z-index: 10;
}

.lpa-stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
}

.lpa-stat-item { text-align: center; }

.lpa-stat-number {
  font-family: var(--font-heading);
  font-size: 2.8rem;
  font-weight: 700;
  color: var(--navy);
  line-height: 1;
  margin-bottom: 8px;
}

.lpa-stat-label {
  font-size: 0.75rem;
  color: var(--gray);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 700;
}

/* ---------- Two-Column Content ---------- */
.lpa-two-col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.lpa-two-col.lpa-reverse { direction: rtl; }
.lpa-two-col.lpa-reverse > * { direction: ltr; }

.lpa-two-col-image {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  position: relative;
}

.lpa-two-col-image img {
  width: 100%;
  height: 450px;
  object-fit: cover;
}

/* Decorative accent behind image */
.lpa-two-col-image.lpa-with-accent::before {
  content: '';
  position: absolute;
  inset: -12px;
  background: rgba(77,105,177,0.12);
  border-radius: var(--radius-xl);
  transform: rotate(3deg);
  z-index: -1;
}

/* Accreditation badge overlay on image */
.lpa-image-badge {
  position: absolute;
  bottom: -20px;
  right: -10px;
  background: var(--royal-dark);
  color: var(--white);
  padding: 20px 24px;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  z-index: 2;
}

.lpa-image-badge i {
  color: var(--white);
  font-size: 2rem;
  margin-bottom: 6px;
}

.lpa-image-badge .lpa-badge-title {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 1.1rem;
}

.lpa-image-badge .lpa-badge-sub {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.85);
}

.lpa-two-col-content h2 { margin-bottom: 16px; }

.lpa-two-col-content .lpa-subtitle {
  margin-bottom: 8px;
}

.lpa-home-feature .lpa-two-col-image img,
.lpa-home-story .lpa-two-col-image img {
  height: 480px;
}

.lpa-home-callout {
  display: flex;
  gap: 16px;
  align-items: flex-start;
  margin: 26px 0;
  padding: 20px 22px;
  border-left: 4px solid var(--navy);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  background: #EFF6FF;
}

.lpa-home-callout i {
  color: var(--navy);
  margin-top: 4px;
}

.lpa-home-callout p {
  margin: 0;
  color: var(--navy-dark);
  font-weight: 600;
}

.lpa-affordability-panel {
  display: grid;
  grid-template-columns: 0.72fr 1.28fr;
  gap: 34px;
  align-items: stretch;
  padding: 38px;
  border: 1px solid rgba(77,105,177,0.14);
  border-radius: var(--radius-xl);
  background:
    linear-gradient(135deg, rgba(77,105,177,0.08) 0%, rgba(255,255,255,0.96) 36%, rgba(244,247,251,0.98) 100%);
  box-shadow: var(--shadow-xl);
  position: relative;
  overflow: hidden;
}

.lpa-affordability-panel::before {
  content: '';
  position: absolute;
  inset: -80px auto auto -80px;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background: rgba(77,105,177,0.1);
}

.lpa-affordability-panel::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  width: 38%;
  height: 100%;
  background-image: radial-gradient(rgba(77,105,177,0.14) 1px, transparent 1px);
  background-size: 18px 18px;
  opacity: 0.42;
  pointer-events: none;
}

.lpa-affordability-intro,
.lpa-affordability-visual,
.lpa-affordability-grid {
  position: relative;
  z-index: 1;
}

.lpa-affordability-intro {
  grid-row: 1 / span 2;
  align-self: center;
}

.lpa-affordability-intro h2 {
  margin-bottom: 16px;
}

.lpa-affordability-intro p:not(.lpa-subtitle) {
  color: var(--gray);
  font-size: 1.05rem;
  line-height: 1.8;
  margin-bottom: 24px;
}

.lpa-affordability-visual {
  grid-column: 2;
  grid-row: 1;
  aspect-ratio: 16 / 9;
  min-height: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}

.lpa-affordability-visual img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center center;
  display: block;
  filter: saturate(1.05) contrast(1.03);
}

/* Portrait photos: show the full image and fill the sides with a blurred copy.
   Set --lpa-photo to the same image URL on the container. */
.lpa-affordability-visual.lpa-visual-portrait::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: var(--lpa-photo);
  background-size: cover;
  background-position: center;
  filter: blur(20px) saturate(1.1);
  transform: scale(1.12);
}

.lpa-affordability-visual.lpa-visual-portrait img {
  position: relative;
  object-fit: contain;
  filter: none;
}

.lpa-affordability-visual.lpa-visual-shift-up img {
  transform: translateY(-24px) scale(1.08);
  transform-origin: center top;
}

.lpa-affordability-note {
  position: absolute;
  left: 18px;
  right: 18px;
  bottom: 18px;
  padding: 18px 20px;
  border-left: 4px solid var(--gold);
  border-radius: var(--radius-md);
  background: rgba(31,46,86,0.94);
  color: var(--white);
  box-shadow: var(--shadow-md);
}

.lpa-affordability-note strong,
.lpa-affordability-note span {
  display: block;
}

.lpa-affordability-note strong {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  margin-bottom: 5px;
}

.lpa-affordability-note span {
  color: rgba(255,255,255,0.84);
  font-size: 0.9rem;
  line-height: 1.55;
}

.lpa-affordability-grid {
  grid-column: 2;
  grid-row: 2;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}

.lpa-affordability-item {
  display: flex;
  gap: 14px;
  align-items: flex-start;
  padding: 18px;
  border: 1px solid rgba(77,105,177,0.13);
  border-radius: var(--radius-md);
  background: rgba(255,255,255,0.88);
  box-shadow: 0 14px 30px rgba(31,46,86,0.06);
}

.lpa-affordability-icon {
  width: 42px;
  height: 42px;
  border-radius: var(--radius-sm);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  background: var(--navy);
  color: var(--white);
}

.lpa-affordability-item h3 {
  font-size: 1rem;
  margin-bottom: 5px;
}

.lpa-affordability-item p {
  margin: 0;
  color: var(--gray);
  font-size: 0.9rem;
  line-height: 1.55;
}

.lpa-home-partner .lpa-two-col-image img {
  height: 380px;
}

.lpa-church-photo {
  aspect-ratio: 1268 / 525;
  padding: 0;
  background: transparent;
}

.lpa-home-partner .lpa-church-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 34%;
}

.lpa-asf-card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-height: 360px;
  padding: 42px;
  border-radius: var(--radius-xl);
  border: 1px solid var(--light-gray);
  background: var(--white);
  box-shadow: var(--shadow-lg);
  position: relative;
  overflow: hidden;
}

.lpa-asf-card::before {
  content: '';
  position: absolute;
  inset: auto -60px -90px auto;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background: rgba(77,105,177,0.08);
}

.lpa-asf-logo {
  width: 100%;
  max-width: 420px;
  height: auto;
  margin-bottom: 30px;
  position: relative;
  z-index: 1;
}

.lpa-asf-icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: var(--navy);
  color: var(--white);
  font-size: 1.35rem;
  margin-bottom: 18px;
  position: relative;
  z-index: 1;
}

.lpa-asf-card p {
  color: var(--navy-dark);
  font-weight: 600;
  margin: 0;
  position: relative;
  z-index: 1;
}

.lpa-aftercare-hours {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
  margin: 24px 0;
}

.lpa-aftercare-hours div {
  padding: 18px 20px;
  border: 1px solid var(--light-gray);
  border-radius: var(--radius-md);
  background: var(--white);
  box-shadow: var(--shadow-sm);
}

.lpa-aftercare-hours span {
  display: block;
  color: var(--gray);
  font-size: 0.82rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 4px;
}

.lpa-aftercare-hours strong {
  display: block;
  color: var(--navy);
  font-family: var(--font-heading);
  font-size: 1.15rem;
}

.lpa-security-points {
  display: grid;
  gap: 12px;
  margin: 24px 0;
}

.lpa-security-points div {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 14px 16px;
  border: 1px solid var(--light-gray);
  border-radius: var(--radius-md);
  background: var(--white);
  box-shadow: var(--shadow-sm);
}

.lpa-security-points i {
  color: var(--navy);
  margin-top: 4px;
  flex-shrink: 0;
}

.lpa-security-points span {
  color: #4D4D4D;
  font-weight: 500;
  line-height: 1.55;
}

.lpa-lunch-provider {
  display: flex;
  align-items: center;
  gap: 16px;
  margin: 24px 0 18px;
  padding: 18px 20px;
  border: 1px solid var(--light-gray);
  border-radius: var(--radius-md);
  background: linear-gradient(135deg, var(--white) 0%, #F4F8FC 100%);
  box-shadow: var(--shadow-sm);
}

.lpa-lunch-provider-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  background: var(--navy);
  color: var(--white);
}

.lpa-lunch-provider h3 {
  font-size: 1rem;
  margin-bottom: 2px;
}

.lpa-lunch-provider p {
  margin: 0;
  color: var(--gray);
  font-size: 0.9rem;
}

.lpa-lunch-highlights {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin: 0 0 24px;
}

.lpa-lunch-highlights span {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 8px 12px;
  border-radius: 999px;
  background: var(--off-white);
  color: var(--navy);
  font-size: 0.84rem;
  font-weight: 700;
}

.lpa-lunch-highlights i {
  color: var(--navy);
}

.lpa-uniforms-feature {
  display: grid;
  grid-template-columns: 1fr 360px;
  gap: 56px;
  align-items: center;
  max-width: 980px;
  margin: 0 auto;
}

.lpa-uniforms-content {
  padding: 36px 0;
}

.lpa-uniforms-content h2 {
  margin-bottom: 16px;
}

.lpa-uniforms-content p:not(.lpa-subtitle) {
  max-width: 560px;
  color: var(--gray);
  font-size: 1.05rem;
  line-height: 1.8;
  margin-bottom: 24px;
}

.lpa-uniforms-photo {
  border-radius: var(--radius-xl);
  overflow: hidden;
  background: var(--white);
}

.lpa-uniforms-photo img {
  width: 100%;
  aspect-ratio: 2 / 3;
  height: auto;
  object-fit: cover;
}

.lpa-handbook-panel {
  display: grid;
  grid-template-columns: auto 1fr auto;
  gap: 28px;
  align-items: center;
  max-width: 1040px;
  margin: 0 auto;
  padding: 38px 42px;
  border: 1px solid var(--light-gray);
  border-radius: var(--radius-xl);
  background: var(--white);
  box-shadow: var(--shadow-soft);
}

.lpa-handbook-icon {
  width: 82px;
  height: 82px;
  border-radius: var(--radius-md);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, var(--navy) 0%, var(--navy-dark) 100%);
  color: var(--white);
  font-size: 2rem;
}

.lpa-handbook-content h2 {
  margin-bottom: 12px;
}

.lpa-handbook-content p:not(.lpa-subtitle) {
  color: var(--gray);
  max-width: 610px;
  margin-bottom: 16px;
}

.lpa-handbook-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.lpa-handbook-meta span {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 8px 12px;
  border-radius: 999px;
  background: var(--off-white);
  color: var(--navy);
  font-size: 0.84rem;
  font-weight: 700;
}

.lpa-handbook-action {
  justify-self: end;
}

    </style>
    <?php
}, 31);
