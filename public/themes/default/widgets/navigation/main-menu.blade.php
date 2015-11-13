@if (!empty($links))
<div class="nav container">
	<div class="row">
		<div class="col-lg-24">
			<ul class="nav__list">
			@foreach ($links as $link)
				<li class="nav__i">
					<a href="{{ url($link->link) }}" class="nav__link">{{ $link->title }}</a>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>
@endif