<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EventScope</title>
      <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <style>
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: transparent; /* Make icon background transparent */
        background-size: 100%, 100%;
      }
      .carousel-control-prev,
      .carousel-control-next {
        width: 50px;
        height: 50px;
        background-color: #ff5733; /* Set your desired color here */
        border-radius: 50%; /* Make the buttons circular */
        display: flex;
        align-items: center;
        justify-content: center;
        top: 50%; /* Center vertically */
        transform: translateY(-50%); /* Center vertically */
      }
      .carousel-control-prev:hover,
      .carousel-control-next:hover {
        background-color: #ff7733; /* Slightly darker color on hover */
      }
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        filter: invert(1); /* Make icons white */
      }
      .carousel-item {
        padding: 0 75px; /* Add padding to the left and right */
      }
      .card {
        margin: 0 25px; /* Add margin to the left and right of each card */
      }
    .image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* sesuaikan tinggi sesuai kebutuhan */
  }
  .custom-img {
    width: 50%;
    height: auto;
    margin: 10px;
    border-radius: 5px;
  }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">
          <img src="assets/icon_eventscope.png" alt="EventScope Logo" width="35%" height="35%" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="event.php">Buat Event</a>
            <button class="btn btn-primary me-2" type="button">
              <a href="login.php" class="text-decoration-none text-white" target="_blank"
                >Masuk</a
              >
            </button>
          </div>
        </div>
      </div>
    </nav>

    <h2>Upcoming Events</h2>
    <div class="container mt-5 p-3">
      <div
        id="carouselExampleControlsNoTouching"
        class="carousel slide"
        data-bs-touch="false"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner" id="card-container"> 
          <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "event_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Periksa koneksi
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Ambil data dari tabel events
            $sql = "SELECT id, nama, tanggalWaktu, harga, nama_gambar, organizer FROM events";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $active = true;
                while($row = $result->fetch_assoc()) {
                    echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">';
                    echo '<div class="card">';                    
                    echo '<div class="image-container">
        <img src="' . $row["nama_gambar"] . '" class="card-img-top custom-img" alt="' . $row["nama"] . '">
      </div>';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["nama"] . '</h5>';
                    echo '<p class="card-text">' . $row["harga"] . '</p>';
                    echo '<p class="card-text"><small class="text-muted">' . $row["tanggalWaktu"] . '</small></p>';
                    echo '<p class="card-text">' . $row["organizer"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $active = false;
                }
            } else {
                echo "0 results";
            }
            $conn->close();
          ?>
        </div>

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControlsNoTouching"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControlsNoTouching"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <footer>&copy; 2024 EventScope. All Rights Reserved.</footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
