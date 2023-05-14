<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
</head>
<body class="bg-dark">

<header>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
                <?php
                    $imageCount = 10; 
                    $randomImages = array();

                    for ($i = 1; $i <= $imageCount; $i++) {
                        $randomImages[] = $i;
                    }
                    shuffle($randomImages);

                    $displayImages = array_slice($randomImages, 0, 3);

                    foreach ($displayImages as $index => $imageNumber) {
                        $imageSource = $imageNumber . '.jpg';
                        $isActive = ($index === 0) ? 'active' : ''; 

                        echo '
                        <div  class="carousel-item ' . $isActive . '">
                            <img style="height:50vh" src="' . $imageSource . '" class="d-block w-100" alt="">
                        </div>
                        ';
                    }
                ?>
          </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
              </button>
      </div>
</header>

        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
        <div class="container">   
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav w-100 d-flex justify-content-between">
                      <li class="nav-item col-lg-3 col-md-6">
                        <a class="nav-link border border-light rounded" href="?category=posao">Posao</a>
                      </li>
                      <li class="nav-item col-lg-3 col-md-6">
                        <a class="nav-link border border-light rounded" href="?category=zdravlje">Zdravlje</a>
                      </li>
                      <li class="nav-item col-lg-3 col-md-6">
                        <a class="nav-link border border-light rounded" href="?category=ljubav">Ljubav</a>
                      </li>
                      <li class="nav-item col-lg-3 col-md-6">
                        <a class="nav-link border border-light rounded" href="?category=motivacija">Motivacija</a>
                      </li>
                  </ul>
              </div>
        </div>
    </nav>

    <div class="container mt-4">
      <div class="card">
        <div class="card-body">


            <?php
                session_start();
                session_unset();

                if (!isset($_SESSION['allQuotes'])) {
                    $allQuotes = [];

                    $directory = __DIR__;
                    $files = glob($directory . '/*.txt');

                    foreach ($files as $file) {
                        $lines = file($file, FILE_IGNORE_NEW_LINES);
                        $allQuotes = array_merge($allQuotes, $lines);
                    }
                    $_SESSION['allQuotes'] = $allQuotes;
                } else {

                    $allQuotes = $_SESSION['allQuotes'];
                }

                if (!isset($_GET['category'])) {
                    $randomNumber = rand(0, count($allQuotes) / 2 - 1);
                    $quoteIndex = $randomNumber * 2; 
                    $quote = trim($allQuotes[$quoteIndex]);
                    $author = trim($allQuotes[$quoteIndex + 1]);

                    echo '<section class="quote-container text-center font-monospace">';
                    echo '<p class="quote fst-italic display-6">' . $quote . '</p>';
                    echo '<p class="author fw-bolder display-5">' . $author . '</p>';
                    echo '</section>';
                } else {
                    $category = $_GET['category'] ;
                    $filename = $category . '.txt';
                    $lines = file($filename, FILE_IGNORE_NEW_LINES);

                    $maxIndex = count($lines) / 2 - 1; 
                    $randomIndex = rand(0, $maxIndex); 
                    $quoteIndex = $randomIndex * 2; 
                    $quote = trim($lines[$quoteIndex]);
                    $author = trim($lines[$quoteIndex + 1]);

                    echo '<div class="quote-container text-center font-monospace">';
                    echo '<p class="quote fst-italic display-6">' . $quote . '</p>';
                    echo '<p class="author fw-bolder display-5">' . $author . '</p>';
                    echo '</div>';
                }
            ?>

        </div>   
      </div>
    </div>

<footer class="footer fixed-bottom  text-secondary">
        <div class="container text-center fw-bolder">
            <div class="row">
                <div class="col">
                    Trenutni datum i vreme: <?php echo date('d.m.Y H:i:s'); ?>
                </div>
            </div>
        </div>
</footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
            integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" 
            integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
            crossorigin="anonymous">
    </script>
</body>
</html>