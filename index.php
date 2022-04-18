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
        <div class="hero_hp">10</div>
        <div class="hero_xp">0</div>
    </div>
</div>
</body>
</html>
<style>
    .game_container{
        width: 1200px;
        margin: auto;
        display: flex;
        flex-direction: row;
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
        height: 8px;
        font-size: 8px;
        background: rosybrown;
        color: rgb(255,255,255);
        margin-bottom: 3px;
    }
    .hero_xp{
        width: 100px;
        height: 8px;
        font-size: 8px;
        background: cornflowerblue;
        color: rgb(255,255,255);
    }
</style>