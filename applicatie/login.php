<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pizzeria Sole Machina Login</title>
  </head>

  <body>
    <header class="header">
      <nav class="header__nav-left">
        <a href="home.html" class="header__link"> home</a>
      </nav>
      <h1 class="header__title">Login</h1>
        <nav class="header__nav-right">
          <ul>
              <li><a href= "menu.html" class= "header__link">menu</a></li>
              <li><a href= "winkelmandje.html" class= "header__link">winkelmandje</a></li>
          </ul>
      </nav>
    </header>

    <main>
      <form action="profiel.html" method="post">
        <label for="uname">User name:</label><br>
        <input class="form__input" type="text" id="uname" name="uname" required><br>
        <label for="password">Password:</label><br>
        <input class="form__input" type="password" id="password" name="password" required><br>
        <input class="form__input" type="submit" value="inloggen">
      </form>

      <br>
      <div>
        <p>Heeft u nog geen account?</p>
        <a href="registratie.html" class="home__nav-link"> Registratie</a>
      </div>
      
    </main>

    <footer class="footer">
      <nav class="footer__nav">
        <a href="privacy-verklaring.html" class="footer__link"> privacy verklaring</a>
      </nav>
    </footer>
  </body>
</html>