<?php
/**
 * LifePoint Academy CSS 06 - WPForms Contact Form
 *
 * Styles the WPForms contact form to match the LifePoint design (labels, inputs, button, validation, confirmation).
 * Source: assets/css/style.css lines 2848-2959.
 * Enable after the JavaScript/Font Awesome asset snippet. Keep CSS snippets active in numeric order.
 */
add_action('wp_head', function () {
    ?>
    <style id="lpa-css-06-wpforms">
/* ---------- WPForms (Contact Form) ---------- */
.lpa-contact-form-card .wpforms-container {
  margin: 0;
}

.lpa-contact-form-card .wpforms-form .wpforms-field {
  padding: 0;
  margin-bottom: 20px;
}

.lpa-contact-form-card .wpforms-form .wpforms-field-label {
  display: block;
  font-weight: 600;
  margin-bottom: 6px;
  font-size: 0.9rem;
  color: var(--navy);
}

.lpa-contact-form-card .wpforms-form .wpforms-field-sublabel {
  font-size: 0.8rem;
  color: var(--gray);
}

.lpa-contact-form-card .wpforms-form .wpforms-required-label {
  color: var(--red-muted);
}

.lpa-contact-form-card .wpforms-form input[type="text"],
.lpa-contact-form-card .wpforms-form input[type="email"],
.lpa-contact-form-card .wpforms-form input[type="tel"],
.lpa-contact-form-card .wpforms-form select,
.lpa-contact-form-card .wpforms-form textarea {
  width: 100%;
  max-width: 100%;
  height: auto;
  padding: 12px 16px;
  border: 2px solid var(--light-gray);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: 0.95rem;
  transition: var(--transition);
  background: var(--off-white);
}

.lpa-contact-form-card .wpforms-form input[type="text"]:focus,
.lpa-contact-form-card .wpforms-form input[type="email"]:focus,
.lpa-contact-form-card .wpforms-form input[type="tel"]:focus,
.lpa-contact-form-card .wpforms-form select:focus,
.lpa-contact-form-card .wpforms-form textarea:focus {
  outline: none;
  border-color: var(--navy);
  box-shadow: 0 0 0 3px rgba(77,105,177,0.15);
  background: var(--white);
}

.lpa-contact-form-card .wpforms-form textarea {
  resize: vertical;
  min-height: 140px;
}

.lpa-contact-form-card .wpforms-form input.wpforms-error,
.lpa-contact-form-card .wpforms-form select.wpforms-error,
.lpa-contact-form-card .wpforms-form textarea.wpforms-error {
  border-color: var(--red-muted);
}

.lpa-contact-form-card .wpforms-form label.wpforms-error,
.lpa-contact-form-card .wpforms-form em.wpforms-error {
  display: block;
  margin-top: 6px;
  font-size: 0.85rem;
  font-weight: 500;
  font-style: normal;
  color: var(--red-muted);
}

.lpa-contact-form-card .wpforms-form button[type="submit"] {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  width: 100%;
  padding: 14px 32px !important;
  font-family: var(--font-body) !important;
  font-size: 0.95rem !important;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: var(--white) !important;
  background: var(--navy) !important;
  border: 2px solid var(--navy) !important;
  border-radius: 50px !important;
  cursor: pointer;
  transition: var(--transition);
}

.lpa-contact-form-card .wpforms-form button[type="submit"]:hover {
  background: var(--navy-light) !important;
  border-color: var(--navy-light) !important;
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.lpa-contact-form-card .wpforms-confirmation-container-full {
  background: #EFF6FF;
  border: none;
  border-left: 4px solid var(--blue-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: 20px 24px;
  color: var(--navy);
  font-weight: 500;
}
    </style>
    <?php
}, 35);
