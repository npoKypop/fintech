<?php
use FintechFab\Widgets\LinksInMenu;

?>
<div class="container">
	<header class="row">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
						<span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">fintech fab</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li <?= LinksInMenu::isActive(URL::route('vanguard')) ?>>
							<a href="<?= URL::route('vanguard') ?>">Стажировка</a>
						</li>
						<?= LinksInMenu::linkForMainMenu() ?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?= LinksInMenu::echoAuthMode() ?>
					</ul>
					<?= View::make('vanguard.loginModal') ?>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
</div>