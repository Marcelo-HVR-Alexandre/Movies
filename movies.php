<?php
$apiKey = "a4426f7c92fa57ad8330310a701bc3cc";
$url = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey";

$response = file_get_contents($url);
$data = json_decode($response, true);
$movies = $data['results'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Filmes Populares</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #f0f0f0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    ul {
      list-style: none;
      padding: 0;
      max-width: 600px;
      margin: 0 auto;
    }

    li {
      background: white;
      margin: 10px 0;
      padding: 15px;
      border-left: 5px solid #2196F3;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <h1>Filmes Populares</h1>
  <ul>
    <?php foreach ($movies as $movie): ?>
      <li><?php echo htmlspecialchars($movie['title']); ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
