
// var myBtn = document.querySelectorAll('input[type=radio][name = selctedRow]');

// function changedeventStatus (event){

// }
$(document).ready(function(){
  
    $('input[type=radio][name=selctedRow]').change(function() {
        if (this.value == 1) {
            alert("Select Male");
        }else if (this.value == 2) {
            alert("Select Female");
        }
    });

});