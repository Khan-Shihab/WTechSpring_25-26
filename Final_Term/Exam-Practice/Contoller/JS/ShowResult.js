function SubmitFormData() {
    let myForm = document.getElementById('studentForm'); 
    
    let formData = new FormData(myForm);

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("userresponse").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "../Contoller/viewController.php", true);
    
    xhttp.send(formData); 
}