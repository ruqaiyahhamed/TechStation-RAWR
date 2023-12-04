window.onload = function() {
  var photos = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg'];
  var currentIndex = 0;
  var currentPhoto = document.getElementById("currentPhoto");

  function changePhoto() {
    currentPhoto.src = photos[currentIndex];
    currentIndex = (currentIndex + 1) % photos.length;
  }

  setInterval(changePhoto, 3000);
};

document.addEventListener("DOMContentLoaded", function() {
  var bannerText = document.getElementById("bannerText");
  var currentDate = new Date();
  var dateString = currentDate.toDateString();
  var timeString = currentDate.toLocaleTimeString();

  bannerText.textContent = "Welcome to the TECH STATION website! Today is " + dateString + ", and the time is " + timeString;
});