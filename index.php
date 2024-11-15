<body>
    <?php include('layouts/header.php'); ?>

    <div class="container mt-5">
        <h2 class="text-center">Descubra seu Signo Zodiacal</h2>
        <form action="show_zodiac_sign.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="birthdate">Data de Nascimento:</label>
                <input type="date" id="birthdate" name="birthdate" class="form-control" required>
            </div>
            <div class="group-button">
                <button type="submit" id="btn">Mostrar</button>
                <button type="reset" id="btn-reset">Apagar consulta</button>
            </div>
        </form>
    </div>
    <div id="html"></div>

    <script type="module" src="./assets/js/index.js"></script>
</body>