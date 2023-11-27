function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function acceptPrivacyPolicy() {
    setCookie("privacyAccepted", "true", 365); 
    
    var privacyMessage = document.getElementById("privacyMessage");
    privacyMessage.innerText = "You have accepted our cookie preference.";
    privacyMessage.style.color = "#FF0000"; 
    privacyMessage.style.fontWeight = "bold"; 
    privacyMessage.style.fontStyle = "italic"; 
    privacyMessage.style.textShadow = "3px 3px 5px rgba(255, 0, 0, 0.5)"; 
}