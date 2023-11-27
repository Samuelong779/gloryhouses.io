document.addEventListener("DOMContentLoaded", function() {
    const calendarIcon = document.getElementById("calendar-icon");
    const dateInput = document.getElementById("date");

    calendarIcon.addEventListener("click", function() {
        dateInput.focus();
    });

    dateInput.addEventListener("focus", function() {
        dateInput.type = "date";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const userIcon = document.getElementById("user-icon");
    const userImageInput = document.getElementById("user-image-input");

    userIcon.addEventListener("click", function() {
        userImageInput.click(); 
    });

    userImageInput.addEventListener("change", function() {
        const file = userImageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                userIcon.style.backgroundImage = `url(${e.target.result})`;
                userIcon.style.backgroundSize = "cover";
                userIcon.style.color = "transparent";
            };
            reader.readAsDataURL(file);
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const changePictureButton = document.getElementById("change-picture");
    const userImageInput = document.getElementById("user-image-input");

    changePictureButton.addEventListener("click", function(e) {
        e.preventDefault(); 

        userImageInput.click();
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const scrollUpButton = document.getElementById("scroll-up-button");

    scrollUpButton.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth" 
        });
    });
});