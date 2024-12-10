function sendMail(){
    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value,
    }

    emailjs.send("service_8bc0xhj", "template_v936s7n", parms).then(function(response) {
        alert("Email sent!");
    })
    
}