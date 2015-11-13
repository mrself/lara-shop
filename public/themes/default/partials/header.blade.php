<header class="header">
	{!! Theme::partial('top-panel') !!}
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				Logo
			</div>
			<div class="col-lg-8">
				{!! Theme::partial('header-search') !!}
			</div>
			<div class="col-lg-8">
				{!! Theme::partial('cart') !!}
			</div>
		</div>
	</div>
</header>
{!! Theme::widget('navigation', ['slug' => 'main-menu'])->render() !!}
