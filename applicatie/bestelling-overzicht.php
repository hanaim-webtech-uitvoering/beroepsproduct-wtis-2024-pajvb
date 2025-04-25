<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pizzeria Sole Machina Bestelling Overzicht</title>
  </head>

  <body>
    
    <header class="header">
      <nav class="header__nav-left">
        <a href="home.html" class="header__link"> home</a>
      </nav>
      <h1 class="header__title">Bestelling Overzicht</h1>
      <nav class="header__nav-right">
        <a href="profiel.html" class="header__link"> profiel</a>
      </nav>
    </header>

    <main>
      <div>
        <h2 class="category__title">Bestellingen</h2>
        <table class="table">
          <thead class="table__head">
            <tr>
              <th class="table__th">Bestelling-id</th>
              <th class="table__th">Datum</th>
              <th class="table__th">Adres</th>
              <th class="table__th">Personeel</th>
              <th class="table__th">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table__td"><a href= "bestelling-details.html"  class="menu__link"> 2847565</a></td>
              <td class="table__td">31/01/2025</td>
              <td class="table__td">Kerstraat 1</td>
              <td class="table__td">3876</td>
              <td class="table__td">
                <select class="select" name="status">
                  <option class="select__option" value="bezorgd">Bezorgd</option>
                  <option class="select__option" value="onderweg">Onderweg</option>
                  <option class="select__option" value="uit oven">Uit oven</option>
                  <option class="select__option" value="in oven">In oven</option>
                  <option class="select__option" value="voorbereiden oven">Voorbereiden oven</option>
                  <option class="select__option" value="geregistreerd">Geregistreerd</option>
                  <option class="select__option" value="geannuleerd">Geannuleerd</option>
                  </select>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

    <footer class="footer">
      <nav class="footer__nav">
        <a href="privacy-verklaring.html" class="footer__link"> privacy verklaring</a>
      </nav>
    </footer>
  </body>
</html>