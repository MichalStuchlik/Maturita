<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.svg">
    <title>Rezervace</title>
</head>

<body>
    <header>
    <div id="nav">
            <p><a href="index.html"><img src="img/logo.svg" alt=""></a></p>
            <div class="burger-menu" onclick="toggleMenu()">&#9776;</div>
            <ul id="nav-menu">
                <li><a class="active" href="index.html">Úvod</a></li>
                <li><a href="viceinf.html">O nás</a></li>
                <li><a href="cenik.html">Ceník</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="rezervace.php">Rezervace</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section id="reservation-form">
            <h1>Rezervace</h1>
            <div id="reservation-content" class="container">
                <div id="form">
                    <form action="rezervace.php" method="POST">
                        <label for="jmeno">Vaše jméno: </label>
                        <input type="text" name="jmeno" required><br>
                        <label for="prijmeni">Vaše příjmení: </label>
                        <input type="text" name="prijmeni" required><br>
                        <label for="email">Váš email: </label>
                        <input type="email" name="email" required><br>
                        <label for="id_pokoje">Vyberte místo prostoru:</label><br>
                        <div id="room">
                            <select name="id_pokoje" required>
                                <option value="" disabled selected>Prostor:</option>
                                <option value='1'>Fitness</option><option value='2'>Kardio zóna</option><option value='3'>Bazén</option><option value='4'>Wellness</option><option value='5'>Sportovní hala</option><option value='6'>Skupinové lekce</option></select>
                        </div>
                        <label for="poznamka">Poznámka:</label>
                        <textarea name="poznamka"></textarea>
                        <input type="submit" class="btn">
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>Jedná se o fiktivní projekt pro závěrečnou maturitní práci.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>