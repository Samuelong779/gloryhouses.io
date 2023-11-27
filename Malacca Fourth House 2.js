document.getElementById("location-link").addEventListener("click", function () {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            alert("Your location: Latitude " + latitude + ", Longitude " + longitude);
        }, function (error) {
            alert("Error getting location: " + error.message);
        });
    } else {
        alert("Geolocation is not supported in your browser.");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const userImage = document.getElementById("user-image");

    userImage.addEventListener("click", function() {
        const input = document.createElement("input");
        input.type = "file";
        input.accept = "image/*";
        input.onchange = function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    userImage.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        };
        input.click();
    });

    const stars = document.querySelectorAll(".star");
    stars.forEach((star, index) => {
        star.addEventListener("click", () => {
            for (let i = 0; i < stars.length; i++) {
                stars[i].classList.remove("active");
            }
            for (let i = 0; i <= index; i++) {
                stars[i].classList.add("active");
            }
        });
    });
});

const userIcon = document.querySelector(".bi-person-circle");
const imageInput = document.getElementById("image-input");

userIcon.addEventListener("click", function () {
    imageInput.click();
});

imageInput.addEventListener("change", function () {
    const selectedFile = imageInput.files[0];
    if (selectedFile) {
        const profileImage = document.querySelector(".bi-person-circle");
        const imageURL = URL.createObjectURL(selectedFile);
        profileImage.setAttribute("xlink:href", imageURL); 
    }
});