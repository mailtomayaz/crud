/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('#appform').submit(function(e){
       // alert('i am submitting');
          e.preventDefault();
          //start validation of fields
          var username = $('#username').val(); 
          var useremail = $('#useremail').val();
          var userlocation = $('#userlocation').val();
          var userphone = $('#userphone').val();
          var userFileUpload = $('#userFileUpload').val();
             //  var username = $('#username').val();
          var validname = true;
          var validemail = true;
          var validlocation = true;
          var validphone = true;
          var validfile = true;
          
         var arrError = [];
          
          if(username == ''){
              //alert('Please enter name');
              arrError.push('Please enter name');
          }
          if(useremail == ''){
              alert('Please enter email');
              arrError.push('Please enter Email');
          }
           if(userlocation == ''){
              arrError.push('Please enter Location');
          }
           if(userphone == ''){
              arrError.push('Please enter Phone');
          }
          if(userFileUpload == ''){
              arrError.push('Please Upload File');
          }
          if(!validateEmail(useremail)){
              arrError.push('Please enter valid email');
          }
          //submit form if validation success
          var isError = arrError.length;
         // console.log(isError);
         // console.log(arrError);
          if(arrError.length == 0){
             $('#appform')[0].submit(); 
           // alert('submit');
          }else{
           
              for (var i = 0; i < arrError.length; i++) {
                        $(".error").append('<span>' + arrError[i] + '</span><br>');
            }
          }
          
          //email validatioinle
          function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
};
          
    })
});
