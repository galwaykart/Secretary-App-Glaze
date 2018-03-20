 $(document).ready(function () {
                var city = "Delhi";
                var searchtext = "select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text='" + city + "') and u='c'"
                //change city variable dynamically as required
                $.getJSON("https://query.yahooapis.com/v1/public/yql?q=" + searchtext + "&format=json").done(function (data) {
                    console.log(data);
                    $('#temprature').html("Temperature in " + city + " is " + data.query.results.channel.item.condition.temp + " C");
                    if (data.query.results.channel.item.condition.temp < 45 && data.query.results.channel.item.condition.temp>25)
                    {
                        $('#cl-weth').append('<object type="image/svg+xml" data="img/cloudy-day-3.svg" class="icon"></object>');

                    }
                    if (data.query.results.channel.item.condition.temp < 25 && data.query.results.channel.item.condition.temp > 15) {
                        $('#cl-weth').append('<object type="image/svg+xml" data="img/day.svg" class="icon"></object>');

                    }
                    if (data.query.results.channel.item.condition.temp < 15 && data.query.results.channel.item.condition.temp > 10) {
                        $('#cl-weth').append('<object type="image/svg+xml" data="img/weather.svg" class="icon"></object>');

                    }
                    if (data.query.results.channel.item.condition.temp < 15 && data.query.results.channel.item.condition.temp > 0) {
                        $('#cl-weth').append('<object type="image/svg+xml" data="img/snowy-3.svg" class="icon"></object>');

                    }
                });
                


            });