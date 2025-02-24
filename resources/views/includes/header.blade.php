<header>
    <div class="bg-black text-white py-2">
    <div class="container mx-auto flex md:flex-row flex-col justify-between items-center px-4">
        <!-- Contact Information Section -->
        <div class="text-sm flex items-center space-x-2 mb-2">
            <img src="{{ asset('images/phone.png') }}" alt="Phone" class="h-4 rounded-full">
            <span class="text-xs sm:text-sm">+971 558832713</span>
            <img src="{{ asset('images/mail.png') }}" alt="mail" class="h-6 rounded-full">
            <span class="text-xs sm:text-sm">rj18technical@gmail.com</span>
        </div>

        <!-- Social Media Icons Section -->
        <div class="flex space-x-2 mt-2">
            <a href="#" class="text-white">
                <img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook" class="h-5 rounded-full">
            </a>
            <a href="#" class="text-white">
                <img src="{{ asset('images/youtube-icon.png') }}" alt="YouTube" class="h-5 rounded-full">
            </a>
            <a href="#" class="text-white">
                <img src="{{ asset('images/instagram-icon.jpg') }}" alt="Instagram" class="h-5 rounded-full">
            </a>
        </div>
    </div>
</div>


    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-4">
            <!-- Logo and Company Name -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="RJ 18 TECHNICAL" class="h-12">
                <span class="text-xl font-bold text-black">RJ 18 TECHNICAL SERVICES LLC</span>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 text-black font-medium">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li class="relative group">
                    <a href="#" class="cursor-pointer">SERVICES &#9662;</a>
                    <ul class="absolute hidden group-hover:block bg-white shadow-lg w-48 z-30">
                        <li><a href="{{ url('/exhibition') }}" class="block px-4 py-2 bg-black text-white">EXHIBITION STAND</a></li>
                        <li><a href="{{ url('/event_management') }}" class="block px-4 py-2 hover:bg-gray-200">EVENT MANAGEMENT</a></li>
                        <li><a href="{{ url('/av_service') }}" class="block px-4 py-2 hover:bg-gray-200">AV SERVICE</a></li>
                        <li><a href="{{ url('/interior_design') }}" class="block px-4 py-2 hover:bg-gray-200">INTERIOR DESIGN</a></li>
                        <li><a href="{{ url('/mall_kiosk') }}" class="block px-4 py-2 hover:bg-gray-200">MALL KIOSK</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/about_us') }}">ABOUT US</a></li>
                <li><a href="{{ url('/contact_us') }}">CONTACT US</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-black text-2xl focus:outline-none">&#9776;</button>
        </div>

        <!-- Mobile Dropdown -->
        <ul id="mobile-menu" class="hidden md:hidden bg-white p-4 space-y-2 shadow-lg w-full absolute left-0 top-16 z-30">
            <li><a href="{{ url('/') }}" class="block py-2">HOME</a></li>
            <li>
                <button id="mobile-services-btn" class="block w-full text-left py-2 ">SERVICES &#9662;</button>
                <ul id="mobile-services-menu" class="hidden bg-white shadow-lg p-2">
                    <li><a href="{{ url('/exhibition') }}" class="block px-4 py-2 bg-black text-white">EXHIBITION STAND</a></li>
                    <li><a href="{{ url('/event_management') }}" class="block px-4 py-2 hover:bg-gray-200">EVENT MANAGEMENT</a></li>
                    <li><a href="{{ url('/av_service') }}" class="block px-4 py-2 hover:bg-gray-200">AV SERVICE</a></li>
                    <li><a href="{{ url('/interior_design') }}" class="block px-4 py-2 hover:bg-gray-200">INTERIOR DESIGN</a></li>
                    <li><a href="{{ url('/mall_kiosk') }}" class="block px-4 py-2 hover:bg-gray-200">MALL KIOSK</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/about_us') }}" class="block py-2">ABOUT US</a></li>
            <li><a href="{{ url('/contact_us') }}" class="block py-2">CONTACT US</a></li>
        </ul>
    </nav>
</header>

<script>
document.getElementById("menu-btn").addEventListener("click", function() {
    document.getElementById("mobile-menu").classList.toggle("hidden");
});

document.getElementById("mobile-services-btn").addEventListener("click", function() {
    document.getElementById("mobile-services-menu").classList.toggle("hidden");
});
</script>




{{-- <header>
    <!-- Top Bar -->
    <div class="bg-black text-white py-2">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
            <div class="text-sm flex items-center space-x-4 mb-2 md:mb-0">
                <img src="{{ asset('images/phone.png') }}" alt="Phone" class="h-6 rounded-full">
                <span>+971 558832713</span>
                <img src="{{ asset('images/mail.png') }}" alt="mail" class="h-6 rounded-full">
                <span>rj18technical@gmail.com</span>
            </div>
            <div class="flex space-x-3">
                <a href="#" class="text-white"><img src="{{ asset('images/facebook-icon.png') }}" alt="Facebook" class="h-6 rounded-full"></a>
                <a href="#" class="text-white"><img src="{{ asset('images/youtube-icon.png') }}" alt="YouTube" class="h-6 rounded-full"></a>
                <a href="#" class="text-white"><img src="{{ asset('images/instagram-icon.jpg') }}" alt="Instagram" class="h-6 rounded-full"></a>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-4">
            <!-- Logo and Company Name -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="RJ 18 TECHNICAL" class="h-12">
                <span class="text-xl font-bold text-black">RJ 18 TECHNICAL</span>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 text-black font-medium">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li class="relative group">
                    <a href="#" class="cursor-pointer">SERVICES &#9662;</a>
                    <ul class="absolute hidden group-hover:block bg-white shadow-lg w-48 z-30">
                        <li><a href="{{ url('/exhibition') }}" class="block px-4 py-2 bg-black text-white">EXHIBITION STAND</a></li>
                        <li><a href="{{ url('/event_management') }}" class="block px-4 py-2 hover:bg-gray-200">EVENT MANAGEMENT</a></li>
                        <li><a href="{{ url('/av_service') }}" class="block px-4 py-2 hover:bg-gray-200">AV SERVICE</a></li>
                        <li><a href="{{ url('/interior_design') }}" class="block px-4 py-2 hover:bg-gray-200">INTERIOR DESIGN</a></li>
                        <li><a href="{{ url('/mall_kiosk') }}" class="block px-4 py-2 hover:bg-gray-200">MALL KIOSK</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/about_us') }}">ABOUT US</a></li>
                <li><a href="{{ url('/contact_us') }}">CONTACT US</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-black text-2xl focus:outline-none">&#9776;</button>
        </div>

        <!-- Mobile Dropdown -->
        <ul id="mobile-menu" class="hidden md:hidden bg-white p-4 space-y-2 shadow-lg w-full absolute left-0 top-16">
            <li><a href="{{ url('/') }}" class="block py-2">HOME</a></li>
            <li>
                <button id="mobile-services-btn" class="block w-full text-left py-2">SERVICES &#9662;</button>
                <ul id="mobile-services-menu" class="hidden bg-white shadow-lg p-2">
                    <li><a href="{{ url('/exhibition') }}" class="block px-4 py-2 bg-black text-white">EXHIBITION STAND</a></li>
                    <li><a href="{{ url('/event_management') }}" class="block px-4 py-2 hover:bg-gray-200">EVENT MANAGEMENT</a></li>
                    <li><a href="{{ url('/av_service') }}" class="block px-4 py-2 hover:bg-gray-200">AV SERVICE</a></li>
                    <li><a href="{{ url('/interior_design') }}" class="block px-4 py-2 hover:bg-gray-200">INTERIOR DESIGN</a></li>
                    <li><a href="{{ url('/mall_kiosk') }}" class="block px-4 py-2 hover:bg-gray-200">MALL KIOSK</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/about_us') }}" class="block py-2">ABOUT US</a></li>
            <li><a href="{{ url('/contact_us') }}" class="block py-2">CONTACT US</a></li>
        </ul>
    </nav>
</header>

<script>
document.getElementById("menu-btn").addEventListener("click", function() {
    document.getElementById("mobile-menu").classList.toggle("hidden");
});

document.getElementById("mobile-services-btn").addEventListener("click", function() {
    document.getElementById("mobile-services-menu").classList.toggle("hidden");
});
</script> --}}
