<style>
    div.img {
        background: url(https://podolskriamo.ru/files/image/08/26/01/quiz-result!4fd.gif) no-repeat fixed;
        background-size: cover;
        background-position: center;
        position: absolute;
        width: 100vw;
        height: 100vh;
        filter: blur(5px);
        z-index: -1;
    }
	body{
		background: black;
	}
    div.f {
        margin: 0 auto;
        text-align: center;
    }

    div.f h1 {
        color: #FFF;
        font-size: 8vw;
        text-shadow: 5px 5px black;
    }
    body::-webkit-scrollbar {
        width: 0 !important;
        height: 0 !important;
    }
    div.f h3 {
        color: #FFF;
        font-size: 3vw;
        text-shadow: 3px 3px black;
    }

    body {
        width: 100vw;
        height: 100vh;
        display: -webkit-flex;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<head>
	<title><?php echo $config['system']['title'];?></title>
</head>
<body>
<div class="img"></div>
<div class="f">
	<h1>Ошибка 404</h1>
	<h3>К сожелению, но данной страницы не существует</h3>
</div>
</body>
<?php
function controller($t){

}
?>