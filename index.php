<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="game_container">
    <img class="hero" src="/img/hero.png" alt="">
    <div class="hero_info_block">
        <div class="hero_nickname">Mys9ys</div>
        <div class="hero_lvl">lvl: 1</div>
        <div class="hero_hp">10/10</div>
        <div class="hero_xp">0</div>
    </div>
</div>
</body>
</html>
<style>
    body{
        background: #474C52;
        margin: 0;
    }
    .game_container{
        border-top: 1px solid transparent;
        width: 1200px;
        margin: auto;
        display: flex;
        flex-direction: row;
        color: #A6B2AA;
        background: rgba(33,33,33,0.4);
        box-shadow: -4px 4px 2px -5px rgb(255 255 255 / 40%), inset -1px -1px 2px rgb(0 0 0 / 20%);
        padding: 4px;
        border-radius: 3px;

    }
    .hero{
        width: 60px;
    }
    .hero_info_block{

    }
    .hero_nickname, .hero_lvl{
        font-weight: 600;
    }

    .hero_hp{
        width: 100px;
        height: 10px;
        font-size: 10px;
        background: rosybrown;
        color: rgb(255,255,255);
        margin-bottom: 3px;
    }
    .hero_xp{
        width: 100px;
        height: 10px;
        font-size: 10px;
        background: cornflowerblue;
        color: rgb(255,255,255);
    }
</style>