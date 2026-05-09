function addData() {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let mark = document.getElementById("mark").value;

    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {

            let data = JSON.parse(this.responseText);

            if (data.error) {
                alert(data.error);
                return;
            }
            
            let row = "<tr>" +
                "<td>" + data.name + "</td>" +
                "<td>" + data.email + "</td>" +
                "<td>" + data.mark + "</td>" +
                "</tr>";

            document.getElementById("bookTable").innerHTML += row;
        }
    };

    xhttp.open("POST", "../Controller/viewController.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send(
        "name=" + encodeURIComponent(name) +
        "&email=" + encodeURIComponent(email) +
        "&mark=" + encodeURIComponent(mark)
    );
}