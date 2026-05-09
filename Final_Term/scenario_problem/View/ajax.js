function addData() {
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let mark = document.getAnimations("mark");
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
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
    xhttp.send("name="+name + "&email=" + email +"&mark="+mark);
}