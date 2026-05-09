function loadStudents(){

    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){

            document.getElementById("studentData").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET","fetch.php",true);

    xhttp.send();
}

loadStudents();