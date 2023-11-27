function openImage(imageId) {
    const image = document.getElementById(imageId);
    const overlay = document.createElement('div');
    overlay.id = 'imageOverlay';
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
    overlay.style.display = 'flex';
    overlay.style.justifyContent = 'center';
    overlay.style.alignItems = 'center';

    const enlargedImage = document.createElement('img');
    enlargedImage.src = image.src;
    enlargedImage.style.maxWidth = '90%';
    enlargedImage.style.maxHeight = '90%';
    enlargedImage.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)';

    overlay.appendChild(enlargedImage);
    document.body.appendChild(overlay);

    overlay.addEventListener('click', () => {
        document.body.removeChild(overlay);
    });
}

document.getElementById('leftImage').addEventListener('click', () => openImage('leftImage'));
document.getElementById('topImage').addEventListener('click', () => openImage('topImage'));
document.getElementById('bottomImage').addEventListener('click', () => openImage('bottomImage'));

var button = document.getElementById("myButton");

button.addEventListener("click", function () {
    event.preventDefault();

    button.classList.add("active");

    var link = "MalaccaSecondHouse.php"; 

    window.open(link, "_blank");
});

const loveIcon = document.getElementById("love-icon");

let isPink = false;

loveIcon.addEventListener("click", function() {
    if (isPink) {
        loveIcon.style.fill = "#B0AFAF"; 
    } else {
        loveIcon.style.fill = "pink"; 
    }

    isPink = !isPink;
});

function toggleShareIconColor() {
    const shareIcon = document.getElementById("share-icon");

    const currentColor = shareIcon.getAttribute("fill");

    if (currentColor === "#B0AFAF") {
        shareIcon.setAttribute("fill", "#B0AFAF"); 
    } else {
        shareIcon.setAttribute("fill", "#B0AFAF"); 
    }
}

function sharePage() {
    alert("Share this page on social media");
}

const shareIcon = document.getElementById("share-icon");
shareIcon.addEventListener("click", function () {
    toggleShareIconColor();
    sharePage();
});