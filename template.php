<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="pack-de-icones/fonticon.css">
    <title>Document</title>
</head>
<body>
<style>

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    html, body {
        width: 100%;
        height: 100%;
    }

    body {
        height: 1500px;
    }

    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    .content-flex {

        display: flex;
        flex-wrap: nowrap;
        min-height: 100%;
        background-color: #eeeeee;
    }

    .aside_content {
        max-width: 200px;
        width: 100%;
        background-color: black;
        margin-left: 0px;
        min-height: 100%;
    }

    .main_content {
        background-color: #fff;
        width: 100%;

    }

    .main_content header {
        background-color: #ddd;
        padding: 20px;
    }

    .menu_absolute {
        background-color: #3B2406;
        position: absolute;
        left: -100%;
        top: 0;
        width: 100%;
        height: 100%;
        display: flex;

    }

    .close_menu_aside {
        cursor: pointer;
        padding: 10px;
        outline: none;
        color: #fff;
        font-weight: bold;
        z-index: 999;
        position: absolute;
        right: 40px;
        background-color: rgba(255, 255, 255, 0);
        color: #000;
        border: none;
        font-size: 2.2em;

    }


    .menu_absolute_itens {
        text-align: center !important;
        margin: auto;
        min-height: 600px;
        width: 700px;
        margin-top: 6%;

    }

    .menu_absolute_itens ul {

        display: flex;
        flex-wrap: wrap;
        align-items: center;
        text-align: center !important;

    }

    .menu_absolute_itens ul li {

        flex-basis: 100%;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 2.5em;
        color: #fff;
        margin: 0 auto  ;
        margin-left: 32%;
    }

    .menu_absolute_itens ul li a {

        color: #fff;
        text-align: center !important;
        font-weight: bold;
        margin-left: 3% !important;

    }

    .effect {
        transition: 1s linear;
        transform: rotate(180deg);
    }



</style>

<div class="menu_absolute">
    <div class="menu_absolute_itens">
        <ul>
            <li class="icon-home"> <a href="#">Home</a></li>
            <li class="icon-phone"> <a href="#">Contato</a></li>
            <li class="icon-instagram"> <a href="#">Redes sociais</a></li>
            <li class="icon-feed"> <a href="#">Móveis</a></li>
        </ul>
    </div>
</div>

<div class="rotate">

</div>

<div class="content-flex">
    <aside class="aside_content">
        <ul>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li><a href="">Menu <?= $i; ?></a></li>
            <?php endfor; ?>
        </ul>
    </aside>


    <main class="main_content">
        <section class="main_section">
            <header>
                <button class="close_menu_aside icon-notext icon-menu"></button>
            </header>
        </section>
    </main>

</div>
<script src="scripts/jquery-3.5.1.min.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>