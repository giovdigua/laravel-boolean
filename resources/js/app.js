require('./bootstrap');
var $ = require("jquery");
require("popper.js");
require("bootstrap");

$(document).ready(function() {
    //This function give the active class at current item
    // Get current page URL
    
   $(".nav-item a").on("click" , function () {
       $(".nav-item a").removeClass("active");
       $(this).addClass("active");
   })

    $(function() {
        $("#textbtn").popover();
    });
});
