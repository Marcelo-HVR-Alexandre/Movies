<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Login - Movie</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0e0e0e;
    }
    .top-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: #1c1c1c;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      border-bottom: 2px solid #444;
    }
    .brand-name {
      color: #e0e0e0;
      font-weight: 700;
      font-size: 24px;
      text-shadow: 0 0 5px #00f0ff;
      letter-spacing: 1px;
    }
    .language-switcher .flag {
      height: 25px;
      margin-left: 10px;
      cursor: pointer;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .split-left {
      height: 100%;
      width: 50%;
      position: fixed;
      left: 0;
      top: 60px;
      background: url('Movie.webp') no-repeat center center;
      background-size: cover;
      border-right: 2px solid #444;
    }
    .split-right {
      margin-left: 50%;
      height: calc(100% - 60px);
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #1a1a1a;
    }
    .login-container {
      width: 100%;
      max-width: 400px;
      background: #121212;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.2);
      border: 1px solid #00f0ff;
      text-align: center;
    }
    .login-icon {
      font-size: 60px;
      margin-bottom: 20px;
      color: #00f0ff;
      text-shadow: 0 0 5px #00f0ff;
    }
    .form-control {
      background-color: #1f1f1f;
      border: 1px solid #444;
      color: #fff;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
    }
    .form-control::placeholder {
      color: #aaa;
    }
    .btn-cine {
      background-color: #00f0ff;
      border: none;
      color: #000;
      padding: 12px;
      border-radius: 8px;
      font-weight: bold;
    }
    .btn-cine:hover {
      background-color: #00d4e0;
    }
    .register-link {
      margin-top: 12px;
      color: #fff;
    }
    .register-link a {
      color: #00f0ff;
      text-decoration: none;
      font-weight: 600;
    }
    .register-link a:hover {
      text-decoration: underline;
    }
    @media (max-width: 768px) {
      .split-left {
        display: none;
      }
      .split-right {
        margin-left: 0;
        height: calc(100% - 60px);
      }
    }
  </style>
</head>
<body>

<div class="top-bar">
  <div class="brand-name">🎬 Movie</div>
  <div class="language-switcher">
    <a href="index-es.php"><img src="es.png" alt="Espanhol" class="flag"></a>
    <a href="index.php"><img src="uk.jpg" alt="Inglês" class="flag"></a>
    <a href="index-pt.php"><img src="pt.webp" alt="Português" class="flag"></a>
  </div>
</div>

<div class="split-left"></div>

<div class="split-right">
  <div class="login-container">
    <div class="login-icon">🎥</div>
    <form action="processalogin.php" method="POST">
      <input type="text" name="username" class="form-control" placeholder="Usuário" required>
      <input type="password" name="password" class="form-control" placeholder="Senha" required>
      <button type="submit" class="btn btn-cine btn-block">Entrar</button>
    </form>
    <div class="register-link">
      Ainda não tem uma conta? <a href="newuser.html">Cadastre-se</a>
    </div>
  </div>
</div>

</body>
</html>
