const signInNav = document.querySelector('#sign-in-nav');
const registerNav = document.querySelector('#register-nav');
const signOutNav = document.querySelector('#sign-out-nav');

const isLoggedIn = window.localStorage.getItem('isLoggedIn');

if (isLoggedIn) {
  signInNav.style.display = 'none';
  registerNav.style.display = 'none';
} else {
  signOutNav.style.display = 'none';
}

function searchFunction() {
        var searchInput = document.getElementById("searchInput").value.toLowerCase();
        var destinationPage;

        switch (searchInput) {
            case "selangor":
                destinationPage = "Buyer.php";
                break;
            case "johor":
                destinationPage = "Buyer 2.php";
                break;
            case "penang":
                destinationPage = "Buyer 3.php";
                break;
            case "malacca":
                destinationPage = "Buyer 4.php";
                break;
            default:
                console.log("No match found for: " + searchInput);
                return;
        }

        window.location.href = destinationPage;
    }