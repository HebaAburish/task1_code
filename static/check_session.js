check_session();
function  check_session(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ctrl_check_session.php', false);
    xhr.send();
    var isSessiomAvialable  =xhr.responseText;

    if(isSessiomAvialable ==='f') {
        window.location.href="/task1/login_view.html"

    }





}