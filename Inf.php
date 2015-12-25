<?php require 'login.php'; ?>
<!doctype html>
<html>
<head>    
    <?=$incorrect_login_js ?>
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Головна</title>
</head>
    
    <body>
        <header>
            
            <div class="nav">
                <a href="Index.php"><div class="butt">ГОЛОВНА</div></a>
                <a href="ist.php"><div class="butt">ІСТОРІЯ</div></a>
                <a href="inf.php"><div class="butt">ІНФРАСТРУКТУРА</div></a>
                <a href="vidp.php"><div class="butt">МІСЦЯ ВІДПОЧИНКУ</div></a>
                <a href="gal.php"><div class="butt">ГАЛЕРЕЯ</div></a>
            </div>
        </header>
        <?php require 'form.php'; ?>
        <div class="main">
            <h2><p id="h2">Інфраструктура</p></h2>
            <h3><p id="h3">Найбільші підприємства Сум:</p></h3>
            
            <ul type="disk" start=""><img id="inf" src="img/frunze%20(2).jpg">
 
            <li>Сумське ма шинобудівне
            науково-виробниче об'єднання ім. М.В. Фрунзе Засноване
            у 1896 р.; нині одне з найпотужніших підприємств
            хімічного та нафтогазоперекачувального машинобудування
            України; виробляє устаткування для одержання
            мінеральних добрив, спирту, каучуку, штучного волокна і
            пластмас, для вугільної, коксохімічної, харчової та
            інших галузей промисловості.</li>
 
            <br clear="all">
            <img id="inf" src="img/himprom1.jpg">
 
            <li>Сумихімпром Основна продукція: сірчана
            кислота, діоксид титану, мінеральні добрива, пігменти,
            алюміній сірчанокислий, вапно, лакофарбова продукція
            тощо. ВАТ «Сумихімпром» має статус базового
            підприємства хімічної галузі промисловості України з
            виробництва фосфорних мінеральних добрив.</li>
 
            <br clear="all">
            <img id="inf" src="img/88712.jpeg">
 
            <li>Лікеро-горілчаний завод. Одне з
            небагатьох лікеро-горілчаних підприємств України з
            понад сторічною історією — бере початок від приватної
            гуральні 1897 року, і є єдиним виробником горілки та
            лікеро-горілчаної продукції в Сумській області.
            Славиться настоянками, лікерами і горілкою на
            травах.</li>
 
            <br clear="all">
            <img id="inf" src="img/logo.png">
 
            <li>Сумський фарфоровий завод.</li>
 
            <br clear="all">
 
            <li>АТ «НВАТ „ВНДІкомпрессормаш“ Це
            багатопрофільна компанія, яка об'єднує ряд підприємств,
            розташованих в Україні, Росії,Білорусі та Казахстані.
            Головним напрямком діяльності концерну є виробництво
            устаткування для промисловості та енергетики, запасних
            частин до нього, а також обслуговування цієї
            техніки.</li>
 
            <li>Завод електронних мікроскопів та
            електроавтоматики „СЕЛМІ“ (заснований 1959 року;
            основна продукція: різні типи електронних мікроскопів,
            мас-спектрометри, лічильники йонів тощо). Зараз
            підприємство не працює, перебуває у стадії
            банкрутства.</li>
 
            <li>Червонозоряний цукрорафінадний завод
            (збудований 1869 року; 1970 року виробив 236000 т
            цукру).</li>
 
            <li>Чавуноливарний завод „Центроліт“.</li>
 
            <li>Молокозавод.</li>
 
            <li>Взуттєва фабрика.</li>
 
            <li>Сумський комбінат хлібопродуктів.</li>
          </ul>
      </div>
        <footer>
            <p class="footer"> © Copyright @ 2015  Andriy Akimenko. Kyiv. NTUU "KPI" </p>
        </footer>
    </body>
</html>