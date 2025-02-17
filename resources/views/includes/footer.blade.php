<footer class="bg-black text-white py-12">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">
        
        <!-- Logo Section -->
        <div class="flex flex-col items-start">
            <img src="{{ asset('images/logo2.png') }}" alt="RJ 18 TECHNICAL" class="h-40 mb-4 align-content: center">
        </div>

        <!-- Gallery Section -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Gallery</h3>
            <div class="grid grid-cols-4 gap-3">
                @for ($i = 1; $i < 9; $i++)
                    <img src="{{ asset('images/image' . $i . '.png') }}" alt="Gallery Image" class="w-20 h-20 object-cover">
                @endfor
            </div>
        </div>

        <!-- Quick Links & Services -->
        <div class="grid grid-cols-2 gap-8">
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="hover:text-gray-400 transition">Home</a></li>
                    <li><a href="{{ url('/about_us') }}" class="hover:text-gray-400 transition">About us</a></li>
                    <li><a href="{{ url('/contact_us') }}" class="hover:text-gray-400 transition">Contact us</a></li>
                    {{-- <li><a href="{{ url('/quote') }}" class="hover:text-gray-400 transition">Get Quotation</a></li> --}}
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Services</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/exhibition') }}" class="hover:text-gray-400 transition">Exhibition Stand</a></li>
                    <li><a href="{{ url('/event_management') }}" class="hover:text-gray-400 transition">Event Management</a></li>
                    <li><a href="{{ url('/av_service') }}" class="hover:text-gray-400 transition">AV Service</a></li>
                    <li><a href="{{ url('/interior_design') }}" class="hover:text-gray-400 transition">Interior Design</a></li>
                </ul>
            </div>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Contact Information</h3>
            <p class="mb-2"><strong>Mobile:</strong> +971 558832713</p>
            <p class="mb-2"><strong>Email:</strong> rj18technical@gmail.com</p>
            <p class="mb-4"><strong>Address:</strong> RJ 18 Technical, Al Quoz Industrial Area 1, Dubai</p>
            <div class="flex space-x-4">
                <a href="#" class="text-white"><img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook" class="h-8 w-8 rounded-full"></a>
                <a href="#" class="text-white"><img src="{{ asset('images/youtube-icon.png') }}" alt="YouTube" class="h-8 w-8 rounded-full"></a>
                <a href="#" class="text-white"><img src="{{ asset('images/instagram-icon.jpg') }}" alt="Instagram" class="h-8 w-8 rounded-full"></a>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-700 text-center mt-10 pt-6 text-sm">
        Copyright © {{ date('Y') }} RJ 18 Technical
    </div>
</footer>
