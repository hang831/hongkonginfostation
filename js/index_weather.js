
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

      //console.log(weektemp);
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