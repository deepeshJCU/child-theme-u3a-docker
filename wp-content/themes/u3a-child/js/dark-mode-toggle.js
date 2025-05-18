document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const icon = document.getElementById('darkIcon');
  
    function setIcon(isDark) {
      icon.textContent = isDark ? '☀️' : '🌙';
    }
  
    // Load saved theme
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      body.classList.add('dark-mode');
      setIcon(true);
    } else {
      setIcon(false);
    }
  
    // Toggle on click
    toggle.addEventListener('click', function () {
      const isDark = body.classList.toggle('dark-mode');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
      setIcon(isDark);
    });
  });
  