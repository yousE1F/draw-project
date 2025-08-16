var countDownDate = new Date("Aug 10, 2025 15:37:25").getTime();


function updateTimer() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.getElementById("demo").innerHTML =
    days + "يوم " + hours + "ساعة " + minutes + "دقيقة " + seconds + "ثانية ";


  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "انتهى السحب";
    winner.style.display = "block";
  }
}


updateTimer();

var x = setInterval(updateTimer, 1000);
