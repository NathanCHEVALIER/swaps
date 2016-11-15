(function($) {
    $.fn.relativeDate = function()
    {
        this.each(function() {
            var now = new Date();
            var date = $(".date_post").attr('datetime');
            var year = "" + now.getFullYear();
            var month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
            var day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
            var hour = "" + now.getHours(); if (hour.length == 1) { hour = "0" + hour; }
            var minute = "" + now.getMinutes(); if (minute.length == 1) { minute = "0" + minute; }
            var second = "" + now.getSeconds(); if (second.length == 1) { second = "0" + second; }

            var elapsedyear = year-date.substring(0, 4);;
            var elapsedmonth = month-date.substring(5, 7);;
            var elapsedday = day-date.substring(8, 10);;
            var elapsedhour = hour-date.substring(11, 13);;
            var elapsedminute = minute-date.substring(14, 16);
            var elapsedsecond = second-date.substring(17, 19);
            

            if(elapsedyear != 0)
            {
                if(elapsedyear == 1)
                {
                    var relative = 'Il y a un an';
                }
                else
                {
                    var relative = 'Il y a ' + elapsedyear + ' ans';
                }
            }
            else if(elapsedmonth != 0)
            {
                if(elapsedmonth == 1)
                {
                    var relative = 'Il y a un mois';
                }
                else
                {
                    var relative = 'Il y a ' + elapsedmonth + ' mois';
                }
            }
            else if(elapsedday != 0)
            {
                if(elapsedday == 1)
                {
                    var relative = 'Il y a un jour';
                }
                else
                {
                    var relative = 'Il y a ' + elapsedday + ' jours';
                }
            }
            else if(elapsedhour != 0)
            {
                if(elapsedhour == 1)
                {
                    var relative = 'Il y a une heure';
                }
                else
                {
                    var relative = 'Il y a ' + elapsedhour + ' heures';
                }
            }
            else if(elapsedminute != 0)
            {
                if(elapsedminute == 1)
                {
                    var relative = 'Il y a une minute';
                }
                else
                {
                    var relative = 'Il y a ' + elapsedminute + ' minutes';
                }
            }
            else if(elapsedsecond != 0)
            {
                if(elapsedsecond == 1)
                {
                    var relative = 'Il y a moins d\'une seconde';
                }
                else
                {
                    var relative = 'Il y a ' + elapsedsecond + 'secondes';
                }
            }

            $(this).text(relative);
        });
        return this;
    };
})(jQuery);
