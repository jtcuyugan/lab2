var i = 0;
var txt = "Welcome to Jam's Space";
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("lobbytitle").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}