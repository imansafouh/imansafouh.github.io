<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search term from GET request
$search_term = $_GET['search'];

// Search for products based on search term
if (!empty($search_term)) {
  $sql = "SELECT * FROM products WHERE description LIKE '%$search_term%'";
  $result = $conn->query($sql);

  // Display search results
  if ($result->num_rows > 0) {
      echo "<p class='p'>Search results for: " . $search_term . "</p>";
      while($row = $result->fetch_assoc()) {
        echo "<div class='sort'>";
        echo "<div class='products'>";
        echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "' style='width:65%'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p class='description'>" . $row['description'] . "</p>";
        echo "<p class='price'>" . $row['price'] . " EGP</p>";
        echo "<p><button>Add to Cart</button></p>";
        echo "</div>";
        echo "</div>";
      }
  } else {
      echo "<p class='p'>No results found for: " . $search_term . "</p>";
  }
}

// Close database connection
$conn->close();
?>

<?php
// If no search term, display all products
if (empty($search_term)) {
?>
  <p class="p">All available products</p>
  <div class="sort">
    <div class="products">
      <img src="imgs/panadol.png" alt="Panadol" style="width:65%">
      <h2>Panadol Extra</h2>
      <p class="description">Panadol extra</p>
      <p class="price">26 EGP</p>
      <p><button>Add to Cart</button></p>
    </div>
  </div>
  <div class="sort">
    <div class="products">
      <img src="imgs/comtrex.png" alt="comtrex" style="width:65%">
      <h2>Comtrex</h2>
      <p class="description">comtrex cold & flu</p>
      <p class="price">30 EGP</p>
      <p><button>Add to Cart</button></p>
    </div>
  </div>
  <div class="sort">
    <div class="products">
      <img src="imgs/vitaminb12.png" alt="vitamin b12" style="width:65%">
      <h2>Vitamin B12</h2>
      <p class="description">Vitamin b12 extra strength</p>
      <p class="price">15 EGP</p>
      <p><button>Add to Cart</button></p>
    </div>
  </div>
<?php
}
?>                                                                                                                                                                                              ------------------------------------------------