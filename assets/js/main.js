/* ============================================
   LIFEPOINT ACADEMY - Main JS
   v2 — Scroll reveal, glassmorphism header
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // Mobile menu toggle
  const toggle = document.querySelector('.menu-toggle');
  const navMenu = document.querySelector('.nav-menu');
  if (toggle && navMenu) {
    toggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      toggle.classList.toggle('open');
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (navMenu) navMenu.classList.remove('active');
      }
    });
  });

  // Scroll reveal animations
  const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -40px 0px' };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Sticky header glassmorphism effect
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  // Contact form handling (placeholder - WordPress will handle via plugin)
  const contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', e => {
      e.preventDefault();
      alert('Thank you for your message! We will get back to you soon.');
      contactForm.reset();
    });
  }

  // Newsletter form handling (placeholder)
  const newsletterForm = document.querySelector('.newsletter-form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', e => {
      e.preventDefault();
      alert('Thank you for subscribing!');
      newsletterForm.reset();
    });
  }

});
