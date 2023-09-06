const link = document.querySelector('.back-link');
link.addEventListener('click', function(e) {
  e.preventDefault();
  const href = this.getAttribute('href');
  fade(href);
});

function fade(href) {
  const body = document.querySelector('body');
  body.classList.add('fade-out');
  setTimeout(function() {
    window.location.href = href;
  }, 500);
}

const body = document.querySelector('body');
setTimeout(function() {
  body.classList.remove('fade-in');
}, 500);