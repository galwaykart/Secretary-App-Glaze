 $(document).ready(function () {
                var city = "Delhi";
                var searchtext = "select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text='" + city + "') and u='c'"
                //change city variable dynamically as required
                $.getJSON("https://query.yahooapis.com/v1/public/yql?q=" + searchtext + "&format=json").done(function (data) {
                    console.log(data);
                    var valuess = data.query.results.channel.item.condition.temp;
                    valuess = parseInt(valuess) + 2;
                    $('#temprature').html(valuess + " &#8451;");
                    if (valuess < 45 && valuess > 25)
                    {
                        $('#cl-weth object').remove();
                       $('#cl-weth').append('<object type="image/svg+xml" data="img/cloudy-day-3.svg" class="icon"></object>');

                    }
                    if (valuess < 25 && valuess > 15) {
                       $('#cl-weth').append('<object type="image/svg+xml" data="img/day.svg" class="icon"></object>');

                    }
                    if (valuess < 15 && valuess > 10) {
                        $('#cl-weth').append('<object type="image/svg+xml" data="img/weather.svg" class="icon"></object>');

                    }
                    if (valuess < 15 && valuess > 0) {
                        $('#cl-weth').append('<object type="image/svg+xml" data="img/snowy-3.svg" class="icon"></object>');

                    }
                });
                


            });