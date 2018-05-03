<?php
session_start();
$period_cookie = 25920000; // 30 дней (2592000 секунд)

if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<!--if IE 8|<html class="no-js lt-ie9" >
-->
<!--if gt IE 8|<!-->
<html class="no-js">
<head>
	<!--<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>-->


	<!--[if lt IE 9]>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->


	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="SHORTCUT ICON" type="image/x-icon" href="/img/favicon.ico">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Pet Brush Glove</title>
	<meta name="description" content="Pet Brush Glove"/>
	<meta name="keywords" content="Pet Brush Glove"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="/css/css.css" type="text/css">
	<link rel="stylesheet" href="/css/style_002.css" type="text/css">
	<link rel="stylesheet" href="/css/colors.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
	<script src="/js/script_002.js"></script>
	<script src="/js/etimer.js"></script>







	<link href="/css/custom-styles.min.css" type="text/css" rel="stylesheet"/>
	<script src="/js/custom-functions.min.js" type="text/javascript"></script>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60" id="home">
<nav style="display: block;" role="navigation" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header"><img src="/img/minilogo.png" align="left" class="topminilogo">
			<button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
				<span class="icon-bar"></span><span class="icon-bar"></span></button>
			<span class="navbar-brand"></span>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#home">Начало</a></li>
				<li class=""><a href="#preview">Описание</a></li>
				<li class=""><a href="#gallery2">Галерея</a></li>
				<li class=""><a href="#test">Отзывы</a></li>
				<li class=""><a href="#guaranry">Гарантии</a></li>
				<li class=""><a href="#buy">Купить</a></li>
			</ul>
		</div>
	</div>
</nav>
<header>
	<div class="wrapper"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>
					<center><img src="/img/headtext.png" align="left" class="headlogo"></center>
				</h1>
			</div>
			<!-- <div class="col-sm-6 text-right" >
              <p class="phone" ><font color="white" >Закажите бесплатный обратный звонок.
    </font></p><a data-toggle="modal"  href="#modal-zk"  class="btn btn-lg btn-custom mb" >Заказать обратный звонок</a>
            </div> -->
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-7">
						<div id="carousel-top" class="carousel slide">
							<div class="carousel-inner">

								<div class="item active">
									<img src="/img/44.png" alt="" title=""></div>
							</div>
						</div>
						<h3 style="visibility: visible;" class="wow">
							<img src="/img/headtext2.png" align="left" height="86" width="553" class="mobhide"></h3>
					</div>
					<div class="col-sm-5">
						<!-- форма в шапке страницы -->

						<form method="POST" action="zakaz.php" id="feedback-form" d_id="form_0" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">

							<legend class="text-center text-uppercase">внимание! только сегодня - скидка в 50%. <br>
								Цена
								<del><span class="price_land_s4">598</span></del>
								<span style="font-weight:900; color:#ff0000;"><span
											class="price_land_s1">139</span></span> <span
										class="price_land_curr">грн.</span></legend>

							<div class="form-group">
								<label for="" class="sr-only">label</label>
								<select class="form-control input-lg country_select" name="country" id="country">
									<option value='Украина' selected="selected">Украина</option>
								</select>
							</div>
							<div class="form-group">
								<label for="" class="sr-only">label</label>
								<input name="name" placeholder="Введите ваше имя" class="form-control input-lg"
								       type="text">
							</div>

							<div class="form-group">
								<label for="" class="sr-only">label</label>
								<input name="phone" placeholder="Введите ваш телефон" class="form-control input-lg"
								       type="text">
							</div>
							<button type="submit" class="btn btn-creative btn-lg btn-block"><span>Заказать! </span>
							</button>
							<p style="color: black"> Ваши данные не будут переданы третим лицам </p>


							<input type="hidden" name="s1" class="price_field_s1" value="139"/>
							<input type="hidden" name="s2" class="price_field_s2" value="350"/>
							<input type="hidden" name="s3" class="price_field_s3" value="1640"/>
						</form>
						<div class="row mt">
							<div class="col-sm-6">
								<img style="visibility: visible; " src="/img/g1.png" alt="" title="" class="img-responsive wow"></div>
							<div class="col-sm-6">
								<img style="visibility: visible; " src="/img/g2.png" alt="" title="" class="img-responsive wow"></div>
						</div>
						<!-- форма в шапке страницы -->
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7"></div>
					<div class="col-sm-5"></div>
				</div>
			</div>
		</div>
	</div>
</header>
<section id="preview">
	<div class="wrapper"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 style="visibility: visible; " class="text-center wow">Pet Brush Glove была создана с любовью к животным!</h2>
				<div style="visibility: visible; " class="row comment-body wow">

					<div class="video-wrapper">
						<iframe width="1000" height="630" src="https://www.youtube.com/embed/B02B3k8rxUY?rel=0&fs=0&showinfo=0&controls=0&modestbranding=1&iv_load_policy=3" class="shadow" frameborder="0" allowfullscreen></iframe>
					</div>

				</div>

				<h2 style="visibility: visible; " class="text-center wow">Из чего состоит Перчатка Pet Brush Glove ?</h2>

				<div class="row">
					<div class="col-sm-6"><img src="/img/img_1.png" alt="" title="" class="img-responsive img-rounded  mb center-block">
					</div>
					<div class="col-sm-6">
						<div style="visibility: visible;" class="row mb wow">
							<div class="col-sm-4"><img src="/img/img_01.png" alt="" title="" class="img-responsive img-rounded mb center-block">
							</div>
							<div class="col-sm-8">
								<h4>180 мягких пупырышек</h4>
								<p align="justify">- из гипоаллергенного силикона для легкого расчесывания всех видов шерсти вашего питомца (длинной, короткой,курчавой)</p>
							</div>
						</div>
						<div style="visibility: visible;" class="row mb wow">
							<div class="col-sm-4"><img src="/img/img_02.png" alt="" title="" class="img-responsive img-rounded mb center-block">
							</div>
							<div class="col-sm-8">
								<br> <h4>Текстильная вставка </h4>
								<p align="justify">- и сеточка для отличной вентиляции и комфорта.</p>
							</div>
						</div>
						<div style="visibility: visible;" class="row wow">
							<div class="col-sm-4"><img src="/img/img_03.png" alt="" title="" class="img-responsive img-rounded mb center-block">
							</div>
							<div class="col-sm-8">
								<br><h4>Регулируемый манжет перчатки</h4>
								<p align="justify">- удобно носить и снимать</p>
							</div>
						</div>
					</div>
				</div>
				<div style="visibility: visible;" class="text-center mt wow"><a data-toggle="modal" href="#modal-id" class="btn btn-lg btn-custom big">Заказать сейчас</a></div>
			</div>
		</div>
	</div>
</section>

<section>

	<div class="container">
		<div class="row mb">
			<div class="col-sm-4"><img src="/img/text_1.png" alt="" title="" class="img-responsive img-rounded shadow mb center-block"></div>
			<div style="visibility: visible;" class="col-sm-8 wow">
				<font size="5em">● Имитирует прикосновение Вашей руки, эффект массажа<br>
					● Состоит из 180 мягких силиконовых пупырышек для легкого расчесывания </font>

			</div>
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br>
			<div class="clear"></div>
			<div class="col-sm-4">
				<img src="/img/text_2.png" alt="" title="" class="img-responsive img-rounded shadow mb center-block"></div>
			<div style="visibility: visible;" class="col-sm-8 wow">
				<font size="5em">● Волосы с легкостью прилипают к перчатке и с легкостью снимаются, что делает процесс
					расчесывания питомца быстрым и приятным<br>
					● Благодаря перчатке Pet Brush Glove Ваш дом и Ваша одежда всегда смогут оставаться в чистоте
				</font>
			</div>
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br>
			<div class="clear"></div>
			<div class="col-sm-4"><img src="/img/text_3.png" alt="" title="" class="img-responsive img-rounded shadow mb center-block"></div>
			<div style="visibility: visible;" class="col-sm-8 wow">
				<font size="5em">● Перчатка Pet Brush Glove подходит и для кошек и для собак, всех пород и всех
					размеров!</font>
			</div>
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br class="hidden-xs">
			<br class="hidden-xs"><br>
			<center>
				<h1 style="visibility: visible;" class="text-center wow   animated"><b>Преимущества использования<br>
						Перчатки Pet Brush Glove в ванной, она способствует:</b></h1>

				<img style="visibility: visible;" src="/img/pod.png" alt="" title="" class="img-responsive wow"></center>
			<div class="row">
				<div style="visibility: visible;" class="col-sm-12 text-center mt wow">
					<a data-toggle="modal" href="#modal-id" class="btn btn-lg btn-custom big">Заказать сейчас</a></div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>
<section id="gallery2">
	<div class="wrapper"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 style="visibility: visible; " class="text-center wow"><b>Галерея</b></h2>
				<div class="text-center center-block">
					<!-- слайд галереи, в ссылку вставляем адрес большой картинки, в тэг картинки адрес миниатюры -->
					<a href="/img/1_big.jpg" data-fancybox="gallery" data-caption="">
						<img src="/img/1_prev.png" alt="" />
					</a>
					<!-- слайд галереи -->
					<a href="/img/2_big.jpg" data-fancybox="gallery" data-caption="">
						<img src="/img/2_prev.png" alt="" />
					</a>
					<!-- слайд галереи -->
					<a href="/img/3_big.jpg" data-fancybox="gallery" data-caption="">
						<img src="/img/3_prev.png" alt="" />
					</a>
					<!-- слайд галереи -->
					<a href="/img/4_big.jpg" data-fancybox="gallery" data-caption="">
						<img src="/img/4_prev.png" alt="" />
						<!-- слайд галереи -->
					</a>
					<a href="/img/5_big.jpg" data-fancybox="gallery" data-caption="">
						<img src="/img/5_prev.png" alt="" />
					</a>
					<!-- слайд галереи -->
				</div>
			</div>
		</div>
	</div>
</section>
<section id="test" class="comment">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 style="visibility: visible; " class="text-center wow"><b>Отзывы</b></h2>
				<!-- комментарий -->
				<div style="visibility: visible; " class="row comment-body wow">
					<div class="col-sm-3 text-center">
						<!-- картинка и имя автора -->
						<img src="/img/ava.png"  alt=" отзывы" title=" отзывы" class="img-responsive img-circle center-block mb">
						<h4>Полина Тереньтева</h4>
						<!-- картинка и имя автора -->
					</div>
					<div class="col-sm-9">
						<!-- тело комментария -->
						<h3>Всем рекомендую! Не пожалеете!</h3>
						<p>Мой Чарли терпеть не мог расческу, приходилось держать его за все лапы, а в перчатку Pet
							Brush Glove он просто влюбился, постоянно просит чтобы я его гладила и даже мыла в перчатке
							! Теперь мы с ним оба довольны, и дома чисто и Чарли радостный)</p>

						<!-- тело комментария -->
					</div>
				</div>
				<!-- комментарий -->

				<!-- комментарий -->
				<div style="visibility: visible; " class="row comment-body wow">
					<div class="col-sm-3 text-center">
						<!-- картинка и имя автора -->
						<img src="/img/ava2.png"  alt=" отзывы" title=" отзывы" class="img-responsive img-circle center-block mb">
						<h4>Дарья Корнилова</h4>
						<!-- картинка и имя автора -->
					</div>
					<div class="col-sm-9">
						<!-- тело комментария -->
						<h3>В использовании я осталась довольна!</h3>
						<p>У меня две собаки и две кошки, представляйте сколько у меня дома шерсти!! Когда увидела что
							появилась Pet Brush Glove Glove, я только о ней и думала. Заказала сразу две перчатки!Пока
							посылка шла - дни считала. Когда получила, целый день питомцев своих расчесывала, даже кошки
							довольны остались , хотя они у меня привереды обе. Так что всем советую, особенно тем кто
							любит чистоту в доме.</p>

						<!-- тело комментария -->
					</div>
				</div>
				<!-- комментарий -->

				<!-- комментарий -->
				<div style="visibility: visible; " class="row comment-body wow">
					<div class="col-sm-3 text-center">
						<!-- картинка и имя автора -->
						<img src="/img/ava3.png" alt=" отзывы" title=" отзывы" class="img-responsive img-circle center-block mb">
						<h4>Анна Щеглова</h4>
						<!-- картинка и имя автора -->
					</div>
					<div class="col-sm-9">
						<!-- тело комментария -->
						<h3>Очень здорово!</h3>
						<p>Рэкс постоянно трется около дивана,чтобы я его этой перчаткой расчесывала;) Теперь всегда
							чистая одежда,чистый диван, а главное чистый автомобиль!!! А то как на дачу не поедем,
							постоянно все в волосах. Спасибо перчатке Pet Brush Glove !</p>

						<!-- тело комментария -->
					</div>
				</div>
				<!-- комментарий -->


				<!-- видеоотзывы
                <div class="row comment-body wow " >
                  <div class="col-sm-6" >
                    <div class="video-wrapper" >
                      <iframe width="560"  height="315"  src="//www.youtube.com/embed/?rel=0&amp;showinfo=0&amp;controls=0"  frameborder="0"  allowfullscreen="allowfullscreen"  class="shadow" ></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6" >
                    <div class="video-wrapper" >
                      <iframe width="560"  height="315"  src="//www.youtube.com/embed/?rel=0&amp;showinfo=0&amp;controls=0"  frameborder="0"  allowfullscreen="allowfullscreen"  class="shadow" ></iframe>
                    </div>
                  </div>
                </div>
                -->
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 style="visibility: visible; " class="text-center wow"><b>Акция</b></h2>
				<div class="row">
					<div class="col-sm-6"><img src="/img/offer_1.png" alt="" title="" class="img-responsive img-rounded shadow center-block mb"></div>
					<div class="col-sm-6 mob-center">
						<h3 style="visibility: visible;" class="wow text-danger"><b>Внимание</b></h3>
						<h3 style="visibility: visible;" class="wow">Скидка - 50% (Экономия
							<span class="price_land_s1">139</span>
							<span class="price_land_curr">грн.</span>)</h3>
						<del style="visibility: visible;" class="wow">Старая цена: <span class="price_land_s4">598</span>
							<span class="price_land_curr">грн.</span></del>
						<h3 style="visibility: visible;" class="wow text-success mb mt"><b>Цена: <span class="price_land_s1">139</span>
								<span class="price_land_curr">грн.</span></b>
						</h3>
						<p style="visibility: visible;" class="wow">В
							виду высокой активности покупателей, акционных перчаток осталось
							всего 11 штук из 200. Спешите сделать заказ по уникальной цене.</p>
						<div style="visibility: visible;" class="eTimer wow">
							<div class="etTitle">До окончания акции осталось:</div>
							<div class="etUnit etDays">
								<div class="etNumber">0</div>
								<div class="etNumber">0</div>
								<div class="etSign">дней</div>
							</div>
							<div class="etSep">:</div>
							<div class="etUnit etHours">
								<div class="etNumber">0</div>
								<div class="etNumber">9</div>
								<div class="etSign">часов</div>
							</div>
							<div class="etSep">:</div>
							<div class="etUnit etMinutes">
								<div class="etNumber">5</div>
								<div class="etNumber">9</div>
								<div class="etSign">минут</div>
							</div>
							<div class="etSep">:</div>
							<div class="etUnit etSeconds">
								<div class="etNumber">1</div>
								<div class="etNumber">3</div>
								<div class="etSign">секунд</div>
							</div>
							<div class="etSep">:</div>
							<style type="text/css">.eTimer {
									display: inline-block;
									line-height: normal;
									font-family: Trebuchet MS;
									color: #756d6d;
									padding: 15px 15px;
									background: transparent;
									border: 0px solid white;
									-webkit-border-radius: 2px;
									-moz-border-radius: 2px;
									border-radius: 2px;
									-webkit-box-shadow: 0px 0px 0px 0px #333333;
									-moz-box-shadow: 0px 0px 0px 0px #333333;
									box-shadow: 0px 0px 0px 0px #333333;
								}

								.eTimer .etTitle {
									margin-bottom: 10px;
									font-size: 19px;
								}

								.eTimer .etUnit {
									display: inline-block;
								}

								.eTimer .etUnit .etNumber {
									display: inline-block;
									margin: 1px;
									text-align: center;
									font-family: Impact;
									font-size: 35px;
									color: white;
									padding: 0px 8px;
									background: #222222;
									border: 0px solid white;
									-webkit-border-radius: 5px;
									-moz-border-radius: 5px;
									border-radius: 5px;
									-webkit-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
									-moz-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
									box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
								}

								.eTimer .etUnit .etSign {
									text-align: center;
									font-size: 14px;
								}

								.eTimer .etSep {
									display: inline-block;
									vertical-align: top;
									font-size: 35px;
									padding: 0px 5px;
								}

								.eTimer .etSep:last-of-type {
									display: none;
								}</style>
							<style type="text/css">.eTimer .etUnit .etNumber {
									width: 35px;
								}</style>
						</div>
						<div style="visibility: visible;" class="mt wow">
							<a data-toggle="modal" href="#modal-id" class="btn btn-lg btn-custom">Оформить заказ</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="guaranry">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 style="visibility: visible; " class="text-center wow"><b>Гарантии</b></h2>
				<div class="row">
					<div style="visibility: visible; " class="col-sm-4 wow">
						<h4><b>Оплата при получении</b></h4>
						<img src="/img/guarantee_1.png" alt="" title="" class="img-responsive center-block mb">
						<p>Мы не берем с вас предоплату.</p>
						<p>Оплата заказа осуществляется при получении в почтовом отделении.</p>
					</div>
					<div style="visibility: visible; " class="col-sm-4 wow">
						<h4><b>Гарантии на товар</b></h4>
						<p>Перед отправкой товары проходят 100% проверку.</p>
						<p>Мы вернем вам деньги если что-то окажется не так.</p>
						<p>Мы соблюдаем Закон «О защите прав потребителей»</p>
						<p>Вы вправе отказаться от покупки в течение 14 дней с момента получения заказа, не зависимо от
							причины возврата.</p>
						<p>Вы можите вернуть товар с недостатками в течение 6 месяцев с момента получения заказа.</p>
					</div>
					<div style="visibility: visible; " class="col-sm-4 wow">
						<h4><b>Возврат денег</b></h4>
						<img src="/img/guarantee_2.png" alt="" title="" class="img-responsive center-block mb">
						<p>Вам необходимо обратиться в службу поддержки клиентов.</p>
						<p>Выслать нам купленный товар</p>
						<p>Мы вернём вам не только деньги за заказ, но и компенсируем ваши почтовые расходы.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="buy">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="text-center"><b>Акция</b></h2>
				<div class="row">
					<div class="col-sm-6">
						<img src="/img/offer_2.png" alt="" title="" class="img-responsive img-rounded shadow center-block mb"></div>
					<div class="col-sm-6 mob-center">
						<h3 style="visibility: visible;" class="wow text-danger"><b>Внимание</b></h3>
						<h3 style="visibility: visible;" class="wow">Скидка - 50% (Экономия <span class="price_land_s1">139</span>
							<span class="price_land_curr">грн.</span>)</h3>
						<del style="visibility: visible;" class="wow">Старая цена: <span class="price_land_s4">598</span>
							<span class="price_land_curr">грн.</span></del>
						<h3 style="visibility: visible;" class="wow text-success mb mt"><b>Цена: <span class="price_land_s1">139</span>
								<span class="price_land_curr">грн.</span></b>
						</h3>
						<p style="visibility: visible;" class="wow">В
							виду высокой активности покупателей, акционных перчаток осталось
							всего 11 штук из 200. Спешите сделать заказ по уникальной цене.</p>
						<div style="visibility: visible;" class="eTimer wow">
							<div class="etTitle">До окончания акции осталось:</div>
							<div class="etUnit etDays">
								<div class="etNumber">0</div>
								<div class="etNumber">0</div>
								<div class="etSign">дней</div>
							</div>
							<div class="etSep">:</div>
							<div class="etUnit etHours">
								<div class="etNumber">0</div>
								<div class="etNumber">9</div>
								<div class="etSign">часов</div>
							</div>
							<div class="etSep">:</div>
							<div class="etUnit etMinutes">
								<div class="etNumber">5</div>
								<div class="etNumber">9</div>
								<div class="etSign">минут</div>
							</div>
							<div class="etSep">:</div>
							<div class="etUnit etSeconds">
								<div class="etNumber">1</div>
								<div class="etNumber">3</div>
								<div class="etSign">секунд</div>
							</div>
							<div class="etSep">:</div>
							<style type="text/css">.eTimer {
									display: inline-block;
									line-height: normal;
									font-family: Trebuchet MS;
									color: #756d6d;
									padding: 15px 15px;
									background: transparent;
									border: 0px solid white;
									-webkit-border-radius: 2px;
									-moz-border-radius: 2px;
									border-radius: 2px;
									-webkit-box-shadow: 0px 0px 0px 0px #333333;
									-moz-box-shadow: 0px 0px 0px 0px #333333;
									box-shadow: 0px 0px 0px 0px #333333;
								}

								.eTimer .etTitle {
									margin-bottom: 10px;
									font-size: 19px;
								}

								.eTimer .etUnit {
									display: inline-block;
								}

								.eTimer .etUnit .etNumber {
									display: inline-block;
									margin: 1px;
									text-align: center;
									font-family: Impact;
									font-size: 35px;
									color: white;
									padding: 0px 8px;
									background: #222222;
									border: 0px solid white;
									-webkit-border-radius: 5px;
									-moz-border-radius: 5px;
									border-radius: 5px;
									-webkit-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
									-moz-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
									box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
								}

								.eTimer .etUnit .etSign {
									text-align: center;
									font-size: 14px;
								}

								.eTimer .etSep {
									display: inline-block;
									vertical-align: top;
									font-size: 35px;
									padding: 0px 5px;
								}

								.eTimer .etSep:last-of-type {
									display: none;
								}</style>
							<style type="text/css">.eTimer .etUnit .etNumber {
									width: 35px;
								}</style>
						</div>
						<div style="visibility: visible;" class="mt wow"><a data-toggle="modal" href="#modal-id" class="btn btn-lg btn-custom">Оформить заказ</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="mob-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="/img/minilogo2.png"  align="left" class="footimg">
			</div>
			 <div class="col-sm-6 text-right">
<!--				<p class="phone">Закажите обратный бесплатный звонок</p>-->
<!--				<a data-toggle="modal" href="#modal-zk" class="btn btn-lg btn-custom mb">Заказать <span>обратный</span> бесплатный звонок</a>-->
			</div>
		</div>

	</div>

	<center>
		<rekv>
			<p>ФОП Перцов А.М. ИНН 2287612808 </p>
			<p>Физический адрес: Украина, г. Киев, п-т Московский 16б</p>
			<p>График работы:</p>
			<p>Пн.- Пт. 8,30.00-20,00</p>
			<p>Сб.- Вс. 10,00.00-17,00</p></rekv>
		<br/>
		<a href="#" modal="polit">Политика конфиденциальности</a>
	</center>
</footer>
<!-- форма во всплывающем окне - заказ -->
<div id="modal-id" class="modal fade">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">×</span>
					<span class="sr-only">Close</span></button>
				<h4 class="modal-title">Заказать</h4>
			</div>
			<div class="modal-body">

				<form action="zakaz.php" method="POST" name="order_form" target="_parent" d_id="form_1" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">

					<div class="form-group">
						<label for="" class="sr-only">label</label>
						<select class="form-control input-lg country_select" name="country" id="country">
							<option value='Украина' selected="selected">Украина</option>
						</select>
					</div>
					<div class="form-group">
						<label for="" class="sr-only">label</label>
						<input name="name" placeholder="Введите ваше имя" class="form-control input-lg" required type="text">
					</div>

					<div class="form-group">
						<label for="" class="sr-only">label</label>
						<input name="phone" placeholder="Введите ваш телефон" class="form-control input-lg" required type="text">
					</div>

					<button type="submit" class="btn btn-creative btn-lg btn-block"><span>Заказать! </span></button>
					<p>Ваши данные не будут переданы третим лицам</p>
					<input type="hidden" name="s1" class="price_field_s1" value="139"/>
					<input type="hidden" name="s2" class="price_field_s2" value="350"/>
					<input type="hidden" name="s3" class="price_field_s3" value="1640"/>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- форма во всплывающем окне с заказом конец -->

<!-- форма во всплывающем окне звонок -->
<div id="modal-zk" class="modal fade">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">×</span><span
							class="sr-only">Close</span></button>
				<h4 class="modal-title">Заказать бесплатный обратный звонок</h4>
			</div>
			<div class="modal-body">

				<form action="zakaz.php" method="POST" name="order_form" target="_parent" d_id="form_2" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">

					<div class="form-group">
						<label for="" class="sr-only">label</label>
						<select class="form-control input-lg country_select" name="country" id="country">
							<option value='Украина' selected="selected">Украина</option>
						</select>
					</div>
					<div class="form-group">
						<label for="" class="sr-only">label</label>
						<input name="name" placeholder="Введите ваше имя" class="form-control input-lg" required="">
					</div>

					<div class="form-group">
						<label for="" class="sr-only">label</label>
						<input name="phone" placeholder="Введите ваш телефон" class="form-control input-lg" required="">
					</div>

					<button type="submit" class="btn btn-creative btn-lg btn-block"><span>Заказать! </span></button>
					<p>Ваши данные не будут переданы третим лицам</p>
					<input type="hidden" name="s1" class="price_field_s1" value="139"/>
					<input type="hidden" name="s2" class="price_field_s2" value="350"/>
					<input type="hidden" name="s3" class="price_field_s3" value="1640"/>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- форма во всплывающем окне звонок конец-->
<div style="display: none;" class="loader">
	<div class="signal"></div>
</div>

<script>
	jQuery(document).ready(function () {
		jQuery(".eTimer").eTimer({
			etType: 1,
			etDate: "31.12.2014.0.0",
			etTitleText: "До окончания акции осталось:",
			etTitleSize: 19,
			etShowSign: 1,
			etSep: ":",
			etFontFamily: "Trebuchet MS",
			etTextColor: "#756d6d",
			etPaddingTB: 15,
			etPaddingLR: 15,
			etBackground: "transparent",
			etBorderSize: 0,
			etBorderRadius: 2,
			etBorderColor: "white",
			etShadow: " 0px 0px 0px 0px #333333",
			etLastUnit: 4,
			etNumberFontFamily: "Impact",
			etNumberSize: 35,
			etNumberColor: "white",
			etNumberPaddingTB: 0,
			etNumberPaddingLR: 8,
			etNumberBackground: "#222222",
			etNumberBorderSize: 0,
			etNumberBorderRadius: 5,
			etNumberBorderColor: "white",
			etNumberShadow: "inset 0px 0px 10px 0px rgba(0, 0, 0, 0.5)"
		});
	});
</script>


<script type="text/javascript" src="/js/sisyphus.min.js_m_v=2.js"></script>
<script type="text/javascript" src="/js/form.custom.js_m_v=6.js"></script>



<div id="polit" class="modal">
	<div class="modal-block">
		<div class="icon-close"></div>
		<div class="title">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</div>
		<div class="content">
			<div class="padding"><p>Наш интернет-магазин уважительно относится к правам клиента. Соблюдается строгая
					конфиденциальность при оформлении заказа. Сведения надёжно сохраняются и защищены от передачи. </p>
				<p>Согласием на обработку данных клиента исключительно с целью оказания услуг является размещение заказа
					на сайте. </p>
				<p>К персональным данным относится личная информация о клиенте: домашний адрес; имя, фамилия, отчество;
					сведения о рождении; имущественное, семейное положение; личные контакты (телефон, электронная почта)
					и прочие сведения, которые перечислены в Законе Ук № 152-ФЗ «О персональных данных» от 27 июля 2006
					г. </p>
				<p>Клиент вправе отказаться от обработки персональных данных. Нами в данном случае гарантируется
					удаление с сайта всех персональных данных в трёхдневный срок в рабочее время. Подобный отказ клиент
					может оформить простым электронным письмом на адрес marketing@praktika-org.com.</p></div>
		</div>
	</div>
</div>

<div id="agreement" class="modal">
	<div class="modal-block">
		<div class="icon-close"></div>
		<div class="title">ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ<br><span class="agreement-clean">интернет-магазина /</span></div>
		<div class="content">
			<div class="padding">
				<p>Настоящее пользовательское соглашение заключается между Вами – физическим лицом и администрацией
					интернет ресурса интернет-магазина /</p>
				<p><b>Пользователь</b> – физическое лицо, достигшее совершеннолетия, способное своими действиями
					приобретать для себя гражданские права и самостоятельно их осуществлять, а также способность своими
					действиями создавать для себя гражданские обязанности, самостоятельно их выполнять и нести
					ответственность в случае их невыполнения, принявшее условия настоящего пользовательского соглашения
					и пользующееся услугами сайта.</p>
				<p><b>Производитель</b> – лицо, которое в силу своего вида экономической деятельности, на основе
					предпринимательской деятельности, занимается производством и обслуживанием продукции.</p>
				<p><b>Администрация</b> – субъект предпринимательской (ОГРН: , ИНН: , место регистрации: ), являющийся
					владельцем сайта на основании права частной собственности и осуществляющий организационную,
					финансовую, техническую поддержку существования и функционирования сайта.</p>
				<p><b>Стороны</b> – Администрация, Пользователи и Посетители сайта.</p>
				<p><b>Сайт</b> – интернет ресурс интернет-магазина, имеющий доменное имя brushglove,
					пребывающий под организационным управлением и принадлежащий администрации, на условиях права частной
					собственности.</p>
				<p><b>Продукция</b> – товары и услуги, предлагаемые Пользователю Администрацией, исчерпывающий перечень
					которых размещен на сайте.</p>
				<p><b>Публичная оферта</b> – адресованное администрацией неопределенному кругу лиц или нескольким
					конкретным лицам предложение, которое определенно, конкретно и выражает намерение лица, сделавшего
					предложение, считать себя заключившим данное пользовательское соглашение с адресатом, которым будет
					принято предложение.</p>
				<p><b>Акцепт</b> – полное принятие одной из Сторон условий публичной оферты Администрации на заключение
					данного пользовательского соглашения. Акцептированием публичной оферты происходит в момент начала
					пользования сайтом (в том числе в ознакомительных целях) и его сервисами (услугами).</p>

				<p class="no-margin"><b>1. Общие положения</b></p>
				<p class="no-margin">1.1. Настоящее Пользовательское соглашение (далее по тексту – «Соглашение»)
					определяет общие правила посещения, использования сервисов и нормы общего поведения на Сайте
					Пользователями и регулирует гражданско-правовые взаимоотношения, которые складываются между
					Пользователями, а так же Пользователями и Администрацией в процессе их взаимодействия.</p>
				<p class="no-margin">1.2. Настоящее Соглашение может быть изменено по решению Администрации, в
					одностороннем порядке. Администрация не несет обязательства личного уведомления Пользователей о
					таких изменениях. Новая редакция Соглашения вступает в силу, с момента публикации на сайте.</p>
				<p class="no-margin">1.3. Условия Соглашения распространяются как на всех посетителей сайта, без
					исключений.</p>
				<p>1.4. Посетитель/Пользователь, начиная пользоваться сервисом интернет-магазина, подтверждает факт
					того, что ознакомился с положениями настоящего пользовательского соглашения в здравом уме и при
					ясной памяти, понимает их в полной мере и принимает условия пользования интернет-магазином в полной
					мере. При несогласии с положениями настоящего Соглашения (частично или в целом), лицо, выразившее
					такую волю, не имеет право пользоваться информационным полем Сайта.</p>

				<p class="no-margin"><b>2. Регуляция взаимодействия сторон</b></p>
				<p class="no-margin">2.1. Администрация предоставляет Пользователям информационное поле деятельности
					интернет-магазина /, которое включает в себя, но не ограничивается информацией о: наименовании,
					виде, качестве продукции, ее стоимости, а так же о порядке размещения заказа, оплаты и доставки
					продукции пользователю представителями Администрации. Информация предоставляется на бесплатной
					основе.</p>
				<p class="no-margin">2.2. Пользователь самостоятельно размещает заказ на продукцию. Администрация может,
					но не обязуется предоставить услугу краткой консультации рекомендательного характера по задаваемым
					вопросам. Предоставление такой консультации осуществляется на бесплатной основе.</p>
				<p class="no-margin">2.3. Для получения услуги указанной в п. 2.2. Пользовательского соглашения,
					пользователь самостоятельно размещает свой вопрос. При этом необходимо кратко сформулировать свой
					вопрос, а так же оставить контактные данные – E-mail, контактный номер телефона.</p>
				<p class="no-margin">2.4. Администрация вправе не реагировать на размещенный запрос пользователя и не
					предоставлять ответ, в случае, если данный запрос будет нечетко сформулирован, содержать брутальные,
					оскорбительные имя пользователя, слова и словообороты в адрес Администрации, третьих лиц, а так же
					по другим причинам, руководствуясь внутренними убеждениями.</p>
				<p class="no-margin">2.5. Реализация предоставленных сайтом услуг и (или) возможностей не предоставляет
					Пользователю каких-либо исключительных прав и привилегий.</p>
				<p class="no-margin">2.4. Стороны настоящего соглашения достигли согласия о том, что Администрация
					вправе размещать на сайте рекламные блоки, баннеры, объявления в любых его областях, в том числе
					там, где размещается информация опубликованная Пользователем, без дополнительного согласия
					Пользователя.</p>
				<p class="no-margin">2.5. Информация, размещаемая на сайте Администрацией, является результатом
					интеллектуальной деятельности Администрации и все имущественные и личные неимущественные права на
					такую информацию, принадлежат Администрации, до тех пор, пока не будет установлено иное. При этом у
					Пользователя не возникает, каких-либо исключительных прав на результат интеллектуальной деятельности
					Администрации, выраженной в графической, текстовой, аудио-видео форме, размещаемой Администрацией на
					сайте.</p>
				<p class="no-margin">2.6. Администрация не несет обязательств по защите нарушенных прав Пользователя, в
					контексте урегулирования возникших на этой почве споров, в том числе, в судебном порядке.</p>
				<p class="no-margin">2.7. Нарушение Пользователем авторских прав, принадлежащих Администрации и (или)
					другим лицам, влечет для нарушителя ответственность, предусмотренную положениями действующего
					законодательства Российской Федерации.</p>
				<p class="no-margin">2.8. В случае выявления нарушения авторских прав Пользователем, путем незаконного
					размещения не принадлежащих Пользователю материалов, Администрация изымает из свободного доступа
					такие материалы, по первому требованию законного правообладателя.</p>
				<p class="no-margin">2.9. Пользователю запрещается размещать на сайте информацию, которая прямо, или
					косвенно содержит в себе общепринятые признаки порнографии, оскорбляющую, ущемляющую, наносящую
					ущерб чьему-либо достоинству, содержащую призывы к насилию, бесчинству и другим действиям, влекущим
					нарушения норм действующего законодательства, определенной территориальной юрисдикции, содержащую
					вредоносное программное обеспечение и (или) другую информацию, которая может принести вред третьим
					лицам.</p>
				<p class="no-margin">2.10. В случае нарушения условий п. 2.9. настоящего Соглашения и невыполнения
					требований Администрации, в том числе по изъятию такой информацию из публичного доступа,
					Пользователи сайта несут ответственность предусмотренную положениями настоящего Соглашения и(или)
					действующего законодательства Российской Федерации. Администрация в таком случае, имеет право убрать
					упомянутую в п. 2.9. информацию самостоятельно.</p>
				<p class="no-margin">2.11. Администрация не несет ответственности за результаты посещения Пользователем
					сторонних (внешних) ресурсов, ссылки на которые могут быть размещены на сайте. Под результатами
					понимается любой результат вне зависимости от его характера, а так же тот, от наступления которого
					Пользователь понес какие-либо материальные убытки, моральный ущерб и другие негативные
					проявления.</p>
				<p>2.12. Продукция, предлагаемая Администрацией Пользователям, распространяется дистанционно в рамках
					требований, установленных действующим законодательством Российской Федерации, сертифицирована и
					соответствует требованиям, которые определены законодательством в сфере защиты прав
					потребителей.</p>

				<p class="no-margin"><b>3. Порядок использования услуг Пользователем</b></p>
				<p class="no-margin">3.1. Пользователь имеет право свободно пользоваться услугами и предложениями,
					изложенными на сайте в полной мере, кроме тех случаев, когда такое использование является
					незаконным, нарушает права, свободы и интересы Администрации и (или) других Пользователей сайта.</p>
				<p class="no-margin"><b>3.2. Порядок размещения заказа</b></p>
				<p class="no-margin">3.2.1. Пользователь самостоятельно посещает информационное поле сайта, выбирает
					продукт и размещает заказ.</p>
				<p class="no-margin">3.2.2. В случае необходимости, Администрация предоставляет Пользователю
					консультационно – информационное обслуживание по подбору продукции, в порядке, предусмотренном этим
					Пользовательским соглашением.</p>
				<p class="no-margin">3.2.3. Пользователь выбирает ту продукцию, которая размещена на сайте, и
					Администрация не несет ответственности за последствия, в случае размещения Пользователем заказа на
					сторонних ресурсах. Данный пункт имеет юридическую силу и в тех случаях, когда сторонние ресурсы
					копируют, дублируют информацию, размещенную на сайте, включая фирменное наименование, логотип,
					дизайн, стиль изложения информации на сайте.</p>
				<p class="no-margin">3.2.4. Оформление заказа происходит путем заполнения формы заявки. Поля, отмеченные
					символом «*», обязательны к заполнению. В конце формы необходимо нажать кнопку «Заказать».</p>
				<p class="no-margin">3.2.5. Стороны достигли согласия, что на указанный номер телефона (адрес
					электронной почты) Пользователя, Администрация отправляет краткое информационное сообщение с
					деталями заказа и/или другой необходимой информацией. Пользователь, начиная пользоваться сервисом
					интернет-магазина http://a.brushglove.ru, принимает это условие в полной мере и гарантирует, что не
					будет иметь каких-либо претензий относительно изложенного.</p>
				<p class="no-margin">3.2.6. После осуществления описанных выше операций, заказу Пользователя
					присваивается индивидуальный номер, и заказ считается размещенным, о чем выдается соответствующее
					уведомление. В течение некоторого времени, Администрация связывается с Пользователем, указанным в п
					3.2.5. способ, для подтверждения заказа.</p>
				<p class="no-margin"><b>3.3. Порядок оплаты продукции</b></p>
				<p class="no-margin">3.3.1. Продукция оплачивается в формате 100% предоплаты или на иных условиях,
					достигнутых Сторонами при размещении Пользователем заказа и (или) на других этапах взаимодействия
					Сторон.</p>
				<p class="no-margin">3.3.4. Доставка продукции осуществляется, лишь после достижения условий, изложенных
					в п. 3.3.1. Пользовательского соглашения.</p>
				<p class="no-margin"><b>3.4. Порядок доставки продукции</b></p>
				<p class="no-margin">3.4.1 Доставка продукции Пользователю осуществляется собственными силами и
					транспортом Администрации, либо транспортной компанией.</p>
				<p class="no-margin">3.4.2. Условия доставки продукции индивидуальны для каждого взятого в отдельности
					случая.</p>
				<p class="no-margin">3.4.3. Порядок и срок доставки продукции Пользователю определяется в процессе
					размещения заказа Пользователем.</p>
				<p class="no-margin">3.4.4. Стороны достигли согласия, что доставка продукции Пользователю
					осуществляется в порядке, предусмотренном Пользовательским соглашением. Самовывоз продукции
					Пользователем со склада возможен, при условии дополнительного согласования порядка самовывоза с
					Администрацией.</p>
				<p class="no-margin">3.4.5. В случае осуществления поставки продукции на условиях постоплаты, Продукция
					передается курьером Пользователю, лишь после оплаты Пользователем курьеру полной стоимости
					продукции.</p>
				<p class="no-margin"><b>3.5. Порядок возврата продукции</b></p>
				<p class="no-margin">3.5.1. Пользователь вправе отказаться от продукции в любое время до его передачи, а
					после передачи товара - в течение 7 дней, кроме тех случаев, когда данное право Пользователя
					ограничено нормами действующего законодательства Российской Федерации.</p>
				<p class="no-margin">3.5.2. Возврат продукции надлежащего качества возможен в случае, если сохранены его
					товарный вид, потребительские свойства, а также документ, подтверждающий факт и условия покупки
					указанной продукции.</p>
				<p class="no-margin">3.5.3. Пользователь не вправе отказаться от продукции надлежащего качества,
					имеющего индивидуально-определенные свойства, если указанная продукция может быть использована
					исключительно приобретающим его Пользователем.</p>
				<p>3.5.4. При отказе Пользователя от продукции, производитель продукции должен возвратить ему сумму,
					уплаченную Пользователем в соответствии с договором, за исключением расходов на доставку от
					Пользователя возвращенной продукции, не позднее чем через 10 дней с даты предъявления Пользователем
					соответствующего требования производителю.</p>

				<p class="no-margin"><b>4. Обязанности и ответственность сторон</b></p>
				<p class="no-margin">4.1. В случае использования результатов интеллектуальной собственности
					Администрации - материалов сайта, в любых целях, Пользователь обязан предварительно, перед
					размещением таких материалов, получить на это разрешение администрации. При наличии разрешения
					Администрации, Пользователь обязан отобразить полное название и доменное имя источника в следующем
					формате: интернет-магазин http://a.brushglove.ru. Гиперссылка должна являться активной и прямой, при
					нажатии на которую осуществляется переход на конкретную страницу сайта, с которой заимствован
					материал.</p>
				<p class="no-margin">4.2. По аналогии с инструкциями, изложенными в п. 4.1. настоящего Соглашения,
					Пользователь обязуется действовать, в случае использования результатов интеллектуальной
					собственности, что принадлежать третьим лицам. Способ и порядок осуществления уточняется в процессе
					переговоров с правообладателем материалов.</p>
				<p class="no-margin">4.3. Администрация не несет ответственности за действия Пользователя, которые
					повлекли нарушение прав третьих лиц, кроме случаев определенных действующим законодательством
					Российской Федерации.</p>
				<p class="no-margin">4.4. Администрация не несет ответственности за содержание информации, размещенной
					пользователями.</p>
				<p class="no-margin">4.5. Администрация не несет ответственности за содержание отзывов пользователей
					сайта. Отзывы пользователей сайта являются субъективными мнениями их авторов, никоим образом не
					претендующими на объективность. Они могут не совпадать с общественным мнением и не соответствовать
					действительности.</p>
				<p class="no-margin">4.6. Решение о выдаче/не выдаче персональных данных, принимается Администрацией,
					лишь на основании запроса, посланного лицом Администрации, в установленном нормами действующего
					законодательства порядке.</p>
				<p class="no-margin">4.7. Администрация вправе не реагировать на запросы, обращения и письма, что не
					содержат реквизитов обращающегося (ФИО, контактные данные).</p>
				<p class="no-margin">4.8. Администрация не несет ответственности за регистрационные данные, что были
					указаны пользователем при взаимодействии с информационным полем сайта.</p>
				<p class="no-margin">4.9. Администрация имеет право, без объяснения причин ограничить, блокировать
					доступ Пользователя (в т.ч. незарегистрированного) на сайт, с частичным, или полным удалением
					информации, что была размещена Пользователем на сайте.</p>
				<p>4.10. Администрация обязуется рассмотреть претензию, оформленную в порядке предусмотренном разделом 4
					соглашения, в течении 30 (тридцати) календарных дней с даты ее получения.</p>

				<p class="no-margin"><b>5. Порядок урегулирования споров</b></p>
				<p class="no-margin">5.1. В случае выявления на Сайте размещенной информации, содержащей в себе
					результаты интеллектуальной собственности, принадлежащие третьим лицам, правообладатель обязан:</p>
				<p class="no-margin">5.1.1. Составить претензию с указанием фактических и нормативных оснований, которые
					дают возможность Администрации изъять информацию из публичного доступа.</p>
				<p class="no-margin">5.1.2. Прикрепить к претензии доказательства оригинальности результата
					интеллектуальной собственности (оригинальный экземпляр, другие документы, подтверждающие
					правообладание на объект авторского права).</p>
				<p class="no-margin">5.1.3. Отправить пакет документов, упомянутых в положениях п.п. 5.1.1., 5.1.2.
					настоящего Соглашения, на электронный почтовый ящик администрации: poddergka.magazina@gmail.com</p>
				<p class="no-margin">5.2. Претензии Пользователей по качеству обслуживания, продукции, а так же другие
					замечания, следует отправлять на электронный почтовый ящик администрации:
					poddergka.magazina@gmail.com</p>
				<p class="no-margin">5.3. В случае описанном п. 3.2.3. Пользовательского соглашения, рекламации,
					претензии, замечания направляются руководству соответствующих ресурсов. Администрация вправе не
					реагировать на такие обращения.</p>
				<p>5.4. Администрация не обязана содействовать поиску указанных в п. 3.2.3. лиц, а так же иных третьих
					лиц, действиями которых были нарушены права, свободы и интересы Пользователей.</p>

				<p class="no-margin"><b>6. Прочие условия</b></p>
				<p class="no-margin">6.1. Все возможные ситуации, споры, вытекающие из взаимоотношений Пользователей,
					Пользователей и третьих лиц, Пользователей и администрации, не урегулированные этим соглашением,
					решаются в порядке, определенном нормами действующего законодательства Российской Федерации.</p>
				<p class="no-margin">6.2. Стороны по настоящему соглашению осознают объем прав и обязанностей,
					порожденных взаимоотношениями лиц, упомянутых этим соглашением, и в полной мере отдают отчет своим
					действиям, понимая юридическую природу последствий таких действий, в полной мере.</p>
				<p class="no-margin">6.3. Бездействие со стороны Администрации в случае нарушения кем-либо из
					Пользователей положений Соглашения, не лишает Администрацию права предпринять позднее
					соответствующие действия в защиту своих интересов и защиту охраняемых законом прав.</p>
				<p class="no-margin">6.4. По всем вопросам, кроме тех, которые зафиксированы в Разделе 5
					Пользовательского соглашения, Пользователи могут обращаться к Администрации, путем направления
					соответствующих обращений.</p>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript"><!--
	//-->
</script>

<div style="display: none !important;">
</div>
</body>
</html>
