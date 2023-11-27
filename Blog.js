function showSuccessMessage() {
    var successAlert = document.createElement("div");
    successAlert.style.fontFamily = "'Karma', sans-serif";
    successAlert.style.fontSize = "15px";
    successAlert.style.color = "#FFFFFF";
    successAlert.style.backgroundColor = "#333"; 
    successAlert.style.padding = "15px";
    successAlert.style.borderRadius = "8px";
    successAlert.style.position = "fixed";
    successAlert.style.top = "20px";
    successAlert.style.left = "50%";
    successAlert.style.transform = "translateX(-50%)";
    successAlert.innerText = "You have successfully added your comment.";

    successAlert.style.boxShadow = "0 0 10px rgba(255, 255, 255, 0.5)";

    document.body.appendChild(successAlert);

    setTimeout(function () {
        successAlert.remove();
    }, 3000);
}