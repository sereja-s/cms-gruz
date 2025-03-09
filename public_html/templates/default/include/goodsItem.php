<!-- карточка товара -->

<?php if (!empty($data)) : ?>

	<div class="apartments-cards" style="margin-bottom: 45px;">
		<div class="card">
			<img class="card-img" src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
			<h3 class="card-title"><?= $data['short_content'] ?></h3>
		</div>
		<div><?= $data['content'] ?></div>

	</div>

<?php endif; ?>