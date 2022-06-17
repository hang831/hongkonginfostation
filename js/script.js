
  

$(document).ready(function ($) {

let weather = {
    apiKey: "114a2c3dbe48590b170eb28ac95dbc3c",
    fetchWeather: function (city) {
      fetch(
        "https://api.openweathermap.org/data/2.5/weather?q=" +
          city +
          "&units=metric&appid=" +
          this.apiKey
      )
        .then((response) => {
          if (!response.ok) {
            alert("No weather found.");
            throw new Error("No weather found.");
          }
          return response.json();
        })
        .then((data) => this.displayWeather(data));
    },
    displayWeather: function (data) {
      const { name } = data;
      const { icon, description } = data.weather[0];
      const { temp, humidity } = data.main;
      const { speed } = data.wind;
      document.querySelector(".city").innerText = "Today Weather in " + name;
      document.querySelector(".icon").src =
        "https://openweathermap.org/img/wn/" + icon + ".png";
      document.querySelector(".description").innerText = description;
      document.querySelector(".temp").innerText = temp + "°C";
      document.querySelector(".humidity").innerText =
        "Humidity: " + humidity + "%";
      document.querySelector(".wind").innerText =
        "Wind speed: " + speed + " km/h";
      document.querySelector(".weather").classList.remove("loading");
      document.body.style.backgroundImage =
        "url('https://source.unsplash.com/2000x1200/?" + name + "')";
    },
  };

  weather.fetchWeather("hongkong");
});

//https://stackoverflow.com/questions/38871753/uncaught-typeerror-a-indexof-is-not-a-function-error-when-opening-new-foundat
//http://jsfiddle.net/harshdand/593Lqqnm/2/
$(document).ready(function ($) {
  $(window).on('load',(function () {
  setTimeout(function(){
      $('#preloader').fadeOut('slow', function () {
      });
      document.querySelector(".hide").style.display="block";  
  },1500); // set the time here
  }));  
  });

