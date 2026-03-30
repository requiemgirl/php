<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "assets-casti/header.php"; ?>

    <main>
        <section>
            <form>
                <!-- vlastnosti: readonly, autofocus, disabled, required -->
                <h2>Formulář</h2>
                <div>
                    <label for="firstname">Křestní jméno</label><br>
                    <input type="text" name="first_name" id="firstname" autofocus><br>
                </div><br>
                <!-- div komplikuje naslednou responzivitu, protoze se pak divum daji nastavovat ruzne rozmery -->
                <input type="text" name="last_name" placeholder="příjmení" disabled><br>
                <input type="password" name="passowrd" placeholder="heslo" required><br>
                <input type="email" name="email" value="@" ><br>
                <input type="date" name="datum"><br>

                <input type="number" name="weight" min="10" max="20"><br>

                <input type="url" name="" id="" value="https://"><br>
                <!-- url musi byt s https:// value to tam predepise-->

                <textarea name="message" placeholder="Vaše zpráva"></textarea><br>
                
                <input type="checkbox" value="tricko">Tričko zdarma<br>
                <input type="checkbox" value="el. kniha">Elektronická kniha <br>
                
                <select name="color[]">
                    <optgroup label="hlavní barva">
                        <!-- kdybych napsala option value="x" selected - tak to selected hodi jakykoliv radek jako vizualne prvni -->
                        <option value="red">Červená</option>
                        <option value="green" selected>Zelená</option>
                        <option value="blue">Modrá</option>
                    </optgroup>
                    <optgroup label="barva okraje">
                        <option value="red2">Červená</option>
                        <option value="green2">Zelená</option>
                        <option value="blue2">Modrá</option>
                    </optgroup>

                </select><br>
                <!-- pokud urcim name, tak muzu vybrat jenom jednu moznost. pokud name není nastaveno, muzu vybrat klidne vsechny -->
                <input type="radio" name="country">ČR <br>
                <input type="radio" name="country">Portugalsko <br>
                <input type="radio" name="">Německo <br>




                <input type="submit" value="Registrovat">
                <!-- NEBO -->
                <button>Odeslat</button><br>
                <input type="hidden" name="form-type" value="kontakt">
                <!-- kdyz u hidden nastavim spec value, tak muzu treba sledovat, ktery dformular se pouziva vice. kontakt necham na strankach kontakt a na indexu nastavim value treba hlavni. Pak muzu sledovat, ktery form vyplnuji casteji -->
                
            </form>
        </section>
        <section>
            <a href="index.php">Hlavní stránka</a>
        </section>
        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2618.749625998342!2d14.472628375681824!3d48.97729029233282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47734f05e4f2918f%3A0x1a7c8a10d991785!2sVR%20Centrum%20-%20Virtu%C3%A1ln%C3%AD%20realita!5e0!3m2!1sen!2scz!4v1774382059702!5m2!1sen!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <?php include "assets-casti/footer.php"; ?>

</body>
</html>