document.addEventListener('DOMContentLoaded', () => {
    const duration = 2000; // durasi animasi (ms)
  
    document.querySelectorAll('.number').forEach(el => {
      const target = +el.getAttribute('data-target');
      let startTime = null;
  
      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = timestamp - startTime;
        const value = Math.min(
          Math.floor((progress / duration) * target),
          target
        );
        el.textContent = value;
        if (progress < duration) {
          requestAnimationFrame(step);
        } else {
          el.textContent = target;
        }
      }
  
      requestAnimationFrame(step);
    });
  });
  