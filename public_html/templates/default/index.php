<?php if (!empty($advantages)) : ?>

	<section class="benefits">
		<h2 class="visually-hidden">Наши преимущества</h2>
		<div class="container container--small">
			<div class="benefits-row">

				<?php foreach ($advantages as $item) : ?>

					<div class="benefits-item">
						<img src="<?= $this->img($item['img']) ?>" alt=" <?= $item['name'] ?>" class="benefits-item-icon">
						<p class="benefits-item-desc" style="font-size: 22px;"><?= $item['short_content'] ?></p>
					</div>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

<?php endif; ?>

<section class="apartments" style="margin-top: 10px;">
	<div class="container">
		<div class="apartments-title">
			<h2 class="title-2">Наш автопарк</h2>
		</div>
		<div class="apartments-cards">
			<div href="" class="card">
				<img src="<?= PATH . TEMPLATE ?>assets/img/main/газель.jpg" alt="card-image" class="card-img">
			</div>
			<div class="card">
				<img src="<?= PATH . TEMPLATE ?>assets/img/main/зил.jpg" alt="card-image" class="card-img">
			</div>
			<div href="" class="card">
				<img src="<?= PATH . TEMPLATE ?>assets/img/main/камаз.jpg" alt="card-image" class="card-img">
			</div>

		</div>
	</div>
</section>

<section class="cta" style="background: linear-gradient(90deg, #343e49 0%, rgba(36, 43, 51, 0) 100%, #343e49 90.1%), linear-gradient(0deg, rgba(36, 43, 51, 0.7), rgba(36, 43, 51, 0.9)), url(<?= $this->img($this->set['promo_img']) ?>) center center/cover no-repeat, #343e49; padding: 70px 0;">
	<div class="container">
		<div class="cta-title" id="price">
			<h2 class="title-2">Стоимость услуг</h2>
		</div>
		<div class="cta-row">
			<div class="cta-text" style="font-size: 20px;">
				<?= $this->set['description'] ?>
			</div>
			<div class="cta-text" id="about" style="font-size: 16px;">
				<h2 class="title-2">О нас</h2><br>
				<div><?= $this->set['about_us'] ?></div>
			</div>

			<div class="form cta-form">

				<div class="form-privacy" style="font-size: 18px; color: #D4C17F"><?= $this->set['working_time'] ?></div>

			</div>
		</div>
	</div>
</section>

<?php if (!empty($goods)) : ?>

	<section class="services" id="services" style="margin: 70px 0;">
		<div class="container">
			<div class="apartments-title">
				<h2 class="title-2">Наши услуги</h2>
			</div>

			<?php foreach ($goods as $item) {

				$this->showGoods($item);
			} ?>




		</div>
	</section>

<?php endif; ?>