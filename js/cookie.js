function createCookie(movieID,days) {


    var date = new Date();
    name = "order"
    var timeOfCreation = date.getDate()+"/"+(date.getMonth()+1)+
        "/"+date.getFullYear()+" "+date.getHoursTwoDigits()+":"+date.getMinutes();
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
       var tmpCookie = name+"-"+movieID+"="+movieID+"-"+
        timeOfCreation+expires+"; path=/";

        if (readCookie(tmpCookie) == null) {
                document.cookie = tmpCookie;
        }
        getNumberOfCookies();
    alert('Movie have been added to your Cart!');
        }

Date.prototype.getHoursTwoDigits = function()
{
    var retval = this.getHours();
    if (retval < 10)
    {
        return ("0" + retval.toString());
    }
    else
    {
        return retval.toString();
    }
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) {
            window.alert(c.substring(nameEQ.length,c.length));
            return c.substring(nameEQ.length,c.length);
            }
    }
    return null;
}

function eraseCookie(name) {

    var date = new Date();
    date.setTime(date.getTime()+(-1*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();

    document.cookie = name+"="+" "+ expires+"; path=/";
    getNumberOfCookies();
    location.reload();
}

function paidCookie(name,reload) {

    var date = new Date();
    date.setTime(date.getTime()+(-1*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();

    document.cookie = name+"="+" "+ expires+"; path=/";
    getNumberOfCookies();
    window.location.replace(reload);
}

function deleteAllCookies() {

    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        if (cookies[i].indexOf("order") > -1) {
            var cookie = cookies[i];
            var date = new Date();
            date.setTime(date.getTime() + (-1 * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
            document.cookie = cookie + "=" + " " + expires + "; path=/";
        }
    }
}

function getNumberOfCookies() {

    var cookies = document.cookie.split(";");

    var counter = 0;
    for(i = 0; i < cookies.length; i++) {
        if(cookies[i].indexOf("order") > -1) {
            counter += 1;
        }
    }

    var div = document.getElementById('counter');
    div.innerHTML = counter;

    return counter;
}

