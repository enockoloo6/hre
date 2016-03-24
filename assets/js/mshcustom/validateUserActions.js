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


function More_options_addition_to_house_search(){

    document.getElementById("more_information").removeAttribute("class");
}
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
    //document.getElementById("house-id1").setAttribute("value",$('#house-id2').val());


}

function ratefour(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate3").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");
    
    document.getElementById("ratingvalue").setAttribute("value","4");
    //document.getElementById("house-id1").setAttribute("value",$('#house-id2').val());


}

function ratethree(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate3").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","3");
    //var ass = document.getElementById("house-id1").removeAttribute("value");
    
    //document.getElementById("house-id1").setAttribute("value",document.getElementById("house-id2"));
  


}

function ratetwo(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-warning  dim ");    
    document.getElementById("rate3").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","2");
    //document.getElementById("house-id1").setAttribute("value",$('#house-id2').val());

}

function rateone(){
    document.getElementById("rate1").setAttribute("class","btn btn-warning  dim ");
    document.getElementById("rate2").setAttribute("class","btn btn-default  dim ");    
    document.getElementById("rate3").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate4").setAttribute("class","btn btn-default  dim ");
    document.getElementById("rate5").setAttribute("class","btn btn-default  dim ");

    document.getElementById("ratingvalue").setAttribute("value","1");
    // document.getElementById("house-id1").setAttribute("value",$('#house-id2').val());


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


  $("#doRating").click(function(){    

         if ($('#ratingvalue').val() == "" || $('#ratingvalue').val() == NULL || $('#ratingvalue').val() == "0") {         
         //var theratingvalue = $('#ratingvalue').val();

             alert('please do rating first')
             //alert(theratingvalue)
             return false;
         }
         else{

              $.getJSON('http://localhost/xampp/hre/index.php/housesearch/house_locations', function(data) {
              $(data).each(function(key, value) {
                alert(value)
              });
          });


        }
    });

//hiding and showing a div in the housing recommendation view
 $(document).ready(function() {
    //$('#hiddenrating').hide(); 
    $('#showrater').click(function(){       
    //$('#hiddenrating').show();
    document.getElementById("hiddenrating").removeAttribute("class");

    });
});

//this validates the inputs for the forms
$(document).ready(function(){

    $("#form").validate({
        rules: {
            password: {
                required: true,
                minlength: 3
            },
            url: {
                required: true,
                url: true
            },
            number: {
                required: true,
                number: true
            },
            min: {
                required: true,
                minlength: 6
            },
            max: {
                required: true,
                maxlength: 4
            },

            price_range: {
                required: true,
                number: true,
                minlength: 3
            },

            email: {
                required: true,
                email: true,                
                minlength: 3
            },

            password: {
                required: true,                               
                minlength: 4
            },

            phone_number: {
                required: true, 
                number: true,                              
                minlength: 8

            },

            f_name: {
                required: true,
                minlength: 2
            }
        }
    });
});
    
