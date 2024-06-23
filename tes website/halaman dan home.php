<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamedotStore</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- navbar  -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Game.Store</a>
        <div class="navbar-nav">
            <a href="#game1">Games Populer</a>
            <a href="#">|</a>
            <a href="#game2">Games</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="masuk"><i data-feather="log-in"></i></a>
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="notifikasi"><i data-feather="bell"></i></a>
            <a href="#" id="setting"><i data-feather="settings"></i></a>
            <a href="#" id="keluar"><i data-feather="log-out"></i></a>
        </div>
    </nav>

    <!-- home section -->
    <section class="hero">
        <div class="content">
            <h1>Platform Top-Up Game Tergacor</h1>
            <div class="gameset">
                <img src="../tes website/img/games1.jpg" alt="Games Set">
            </div>
        </div>
    </section>

    <!-- produk games 1 -->
    <section class="game-populer">
        <h1>GAMES POPULER</h1>

        <!-- Produk yang ditampilkan -->
        <div class="produk-1">
    <img src="../tes website/img/mole.jpg" alt="Mobile Legends">
    <h2>Mobile Legends</h2>
    <form action="payment.html" method="GET" onsubmit="return validateForm()">
        <input type="hidden" name="game_name" value="Mobile Legends">
        <button type="submit">Beli</button>
    </form>
</div>

        <div class="produk-1">
            <img src="../tes website/img/genshin.jpg" alt="Genshin Impact">
            <h2>Genshin Impact</h2>
            <form action="payment.html" method="GET" onsubmit="return validateForm()">
        <input type="hidden" name="game_name" value="Genshin Impact">
        <button type="submit">Beli</button>
    </form>
</div>

        <div class="produk-1">
            <img src="../tes website/img/pubg.jpg" alt="Pubg Mobile">
            <h2>Pubg Mobile</h2>
            <form action="payment.html" method="GET" onsubmit="return validateForm()">
        <input type="hidden" name="game_name" value="pubg">
        <button type="submit">Beli</button>
    </form>
</div>

        <div class="produk-1">
            <img src="../tes website/img/valo.jpg" alt="Valorant">
            <h2>Valorant</h2>
            <form action="payment.html" method="GET" onsubmit="return validateForm()">
        <input type="hidden" name="game_name" value="valorant">
        <button type="submit">Beli</button>
    </form>
</div>
        <div class="produk-1">
            <img src="../tes website/img/dota1.jpg" alt="Dota 2">
            <h2>Dota 2</h2>
            <form action="payment.html" method="GET" onsubmit="return validateForm()">
        <input type="hidden" name="game_name" value="dota">
        <button type="submit">Beli</button>
    </form>
</div>

        <div class="produk-1">
            <img src="../tes website/img/free-fire.jpg" alt="Free Fire">
            <h2>Free Fire</h2>
            <form action="payment.html" method="GET" onsubmit="return validateForm()">
        <input type="hidden" name="game_name" value="free fire">
        <button type="submit">Beli</button>
    </form>
</div>

        
    </section>

    <!-- Script untuk mengganti feather icons -->
    <script>
        feather.replace();
    </script>
</body>
</html>
