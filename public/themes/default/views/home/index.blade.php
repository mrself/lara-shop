@if ($products)
<div class="prs">
	<ul class="prs__list row">
		@foreach ($products as $product)
		<li class="prs__i col-lg-6">
			<a href="{{ $product->slug }}" class="prs__link">{{ $product->title }}</a>
		</li>
		@endforeach
	</ul>
</div>
@endif