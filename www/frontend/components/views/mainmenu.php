<?php
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
    // use yii\helpers\Html;
?>
<!-- <div class="container">
		<nav class="navbar-top">
			<ul class="topmenu2" id="">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Page 1</a></li>
				<li><a href="#">Page 2</a></li>
				<li><a href="#">Submenu</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div> -->
<?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-top',
            // 'style' => 'background-color: transparent; border:none;',
        ],
    ]);
	 
	echo Nav::widget([
        'options' => ['class' => 'topmenu2'],
        'items' => $menuItems,
    ]);
	 
	NavBar::end();
?>