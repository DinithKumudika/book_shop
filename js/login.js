const username = $('#uname').val();
const password = $('#password').val();


//login button click
$('#loginBtn').click(
     function(){
          loginValidation(username, password);
     }
);

//input validation
function loginValidation(username, password, callback){
     
     if(username.length === 0){
          $("#errUname").text("username is required");
          return false;
     }

     if(password.length === 0){
          $("#errPwd").text("password is required");
          return false;
     }
}