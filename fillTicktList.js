getList();
function getList() {


    var xhr = new XMLHttpRequest();


    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);

            for (i in myObj) {

                var y = document.createElement("li");

                var t = document.createTextNode("ticket"+ myObj[i].id);

                y.appendChild(t);

                document.getElementById("my-list").appendChild(y);
            }


        }
        ;


        xhr.open('GET', 'listAllUserTickets.php', false);
        xhr.send();

    }
}

