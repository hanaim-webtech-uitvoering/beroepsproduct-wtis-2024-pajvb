<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pizzeria Sole Machina Menu</title>
  </head>

  <body>
    
    <header class="header">
        <nav class="header__nav-left">
            <a href="home.html" class="header__link"> home</a>
        </nav>
        <h1 class="header__title">Menu</h1>
        <nav class="header__nav-right">
            <ul>
                <li><a href= "winkelmandje.html" class= "header__link">winkelmandje</a></li>
                <li><a href= "profiel.html" class= "header__link">profiel</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <nav class="menu__nav">
            <ul class="nav__ul">
                <li><a href= "#Pizza's" class="menu__link">Pizza's</a></li>
                <li><a href="#Pasta's" class="menu__link">Pasta's</a></li>
                <li><a href= "#Dranken" class="menu__link">Dranken</a></li>
                <li><a href="#Extra's" class="menu__link">Extra's</a></li>
            </ul>
        </nav>

        <section class="menu__category" id="Pizza's">
            <h2 class="category__title">Pizza's</h2>
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">1. Pizza Margherita</h3>
                    <p>Ingredienten:</p>
                    <ul class = "dish__ingredients">
                        <li>Tomaten saus</li>
                        <li>Mozerella</li>
                        <li>Basilicum</li>
                        <li>Olijfolie</li>
                    </ul>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">2. BBQ Chicken Pizza</h3>
                    <p>Ingredienten:</p>
                    <ul class = "dish__ingredients">
                        <li>BBQ sauce</li>
                        <li>Mozerella & Cheddar</li>
                        <li>Gegrillde kip</li>
                        <li>Rode ui</li>
                        <li>Mais</li>
                        <li>Koriander</li>
                        <li>Gerookte paprika</li>
                    </ul>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">3. Veggie Supreme Pizza</h3>
                    <p>Ingredienten:</p>
                    <ul class = "dish__ingredients">
                        <li>Tomaten saus</li>
                        <li>Vegan cheeser</li>
                        <li>Paprika</li>
                        <li>Rode ui</li>
                        <li>Champignons</li>
                        <li>Olijven</li>
                        <li>Spinazie</li>
                        <li>Oregano</li>
                    </ul>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
        </section>

         <section class="menu__category" id="Pasta's">
            <h2 class="category__title">Pasta's</h2>
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">1. Spaghetti Carbonara</h3>
                    <p>Ingredienten:</p>
                    <ul class = "dish__ingredients">
                        <li>Spaghetti</li>
                        <li>Pancetta</li>
                        <li>Pecorino Romano</li>
                        <li>Knoflook</li>
                    </ul>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">2. Penne Arrabbiata</h3>
                    <p>Ingredienten:</p>
                    <ul class = "dish__ingredients">
                        <li>Penne</li>
                        <li>Tomaat</li>
                        <li>Knoflook</li>
                        <li>Chilli</li>
                        <li>Peterselie</li>
                    </ul>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">3. Fettuccine Alfredo</h3>
                    <p>Ingredienten:</p>
                    <ul class = "dish__ingredients">
                        <li>Fettuccine</li>
                        <li>Room</li>
                        <li>Parmezaanse Kaas</li>
                        <li>Peterselie</li>
                    </ul>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
        </section>

        <section class="menu__category" id="Dranken">
            <h2 class="category__title">Dranken</h2>
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">1. Coca Cola</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">2. Coca Cola - Zero</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">3. Fanta Orange</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>

            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">4. Fanta Cassis</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
        </section>
            
        <section class="menu__category" id="Extra's">
            <h2 class="category__title">Extra's</h2>
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">1. Friet</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
    
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">2. Salade</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
    
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">3. Knoflooksaus</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
    
            <article class="dish">
                <article class="dish__information">
                    <h3 class="dish__name">4. Extra servetje</h3>
                </article>
                <article>
                    <form class="form" action="menu.html" method="post">
                        <label for="form_input">Aantal:</label><br>
                        <input class="form__input" type="number" name="quantity" min="1" max="10" required placeholder="0">
                        <input class="form__input" type="submit" value="Toevoegen">
                    </form>
                </article>
            </article>
        </section>
    </main>

    <footer class="footer">
        <nav class="footer__nav">
            <a href="privacy-verklaring.html" class="footer__link"> privacy verklaring</a>
        </nav>
    </footer>
  </body>
</html>