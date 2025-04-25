<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pizzeria Sole Machina Registratie</title>
  </head>

  <body>
    <header class= "header">
      <nav class="header__nav-left">
        <a href="home.html" class="header__link"> home</a>
      </nav>
      <h1 class="header__title">Registratie</h1>
      <nav class="header__nav-right">
        <ul>
          <li><a href= "menu.html" class= "header__link">menu</a></li>
          <li><a href= "winkelmandje.html" class= "header__link">winkelmandje</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <form action="profiel.html" method="post">
        <label for= "uname">User name:</label><br>
        <input class="form__input" type="text" id="uname" name="uname" required><br>
        <label for="fname">First name:</label><br>
        <input class="form__input" type="text" id="fname" name="fname" required><br>
        <label for="lname">Last name:</label><br>
        <input class="form__input" type="text" id="lname" name="lname" required><br>
        <label for= "address">Address:</label><br>
        <input class="form__input" type="text" id="address" name="address" required><br>
        <label for= "password">Password:</label><br>
        <input class="form__input" type="password" id="password" name="password" required><br>
        <input class="form__input" type="submit" value="registreren">
      </form>

      <div>
        <p>Heeft u al een account?<p>
        <a href="login.html" class="home__nav-link"> Log in</a>
      </div>
    </main>

    <footer class="footer">
      <nav class="footer__nav">
        <a href="privacy-verklaring.html" class="footer__link"> privacy verklaring</a>
      </nav>
    </footer>

  </body>
</html>
