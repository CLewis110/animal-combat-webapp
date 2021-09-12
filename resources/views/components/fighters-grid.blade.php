@props(['fighters'])

<x-featured-stats :fighter="$fighters[0]" />

@if ($fighters->count() > 1)

	<div class="lg:grid lg:grid-cols-6">

		@foreach ($fighters->skip(1) as $fighter)

			<x-stats :fighter="$fighter" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>

		@endforeach

	</div>

@endif