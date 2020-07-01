$(document).ready(function(){

  $('.switch-tologin-modal').on('click',function(){
    $('#register-modal').modal('hide');
    $('#login-modal').modal('show');
  })
  
  
  $('.switch-toregister-modal').on('click',function(){
    $('#login-modal').modal('hide');
    $('#register-modal').modal('show');
  });

});


