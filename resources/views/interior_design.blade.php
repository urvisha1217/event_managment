@extends('layouts.app')
@section('title', 'Interior Design')

@section('content')
    <section class="bg-white">

        <!-- Hero Section -->
        <div class="relative h-[500px] bg-cover bg-center"
            style="background-image: url('{{ asset('images/contactUs.png') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="relative z-10 flex flex-col justify-center text-white h-full px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
                <!-- Heading with responsive font size -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-center">
                Interior Design
                </h1>

                <!-- Paragraph with responsive font size and margin -->
                <p class="mt-4 sm:mt-6 text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed text-center sm:text-left">
                    We specialize in designing custom exhibition stands that leave a lasting impact. Our team creates
                    tailored solutions to perfectly represent your brand, ensuring high-quality craftsmanship and attention
                    to detail. From sleek modern designs to intricate setups, we focus on functionality, space optimization,
                    and visual appeal to attract and engage visitors. With years of experience, we manage every aspect of
                    the project, ensuring seamless execution and an exhibition stand that effectively showcases your
                    products and enhances your event presence.
                </p>

                <!-- Button with responsive padding, margin, and font size -->
                <div class="mt-4 sm:mt-6 flex justify-center">
                    <a href="{{ url('/contact_us') }}"
                        class="items-center flex gap-4 px-6 py-2 sm:px-8 sm:py-3 bg-white text-black text-base sm:text-lg font-semibold rounded-full shadow-lg border border-gray-300 hover:bg-gray-100 transition">
                        Contact us
                        <i class="fa-solid fa-arrow-up-right-from-square"  style='font-size:18px'></i>
                    </a>
                </div>
            </div>




            <!-- WhatsApp Floating Button -->
            <div class="absolute bottom-4 right-4 z-30">
                <a href="https://wa.me/9624526656" target="_blank" rel="noopener noreferrer"
                    class="bg-green-500 text-white px-[1rem] py-[1rem] rounded-full flex items-center space-x-3 shadow-lg hover:bg-green-600 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg>
                    {{-- <span class="font-semibold text-lg">Connect Now</span> --}}
                </a>
            </div>
        </div>
            <!-- Responsive Grid -->
            <div class="container mx-auto px-6 py-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Card 1 -->
                    <div class="relative">
                        <img src="{{ asset('images/exhibition1.png') }}" alt="All Beauty"
                            class="h-[25rem] object-cover mb-3 w-full">
                        <div
                            class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full text-white">
                            <h3 class="text-xl font-bold">ALL BEAUTY</h3>
                            <p class="text-sm">Size: 200 SQM</p>
                            <p class="text-sm">Location: Beauty World, Dubai</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative">
                        <img src="{{ asset('images/exhibition2.png') }}" alt="All Beauty"
                            class="h-[25rem] object-cover mb-3 w-full">
                        <div
                            class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full text-white">
                            <h3 class="text-xl font-bold">ALL BEAUTY</h3>
                            <p class="text-sm">Size: 200 SQM</p>
                            <p class="text-sm">Location: Beauty World, Dubai</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative">
                        <img src="{{ asset('images/exhibition1.png') }}" alt="All Beauty"
                            class="h-[25rem] object-cover mb-3 w-full">
                        <div
                            class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full text-white">
                            <h3 class="text-xl font-bold">ALL BEAUTY</h3>
                            <p class="text-sm">Size: 200 SQM</p>
                            <p class="text-sm">Location: Beauty World, Dubai</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="relative">
                        <img src="{{ asset('images/exhibition2.png') }}" alt="All Beauty"
                            class="h-[25rem] object-cover mb-3 w-full">
                        <div
                            class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full text-white">
                            <h3 class="text-xl font-bold">ALL BEAUTY</h3>
                            <p class="text-sm">Size: 200 SQM</p>
                            <p class="text-sm">Location: Beauty World, Dubai</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="relative">
                        <img src="{{ asset('images/exhibition1.png') }}" alt="All Beauty"
                            class="h-[25rem] object-cover mb-3 w-full">
                        <div
                            class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full text-white">
                            <h3 class="text-xl font-bold">ALL BEAUTY</h3>
                            <p class="text-sm">Size: 200 SQM</p>
                            <p class="text-sm">Location: Beauty World, Dubai</p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="relative">
                        <img src="{{ asset('images/exhibition2.png') }}" alt="All Beauty"
                            class="h-[25rem] object-cover mb-3 w-full">
                        <div
                            class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full text-white">
                            <h3 class="text-xl font-bold">ALL BEAUTY</h3>
                            <p class="text-sm">Size: 200 SQM</p>
                            <p class="text-sm">Location: Beauty World, Dubai</p>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection