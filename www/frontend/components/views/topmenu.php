<?php
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
    // use yii\helpers\Html;
?>
<!-- <div class="container">
	<div class="blok-logo">	
		<a href="#">
		<img src="/img/logo.png" class="img-logo" alt="Site home page" title="Site logo" /> 
			<h1 class="sitename">My site name</h1>
			<p class="slogan">Your slogan goes here</p>
		</a>				
	</div>				
	<nav class="navbar">
		<ul class="topmenu">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Mission</a></li>
		</ul>
	</nav>
</div> -->
<?php
    NavBar::begin([
        'brandLabel' => '<div class="blok-logo">
			<img title="Site logo" alt="Site home page" class="img-logo" src="/img/logo.png"> 
				<h1 class="sitename">My site name</h1>
				<p class="slogan">Your slogan goes here</p>
			</div>',
        'brandOptions' => [
        	'style'=>'padding-top: 0;'
        ],
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            'style' => 'background-color: transparent; border:none;',
        ],
    ]);
	 
	echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
	 
	NavBar::end();
?>