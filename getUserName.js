getUserName();
function getUserName(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getUserFromsession.php', true);

    xhr.onload = function(){
        if(this.status == 200){
            var userName =(this.responseText);
            document.getElementById('user').append(userName);
        }
    }

    xhr.send();
}
