const articles = document.getElementsByTagName("article");
const navItems = document.getElementsByClassName("nav-link");
const contactLink = document.getElementById("contactLink");
const homeLink = document.getElementById("homeLink");
const servicesLink = document.getElementById("servicesLink");
const emailForm = document.getElementById("emailForm");

let i = 0;
if (document.getElementById("headerText").classList.contains("guess")) {
  const txt = "Closest to the Pole!";
} else {
  const txt = "Grey Gato Media"; /* The text */
}

const speed = 50;

for (nav of navItems) {
  nav.addEventListener("click", (e) => {
    for (article of articles) {
      article.style.display = "none";
    }
    if (e.target == contactLink) {
      document.getElementById("contactSection").style.display = "block";
    }
    if (e.target == servicesLink) {
      document.getElementById("servicesSection").style.display = "block";
    }
    if (e.target == homeLink) {
      for (article of articles) {
        article.style.display = "block";
      }
    }
  });
}

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("headerText").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
