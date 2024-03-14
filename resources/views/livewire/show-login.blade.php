<div class="h-screen w-screen flex justify-center items-center">
    <div
        class="border rounded-xl p-5 min-w-56 w-1/4 shadow-xl shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80">
        <form wire:submit.prevent="HandleSubmit" class="gap-y-8 flex justify-center items-center flex-col">
            <div>
                <h1 class="text-5xl text-blue-600 font-extrabold">LOGIN</h1>
            </div>
            <div class="w-full">
                <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="Email" placeholder="Email" wire:model="email"
                    class="block w-full py-2 px-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full">
                <label for="Password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input id="Password" type="password" placeholder="Password" wire:model="password_2"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('password_2')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                    LOGIN
                </button>
            </div>
        </form>
    </div>
</div>