<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <title>money_transfer_management</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav_logo">
          <h1><a href="index.php">money_transfer_management</a></h1>
        </div>
        <ul class="nav_link">
          <!-- Future nav items -->
        </ul>
      </nav>
    </header>
    <main>
      <section class="login">
        <div class="login_box">
          <h1>Login</h1>
          <form class="login_form" action="login.php" method="post">
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Enter your name"
              required
            />
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
            />
            <input type="submit" value="Login" class="btn" />
            <button type="button" class="btn btn-signup" onclick="window.location.href='signup.php'">Sign Up</button>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>
