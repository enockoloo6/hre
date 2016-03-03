$(document).ready(function(){
    $("#delete").click(function(){
        if (!confirm("Do you want to delete")){
            return false;
        }
    });
});

$(document).ready(function(){
    $("#update").click(function(){
        if (!confirm("Do you want to update")){
            return false;
        }
    });
});

$(document).ready(function(){
    $("#submit").click(function(){
        if (!confirm("Do you want to submit details?")){
            return false;
        }
    });
});

/* *****************validate the phone no********************** */
$(document).ready(function() {
    $('#txtPhone').blur(function(e) {
        if (validatePhone('txtPhone')) {
            $('#spnPhoneStatus').html('Valid');
            $('#spnPhoneStatus').css('color', 'green');
        }
        else {
            $('#spnPhoneStatus').html('Invalid phone number use....XXX XXX XXXX');
            $('#spnPhoneStatus').css('color', 'red');
        }
    });
});

function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}
/* *****************end validate phone no********************** */

/* *****************validate the Date  ********************* */
$(document).ready(function() {
    $('#txtDate').blur(function(e) {

        if (validateDate('txtDate')) {
            //alert("correct date")
           }
        else {
            alert("Please enter valid Expected date of arrival ")
        }
    });
});

function validateDate(txtDate) {
    var a = document.getElementById(txtDate).value;
    var today = new Date();
    var year =today.getFullYear();
    var month=today.getMonth();
    var day=today.getDate();
    var today2=new Date(year,month,day);

   a = a.split("-")
    var time=new Date(a[0],a[1]-1,a[2]);

   // alert(today2);
    //alert(time);


    if (time.getTime()> today2.getTime()) {
        return true;
    }
    else {
        return false;
    }
}
/* *****************end validate Date ********************** */

/******change ids on button click*******/

function applyAttributes(){
    // document.getElementById("e1").setAttribute("align","center");
    document.getElementById("rate1").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate3").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");
    // document.getElementById("e3").setAttribute("title","Navigate to my site");
}
window.onload = applyAttributes;
function applyAtt(target,att,attVal){
    document.getElementById(target).setAttribute(att,attVal);
}
function removeAtt(target,att){
    document.getElementById(target).removeAttribute(att);
}

function ratefive(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate3").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-warning  dim ");

    document.getElementById("rate5").removeAttribute("class");
    document.getElementById("rate5").setAttribute("class","btn btn-warning  dim ");

    
    document.getElementById("ratingvalue").setAttribute("value","5");

}

function ratefour(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate3").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");
    
    document.getElementById("ratingvalue").setAttribute("value","4");

}

function ratethree(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate3").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","3");

}

function ratetwo(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");    
    document.getElementById("rate3").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","2");

}

function rateone(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-default  dim ");    
    document.getElementById("rate3").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","1");

}

function removerating(){

    document.getElementById("rate1").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-default  dim ");    
    document.getElementById("rate3").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","");

}
/**************************************/

/***************validate the rating************/


  $("#doRating").submit(function(){
         if ($('#ratingvalue').val() == "" || $('#ratingvalue').val() == NULL) {
             alert('please do rating first')
             return false;
         }
         else {
             alert('you succesfully rated the house')
             return true;
         }
  }); 

    
