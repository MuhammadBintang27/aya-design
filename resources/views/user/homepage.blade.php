@extends('layouts.homelayouts')

@section('konten')

<section class="text-gray-800 body-font">
  <div class="container px-10 py-16 mx-auto flex flex-wrap">
    <div class="flex flex-wrap -mx-4 lg:w-1/2 sm:w-2/3 content-start sm:pr-10 mt-14">
      <div class="flex w-full sm:px-4">
        <h1 class="inline-block text-3xl w-14 font-bold judul" style="color: #142131; margin-right: 40px;">aya</h1>
        <h1 class="inline-block text-3xl font-bold judul" style="color: #BA6264;">dsign</h1>
      </div>
      <div class="w-full sm:p-4 px-4 ">
        <h1 class="title-font text-xl mb-2 text-gray-900">Create with your beloved ones here!</h1>
        <div class="leading-relaxed">Temukan jasa desain kekinian yang memukau di Ayadsign! Kami menghadirkan berbagai
          karya menawan dengan acrylic frame yang bisa kamu pesan langsung. Jangan lewatkan kesempatan untuk
          mempercantik ruangmu dengan sentuhan kreatif dari kami</div>
      </div>
      @if(auth()->check())
      <div class="w-full sm:px-4 mb-6">
  
    <a href="{{ route('go_shopping') }}"
    class="inline-flex items-center justify-center px-4 py-2 text-white bg-custom-pink border border-transparent rounded-xl font-medium hover:bg-custom-pink/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom-pink shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
    Go Shopping
    </a>
  </div>      
  @else
  <div class="w-full sm:px-4 mb-6">
    <a href="{{ route('login') }}"
    class="inline-flex items-center justify-center px-4 py-2 text-white bg-custom-pink border border-transparent rounded-xl font-medium hover:bg-custom-pink/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom-pink shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
    Get Started
    </a>
    <a href="{{ route('go_shopping') }}"
    class="inline-flex items-center justify-center px-4 py-2 text-white bg-custom-pink border border-transparent rounded-xl font-medium hover:bg-custom-pink/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom-pink shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
    Go Shopping
    </a>
  </div>
@endif
    </div>
    <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-7 sm:mt-0 relative"
      style="width: 600px; height: 400px;">
      <!-- Div Pertama -->
      <div class="absolute inset-0 flex justify-between" style="width: 600px; height: 400px; margin-left: 100px;">
        <img class="object-cover object-center w-1/3 h-full absolute top-0 left-0 ml-12 " src="/image/foto-home-1.png"
          alt="Image 1 description " style="width: 231px; height: 154px;">
        <img
          class="object-cover object-center w-1/3 h-full absolute top-0 left-1/2 transform -translate-x-1/2 ml-24 mt-5"
          src="/image/foto-home-2.png" alt="Image 2 description" style="width: 231px; height: 315px; ">
      </div>
      <!-- Div Kedua -->
      <div class="absolute inset-0 flex justify-center items-center ml-32 mt-52" style="width: 400px; height: 150px;">
        <img class="object-cover object-center mb-12" src="/image/foto-home-3.png" alt="Image 3 description"
          style="width: 312px; height: 208px;">
      </div>
    </div>

  </div>
</section>
<section class="mb-60 mt-24">
  <h1 class="text-center judul">Collection</h1>
  <div class="container px-5 py-34 mx-auto ml-64 mt-10">
    <div class="flex flex-wrap -mx-4 -mb-10" style="width: 900px; heigflex-direction: row;">
      <div class="mb-10 px-4" style="width: 280px; height: 360px;">
        <div class=" overflow-hidden">
          <img alt="content" class="object-cover object-center h-96 w-auto" src="\image\newyaer.png">
        </div>
      </div>
      <div class="py-10 px-4 ml-6 " style="width: 280px; height: 360px;">
        <div class=" overflow-hidden">
          <img alt="content" class="object-cover object-center h-96 w-auto" src="\image\palestine.png">
        </div>
      </div>
      <div class="mb-10 px-4" style="width: 280px; height: 300px;">
        <div class=" overflow-hidden">
          <img alt="content" class="object-cover object-center h-96 w-auto" src="\image\ramadhan.png">
        </div>
      </div>
    </div>
  </div>



</section>



@endsection