checkSession();
function  checkSession(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'CheckForSession.php', false);
    xhr.send();
    var isSessiomAvialable  =xhr.responseText;

    if(isSessiomAvialable ==='f') {
        window.location.href="login.html"

    }





}