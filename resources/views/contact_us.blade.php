@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
    <div class="relative w-full h-72 md:h-80 lg:h-96 bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/contactUs.png') }}');">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Contact Us</h1>
    </div>

    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="flex items-center gap-3 bg-white p-4  rounded-lg shadow-md border">
                <div class="bg-black text-white rounded-full py-3 pl-[1.15rem] pr-[1rem]">
                    <i class="fa fa-phone"></i>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800">Mobile Number</h3>
                    <p class="text-gray-600">+971 558832713</p>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-white p-4 rounded-lg shadow-md border">
                <div class="bg-black text-white rounded-full py-3 pl-[1.15rem] pr-[1rem]">
                    <i class="fa fa-envelope"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Email</h3>
                    <p class="text-gray-600">rj18technical@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center gap-3 bg-white p-4 rounded-lg shadow-md border">
                <div class="bg-black text-white rounded-full py-3 pl-[1.20rem] pr-[1.20rem]">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Address</h3>
                    <p class="text-gray-600">Al Quoz Industrial Area 1, Dubai</p>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-white p-4 rounded-lg shadow-md border">
                <div class="bg-black text-white rounded-full py-3 pl-[1.15rem] pr-[1rem]">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Working Hours</h3>
                    <p class="text-gray-600">Mon - Sat 09:00 TO 18:00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Button -->
    <div class="absolute bottom-4 right-4 z-30">
        <a href="https://wa.me/9624526656" target="_blank" rel="noopener noreferrer"
            class="bg-green-500 text-white px-[1rem] py-[1rem] rounded-full flex items-center space-x-3 shadow-lg hover:bg-green-600 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp"
                viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
        </a>
    </div>
    <section class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <iframe src="https://www.google.com/maps/embed?key=API_KEY&q=Location"
            class="w-full h-[20rem] rounded-lg shadow-md"></iframe>
            {{-- <div class="bg-white p-6 shadow-lg rounded-lg"> --}}
                {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif --}}
                <form action="{{ route('contacts.store') }}" method="POST">

                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <input type="text" name="name" placeholder="Your Name *"
                            class="border p-3 w-full rounded bg-gray-200" required>
                        <input type="email" name="email" placeholder="Your Email *"
                            class="border p-3 w-full rounded bg-gray-200" required>
                        <input type="text" name="number" placeholder="Your Phone *"
                            class="border p-3 w-full rounded bg-gray-200" required>
                    </div>
                    <textarea name="message" placeholder="Your Message" class="border p-3 w-full rounded mb-4 h-[10rem] bg-gray-200"
                        required></textarea>
                    <button type="submit" class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800">Send Message</button>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </form>

            </div>
        </div>
    </section>


@endsection
