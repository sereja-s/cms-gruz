<footer class="footer">
	<div class="container">
		<div class="footer-row">
			<div class="footer-logo"><a href="<?= $this->alias() ?>">
					<img src="<?= $this->img($this->set['img']) ?>" alt="Loft House">
				</a></div>
			<div class="footer__nav">
				<nav>
					<ul class="footer__nav-list" style="font-size: 18px;">
						<li><a href="#about">О нас</a></li>
						<li><a href="#price">Стоимость услуг</a></li>
						<li><a href="#services">Услуги</a></li>
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

					<?php if (!empty($this->phones)) : ?>

						<?php foreach ($this->phones as $phone) : ?>

							<li>Телефон: <a href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['phone']) ?>"><?= $phone['phone'] ?></a> - <?= $phone['name'] ?> </li>

						<?php endforeach; ?>

					<?php endif; ?>

					<li><?= $this->set['working_time'] ?></li>
					<li>E-mail: <a href="mailto:<?= $this->set['email'] ?>" class="link-bold"><?= $this->set['email'] ?></a></li>
				</ul>

				<?php if (!empty($this->socials)) : ?>

					<ul class="footer__socials">

						<?php foreach ($this->socials as $item) : ?>

							<li><a href="<?= $this->alias($item['external_alias']) ?>"><img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>"></a></li>

						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

			</div>
		</div>
	</div>
	<div class="footer__copyright" style="margin-top: 25px;">
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