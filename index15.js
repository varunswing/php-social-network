function validate() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var userid = document.getElementById("userid").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var a,b,c,d,e,f;
    a = firstname.match(/^[a-zA-Z]+$/)?true:false;
    b = lastname.match(/^[a-zA-Z]+$/)?true:false;
    c = email.match(/^[a-z]+$/)?true:false;
    d = userid.match(/^[\w|\d]+$/)?true:false;
    e = password.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,}$/)?true:false;
    f = cpassword===password?true:false;
    if(a&&b&&c&&d&&e&&f)
        window.location="success.html";
    else
        window.location="failure.html";
}