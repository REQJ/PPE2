$(document).ready(function () {
   $(".accordionContent").hide();
   
   $(".accordionButton").click(function (e) {
       $(".accordionButton.on").removeClass("on");
       $(".accordionContent:not(:hidden)").slideUp({
           speed: 300
       });
       if ($(this).next().is(":hidden") === true) {
           $(this).addClass("on").next().delay(400).slideDown();
       }
   });
})