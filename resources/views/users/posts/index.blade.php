@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">

            <div class="p-6">
                <h2 class="text-2xl font-medium mb-1">{{ $user->name }}</h2>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received {{ $user->receivedLikes->count() }} likes</p>
            </div>
            {{-- {{  $user->name }} --}}
            <div class="bg-white p-6 rounded-lg">
                @if($posts->count())
                    {{-- 2:14:40 --}}
                    @foreach ($posts as $post)
                        <x-post :post="$post"/>
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <p> {{  $user->name }} There are no posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection
