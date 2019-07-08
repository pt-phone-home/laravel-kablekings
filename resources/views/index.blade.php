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
        <div class="w-1/2">
            <div class="flex flex-col">
                <div class="self-center">
                    <h2 class="text-gray-200 font-bold text-3xl">TV &amp; WIFI Solutions</h2>
                </div>
                <div class="flex mt-6">
                    <div class="w-1/2">
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
                        <img src="/images/crown.png" alt="" class="w-2/4 h-auto">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
    <div>
        <div class="container mx-auto mt-8">
            <div class="flex flex-col items-center">
                <div>
                    <h2 class="text-gray-900 text-3xl">Contact Us</h2>
                </div>
                <div class="text-lg text-gray-900">
                    <p><i class="fas fa-at mr-4 text-sm text-gray-700 mr-4 "></i>info@kablekings.ie</p>
                    <p><i class="fas fa-mobile-android-alt mr-4 text-sm text-gray-700 mr-4"></i>Dave: 083 309 1065</p>
                    <p><i class="fas fa-mobile-android-alt mr-4 text-sm text-gray-700 mr-4"></i>Michael: 083 309 4757</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <form action="">
            <label for="name">Name:</label>
            <input type="text" placeholder="Your Full Name">
            <label for="phone">Phone:</label>
            <input type="number" placeholder="087 ... ">
            <label for="email">Email:</label>
            <input type="email" placeholder="example@gmail.com">
            <button type="submit" class="bg-gray-800 text-gray-100 px-2 py-1 inline-block rounded">Register</button>
        </form>
    </div>
@endsection


@section('scripts')
