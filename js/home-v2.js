(function () {
  document.documentElement.classList.add('js');

  const els = document.querySelectorAll('.fade-up');
  if (!els.length) return;

  if (!('IntersectionObserver' in window)) {
    els.forEach(el => el.classList.add('is-in'));
    return;
  }

  const obs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('is-in');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.15 });

  els.forEach(el => obs.observe(el));
})();
