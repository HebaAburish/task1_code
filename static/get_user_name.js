get_user_name();
function get_user_name(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/task1/ctrl_get_user_nam_from_session.php', true);

    xhr.onload = function(){
        if(this.status == 200){
            var userName =(this.responseText);
            document.getElementById('user').append(userName);
        }
    }

    xhr.send();
}
