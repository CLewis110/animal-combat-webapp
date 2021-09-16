<x-layout>

	<section class="py-8 max-w-md mx-auto">

		<h1 class="text-lg font-bold mb-4">
			Create New Fighter
		</h1>

		<x-panel>
			<form method="POST" action="/admin/fighters" enctype="multipart/form-data">
				@csrf 

					<div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="name"
	                    >
	                        Fighter Name
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="text"
	                        name="name"
	                        id="name"
	                        value="{{ old('name') }}"
	                        required
	                    >

	                    @error('name')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>


	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="category"
	                    >
	                        Category
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="text"
	                        name="category"
	                        id="category"
	                        value="{{ old('category') }}"
	                        required
	                    >

	                    @error('name')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <!-- MAMP does not support PHP 8.0 so this implementation is not working the way shown -->
	                
	                <!-- <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="thumbnail"
	                    >
	                        Thumbnail
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="file"
	                        name="thumbnail"
	                        id="thumbnail"
	                        value="{{ old('thumbnail') }}"
	                        required
	                    >

	                    @error('thumbnail')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div> -->

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="movement_type"
	                    >
	                        Movement Type
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="text"
	                        name="movement_type"
	                        id="movement_type"
	                        value="{{ old('movement_type') }}"
	                        required
	                    >

	                    @error('movement_type')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="attack_type"
	                    >
	                        Attack Type
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="text"
	                        name="attack_type"
	                        id="attack_type"
	                        value="{{ old('attack_type') }}"
	                        required
	                    >

	                    @error('attack_type')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="description"
	                    >
	                        Description
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="text"
	                        name="description"
	                        id="description"
	                        value="{{ old('description') }}"
	                        required
	                    >

	                    @error('description')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="health"
	                    >
	                        Health
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="number"
	                        name="health"
	                        id="health"
	                        value="{{ old('health') }}"
	                        required
	                    >

	                    @error('health')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="strength"
	                    >
	                        Strength
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="number"
	                        name="strength"
	                        id="strength"
	                        value="{{ old('strength') }}"
	                        required
	                    >

	                    @error('strength')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="defense"
	                    >
	                        Defense
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="number"
	                        name="defense"
	                        id="defense"
	                        value="{{ old('defense') }}"
	                        required
	                    >

	                    @error('defense')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <div class="mb-6">
	                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
	                        for="speed"
	                    >
	                        Speed
	                    </label>

	                    <input class="border border-gray-400 p-2 w-full"
	                        type="number"
	                        name="speed"
	                        id="speed"
	                        value="{{ old('speed') }}"
	                        required
	                    >

	                    @error('speed')
	                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
	                    @enderror
	                </div>

	                <x-form.submit-button>Create Fighter</x-form.submit-button>
			</form>
		</x-panel>		
	</section>
</x-layout>