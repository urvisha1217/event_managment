@extends('layouts.app')
@section('title', 'Home Page')

@section('content')

<div class="relative overflow-hidden w-full h-full">
  <!-- Rectangle Overlay -->
  <div class="absolute inset-0 z-10" 
  style="
    background-size: cover;
    background-position: center;">
  </div>

  <!-- Slideshow Container -->
  <div id="slides" class="flex transition-transform duration-500 ease-in-out relative z-20 h-[32rem]" style="transform: translateX(0%);">
    <div class="min-w-full bg-cover bg-center" style="background-image: url('images/slide1.png');"></div>
    <div class="min-w-full bg-cover bg-center" style="background-image: url('images/slide2.png');"></div>
    <div class="min-w-full bg-cover bg-center" style="background-image: url('images/slide3.png');"></div>
    <div class="min-w-full bg-cover bg-center" style="background-image: url('images/slide4.png');"></div>

  </div>

  <!-- Navigation Buttons and Dots (Omitted for brevity) -->
    <!-- Navigation Buttons -->
  <button id="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 z-30 hidden">
  </button>
  <button id="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full p-2 z-30 hidden">
  </button>

  <!-- Dots for Navigation -->
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-30">
    <span class="dot h-2 w-2 bg-gray-400 rounded-full cursor-pointer" data-index="0"></span>
    <span class="dot h-2 w-2 bg-gray-400 rounded-full cursor-pointer" data-index="1"></span>
    <span class="dot h-2 w-2 bg-gray-400 rounded-full cursor-pointer" data-index="2"></span>
    <span class="dot h-2 w-2 bg-gray-400 rounded-full cursor-pointer" data-index="3"></span>

  </div>

   <!-- WhatsApp Button -->
   <div class="absolute bottom-4 right-4 z-30">
      <a href="https://wa.me/9624526656" target="_blank" rel="noopener noreferrer" class="bg-green-500 text-white px-[1rem] py-[1rem] rounded-full flex items-center space-x-3 shadow-lg hover:bg-green-600 transition duration-300" >
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
        </svg>
        {{-- <span class="font-semibold text-lg">Connect Now</span> --}}
      </a>
    </div>
  </div>
</div>
<script>
  const slides = document.getElementById("slides");
  const dots = document.querySelectorAll(".dot");
  let currentIndex = 0;

  function updateSlide(index) {
    slides.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot, i) => {
      dot.classList.toggle("bg-gray-800", i === index);
      dot.classList.toggle("bg-gray-400", i !== index);
    });
  }

  document.getElementById("prev").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + dots.length) % dots.length;
    updateSlide(currentIndex);
  });

  document.getElementById("next").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % dots.length;
    updateSlide(currentIndex);
  });

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentIndex = index;
      updateSlide(currentIndex);
    });
  });

  // Auto slide every 5 seconds
  setInterval(() => {
    currentIndex = (currentIndex + 1) % dots.length;
    updateSlide(currentIndex);
  }, 5000);
</script>
<!-- Existing Sections Here -->
<div class="container mx-auto px-6 py-10">
  <!-- Grid Layout -->
  <div class="grid grid-cols-1 md:grid-cols-2 bg-blue">
      <!-- Card 1 -->
      <div class="flex flex-col md:flex-row bg-gray-200 shadow-lg  overflow-hidden w-full">
          <img src="{{ asset('images/1.png') }}" alt="Experienced Leadership" class="md:w-1/2 object-cover">
          <div class="p-6 w-1/2">
              <h3 class="text-xl font-bold mb-2">1. Experienced Leadership</h3>
              <p class="text-gray-600">
                  RJ 18 Technical Service is led by Mr. Pankaj
                  Jangid and Mr. Babulal Jangid, both possessing 
                  extensive industry knowledge, ensuring strong
                  leadership and exceptional service delivery in all projects. 
              </p>
          </div>
      </div>

      <div class="flex flex-col md:flex-row bg-gray-200 shadow-lg  overflow-hidden w-full">
          <img src="{{ asset('images/2.png') }}" alt="Experienced Leadership" class="md:w-1/2 object-cover">
          <div class="p-6 w-1/2">
              <h3 class="text-xl font-bold mb-2">2. Skilled Workforce</h3>
              <p class="text-gray-600">
                  The company employs a dedicated team of 4
                  highly skilled staff members and 25 experienced
                  workers,specializing in joinery work, ensuring
                  top-notch craftsmanship and efficient project execution. 
             </p>
          </div>
      </div>

      <div class="flex flex-col md:flex-row bg-gray-200 shadow-lg  overflow-hidden w-full">
          <div class="p-6 w-1/2">
              <h3 class="text-xl font-bold mb-2">3. Specialized in Exhibition</h3>
              <p class="text-gray-600">
                  RJ 18 excels in designing and crafting custom  
                  wooden furniture and structures for exhibitions and events, 
                  delivering functional,aesthetic solutions  tailored
                  to client needs and spaces.
              </p>
          </div>
          <img src="{{ asset('images/3.png') }}" alt="Experienced Leadership" class="md:w-1/2 object-cover">
      </div>

      <div class="flex flex-col md:flex-row bg-gray-200 shadow-lg   overflow-hidden w-full">
          <div class="p-6 w-1/2">
              <h3 class="text-xl font-bold mb-2 mx-3">4. Expertise in Woodworks</h3>
              <p class="text-gray-600">
                  With over 10 years of experience, RJ 18 specializes in bespoke woodwork, 
                  offering high-quality craftsmanship for both interior designs and event-related wood installations.
              </p>
          </div>
          <img src="{{ asset('images/4.png') }}" alt="Experienced Leadership" class="md:w-1/2 object-cover">
      </div>
  </div>
</div>

<section class="container mx-auto px-6 py-10">
  <h2 class="text-3xl md:text-4xl font-bold mb-10">| Our Services</h2>
  <div class="grid md:grid-cols-5 gap-2">
      @php
          $services = [
              ['name' => 'EXHIBITION STANDS', 'image' => 's1.png'],
              ['name' => 'EVENT MANAGEMENT', 'image' => 's2.png'],
              ['name' => 'AV SERVICE', 'image' => 's3.png'],
              ['name' => 'INTERIOR DESIGN', 'image' => 's4.png'],
              ['name' => 'MALL KIOSK', 'image' => 's5.png'],
          ];
      @endphp
      @foreach($services as $service)
          <div class="bg-white  overflow-hidden ">
              <img src="{{ asset('images/'.$service['image']) }}" alt="Service - {{ $service['name'] }}" class="w-full h-48 object-cover" loading="lazy">
              <div class="p-4 text-center">
                  <h3 class="text-lg md:text-m font-semibold">{{ $service['name'] }}</h3>
              </div>
          </div>
      @endforeach
  </div>
</section>

<!-- Testimonials Section -->
<section class="container mx-auto px-6 py-10 w-full">
  <h3 class="text-3xl md:text-4xl font-bold mb-8">| What Our Clients Say About Us</h3>
  <div class="w-full md:grid grid-cols-3 gap-3">
      @php
          $testimonials = [
              ['name' => 'Emily Roberts', 'role' => 'Event Coordinator', 'message' => "Working with RJ 18 Technical Service was an absolute pleasure. Their team delivered outstanding custom joinery work for our exhibition booth, exceeding our expectations in both design and quality."],
              ['name' => 'John Mitchell', 'role' => 'Interior Designer', 'message' => "We were extremely impressed with RJ 18’s expertise in woodwork for our interior project. Their attention to detail and professionalism resulted in a beautifully crafted space that perfectly matched our vision."],
              ['name' => 'Sarah Lee', 'role' => 'Project Manager', 'message' => "The leadership and craftsmanship at RJ 18 Technical Service are second to none. Their experience and dedication were evident in every step of our project, and the results speak for themselves."],
          ];
      @endphp
      @foreach($testimonials as $testimonial)
          <div class="bg-white-50 shadow-md p-6 rounded-lg ">
              <p class="italic text-lg">"{{ $testimonial['message'] }}"</p>
              <p class="text-right font-bold mt-4 text-md">- {{ $testimonial['name'] }}, {{ $testimonial['role'] }}</p>
          </div>
      @endforeach
  </div>
</section>

<!-- Contact Us Section -->
<section class="container mx-auto px-6 py-16">
    <h2 class="text-3xl md:text-4xl font-bold mb-10">| Contact Us</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <iframe src="https://www.google.com/maps/embed?key=API_KEY&q=Location" class="w-full h-[20rem] rounded-lg shadow-md"></iframe>
        <div class="bg-white p-6 shadow-lg rounded-lg">
          <form action="{{ route('contacts.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <input type="text" name="name" placeholder="Your Name *" class="border p-3 w-full rounded bg-gray-200" required>
                    <input type="email" name="email" placeholder="Your Email *" class="border p-3 w-full rounded bg-gray-200" required>
                    <input type="text" name="number" placeholder="Your Phone *" class="border p-3 w-full rounded bg-gray-200" required>
                </div>
                <textarea name="message" placeholder="Your Message" class="border p-3 w-full rounded mb-4 h-[10rem] bg-gray-200" required></textarea>
                <button type="submit" class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 ">Send Message</button>
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
