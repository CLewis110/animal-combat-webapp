<!DOCTYPE html>

<title>Animal Combat App</title>
<link rel="stylesheet" href="/app.css">

<body>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-300 p-6 rounded-xl">

            <h3 style="text-align:center">Register for</h3>    
            <h1 style="text-align:center ">ANIMAL COMBAT</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        required
                    >
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="username"
                        id="username"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="email"
                        name="email"
                        id="email"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="password"
                    >
                        Password             
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >

                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Submit
                    </button>
            </form>
        </main>
    </section>

</body>