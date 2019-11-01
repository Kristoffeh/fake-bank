$(document).ready(function () {
  //called when key is pressed in textbox
  $("#quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers only").show().fadeOut(3500);
        
        $("#errmsgg").html("Numbers only").show().fadeOut(3500);
         
               return false;
    }
   });
});

$(document).ready(function(){
  $("#showhide-account").click(function(){
    $("#showhide-content").slideToggle();
  });
});