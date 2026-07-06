<?php
/**
 * LifePoint Academy assets for the Code Snippets plugin.
 *
 * Single source of truth for the site JavaScript and the Font Awesome loader.
 * The contact form itself is handled by WPForms Pro (entries are stored in the
 * WordPress dashboard); this snippet carries no form logic.
 *
 * If Kadence or another plugin already loads Font Awesome 6, remove the
 * wp_enqueue_style() call below to avoid loading the icon font twice.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'lpa-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        [],
        '6.5.1'
    );
});

// Subresource integrity for the Font Awesome CDN stylesheet.
add_filter('style_loader_tag', function ($tag, $handle) {
    if ($handle === 'lpa-font-awesome' && strpos($tag, ' integrity=') === false) {
        $tag = str_replace(
            ' href=',
            ' integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" href=',
            $tag
        );
    }
    return $tag;
}, 10, 2);

// Content styled by .lpa-reveal stays at opacity 0 until the footer script
// runs; make it visible when JavaScript is unavailable.
add_action('wp_head', function () {
    echo '<noscript><style>.lpa-reveal { opacity: 1 !important; transform: none !important; }</style></noscript>' . "\n";
}, 35);

add_action('wp_footer', function () {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggle = document.querySelector('.lpa-menu-toggle');
      const navMenu = document.querySelector('.lpa-nav-menu');
      const dropdownParents = document.querySelectorAll('.lpa-has-dropdown');
      const mobileQuery = window.matchMedia('(max-width: 1100px)');

      const closeSubmenus = () => {
        dropdownParents.forEach(parent => {
          parent.classList.remove('lpa-submenu-open');
          const trigger = parent.querySelector(':scope > a');
          if (trigger) trigger.setAttribute('aria-expanded', 'false');
        });
      };

      if (toggle && navMenu) {
        toggle.setAttribute('aria-expanded', 'false');
        toggle.addEventListener('click', () => {
          const isOpen = navMenu.classList.toggle('lpa-active');
          toggle.classList.toggle('lpa-open', isOpen);
          toggle.setAttribute('aria-expanded', String(isOpen));
          if (!isOpen) closeSubmenus();
        });
      }

      dropdownParents.forEach(parent => {
        const trigger = parent.querySelector(':scope > a');
        if (!trigger) return;

        trigger.addEventListener('click', e => {
          if (!mobileQuery.matches) return;

          const isOpen = parent.classList.contains('lpa-submenu-open');
          if (!isOpen) {
            e.preventDefault();
            closeSubmenus();
            parent.classList.add('lpa-submenu-open');
            trigger.setAttribute('aria-expanded', 'true');
          }
        });
      });

      document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
          const href = link.getAttribute('href');
          if (!href || href.length < 2) return;
          const target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            if (navMenu) navMenu.classList.remove('lpa-active');
            if (toggle) {
              toggle.classList.remove('lpa-open');
              toggle.setAttribute('aria-expanded', 'false');
            }
            closeSubmenus();
          }
        });
      });

      const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -40px 0px' };
      if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('lpa-visible');
              observer.unobserve(entry.target);
            }
          });
        }, observerOptions);

        document.querySelectorAll('.lpa-reveal').forEach(el => observer.observe(el));
      } else {
        document.querySelectorAll('.lpa-reveal').forEach(el => el.classList.add('lpa-visible'));
      }

      const header = document.querySelector('.lpa-site-header');
      if (header) {
        window.addEventListener('scroll', () => {
          header.classList.toggle('lpa-scrolled', window.scrollY > 20);
        });
      }

    });
    </script>
    <?php
}, 20);
