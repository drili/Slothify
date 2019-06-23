$(document).ready(function() {
      $("#hideLogin").click(function() {
            $("#loginForm").hide();
            $("#registerForm").show();
      });

      $("#hideRegister").click(function() {
            $("#loginForm").show();
            $("#registerForm").hide();
      });

      $("#hideTermsAndPrivacy").click(function() {
            var loginText = document.getElementById("loginText");
            loginText.innerHTML = "<h1>Terms and Service</h1>" +
                  "<h2>Our Terms and Service policy.</h2>" +
                  "<ul>" +
                        "<li id='loginTextBG'>Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </li>" +
                        "<li id='loginTextBG'>L sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </li>" +
                        "<li id='loginTextBG'>Loritur adipisicing elit, sed do eiusmod tempor incididunt </li>" +
                  "</ul>";
      });
});

console.log("Hello");
