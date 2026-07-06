<?php
/**
 * LifePoint Academy CSS 03 - Testimonials, Academics, Faculty, Admissions, Calendar
 *
 * Testimonials, values, academics, faculty/staff cards, admissions steps, and visible calendar styling.
 * Source: assets/css/style.css lines 1236-1794.
 * Enable after the JavaScript/Font Awesome asset snippet. Keep CSS snippets active in numeric order.
 */
add_action('wp_head', function () {
    ?>
    <style id="lpa-css-03-testimonials-values-faculty-calendar">
/* ---------- Testimonial ---------- */
.lpa-testimonial-section {
  background: var(--navy-dark);
  color: var(--white);
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}

.lpa-testimonial-section .lpa-bg-image {
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  opacity: 0.08;
}

.lpa-testimonial-card {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  position: relative;
  z-index: 1;
}

.lpa-testimonial-card .lpa-quote-icon {
  font-size: 4rem;
  color: var(--white);
  opacity: 0.4;
  line-height: 1;
  margin-bottom: 20px;
}

.lpa-testimonial-card blockquote {
  font-family: var(--font-heading);
  font-size: 1.4rem;
  font-style: italic;
  color: rgba(255,255,255,0.9);
  line-height: 1.8;
  margin-bottom: 28px;
}

.lpa-testimonial-card cite {
  color: rgba(255,255,255,0.85);
  font-style: normal;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 0.85rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
}

.lpa-testimonial-card cite::before,
.lpa-testimonial-card cite::after {
  content: '';
  width: 40px;
  height: 1px;
  background: rgba(255,255,255,0.6);
}

/* ---------- Values / LIFE Grid ---------- */
.lpa-values-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.lpa-value-card {
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: var(--radius-xl);
  padding: 36px 24px;
  text-align: center;
  transition: transform 0.3s ease;
}

.lpa-value-card:hover {
  transform: translateY(-6px);
}

.lpa-value-letter {
  font-family: var(--font-heading);
  font-size: 3.5rem;
  font-weight: 700;
  color: var(--white);
  line-height: 1;
  margin-bottom: 12px;
}

.lpa-value-card h4 {
  color: var(--white);
  margin-bottom: 12px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1rem;
}

.lpa-value-card p {
  font-size: 0.88rem;
  color: rgba(255,255,255,0.6);
}

/* Values section dark background */
.lpa-values-section {
  background: var(--navy);
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}

.lpa-values-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: radial-gradient(var(--white) 1px, transparent 1px);
  background-size: 20px 20px;
  opacity: 0.06;
}

.lpa-values-section .lpa-section-header .lpa-subtitle { color: rgba(255,255,255,0.85); }
.lpa-values-section .lpa-section-header .lpa-subtitle::before { background: var(--white); }
.lpa-values-section .lpa-section-header h2 { color: var(--white); }
.lpa-values-section .lpa-divider { background: var(--white); }

/* ---------- Academics Grid ---------- */
.lpa-academics-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 24px;
}

.lpa-academic-card {
  background: var(--white);
  border-radius: var(--radius-xl);
  padding: 32px;
  border: 1px solid var(--light-gray);
  transition: all 0.3s ease;
}

.lpa-academic-card:hover {
  box-shadow: var(--shadow-lg);
  transform: translateY(-4px);
}

.lpa-academic-card-icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: rgba(27,42,74,0.05);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  color: var(--navy);
  margin-bottom: 20px;
  transition: all 0.3s ease;
}

.lpa-academic-card:hover .lpa-academic-card-icon {
  background: var(--navy);
  color: var(--white);
}

.lpa-academic-card h3 {
  font-size: 1.15rem;
  margin-bottom: 10px;
}

.lpa-academic-card p {
  font-size: 0.9rem;
  color: var(--gray);
  line-height: 1.7;
}

/* ---------- Accreditation Showcase ---------- */
.lpa-accreditation-showcase {
  display: grid;
  grid-template-columns: minmax(280px, 0.9fr) minmax(0, 1.35fr);
  gap: 28px;
  margin-top: 38px;
  align-items: stretch;
}

.lpa-accreditation-feature {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  background: var(--navy);
  color: var(--white);
  padding: 42px;
  min-height: 390px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 22px 48px rgba(15,47,94,0.18);
}

.lpa-accreditation-feature::after {
  content: 'AAA';
  position: absolute;
  right: -16px;
  bottom: -42px;
  font-size: 8rem;
  font-weight: 700;
  line-height: 1;
  color: rgba(255,255,255,0.08);
  pointer-events: none;
}

.lpa-accreditation-seal {
  width: 76px;
  height: 76px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.45);
  background: rgba(255,255,255,0.12);
  color: var(--white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  margin-bottom: 28px;
}

.lpa-accreditation-kicker {
  color: var(--navy);
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.lpa-accreditation-feature .lpa-accreditation-kicker,
.lpa-accreditation-feature h3,
.lpa-accreditation-feature p {
  color: var(--white);
}

.lpa-accreditation-feature h3 {
  font-size: clamp(1.55rem, 3vw, 2.15rem);
  margin-bottom: 16px;
}

.lpa-accreditation-feature p {
  color: rgba(255,255,255,0.86);
  max-width: 520px;
}

.lpa-accreditation-meta {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
  position: relative;
  z-index: 1;
}

.lpa-accreditation-meta div {
  border-top: 1px solid rgba(255,255,255,0.28);
  padding-top: 16px;
}

.lpa-accreditation-meta span {
  display: block;
  color: rgba(255,255,255,0.72);
  font-size: 0.82rem;
  margin-bottom: 4px;
}

.lpa-accreditation-meta strong {
  display: block;
  color: var(--white);
  font-size: 1.35rem;
  line-height: 1.2;
}

.lpa-accreditation-list {
  display: grid;
  gap: 16px;
}

.lpa-accreditation-item {
  display: grid;
  grid-template-columns: 58px minmax(0, 1fr) auto;
  gap: 20px;
  align-items: start;
  background: var(--white);
  border: 1px solid var(--light-gray);
  border-left: 5px solid var(--navy);
  border-radius: 8px;
  padding: 24px;
  box-shadow: 0 14px 30px rgba(15,47,94,0.06);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.lpa-accreditation-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 18px 38px rgba(15,47,94,0.1);
}

.lpa-accreditation-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: rgba(28,79,145,0.08);
  color: var(--navy);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.35rem;
}

.lpa-accreditation-item h3 {
  font-size: 1.18rem;
  margin-bottom: 8px;
}

.lpa-accreditation-item p {
  color: #536273;
  font-size: 0.94rem;
  line-height: 1.65;
  margin-bottom: 0;
}

.lpa-accreditation-item .lpa-accreditation-kicker {
  color: var(--navy);
  margin-bottom: 8px;
}

.lpa-accreditation-tag {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 92px;
  min-height: 32px;
  border-radius: 999px;
  background: rgba(28,79,145,0.08);
  color: var(--navy);
  font-size: 0.82rem;
  font-weight: 700;
  padding: 6px 12px;
  white-space: nowrap;
}

/* ---------- Staff Grid (Cleaner Cards) ---------- */
.lpa-staff-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
  gap: 34px;
  margin-bottom: 56px;
}

.lpa-staff-card {
  text-align: center;
  padding: 14px 14px 20px;
  border: 1px solid rgba(28,79,145,0.1);
  border-radius: var(--radius-xl);
  background: rgba(255,255,255,0.86);
  box-shadow: 0 14px 34px rgba(15,47,94,0.06);
  transition: var(--transition);
}

.lpa-staff-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: rgba(28,79,145,0.18);
}

.lpa-staff-card:hover .lpa-staff-photo-placeholder {
  box-shadow: var(--shadow-lg);
  border-color: transparent;
}

.lpa-staff-card:hover .lpa-staff-photo-placeholder i {
  color: var(--navy);
  transform: scale(1.1);
}

.lpa-staff-photo-placeholder {
  aspect-ratio: 4 / 5;
  width: 100%;
  background: var(--light-gray);
  border-radius: var(--radius-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3.5rem;
  color: rgba(0,0,0,0.12);
  margin-bottom: 16px;
  border: 1px solid rgba(28,79,145,0.08);
  overflow: hidden;
  transition: all 0.3s ease;
}

.lpa-staff-photo-placeholder i {
  transition: all 0.3s ease;
}

.lpa-staff-photo {
  aspect-ratio: 4 / 5;
  width: 100%;
  object-fit: cover;
  object-position: center top;
  border-radius: var(--radius-lg);
  margin-bottom: 16px;
  border: 1px solid rgba(28,79,145,0.08);
  box-shadow: 0 12px 26px rgba(15,47,94,0.1);
}

.lpa-staff-info h3 {
  font-size: 1.08rem;
  margin-bottom: 5px;
  line-height: 1.25;
}

.lpa-staff-info .lpa-role {
  color: var(--navy);
  font-size: 0.88rem;
  font-weight: 600;
}

.lpa-staff-info .lpa-email {
  color: var(--navy-light);
  font-size: 0.85rem;
  margin-top: 6px;
  display: block;
}

/* Principal card (featured) */
.lpa-principal-card {
  background:
    linear-gradient(135deg, rgba(28,79,145,0.08) 0%, rgba(255,255,255,0.97) 42%, rgba(244,247,251,0.98) 100%);
  border-radius: var(--radius-xl);
  padding: 48px;
  box-shadow: var(--shadow-xl);
  border: 1px solid rgba(28,79,145,0.12);
  display: flex;
  gap: 48px;
  align-items: center;
  position: relative;
  overflow: hidden;
}

.lpa-principal-card::before {
  content: '';
  position: absolute;
  inset: -90px auto auto -90px;
  width: 240px;
  height: 240px;
  border-radius: 50%;
  background: rgba(28,79,145,0.1);
}

.lpa-principal-card::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  width: 34%;
  height: 100%;
  background-image: radial-gradient(rgba(28,79,145,0.13) 1px, transparent 1px);
  background-size: 18px 18px;
  opacity: 0.42;
}

.lpa-principal-card > * {
  position: relative;
  z-index: 1;
}

.lpa-principal-card .lpa-principal-photo {
  flex-shrink: 0;
  width: 300px;
}

.lpa-principal-card .lpa-principal-photo .lpa-staff-photo,
.lpa-principal-card .lpa-principal-photo .lpa-staff-photo-placeholder {
  aspect-ratio: 4 / 5;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  margin-bottom: 0;
}

.lpa-principal-content h2 {
  margin-bottom: 8px;
}

.lpa-principal-role {
  color: var(--navy);
  margin-bottom: 18px;
  font-size: 1.15rem;
}

.lpa-principal-content p {
  color: var(--gray);
}

.lpa-principal-content a {
  display: inline-flex;
  align-items: center;
  margin-top: 6px;
}

.lpa-faculty-promise-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
  margin: -8px 0 52px;
}

.lpa-faculty-promise {
  display: flex;
  gap: 16px;
  align-items: flex-start;
  padding: 22px;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(28,79,145,0.12);
  background: var(--white);
  box-shadow: 0 14px 30px rgba(15,47,94,0.06);
}

.lpa-faculty-promise i {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-sm);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  background: var(--navy);
  color: var(--white);
}

.lpa-faculty-promise h3 {
  font-size: 1rem;
  margin-bottom: 6px;
}

.lpa-faculty-promise p {
  margin: 0;
  color: var(--gray);
  font-size: 0.9rem;
  line-height: 1.55;
}

/* ---------- Admissions Steps ---------- */
.lpa-steps-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
  position: relative;
}

/* Connecting line between steps */
.lpa-steps-grid::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 80px;
  right: 80px;
  height: 2px;
  background: var(--light-gray);
  z-index: 0;
}

.lpa-step-card {
  background: var(--white);
  border-radius: var(--radius-xl);
  padding: 32px;
  box-shadow: var(--shadow-soft);
  border: 1px solid var(--light-gray);
  text-align: center;
  position: relative;
  z-index: 1;
  transition: transform 0.3s ease;
}

.lpa-step-card:hover {
  transform: translateY(-6px);
}

.lpa-step-number {
  width: 72px;
  height: 72px;
  background: var(--navy);
  color: var(--white);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: 1.8rem;
  font-weight: 700;
  margin: 0 auto 20px;
  box-shadow: var(--shadow-md);
  border: 4px solid var(--white);
}

.lpa-step-card h3 {
  font-size: 1.15rem;
  margin-bottom: 10px;
}

.lpa-step-card p {
  color: var(--gray);
  font-size: 0.9rem;
  margin-bottom: 16px;
}

.lpa-step-link {
  color: var(--navy);
  font-weight: 700;
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.lpa-step-link:hover { color: var(--navy-light); }

/* ---------- Timeline Calendar ---------- */
.lpa-calendar-legend {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px 18px;
  margin: -24px auto 28px;
  color: var(--gray);
  font-size: 0.86rem;
}

.lpa-calendar-legend span {
  display: inline-flex;
  align-items: center;
  gap: 7px;
}

.lpa-legend-dot {
  font-size: 0.55rem;
}

.lpa-legend-school { color: var(--navy); }
.lpa-legend-closed { color: var(--red-muted); }
.lpa-legend-early { color: var(--navy-light); }
.lpa-legend-tbd { color: var(--gray); }

.lpa-calendar-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px 60px;
}

.lpa-calendar-month h3 {
  font-size: 1.15rem;
  margin-bottom: 16px;
  padding-bottom: 8px;
  border-bottom: 2px solid var(--navy);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: var(--navy);
}

.lpa-calendar-month h3 i {
  color: var(--navy);
}

.lpa-timeline-item {
  position: relative;
  padding-left: 24px;
  padding-bottom: 16px;
  border-left: 2px solid var(--light-gray);
}

.lpa-timeline-item:last-child {
  padding-bottom: 0;
}

.lpa-timeline-item::before {
  content: '';
  position: absolute;
  left: -5px;
  top: 6px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--navy);
  border: 2px solid var(--white);
  box-shadow: 0 0 0 2px var(--navy);
}

.lpa-timeline-date {
  font-weight: 700;
  color: var(--navy);
  font-size: 0.88rem;
  display: block;
}

.lpa-timeline-desc {
  color: var(--gray);
  font-size: 0.85rem;
}

.lpa-timeline-desc.lpa-no-school {
  color: var(--red-muted);
  font-weight: 600;
}

.lpa-timeline-desc.lpa-early-dismiss {
  color: var(--navy);
  font-weight: 600;
}

.lpa-timeline-desc.lpa-tbd {
  color: var(--gray);
  font-weight: 600;
}

.lpa-calendar-wrapper {
  background: var(--white);
  border-radius: var(--radius-xl);
  padding: 40px 48px;
  border: 1px solid var(--light-gray);
  box-shadow: var(--shadow-soft);
}

    </style>
    <?php
}, 32);
