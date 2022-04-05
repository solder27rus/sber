<?php
include('header.php')
?>

<div class="main1">
    <div class="textinimg" style="background-image: url(img/sber_01.gif);">
    <div class="main1contenall">
    <div class="main1contentb">
    <div>
    <h1 class="main1h1">Наслаждайся<br>
    Нашими услугами.</h1>

    </div>
    <div class="but">
    <a href="market.php"><button class="buttonimg">
    Попробуй!
    </button></a>
    </div>
    </div>
    <div id="gif">
    <!-- <img src="img/Play.png"> -->
    </div>
    </div>
    </div>
    </div>
    
    <div class="main1-all">
    <div class="main2">
    <div>
    <h4 class="main2text">
    <div style="color:#C99E71; margin-right: 5px;">01</div> Отличный дизайн карт</h4>
    <div>
    <!-- <img src="img/Rectangle 4.png" class="main2img">      -->
    </div>
    </div>
    <div>
    <h4 class="main2text">
    <div style="color:#C99E71; margin-right: 5px;">02</div> Подпись кровью</h4>
    <div>
    <!-- <img src="img/Rectangle 4.png" class="main2img">      -->
    </div>
    </div>
    <div>
    <h4 class="main2text">
    <div style="color:#C99E71; margin-right: 5px;">03</div> Должник навсегда</h4>
    <div>
    <!-- <img src="img/Rectangle 4.png" class="main2img">      -->
    </div>
    </div>
    
    <div>
    <h4 class="main2text">
    <div style="color:#C99E71; margin-right: 5px;">04</div> Выгодные ипотеки</h4>
    <div>
    <!-- <img src="img/Rectangle 5.png" class="main2img">      -->
    </div>            
    </div>
    
    <div>
    <h4 class="main2text"><div style="color:#C99E71; margin-right: 5px;">05</div> Читайте шрифт</h4>
    <div>
    <!-- <img src="img/Rectangle 6.png" class="main2img">      -->
    </div>           
    </div>
    
    </div>
    
    
    <div class="main3">
    <div class="verticalimg">
    <div class="verticalimg1"><img src="img/Rectangle 4.png" class="main3img"></div>
    <div class="verticalimg1"><img src="img/Rectangle 5.png" class="main3img"></div>
    </div>
    <div><img class="imgmain3" src="img/Rectangle 14.png" class="main30img"></div>
    <div class="textmain3">
    <div>
    <div class="main3text"><div style="color:#C99E71; margin-right: 5px;">Наша история</div></div>
    <h1 class="main3text1">Создавай<br> историю с нами</h1>
    <div class="main3text">
    Центральный банк Российской Федерации – центральный банк Российской Федерации, первоначально основанный в 1860 году как Государственный банк Российской империи.<br> 
    [4]Штаб-квартира банка находится на Неглинной улице в Москве. Его функции описаны в Конституции России (статья 75) и федеральном законе.<br>
    осударственный банк Российской империи<br>
    <br>
Штаб-квартира Госбанка в Санкт-Петербурге (1905)<br>
Решение о создании Государственного банка Российской империи было принято императором Петром III в мае 1762 года[7], который был создан по образцу Банка Англии и имел бы право выпуска банкнот.<br>
 Однако из-за переворота 28 июня 1762 года и убийства царя проект не был реализован.<br>
  Начавшаяся в 1768 году русско-турецкая война и дефицит государственного бюджета вынудилиЕкатерина II, в свою очередь,<br>
    Государственного коммерческого банка на указ императора Александра II.<br>
   Этот указ также ратифицировал устав банка.<br>
 Согласно уставу, это был государственный банк, предназначенный для краткосрочного кредитования торговли и промышленности.</div>
    </div>
    </div>
    </div>
<script>async function AddValues(){
    let response = await fetch('https://www.cbr-xml-daily.ru/daily_json.js');
    let json = await response.json();
    // document.getElementById('curs').value = 23;
    for(let val in await json.Valute){
        document.getElementsByClassName('courses')[0].innerHTML+=
        '<option   id="getcurs" class="courses" >'+json.Valute[val]['CharCode']+'-'+json.Valute[val]['Name']+'-'+json.Valute[val]['Value']+'</option>';

    }

}
 function curses(){
        let msg = document.getElementsByClassName('courses')[0].value;
        let rar = msg.split('-');
        console.log(rar);
        document.getElementById('curs').value = document.getElementById('rub').value * rar[2];

 }
AddValues();</script>

						<form>
							<h1 class="h2 mb-4">Конвертер валют</h1>

							<div class="row mb-1">
								<div class="col">
									<label for="name">Отдаю:</label>
									<select
										disabled
										class="contentmain8"
										onchange=""
									>
										<option value="RUB" selected>RUB-Рубли</option>
									</select>
								</div>
								<div class="col">
									<label for="name">Получаю:</label>
									<select
                                    onchange="curses()"
										id="select"
										class="contentmain8 courses"
									>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<input
                                    onchange="curses()"
										type="text"
										class="contentmain8"
										id="rub"
										autofocus
									/>
								</div>
								<div class="col">
									<input
                                    
										type="text"
										class="contentmain8"
										id="curs"
									/>
								</div>
							</div>
						</form>
    <div class="main8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.775540339673!2d135.09191931555264!3d48.49919597925399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5efac1fcb0d9410f%3A0x4bda7658aee59e09!2z0KHQsdC10YDQsdCw0L3Qug!5e0!3m2!1sru!2sru!4v1647525829546!5m2!1sru!2sru" width="650" height="570" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="main8content">
        <h5 class="main5text1"><div style="color:#C99E71; margin-right: 5px;">Где мы?</div></h5>
        <h1 class="main5text2">Отделение банка</h1>
        <input class="contentmain8" placeholder="время работы">
        <input class="contentmain8" placeholder="дни работы">
        <input class="contentmain8" placeholder="11:00 AM">
        <!-- <button class="buttonimg">
             Забронировать
            </button> -->
    </div>
    </div>
    <div class="main9">
        <h1 class="main3text"><div style="color:#C99E71; margin-right: 5px;">Новости</div></h1>
    <h1>Последние новости</h1>
    <div class="main9text">
        <div class="main9img">
            <img src="img/Bg8.png">
            <div class="main9text1">
                <div class="main9text2">
                    <div class="main9text3"><div style="color:#C99E71; margin-right: 5px;">Тема:</div><div> В разработке</div></div>
                    <div style="color:#C99E71; margin-right: 5px;">23.01.2021</div>
                </div>
                <div style="font-family:Righteous;">В разработке....</div>
                <a class="main9read">Подробнее <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99994 12L18.9999 12" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a>
        </div>
        </div>
        <div class="main9img">
            <img src="img/Bg9.png"">
            <div class="main9text1">
                <div class="main9text2">
                    <div class="main9text3"><div style="color:#C99E71; margin-right: 5px;">Тема:</div><div> В разработке</div></div>
                    <div style="color:#C99E71; margin-right: 5px;">23.01.2021</div>
                </div>
                <div style="font-family:Righteous;">В разработке....</div>
                <a class="main9read" href="index.php">Подробнее <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99994 12L18.9999 12" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a>
        </div>
        </div>
        <div class="main9img">
            <img src="img/Bg10.png">
            <div class="main9text1">
                <div class="main9text2">
                    <div class="main9text3"><div style="color:#C99E71; margin-right: 5px;">Тема:</div><div> В разработке</div></div>
                    <div style="color:#C99E71; margin-right: 5px;">23.01.2021</div>
                </div>
                <div style="font-family:Righteous;">В разработке....</div>
                <a class="main9read">Подробнее <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99994 12L18.9999 12" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 5L19 12L12 19" stroke="#C99E71" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a>
        </div>
        </div>
    </div>
    
    
    </div>
<?php
include('footer.php')
?>