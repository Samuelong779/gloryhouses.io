<?php
include 'connect.php';

$searchErr = '';
$propertyResults = '';

if (isset($_POST['search'])) {
  if (!empty($_POST['searchText'])) {
    $location = mysqli_real_escape_string($conn, $_POST["searchText"]);
    $query = "SELECT properties.*, (
      SELECT image_blob 
      FROM images 
      WHERE propertyId = properties.propertyId 
      ORDER BY id 
      LIMIT 1
  ) AS image_blob 
  FROM properties 
  WHERE properties.city LIKE '%$location%'";

    $result = mysqli_query($conn, $query);

    if ($result && $result->num_rows > 0) {
      $propertyResults .= "<div class='row'>";


      while ($row = $result->fetch_assoc()) {
        $propertyResults .= "<a href='property_details.php?propertyId=" . $row['propertyId'] . "' class='card-link'>";
        $propertyResults .= "<div class='card'>";
        $propertyResults .= "<a href='property_details.php?propertyId=" . $row['propertyId'] . "'>";

        if ($row['image_blob']) {
          $propertyResults .= "<img src='data:image/jpeg;base64," . base64_encode($row['image_blob']) . "' class='card-img-top' alt='Property Image' style='max-width: 200px; max-height: 200px;'>";
        } else {
          $propertyResults .= "<img src='placeholder_image.jpg' class='card-img-top' alt='No Image Available' style='max-width: 200px; max-height: 200px;'>";
        }

        $propertyResults .= "</a>";
        $propertyResults .= "<div class='card-body'>";
        $propertyResults .= "<div class='bed-info'>";
        $propertyResults .= "<p class='additional-info'>";
        $propertyResults .= "<span class='price'>RM" . $row['price'] . "</span><br><br>";

        $propertyResults .= "<span class='icon-with-margin'>" . $row['rooms'] . " <i class='fas fa-bed'></i></span>";
        $propertyResults .= "<span class='icon-with-margin'>" . $row['bathroom'] . " <i class='fas fa-bath'></i></span><br>";
        $propertyResults .= "<span class='dot'>  </span>";
        $propertyResults .= "<span>" . $row['sqft'] . " sqft</span>";
        $propertyResults .= "</p>";

        $propertyResults .= "</div>";
        $propertyResults .= "</div>";
        $propertyResults .= "</div>";
        $propertyResults .= "</a>";
      }



      $propertyResults .= "</div>"; 
    } else {
      $propertyResults = "No properties found.";
    }

    $conn->close();
  } else {
    $searchErr = "Please enter the information";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="result.css" />
  <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="register.php">Sell</a>
        </li>
      </ul>

      <a class="navbar-brand mx-auto" href="home.php">
        <img src="house.png" alt="Image Alt Text" /> Glory House
      </a>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Helps.php">Helps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="News.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container pt-4">
    <div class="row">
      <div class="col-6">
        <p class="dream-home-text">Discover Your Dream Home</p>
        <p class="welcome-text">
          Welcome to the ultimate resource for finding houses for sale in your desired location. Whether you're in
          search of a new home close to work, a family-friendly neighborhood, or a serene retreat away from the hustle
          and bustle, we've got you covered.
        </p>
      </div>
      <div class="col-6">
        <img src="images/image3.jpg" alt="Your Image" class="dream-home-image" />
      </div>
    </div>

    <br />

    <form action="" method="post" class="search-form">
        <div class="search-options">
            <input type="text" name="searchText" placeholder="Enter a city">
            <div class="search-options-dropdown">
                <a href="#" id="searchByCity">Search by City</a>
                <a href="#" id="searchByPrice">Search by Price</a>
            </div>
        </div>

        <div id="priceRangeOptions" style="display: none;">
            <label for="minPrice">Min Price:</label>
            <input type="number" name="minPrice" id="minPrice" placeholder="Min Price" min="0">

            <label for="maxPrice">Max Price:</label>
            <input type="number" name="maxPrice" id="maxPrice" placeholder="Max Price" min="0">
        </div>

        <button type="submit" name="search">Search</button>
    </form><br>
    <div class="container">
      <h3>Property Information</h3>

      <?php
      if (!empty($searchErr)) {
        echo "<div class='error'>$searchErr</div>";
      } else {
        echo $propertyResults;
      }
      ?>

    </div>
    <footer class="second-footer">
      <div class="container">
        <div class="row">
          <div class="col-12 text-end">
            <div class="line"></div>
            <p class="return-to-top">Return to Top</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-XXXXX"
      crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
        $("#priceDropdown").click(function () {
          $("#priceDropdown .bi-caret-down").toggleClass("up");
        });
      });

      $(document).ready(function () {
        $(".chevron-icon-left, .chevron-icon-right").click(function () {
          $(this).toggleClass("rotate");

          var inputField = $(this).closest("form").find("input");

          var currentValue = parseInt(inputField.val());

          if ($(this).hasClass("rotate")) {
            currentValue++;
          } else {
            if (currentValue > 0) {
              currentValue--;
            }
          }

          inputField.val(currentValue);
        });
      });

      $(document).ready(function () {
        $("#typeDropdown").click(function () {
          $("#typeDropdown .bi-caret-down").toggleClass("up");
        });
      });

      $(document).ready(function () {
        $("#moreDropdown").click(function () {
          $("#moreDropdown .bi-caret-down").toggleClass("up");
        });
      });

      const searchButton = document.getElementById("searchButton");

      searchButton.addEventListener("click", function () {
        searchButton.style.backgroundColor = "#E9FC9F"; 
      });

      document.addEventListener("DOMContentLoaded", function () {
        const loveIcons = document.querySelectorAll(".love-icon");

        loveIcons.forEach(function (icon) {
          icon.addEventListener("click", function () {
            icon.classList.toggle("heart-pink");
          });
        });
      });

      const paginationItems = document.querySelectorAll(".page-link");

      paginationItems.forEach((item) => {
        item.addEventListener("click", () => {
          paginationItems.forEach((item) => {
            item.parentElement.classList.remove("active");
          });

          item.parentElement.classList.add("active");
        });
      });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const togglePriceRangeButton = document.getElementById("togglePriceRange");
        const priceRangeOptions = document.getElementById("priceRangeOptions");

        togglePriceRangeButton.addEventListener("click", function () {
            if (priceRangeOptions.style.display === "none") {
                priceRangeOptions.style.display = "block";
            } else {
                priceRangeOptions.style.display = "none";
            }
        });
    });
</script>
</body>

</html>