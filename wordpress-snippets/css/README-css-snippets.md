# LifePoint Academy CSS Snippets

These files split `assets/css/style.css` into smaller WordPress Code Snippets.

Enable the snippets in this order:

1. `lpa-css-01-foundation-header.php`
2. `lpa-css-02-layout-home-student-life.php`
3. `lpa-css-03-testimonials-values-faculty-calendar.php`
4. `lpa-css-04-contact-footer-support.php`
5. `lpa-css-05-responsive.php`
6. `lpa-css-06-wpforms.php` (styles the WPForms contact form to match the site design)

When pasting a snippet into Code Snippets, strip the opening `<?php` line if the editor already provides the PHP context.

Also keep the JS/Font Awesome snippet active: `../lpa-fontawesome-and-js.php`.
It is the single source of truth for the site JavaScript — edit it there and paste
the updated snippet into Code Snippets.

After moving these into Code Snippets, remove the large LifePoint Academy CSS block from Appearance > Customize > Additional CSS. Keep Additional CSS only for tiny one-off overrides.

The local source of truth remains `assets/css/style.css`; regenerate these snippets after future CSS changes.
