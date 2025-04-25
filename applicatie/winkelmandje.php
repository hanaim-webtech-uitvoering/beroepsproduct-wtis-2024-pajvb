<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pizzeria Sole Machina Winkelmandje</title>
  </head>

  <body>
    
    <header class= "header">
      <nav class="header__nav-left">
        <a href="home.html" class="header__link"> home</a>
      </nav>
      <h1 class="header__title">Winkelmandje</h1>
      <nav class="header__nav-right">
        <ul>
            <li><a href= "menu.html" class= "header__link">menu</a></li>
            <li><a href= "profiel.html" class= "header__link">profiel</a></li>
        </ul>
      </nav>
    </header>
    
    <main>
      <table class="table">
        <thead class="table__head">
          <tr>
            <th class="table__th">Product</th>
            <th class="table__th">Aantal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="table__td">Pizza margherita</td>
            <td class="table__td--fixed"><input class="form__input" type="number" name="quantity" min="1" max="10" value="2"></td>
          </tr>
          <tr>
            <td class="table__td">Spaghetti carbonara</td>
            <td class="table__td--fixed"><input class="form__input" type="number" name="quantity" min="1" max="10" value="3"></td>
          </tr>
          <tr>
            <td class="table__td">Coca Cola</td>
            <td class="table__td--fixed"><input class="form__input" type="number" name="quantity" min="1" max="10" value="4"></td>
          </tr>
          <tr>
            <td class="table__td">Fanta Orange</td>
            <td class="table__td--fixed"><input class="form__input" type="number" name="quantity" min="1" max="10" value="1"></td>
          </tr>
        </tbody>
      </table>

      <form action="winkelmandje.html" method="post">
        <label for= "address">Afleveradres:</label><br>
        <input class="form__input" type="text" id="address" name="address" required placeholder="bijv. kerkstraat 1"><br>
        <input class="form__input" type="submit" value= "bevestigen">
      </form>
    </main>

    <footer class="footer">
      <nav class="footer__nav">
        <a href="privacy-verklaring.html" class="footer__link"> privacy verklaring</a>
      </nav>
    </footer>
  </body>
</html>