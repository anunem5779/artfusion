@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <div class="mb-4">
                <a href="{{ route('home') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                    <
                </a>
            </div>
            <h2 class="text-2xl font-bold text-center mb-6">Gallery</h2>

            <div class="space-y-6">
                @forelse($product as $pro)
                    <div class="bg-white rounded-lg shadow-md p-4 flex items-center">
                        <!-- Product Image -->
                        <div class="w-1/4 flex justify-center overflow-clip">
                            <img src="{{ strpos($pro->image, 'storage') === null ? url($pro->image) : asset($pro->image) }}" alt="IMG" class="max-w-[10em] rounded-lg object-cover">
                        </div>

                        <!-- Product Details -->
                        <div class="w-1/2 px-4">
                            <h3 class="text-xl font-semibold">{{ $pro->pro_name }}</h3>
                            <p class="text-gray-600 mt-2">{{ $pro->description }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">No products available.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection


