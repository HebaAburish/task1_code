
$(document).ready(function(){

    getList();
});
function getList() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'listAllUserTickets.php', true);
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
                b.id="bn"+i;

                b1.href = "deleteTicket.php?ticket_id="+myObj[i].id;
                b1.className = "btn btn-light";
                b1.innerText = "delete";

                li.appendChild(t);
                document.getElementById("my-list").appendChild(li);
                li.append(": ")
                li.appendChild(b);
                li.append(": ")
                li.appendChild(b1);
                li.append();

               $("#bn" + i).click(function () {

                   var xhr1 = new XMLHttpRequest();
                   xhr1.open('GET', 'getTicket.php', true);

                   xhr1.onload = function () {
                       if (this.status == 200) {

                           Obj = JSON.parse(this.responseText);

                           $("#id").val(Obj.id);
                           $("#userName").val(Obj.userName);
                           $("#firstName").val(Obj.firstName);
                           $("#lastName").val(Obj.lastName);
                           $("#email").val(Obj.email);
                           $("#phone").val(Obj.phoneNumber);
                           $("#description").val(Obj.description);
                           $("#issue").val(Obj.issueSummary);
                           $("#assignrd_emp").val(Obj.assigned_emlpoyee);
                       }}
                       xhr1.send();
                    $("#exampleModal").modal();
                });

              /* document.getElementById('bn'+i).addEventListener("click", function() {
                    document.getElementById('exampleModal').style.display ="block";
                });*/
            }


        }





    }
    xhr.send();
}

