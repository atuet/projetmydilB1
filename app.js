$(".button-collapse").sideNav();
$(".dropdown-button").dropdown();
$(document).ready(function(){
    $('.materialboxed').materialbox();
  });

$(document).ready(function() {
      $('select').material_select();
    });


$(document).ready(function(){
            $(".modal").modal();
        });


$('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
          });
