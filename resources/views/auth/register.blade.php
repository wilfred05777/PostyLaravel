{{-- base layout --}}
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">

            <div class="mb-2">Register</div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-gl" value="">
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-gl" value="">
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-gl" value="">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-gl" value="">
                </div>
                <div class="mb-4">
                    <label for="password-confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password-confirmation" id="password-confirmation" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-gl" value="">
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
