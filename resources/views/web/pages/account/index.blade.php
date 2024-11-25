<x-web::layout>

    {{-- breadcrumb --}}
    <x-web::breadcrumb>
        <x-web::breadcrumb-item :isCurrent="true">Account</x-web::breadcrumb-item>
    </x-web::breadcrumb>

    {{-- title --}}
    <div class="py-4 mb-12 border-b-2 border-gray-300">
        <h1 class="relative text-2xl font-semibold text-gray-700">
            Account Overview</h1>
    </div>

    <div class="gap-8 mb-10 lg:flex sm:mb-20">
        <div class="hidden min-w-60 lg:block">
            <div class="p-4 bg-white rounded-lg shadow-sm">
                <div class="pb-4">
                    <div class="flex items-start gap-3">
                        <div
                             class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                            <x-lucide-user-round class="w-5 h-5 text-gray-500" />
                        </div>
                        <div>
                            <div class="text-sm text-gray-400">Welcome back!</div>
                            <div class="font-semibold text-gray-700">John Doe</div>
                        </div>
                    </div>
                </div>
                <div class="py-4 border-y">
                    <nav>
                        <ul class="space-y-1">
                            <li>
                                <a href="javascript:void(0)"
                                   class="flex items-center gap-3 px-3 py-2 text-gray-700 transition duration-150 ease-in-out bg-gray-200 rounded-lg">
                                    <x-lucide-layout-dashboard class="w-5 h-5" />
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                   class="flex items-center gap-3 px-3 py-2 text-gray-700 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                    <x-lucide-user-round-cog class="w-5 h-5" />
                                    <span>Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                   class="relative flex items-center gap-3 px-3 py-2 text-gray-700 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                    <x-lucide-truck class="w-5 h-5" />
                                    <span>Orders</span>
                                    <span
                                          class="inline-flex items-center justify-center px-1.5 py-0.5 text-[11px] font-semibold text-red-700 bg-red-100 rounded-full">
                                        8
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                   class="flex items-center gap-3 px-3 py-2 text-gray-700 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                    <x-lucide-shopping-cart class="w-5 h-5" />
                                    <span>Cart</span>
                                    <span
                                          class="inline-flex items-center justify-center px-1.5 py-0.5 text-[11px] font-semibold text-red-700 bg-red-100 rounded-full">
                                        3
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                   class="flex items-center gap-3 px-3 py-2 text-gray-700 transition duration-150 ease-in-out rounded-lg hover:bg-gray-100">
                                    <x-lucide-heart class="w-5 h-5" />
                                    <span>Wishlist</span>
                                    <span
                                          class="inline-flex items-center justify-center px-1.5 py-0.5 text-[11px] font-semibold text-red-700 bg-red-100 rounded-full">
                                        26
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="pt-4">
                    <a href="javascript:void(0)"
                       class="flex items-center gap-3 px-3 py-2 text-red-700 transition duration-150 ease-in-out rounded-lg hover:bg-red-50">
                        <x-lucide-log-out class="w-4 h-4" />
                        <span class="text-sm font-semibold">Log Out</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="space-y-6">
                {{-- overview --}}
                <div>
                    <div class="flex flex-wrap gap-4">
                        <div
                             class="flex grow min-w-40 flex-col items-center gap-2.5 p-4 text-center bg-white rounded-lg shadow-sm">
                            <div class="grid w-12 h-12 p-2 bg-gray-100 rounded-lg place-items-center">
                                <x-lucide-truck class="w-5 h-5 text-gray-600" />
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold text-gray-600">Orders made</h6>
                                <span class="text-xl font-semibold text-gray-700">274</span>
                            </div>
                        </div>
                        <div
                             class="flex grow min-w-40 flex-col items-center gap-2.5 p-4 text-center bg-white rounded-lg shadow-sm">
                            <div class="grid w-12 h-12 p-2 bg-gray-100 rounded-lg place-items-center">
                                <x-lucide-shopping-cart class="w-5 h-5 text-gray-600" />
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold text-gray-600">Added to cart</h6>
                                <span class="text-xl font-semibold text-gray-700">8</span>
                            </div>
                        </div>
                        <div
                             class="flex grow min-w-40 flex-col items-center gap-2.5 p-4 text-center bg-white rounded-lg shadow-sm">
                            <div class="grid w-12 h-12 p-2 bg-gray-100 rounded-lg place-items-center">
                                <x-lucide-heart class="w-5 h-5 text-gray-600" />
                            </div>
                            <div>
                                <h6 class="text-sm font-semibold text-gray-600">Favorite products</h6>
                                <span class="text-xl font-semibold text-gray-700">43</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- account info --}}
                <div>
                    <div class="p-4 bg-white rounded-lg shadow-sm">
                        <div class="p-4 pt-0">
                            <h4 class="text-lg font-semibold text-gray-700">Account Info</h4>
                        </div>
                        <div class="p-4 border-y">
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <h5 class="text-sm font-semibold text-gray-500">Name:</h5>
                                    <span class="font-semibold text-gray-700">John Doe</span>
                                </div>
                                <div>
                                    <h5 class="text-sm font-semibold text-gray-500">Email:</h5>
                                    <span class="font-semibold text-gray-700">johndoe@gmail.com</span>
                                </div>
                                <div>
                                    <h5 class="text-sm font-semibold text-gray-500">Shipping Address:</h5>
                                    <span class="font-semibold text-gray-700">No 256, Main Street, Colombo 02.</span>
                                </div>
                                <div>
                                    <h5 class="text-sm font-semibold text-gray-500">Billing Address:</h5>
                                    <span class="font-semibold text-gray-700">Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Repellendus, dicta!</span>
                                </div>
                                <div>
                                    <h5 class="text-sm font-semibold text-gray-500">Contact Number:</h5>
                                    <span class="font-semibold text-gray-700">+94 77 123 4567</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 pb-0">
                            <x-button type="link"
                                      variant="secondary"
                                      class="w-fit">Edit Account Info</x-button>
                        </div>
                    </div>
                </div>

                {{-- order summary --}}
                <div>
                    <div class="p-4 bg-white rounded-lg shadow-sm">
                        <div class="p-4 pt-0">
                            <h4 class="text-lg font-semibold text-gray-700">Order Summary</h4>
                        </div>
                        <div class="p-4 border-y">
                            <div class="p-4 border divide-y rounded-lg bg-gray-50 md:p-8">
                                <div class="flex flex-wrap items-center py-4 gap-y-4 md:pb-5">
                                    <dl class="w-full sm:w-1/2 md:w-48">
                                        <dt class="text-sm font-semibold text-gray-500">Order ID:</dt>
                                        <dd class="font-semibold text-gray-700">
                                            <a href="#"
                                               class="hover:underline">#FWB12546798</a>
                                        </dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Date:</dt>
                                        <dd class="font-semibold text-gray-700">11.12.2023</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/5 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Price:</dt>
                                        <dd class="font-semibold text-gray-700">$499</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 sm:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Status:</dt>
                                        <dd
                                            class="me-2 mt-1.5 inline-flex shrink-0 items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">
                                            In transit
                                        </dd>
                                    </dl>
                                </div>
                                <div class="flex flex-wrap items-center py-4 gap-y-4 md:py-5">
                                    <dl class="w-full sm:w-1/2 md:w-48">
                                        <dt class="text-sm font-semibold text-gray-500">Order ID:</dt>
                                        <dd class="font-semibold text-gray-700">
                                            <a href="#"
                                               class="hover:underline">#FWB12546777</a>
                                        </dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Date:</dt>
                                        <dd class="font-semibold text-gray-700">10.11.2024</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/5 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Price:</dt>
                                        <dd class="font-semibold text-gray-700">$3,287</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 sm:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Status:</dt>
                                        <dd
                                            class="mt-1.5 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                                            Cancelled
                                        </dd>
                                    </dl>
                                </div>
                                <div class="flex flex-wrap items-center py-4 gap-y-4 md:py-5">
                                    <dl class="w-full sm:w-1/2 md:w-48">
                                        <dt class="text-sm font-semibold text-gray-500">Order ID:</dt>
                                        <dd class="font-semibold text-gray-700">
                                            <a href="#"
                                               class="hover:underline">#FWB12546846</a>
                                        </dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Date:</dt>
                                        <dd class="font-semibold text-gray-700">07.11.2024</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/5 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Price:</dt>
                                        <dd class="font-semibold text-gray-700">$111</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 sm:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Status:</dt>
                                        <dd
                                            class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                            Completed
                                        </dd>
                                    </dl>
                                </div>
                                <div class="flex flex-wrap items-center py-4 gap-y-4 md:pt-5">
                                    <dl class="w-full sm:w-1/2 md:w-48">
                                        <dt class="text-sm font-semibold text-gray-500">Order ID:</dt>
                                        <dd class="font-semibold text-gray-700">
                                            <a href="#"
                                               class="hover:underline">#FWB12546212</a>
                                        </dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Date:</dt>
                                        <dd class="font-semibold text-gray-700">18.10.2024</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/5 md:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Price:</dt>
                                        <dd class="font-semibold text-gray-700">$756</dd>
                                    </dl>

                                    <dl class="w-full sm:w-1/2 md:w-1/4 sm:flex-1 lg:w-auto">
                                        <dt class="text-sm font-semibold text-gray-500">Status:</dt>
                                        <dd
                                            class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                            Completed
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        </div>
                        <div class="p-4 pb-0">
                            <x-button type="link"
                                      variant="secondary"
                                      class="w-fit">View All Orders</x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-web::layout>
