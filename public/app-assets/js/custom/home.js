//edgar
var map;

    /**
     * Create the map
     */
    var countryName = "";
    var countryID = "";
    var country = "country";
    var id = "id"; // var icon= "M21.25,8.375V28h6.5V8.375H21.25zM12.25,28h6.5V4.125h-6.5V28zM3.25,28h6.5V12.625h-6.5V28z";

    //edgar
// var map = AmCharts.makeChart("select-map", {
    map = AmCharts.makeChart("select-map", {
        /*
* this tells amCharts it's a map
*/
        "type": "map",
        // "developerMode":true,

        /**
         * create data provider object
         * map property is usually the same as the name of the map file.
         * getAreasFromMap indicates that amMap should read all the areas available
         * in the map data and treat them as they are included in your data provider.
         * in case you don't set it to true, all the areas except listed in data
         * provider will be treated as unlisted.
         */
        "dataProvider": {
            "map": "worldLow",
            "zoomLevel": 4.5,
            "zoomLongitude": -15.011465,
            "zoomLatitude": 12.606901,
            // "showAreasInList": true,

            //edgar
            // "areas": [{
            //   "id": "HT",
            //   "color": "#2d7d32"
            // }, {
            //   "id": "KE",
            //   "color": "#57ba5c"
            // }],
            //edgar
            "areas": [],
            //


            // images: [{
            //   "latitude": 19.0000000,
            //   "longitude": -72.4167000,
            //   // "svgPath": icon,
            //   "color": "#2d7d32",
            //   "scale": .5,
            //   // "descriptionWindowBottom":50,
            //   "label": "Haiti",
            //   "labelFontSize": 15,
            //   "labelRollOverColor": "black",
            //   "labelShiftY": 2,
            //   "zoomLevel": 15,
            //   "title": "Haiti"
            // }, {
            //   "latitude": 0.359235,
            //   "longitude": 37.6891931,
            //   "color": "#57ba5c",
            //   "scale": .5,
            //   "label": "Kenya",
            //   "labelFontSize": 15,
            //   // "descriptionWindowBottom":50,
            //   "labelRollOverColor": "black",
            //   "labelShiftY": 2,
            //   "zoomLevel": 15,
            //   "title": "Kenya"
            // }]
        },

        /**
         * create areas settings
         * autoZoom set to true means that the map will zoom-in when clicked on the area
         * selectedColor indicates color of the clicked area.
         */
        "areasSettings": {
            "autoZoom": true,
            "selectedColor": "#57ba5c",
            "selectable": true,
            "rollOverOutlineColor": "#57ba5c"
        },

        /**
         * let's say we want a small map to be displayed, so let's create it
         */
        "smallMap": {}
    }); /// Detect the click on a country and redirect

    // map.addListener("clickMapObject", function (event) {
    //     countryName = event.mapObject.title;
    //     countryID = event.mapObject.id;
    //     setCookie(country, countryName);
    //     setCookieID(id, countryID);
    //     location.href = "/platform/country/" + countryID;
    // }); //// set method for country name

    function setCookie(country, countryName) {
        // document.cookie = countryName;
        document.cookie = country + "=" + countryName;
    } //// get method for country name


    function getCookie(country) {
        var name = country + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');

        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];

            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }

            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }

        return "";
    } //// Detect saved cookies


    document.addEventListener('DOMContentLoaded', function () {
        var countrySelect = getCookie("country");
        var idSelect = getCookieID("id");

        console.log("Country: " + countrySelect);
        console.log("ID: " + idSelect);
    }); //// set method for country ID

    function setCookieID(id, countryID) {
        document.cookie = id + "=" + countryID;
    } //// get method for country ID


    function getCookieID(id) {
        var nameId = id + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');

        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];

            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }

            if (c.indexOf(nameId) == 0) {
                return c.substring(nameId.length, c.length);
            }
        }

        return "";
    }


$(document).ready(function(){
    $('.parallax').parallax();
});