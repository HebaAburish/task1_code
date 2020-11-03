
$(document).ready(function(){

    getList();
});
function getList() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/task1/ctrl_list_all_tickets.php', true);
    xhr.onload = function () {
        if (this.status == 200) {
            myObj = JSON.parse(this.responseText);

            for (i in myObj) {

                var li = document.createElement("li");

                var t = document.createTextNode("ticket"+ myObj[i].id);
                var b = document.createElement("button");
                var b1 = document.createElement("a");

                b.setAttribute("type","button");
                b.setAttribute("class","btn btn-light");
                b.innerText="details";
                b.id=i;

                b1.href = '/task1/ctrl_delete_ticket.php?ticket_id='+myObj[i].id;
                b1.className = "btn btn-light";
                b1.innerText = "delete";

                li.appendChild(t);
                document.getElementById("my-list").appendChild(li);
                li.append(": ")
                li.appendChild(b);
                li.append(": ")
                li.appendChild(b1);
                li.append();

               $("#"+i).click(function () {

                   $("#id").val(myObj[this.id].id);
                   $("#userName").val(myObj[this.id].userName);
                   $("#firstName").val(myObj[this.id].firstName);
                   $("#lastName").val(myObj[this.id].lastName);
                   $("#email").val(myObj[this.id].email);
                   $("#phone").val(myObj[this.id].phoneNumber);
                   $("#description").val(myObj[this.id].description);
                   $("#issue").val(myObj[this.id].issueSummary);
                   $("#assignrd_emp").val(myObj[this.id].assigned_emlpoyee);
                   $("#exampleModal").modal();
                });
            }


        }





    }
    xhr.send();
}

