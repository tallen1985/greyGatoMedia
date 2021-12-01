var i = 0;
var txt = 'Grey Gato Media'; /* The text */
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("headerText").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();