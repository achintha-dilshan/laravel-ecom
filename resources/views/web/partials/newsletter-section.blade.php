<section class="">
    <div class="max-w-screen-sm px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <h2 class="mb-4 text-3xl font-bold text-center text-gray-700 sm:text-4xl">Sign up for
            our newsletter</h2>
        <p class="mb-8 font-light text-center text-gray-500 md:mb-12 sm:text-xl">Stay up to
            date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your
            email.</p>
        <form action="#">
            <div class="flex items-center gap-2 mb-3">
                <div class="relative w-full">
                    <label for="email"
                           class="hidden mb-2 text-sm font-medium text-gray-900">Email
                        address</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <x-lucide-mail class="w-5 h-5 text-gray-500" />
                    </div>
                    <input class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
                           placeholder="Enter your email"
                           type="email"
                           id="email"
                           autocomplete="off"
                           required="">
                </div>
                <x-web::button type="submit">Subscribe</x-web::button>
            </div>
            <p class="mx-auto text-sm text-center text-gray-500 sm:text-left">
                We care about the protection of your data. <a href="#"
                   class="font-medium text-primary-600 hover:underline">Read our Privacy
                    Policy</a>.</p>
        </form>
    </div>
</section>
