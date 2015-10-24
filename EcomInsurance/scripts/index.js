//users variables
var fullname = document.getElementsById('fullname').value;
var email = document.getElementsById('email').value;
var phone = document.getElementsById('phone').value;
var password = document.getElementsById('password').value;

//company variables
var name = document.getElementsById('name').value;
var company = document.getElementsById('company').value;
var category = document.getElementsById('category').value;
var price = document.getElementsById('price').value;
var description = document.getElementsById('description').value;


/*routes
$(document).ready(function () {
    $("#register, #login").click(function (e) {
        var name = ($(event.target).attr('id') == 'register') ? 'Registration' : 'Login';
        return e.preventDefault();
    });
});*/

//urls
var urlpath = "http://localhost/localhost/kleva/Ekom/server";
var urlonline = "http://ecominsurance.com";

//ajax call to php    
$("#bt_login").click(function () {

    // creating a variable for email and password inputs
    var email = $('#email').val();
    var password = $('#password').val();

    // If input is left blank and you hit login, nothing happens
    if (email == "" && password == "") {
    }
    else {
        $.ajax({
            type: "POST",
            url: urlpath + "/users/login.php",
            data: {email: email, password: password},
            success: function (response) {
                if (response.success === 1) {
                    //window.open("","");
                    console.log("success");
                }
                else {
                    console.log(response.error);
                }
            },
            error: function (error) {
                console.log(error);
            }
        });

        return false;

    }
});

function login() {

}
function signup() {

}
function searchquotes() {


}
function getquotes() {

}
function getpolicies() {

}
function getclaims() {

}
function getpremiums() {

}