@extends('layouts.app')

@section('content')

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">User Posts</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-y-8">
                @foreach ($posts as $post)
                    <div class="group relative border border-gray-300 rounded-lg p-4 shadow-lg bg-gray-50">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">
                                {{ $post->name }}
                            </h3>
                            <h6 class="text-lg font-semibold text-gray-800">
                                {{ $post->short_content }}
                            </h6>
                            <p class="text-sm text-gray-500">{{ $post->content }}</p>
                        </div>
                        <div class="text-sm text-gray-700">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel risus commodo, posuere eros non, blandit magna.</p>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:underline">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection

