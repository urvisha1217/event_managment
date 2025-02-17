@extends('layouts.app')
@section('title', 'About Us')

@section('content')
<div class="relative overflow-hidden w-full h-[32rem] sm:h-[20rem] bg-cover bg-center" style="background-image: url('images/aboutUs.png ');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">About Us</h1>
    </div>
</div>

<div class="container mx-auto px-6 py-16">
    <p class="text-black-700 text-lg text-center max-w-8xl mx-auto">
        RJ 18 TECHNICAL SERVICES LLC, led by Directors Mr. Pankaj Jangid and Mr. Babual Jangid, specializes in exhibition and event design, along with high-quality interior woodwork. With a skilled team of 4 staff members and 25 workers, each boasting over 10 years of experience in joinery, we deliver exceptional craftsmanship. Our commitment to excellence ensures that every project reflects precision, creativity, and expertise, making us a trusted partner for all your woodwork and event design needs.
    </p>
</div>
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
<!-- Team Section -->
<section class="container mx-auto px-6 py-10">
    <h2 class="text-3xl font-bold mb-6">| Our Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 ">
        <div class="flex bg-gray-200 shadow-lg overflow-hidden">
            <img src="images/pic1.png" alt="Pankaj Jangid" class="w-1/2 object-cover">
            <div class="p-6 w-2/3">
                <h3 class="text-xl font-bold">Mr. Pankaj Jangid</h3>
                <p class="text-gray-600">Director and CEO</p>
                <p class="text-gray-600">RJ 18 Technical Service is led by Mr. Pankaj Jangid possessing extensive industry knowledge, ensuring strong leadership and exceptional service delivery in all projects.</p>
            </div>
        </div>
        <div class="flex bg-gray-200 shadow-lg overflow-hidden">
            <img src="images/pic2.png" alt="Babual Jangid" class="w-1/2 object-cover">
            <div class="p-6 w-2/3">
                <h3 class="text-xl font-bold">Mr. Babual Jangid</h3>
                <p class="text-gray-600">Director and CEO</p>
                <p class="text-gray-600">RJ 18 Technical Service is led by Mr. Babulal Jangid possessing extensive industry knowledge, ensuring strong leadership and exceptional service delivery in all projects.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="container mx-auto px-6 py-10">
    <h2 class="text-3xl font-bold mb-6">| Why Choose Us?</h2>
    <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> A specialized team with extensive experience</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> A specialized team with extensive experience</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> More than 17 years of experience in the U.A.E.</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> We meet the conditions (licenses, etc.) to work in the U.A.E.</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> We have our own design team</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> Our project approach is customized</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> Seamless integration of modern production processes</li>
        <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> We are ISO accredited</li>
        {{-- <li class="flex items-center space-x-3"><span class="text-white px-4 pt-[0.5rem] pb-[0.7rem]  text-xl bg-black rounded-full mr-2 content-center font-bold"> > </span> We have offices in Dubai, Abu Dhabi, and Sharjah</li> --}}
    </ul>
</section>

<section class="container mx-auto px-6 py-16">
  <h2 class="text-3xl md:text-4xl font-bold mb-10">| Reach Us</h2>
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
