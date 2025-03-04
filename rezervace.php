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

<body id="page-5">
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
                <form method="POST" action="rezervace.php">
                    <label for="name">Jméno:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="surname">Příjmení:</label>
                    <input type="text" id="surname" name="surname" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Telefon:</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="facility">Prostor:</label>
                    <select id="facility" name="facility" required>
                        <!-- Dynamicky naplněno z databáze -->
                        <?php
                        // Připojíme se k databázi a získáme prostory
                        $conn = new mysqli('localhost', 'michalstuchlik', 'Jezkopesko002', 'sportrental');
                        $result = $conn->query("SELECT * FROM facilities");
                                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['prostor_ID'] . "'>" . $row['nazev'] . " - " . $row['misto'] . "</option>";
                        }
                        $conn->close();
                        ?>
                    </select>
                    
                    <label for="date">Datum rezervace:</label>
                    <input type="date" id="date" name="date" required>

                    <label for="start_time">Začátek:</label>
                    <input type="time" id="start_time" name="start_time" required>

                    <label for="end_time">Konec:</label>
                    <input type="time" id="end_time" name="end_time" required>

                    <button type="submit">Odeslat rezervaci</button>
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