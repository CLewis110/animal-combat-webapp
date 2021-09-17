<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $fighter->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">Created By {{ $fighter->user->name }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            See All Animals
                        </a>

                        <div class="space-x-2">
                            <a href="#"
                                class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">{{ $fighter->category->name }}</a>
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $fighter->name }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p><strong>Movement Type:</strong> {{ ucfirst($fighter->movement_type) }}</p>

                        <p><strong>Attack Type:</strong> {{ ucfirst($fighter->attack_type) }}</p>

                        <p><strong>Health:</strong> {{ ucfirst($fighter->health) }}</p>

                        <p><strong>Strength:</strong> {{ ucfirst($fighter->strength) }}</p>

                        <p><strong>Defense:</strong> {{ ucfirst($fighter->defense) }}</p>

                        <p><strong>Speed:</strong> {{ ucfirst($fighter->speed) }}</p>

                        <h2 class="font-bold text-lg">Full description and background of Animal.</h2>

                        <p>{{ $fighter->description }}</p>

                    </div>
                </div>

                <section class="col-span-8 col-start-5 mt-10">
                    <article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
                        <div class="flex-shrink-0">
                            <img src="https://i.pravatar.cc/60" alt="" width="60" height="60" class="rounded-xl">
                        </div>

                        <div>
                            <header class="mb-4">
                                <h3 class="font-bold">John Doe</h3>
                                <p class="text-xs">Posted
                                    <time>8 months ago</time>
                                </p>
                            </header>
                            <p>
                                What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     
                            </p>
                        </div>           
                    </article>
                </section>
            </article>
        </main>
    </section>


</x-layout>