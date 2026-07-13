/* ─── Tigremed Pharma — main.js ─── */

/* ── 1. Hamburger / Mobile nav ── */
(function () {
  var btn = document.getElementById('hamburger');
  var nav = document.getElementById('mobile-nav');
  if (!btn || !nav) return;

  btn.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('open');
    btn.classList.toggle('open', isOpen);
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    nav.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
  });

  /* Close mobile nav when a link inside it is clicked */
  nav.addEventListener('click', function (e) {
    if (e.target.classList.contains('mobile-link')) {
      nav.classList.remove('open');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
      nav.setAttribute('aria-hidden', 'true');
    }
  });
})();

/* ── 2. Footer year ── */
(function () {
  var el = document.getElementById('footer-year');
  if (el) el.textContent = new Date().getFullYear();
})();

/* ── 3. Scroll-reveal ── */
(function () {
  var items = document.querySelectorAll('.reveal');
  if (!items.length) return;

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  items.forEach(function (el) { io.observe(el); });
})();
