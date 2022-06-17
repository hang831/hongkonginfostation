
  

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


//hk gov data 8days after weather
let afterweather = {
    fetchafterWeather: function () {
      fetch(
        "https://data.weather.gov.hk/weatherAPI/opendata/weather.php?dataType=fnd&lang=tc"
      )
        .then((response) => {
          if (!response.ok) {
            alert("No weather found.");
            throw new Error("No weather found.");
          }
          return response.json();
        })
       // .then((data2) =>  console.log(data2));
       
        .then((data2) => this.displayafterWeather(data2));  
       
    },
    displayafterWeather: function (data2) {
      
      //data2.weatherForecast.forEach(element => console.log(element));
      //console.log(data2);
      const {generalSituation}  =data2;
     
      document.querySelector(".modal-body").innerText =  generalSituation;  
        for ( i = 0; i <=7; i++ ) {       
          weektemp= ".week"+[i];
          overtemptemp= ".overtemp"+[i]; 
          icontemp=".ForecastIcon"+[i];
          forecastWeathertemp="description"+[i];
          forecastDatetemp=".day"+[i];
       //console.log(forecastDatetemp);
      // console.log(data2.weatherForecast[i].ForecastIcon);
          const { week,forecastDate,ForecastIcon,forecastMintemp,forecastMaxtemp,forecastWeather } = data2.weatherForecast[i];
      // console.log(data2.weatherForecast[0].forecastDate);
      //console.log([i]);  
        
      // ForecastIcontemp= ".ForecastIcon"+[i];
      // var elements = document.querySelectorAll(".week0");

      console.log(weektemp);
      console.log(document.querySelector(weektemp));
      console.log(document.querySelector(".week0"));
      //console.log(overtemptemp);
      //console.log(icontemp);
          document.querySelector(weektemp).innerText =week;
          document.querySelector(forecastDatetemp).innerText =  forecastDate;
          document.querySelector(overtemptemp).innerText =  forecastMintemp.value+"°C - "+forecastMaxtemp.value+"°C";         
          document.querySelector(icontemp).src = "https://www.hko.gov.hk/images/HKOWxIconOutline/pic" + ForecastIcon + ".png";
          document.getElementById(forecastWeathertemp).title=forecastWeather;            
        }
      },
};

afterweather.fetchafterWeather();



  


//Date and time
setInterval(
  () => document.getElementById('date').innerText=(new Date().toLocaleTimeString()),
  1000
);

var today = new Date();

var options = {
	weekday: "long", //to display the full name of the day, you can use short to indicate an abbreviation of the day
  	day: "numeric",
  	month: "long", //to display the full name of the month
  	year: "numeric"
}
//indicate the language you want it in first then use the options object for your values
var sDay = today.toLocaleDateString("zh-HK", options);

$(document).ready(function ($) {
  $(window).on('load',(function () {

document.getElementById('time').innerText =  sDay;
  }));
})


//$("#myModal").modal();