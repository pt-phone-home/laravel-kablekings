@extends('layouts.master')

@section('title')
Kable Kings | Welcome to Kable Kings
@endsection

@section('content')
<div class="bg-black py-24">
    <div class="bg-black container mx-auto flex flex-wrap ">
        <div class="w-full md:w-1/2 flex justify-center items-center">
            <div>
                <img src="/images/logo_white.png" alt="" class="h-64 w-auto">
            </div>
        </div>
        <div class="w-full md:w-1/2 mt-8 md:mt-0">
            <div class="flex flex-col">
                <div class="self-center">
                    <h2 class="text-gray-200 font-bold text-3xl">TV &amp; WIFI Solutions</h2>
                </div>
                <div class="flex mt-6">
                    <div class="w-1/2 pl-8 md:pl-0">
                        <ul class="list-reset text-xl text-gray-200 ">
                            <li><i class="far fa-check-circle mr-4 text-sm text-gray-300"></i>Saorview</li>
                            <li><i class="far fa-check-circle mr-4 text-sm text-gray-300"></i>TV Costs Reduced</li>
                            <li><i class="far fa-check-circle mr-4 text-sm text-gray-300"></i>WIFI enhancement</li>
                            <li><i class="far fa-check-circle mr-4 text-sm text-gray-300"></i>Structured Cabling</li>
                            <li><i class="far fa-check-circle mr-4 text-sm text-gray-300"></i>Home Security</li>
                            <li><i class="far fa-check-circle mr-4 text-sm text-gray-300"></i>Free Estimates</li>
                        </ul>
                    </div>
                    <div class="w-1/2 flex justify-center items-center">
                        {{-- <i class="far fa-chart-network text-gray-300 text-9xl"></i> --}}
                        {{-- <img src="/images/crown.png" alt="" class="w-2/4 h-auto"> --}}
                        <div class="w-1/2">
                            <img src="/images/wifi.png" alt="" class="w-2/4 h-auto">
                        </div>
                        <div class="w-1/2">
                            <i class="fas fa-tv text-gray-100 text-5xl"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
    <div>
        <div class="container mx-auto mt-8 flex flex-wrap">
            <div class="w-full md:w-1/2 flex flex-col items-center">
                <div>
                    <h2 class="text-gray-900 text-4xl font-display border-b-2 border-gray-900 mb-4">Contact Us</h2>
                </div>
                <div class="text-2xl text-gray-900">
                    <p><i class="fas fa-at mr-4 text-sm text-gray-700 mr-4 "></i>info@kablekings.ie</p>
                    <p><i class="fas fa-mobile-android-alt mr-4 text-sm text-gray-700 mr-4"></i>Dave: 083 309 1065</p>
                    <p><i class="fas fa-mobile-android-alt mr-4 text-sm text-gray-700 mr-4"></i>Michael: 083 309 4757</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col mt-6 md:mt-0">
                <div class="self-center">
                    <h2 class="text-gray-900 text-4xl font-display border-b-2 border-gray-900 mb-8 ">Make an enquiry</h2>
                </div>
            <form action="{{route('contact.post')}}" method="POST" class="text-lg w-4/5 px-4 md:px-0">
                @csrf
                    @if($errors->any())
                    <div class="w-full mb-4 bg-red-700 rounded px-2 py-2 text-gray-100">
                        <p class="uppercase">Your Message Was not sent</p>
                        <ul class="list-reset">
                            @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="w-full flex mb-4">
                        <label for="name" class="mr-4">Name:</label>
                        <input type="text" name="name" placeholder="Your Full Name" class="border border-black rounded px-1 text-sm w-full" required>
                    </div>
                    <div class="w-full flex mb-4">
                        <label for="phone" class="mr-4">Phone:</label>
                        <input type="number" name="phone" placeholder="087 ... " class="border border-black rounded px-1 text-sm w-full">
                    </div>
                    <div class="w-full flex mb-4">
                        <label for="email" class="mr-4">Email:</label>
                        <input type="email" name="email" placeholder="example@gmail.com" class="border border-black rounded px-1 text-sm w-full" required>
                    </div>
                    <div class="w-full flex mb-4">
                        <label for="message">Your enquiry:</label>
                    </div>

                    <div class="w-full flex mb-4">
                        <textarea name="message" id="" cols="30" rows="10" class="border border-black rounded px-1 text-sm w-full" required></textarea>
                    </div>
                    <div class="mb-4">
                        {!! NoCaptcha::renderJs(array('required' => 'required')) !!}
                        {!! NoCaptcha::display() !!}
                    </div>

                    <div class="w-full flex">
                        <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-gray-100 text-xl px-2 py-1 inline-block rounded">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection


@section('scripts')
