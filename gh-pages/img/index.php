<html lang="ru">
	<head>
		<meta charset="utf-8">
		<link rel='stylesheet' href='css.css'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald" type="text/css">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>BotBanana | Покупка доната</title>
	</head>
<body>

	<div class="container-fluid" style="margin-top: 1%;">
		<div class="panel">
			<div style="padding: 10px; border-radius: 15px 15px 0px 0px;" class="container">
				<p style="font-size: 40px; margin: 0px; text-align: center; font-family: Oswald;">ПОКУПКА ДОНАТА</p>
			</div>
			<div>
				<form action="payment.php" method="post">
					<div class="container-main">
						<div>
							<div class="fixerror"></div>
							<input required type="text" id="user" name="id" style="background-color: #3c3c4c; color: #ffffff; outline: none; border: #3c3c4c;" placeholder=" Ваш игровой ID в боте (профиль)">
							<div class="fixerror"></div>

							<select style="background-color: #3c3c4c; color: #ffffff; outline: none; border: #3c3c4c;" required name="tovar" id="user">
								<option disabled selected>Выберите товар для покупки</option>
								<optgroup label="Привилегии 👑">
									<option value="1">DELUXE || 249р.</option>
									<option value="2">PREMIUM || 120р.</option>
									<option value="3">VIP || 45р.</option>
								</optgroup>
								<optgroup label="Кейсы 📦">
									<option value="4">Кейсы 1шт. || 10р. </option>
									<option value="5">Кейсы 5шт. || 40р. </option>
									<option value="6">Кейсы 10шт. || 80р. </option>
									<option value="7">Кейсы 40шт. || 200р. </option>
								</optgroup>
								<optgroup label="Машины 🚗">
									<option value="8">Bugatti Veyron Super Sport || 70р.</option>
									<option value="9">Devel Sixteen || 45р.</option>
									<option value="10">Thrust SSC || 25р.</option>
								</optgroup>
								<optgroup label="Игровая валюта 🍌">
									<option value="11">1.000.000.000.000б. || 35р.</option>
									<option value="12">700.000.000.000б. || 20р.</option>
									<option value="13">300.000.000.000б. || 10р.</option>
								</optgroup>
								<optgroup label="Игровой опыт 🌟">
									<option value="14">50.000оп. || 110р.</option>
									<option value="15">15.000оп. || 50р.</option>
									<option value="16">5.000оп. || 25р.</option>
								</optgroup>
							</select>
							<?php /*<button id="user" style="background-image: url(img/button.jpg); outline: none; border: 0; font-family: Oswald;">Купить</button>
							<div style="padding-bottom: 4px;"></div>
							<a href="https://vk.com/bot_banan4ik" target="_blank" style="color: #ffffff; a:hover { background: #786b59;  color: #ffe;
							} "> Описание доната </a> <p style="margin: 0px;"></p> <a href="http://botbanana.best/api/" target="_blank" style="color: #ffffff; a:hover { background: #786b59;  color: #ffe;
							} "> API </a>*/ ?>
						</div>
					</div>
					<div>
						<div class="container-main">
							<div class="fixerror"></div>
						<input type="submit" name="submit" style="background: linear-gradient(to left,#2187ff 0%,#a70de6 100%); font-size: 20px; padding: 8px; width: 100%; color: #ffffff; font-family: Oswald; border: none;" value="ПЕРЕЙТИ К ОПЛАТЕ">
						<script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

							<!-- VK Widget -->
							<div id="vk_groups"></div>
							<script type="text/javascript">
							VK.Widgets.Group("vk_groups", {mode: 3, width: "400", color1: '30303e', color2: 'FFFFFF', color3: 'FFFFFF'}, 189321788);
					</script>
					</div>
				</form>
			</div>
		</div>
</body>
</html>