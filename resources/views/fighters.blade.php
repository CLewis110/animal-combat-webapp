<x-layout>

	@include ('_fighters-header')

	<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

		@if ($fighters->count())
		
			<x-fighters-grid :fighters="$fighters" />

		@else

			<p class="text-center">No fighters yet.  Please check back later.</p>

		@endif

	</main>

</x-layout>