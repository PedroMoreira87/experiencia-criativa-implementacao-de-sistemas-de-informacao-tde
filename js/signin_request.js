$(document).ready(function(){

    $("#signin-button").click(function(){

        hashPasswordSignin();

        // ajaxRequest(name of the form to be serialized, name of your php file)
        $.when(ajaxRequest("signin-form", "signin_request")).then(
            
            function(status){
                if(status == true){
                    checkUserStatus();
                }
                else{
                    alert("email ou senha incorretos")
                }
             
            }
          
        );

        return false;
    });


});

function hashPasswordSignin(){

    var sha256 = sjcl.hash.sha256.hash($("#signin-password").val());
    var sha256_hexa = sjcl.codec.hex.fromBits(sha256);
    $("#signin-hashed-password").val(sha256_hexa);

}

function checkUserStatus(){

    $.when(ajaxRequest(null, "user_status_checking")).then(
            
        function(status){

            if(status == "active"){

                window.location.href = "/mad-monkey/pages/menu/index.html"
        
            }
        
            if(status == "unactive"){
        
                window.location.href = "/mad-monkey/pages/signup_conclusion/index.html"
        
            }

        }
    
    );

}
