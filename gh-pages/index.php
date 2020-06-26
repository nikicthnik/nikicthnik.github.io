<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald" type="text/css"/>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>Покупка доната</title>
</head>
<body>
	<div class="container-fluid" style="margin-top: 1%; margin-left: 326px; width: 700px;">
		<div class="panel">
			<div style="padding: 10px; border-radius: 15px 15px 0px 0px;" class="container">
				<p style="font-size: 40px; margin: 0px; text-align: center; font-family: Oswald;">ПОКУПКА ДОНАТА</p>
			</div>
			<div>
				<form action="payment.php" method="post">
					<div class="container-main">
						<div>

							<!-- Игровой id -->
							<div class="fixerror" style="width: 500px;"></div>
							<input required="" type="text" id="user" name="id" style="background-color: #3c3c4c; color: #ffffff; outline: none; border: #3c3c4c; width: 510px; height: 38px; font-size: 17px;" placeholder= "Ваш игровой ID в боте (профиль)">
							<div class="fixerror"></div>

							<!-- Выбор товара -->
							<select style="background-color: #3c3c4c; color: #ffffff; outline: none; border: #3c3c4c; width: 519px; height: 43px; font-size: 17px;" required="" name="tovar" id="user">
								<option disabled="" selected="">Выберите товар для покупки</option>

								<!-- Аномальный туман -->
								<optgroup label="Аномальный туман">

									<!-- Оружия/броня -->
									<optgroup label="ᅠОружия/броня">
										<option value="79407">ᅠAUG 9MM || 45р.</option>
									</optgroup>

									<!-- Кейсы -->
									<optgroup label="ᅠКейсы">
										<option value="79408">ᅠКейс обычный || 20р.</option>
										<option value="79409">ᅠКейс особый || 70р.</option>
										<option value="79410">ᅠКейс редкий || 150.</option>
										<option value="79411">ᅠКейс исключительный || 200р.</option>
									</optgroup>
								</optgroup>

								<!-- Режим сити -->
								<optgroup label="CityB">

									<!-- Привилегии -->
									<optgroup label="ᅠПривилегии">
										<option value="79412">ᅠVip город || 60р.</option>
										<option value="79413">ᅠДепутат || 120р.</option>
										<option value="79414">ᅠПрезидент || 249.</option>
									</optgroup>

									<!-- Деньги -->
									<optgroup label="ᅠВалюта">
										<option value="79415">ᅠ50.000.000$ || 15р.</option>
										<option value="79416">ᅠ100.000.000$ || 25р.</option>
									</optgroup>

								</optgroup>
								
							</select>
													</div>
					</div>
				</form>
					<div>
						<div class="container-main">
							<div class="fixerror"></div>

							<!-- Перейти к оплате -->
						<input id="buy" type="submit" name="submit" style="background: linear-gradient(to left,#2187ff 0%,#a70de6 100%); font-size: 20px; padding: 8px; width: 74%; color: #ffffff; font-family: Oswald; border: none; margin-top: 10px;" value="💳Перейти к оплате"> <br/>

						<span style="color: white; font-size: 13px;"> Нажимая на кнопку "Перейти к оплате" Вы соглашаетесь с <a href="#">пользовательским соглашением.</a></span>

						<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>


							<!-- VK Widget сообщетсов -->
							<div id="vk_groups" style="width: 400px; height: 183px; background: none; margin-top: 30px; margin-left: 100px;">
								<script type="text/javascript">
							VK.Widgets.Group("vk_groups", {mode: 3, width: "500", color1: '30303e', color2: 'FFFFFF', color3: 'FFFFFF'}, 181335822);
							</script>
							</div>
					</div>
				
			</div></form>
		</div>

</div></div>

<div style="margin-left: 470px; margin-top: 80px;">
	<h4>Nikitchnik bot | Игровой бот © 2020. Все права защищены.</h4>
</div>
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

	<!-- VK Widget сообщения -->
	<div id="vk_community_messages"></div>

	<script type="text/javascript">
		VK.Widgets.CommunityMessages("vk_community_messages", 181335822, {disableButtonTooltip: "1"});
	</script>

</body>
</html>