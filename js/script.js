
const articles = document.getElementsByTagName('article');
const navItems = document.getElementsByClassName('nav-link');
const contactLink = document.getElementById('contactLink');
const homeLink = document.getElementById('homeLink')
const servicesLink = document.getElementById('servicesLink');
const emailForm = document.getElementById('emailForm');

let i = 0;
const txt = 'Grey Gato Media'; /* The text */
const speed = 50;

for (nav of navItems){
  nav.addEventListener('click', (e) => {
    for (article of articles) {
      article.style.display = 'none';
    }
    if (e.target == contactLink) {
      document.getElementById('contactSection').style.display = 'block';
    }
    if (e.target == servicesLink) {
      document.getElementById('servicesSection').style.display = 'block';
    }
    if (e.target == homeLink) {
      for (article of articles) {
        article.style.display = 'block';
      }
    }
  })
}

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("headerText").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

emailForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const email = document.getElementById('emailInput').value.trim();

  console.log(email)
  fetch('/api/email', {
    method: 'POST',
    headers: {
      'Content-Type': 'text/plain',
    },
    body: email,
  })
});

typeWriter();