{{-- resources/views/partials/hero-section.blade.php --}}
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-2">
                What makes us different
            </h1>
            <p class="text-2xl md:text-3xl text-gray-600">
                makes them stronger
            </p>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col xl:flex-row items-center justify-center gap-16 max-w-7xl mx-auto">
            <!-- Left Features -->
            <div class="xl:flex-1 space-y-8">
                <!-- Real Food -->
                <div class="flex items-start gap-4 max-w-md">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="las la-leaf text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Real Food</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Wholesome recipes for dogs with real meat and veggies.
                        </p>
                    </div>
                </div>

                <!-- Premium Ingredient -->
                <div class="flex items-start gap-4 max-w-md">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="las la-award text-2xl text-yellow-600"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Premium Ingredient</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Elevating pet care with unmatched safety and quality.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Center Product Image -->
            <div class="flex justify-center items-center">
                <div class="w-80 h-80 lg:w-96 lg:h-96 relative">
                    <!-- Image Comparison Slider using img-comparison-slider package -->
                    <img-comparison-slider class="w-full h-full rounded-full overflow-hidden shadow-2xl">
                        <img slot="first" src="/images/fresh-ingredients.png" alt="Fresh dog food ingredients" class="w-full h-full object-cover" />
                        <img slot="second" src="/images/kibble.png" alt="Dry kibble dog food" class="w-full h-full object-cover" />
                    </img-comparison-slider>
                </div>
            </div>

            <!-- Right Features -->
            <div class="xl:flex-1 space-y-8 xl:text-right">
                <!-- Made Fresh -->
                <div class="flex items-start gap-4 max-w-md xl:ml-auto xl:flex-row-reverse">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="las la-snowflake text-2xl text-blue-600"></i>
                    </div>
                    <div class="xl:text-right">
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Made Fresh</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We prioritize maintaining the integrity of whole foods and nutrition.
                        </p>
                    </div>
                </div>

                <!-- Vet Developed -->
                <div class="flex items-start gap-4 max-w-md xl:ml-auto xl:flex-row-reverse">
                    <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="las la-user-md text-2xl text-pink-600"></i>
                    </div>
                    <div class="xl:text-right">
                        <h3 class="font-semibold text-gray-800 mb-2 text-lg">Vet Developed</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We raise the bar for dog nutrition, surpassing industry expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-12">
            <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                Get your dog's healthy meal today!
            </button>
            
            <!-- Trust badges -->
            <div class="flex items-center justify-center gap-4 mt-6 text-sm text-gray-500">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    30-day money back guarantee
                </span>
                <div class="flex gap-2">
                    <img src="/images/visa.png" alt="Visa" class="h-6">
                    <img src="/images/mastercard.png" alt="Mastercard" class="h-6">
                    <img src="/images/paypal.png" alt="PayPal" class="h-6">
                </div>
            </div>
        </div>
    </div>
</section>