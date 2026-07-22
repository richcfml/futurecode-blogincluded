<x-layout>
    <div class="max-w-7xl mx-auto">
        <main class="mt-10">
            <div>
                <small class="uppercase text-xs text-blue-500 flex items-center gap-2 tracking-widest">
                    <div>//</div>
                    <div>contact</div>
                </small>
                <div class="flex items-center justify-between mt-12">
                    <div class="flex flex-col max-w-3/5">
                        <h1 class="font-headlines text-6xl" >
                            Let's build something reliable.
                        </h1>
                        <p class="text-gray-400 w-2/3 text-md font-body">
                            Tell us about your project and we'll get back to you within one business day.
                        </p>
                        <div class="mt-10">
                            <div class="mt-6">
                                <p class="uppercase font-labels text-gray-300">Email</p>
                                <p class="text-sm font-body">admin@futurecode.dev</p>
                            </div>
                            <div class="mt-6">
                                <p class="uppercase font-labels text-gray-300">Phone</p>
                                <p class="text-sm font-body">+57 315 2638460</p>
                            </div>
                            <div class="mt-6">
                                <p class="uppercase font-labels text-gray-300">Office</p>
                                <p class="text-sm font-body">Cali, Valle del Cauca, Colombia</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center  py-4 px-6 rounded-md text-xs w-2/5 border-2 border-gray-300 bg-gray-100">
                        <div class="p-10 w-full">
                            <form>
                                <div>
                                    <label for="name" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Name</label>
                                    <div class="mt-2">
                                        <input id="name" type="text" name="name" placeholder="Jane Smith" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Email</label>
                                    <div class="mt-2">
                                        <input id="email" type="email" name="email" placeholder="you@example.com" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <label for="comment" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Add your comment</label>
                                    <div class="mt-2">
                                        <textarea id="comment" name="comment" rows="4" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500"></textarea>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <button type="submit" class=" w-full rounded-md bg-base-midnight-violet px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:focus-visible:outline-indigo-500">Send Messgae</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</x-layout>
