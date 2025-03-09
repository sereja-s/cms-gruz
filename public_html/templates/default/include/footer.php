<footer class="footer">
	<div class="container">
		<div class="footer-row">
			<div class="footer-logo"><a href="#">
					<img src="<?= PATH . TEMPLATE ?>assets/img/logo2.jpg" alt="Loft House">
				</a></div>
			<div class="footer__nav">
				<nav>
					<ul class="footer__nav-list" style="font-size: 18px;">
						<li><a href="#about">О нас</a></li>
						<li><a href="#price">Стоимость услуг</a></li>
						<li><a href="#services">Услуги</a></li>
						<li>
							<p>Контакты</p>
						</li>
					</ul>
				</nav>
			</div>
			<!-- <div class="footer__nav">
                <nav>
                <ul class="footer__nav-list">
                    <li><a href="">Поселение и переезд</a></li>
                    <li><a href="">Сервисные услуги</a></li>
                    <li><a href="">Экологическая устойчивость</a></li>
                    <li><a href="">Инвестиционные возможности</a></li>
                    <li><a href="">Программа лояльности </a></li>
                </ul>
            </nav></div> -->
			<div class="footer-address" id="contacts">
				<ul class="footer__nav-list" style="font-size: 16px;">
					<!-- <li>Адрес: Наб. реки Фонтанки 10-15</li> -->
					<li>Телефон: <a href="tel:+78121234567">+7(949) 593-98-34</a> - Руслан </li>
					<li>Телефон: <a href="tel:+78121234567">+7(949)355-26-51</a> - Николай</li>
					<li>График работы: 8:00 - 21:00</li>
					<li>E-mail: <a href="mailto:@lofthouse.ru" class="link-bold">грузцентр@mail.ru</a></li>
				</ul>
				<ul class="footer__socials">
					<li><a href="!#"><img src="./../img/socials/vk.svg" alt=""></a></li>
					<li><a href="!#"><img src="./../img/socials/youtube.svg" alt=""></a></li>
					<li><a href="!#"><img src="./../img/socials/facebook.svg" alt=""></a></li>
					<li><a href="!#"><img src="./../img/socials/instagram.svg" alt=""></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="container">
			<p class="footer__copyright-text">Обращаем Ваше внимание на то, что данный интернет-сайт носит
				исключительно информационный характер и ни при каких условиях информационные материалы
				и цены,
				размещенные на сайте, не являются публичной офертой, определяемой положениями
				Гражданского кодекса РФ
			</p>
			<div class="footer__props" style="text-align: center;">
				<div><?= date('Y') ?> г.</div><br>
				<span style="padding-right: 5px;">сделано в</span>
				<a href="<?= $this->set['external_alias'] ?>">САЙТ ПОСТРОЕН</a>
			</div>
		</div>
	</div>
</footer>



<!-- <script src="js/main.js"></script> -->

<?php $this->getScripts() ?>

</body>

</html>