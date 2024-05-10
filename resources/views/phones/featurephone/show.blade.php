<x-layout>
    <x-slot name="heading">
        <h1 class="text-3xl font-bold mb-4">Attributes of {{ $featurephone->brands->name }} {{ $featurephone->models->name }}</h1>
    </x-slot>

    @php
        $errorMessage = session('error');
    @endphp

    @if ($errorMessage)
        <div class="alert alert-error"
            style="padding: 15px; border: 1px solid #d6e9c6; border-radius: 4px; color: #3c763d; background-color: #f40d05;">
            {{ $errorMessage }}
        </div>
    @endif

    <div class="bg-gray-100 rounded-lg shadow-md p-8 mb-6">
        <h2 class="text-lg font-bold mb-2">Attributes:</h2>
        <p class="text-lg">{{ $featurephone->attributes($featurephone->brands->name, $featurephone->models->name, $featurephone->colors->name) }}</p>
    </div>

    <div class="bg-blue-500 rounded-lg shadow-md p-8 mb-6">       
        <h2 class="text-lg font-bold mb-2 text-white">Price:</h2>
        <p class="text-lg text-white">${{ $featurephone->price }}</p>
    </div>

    @auth
        <div class="flex justify-center">
            <form method="POST" action="/phones/featurephone/{{ $featurephone->id }}" class="mt-4">
                @csrf
                @method('PATCH')
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                    Buy Now
                </button>
            </form>
        </div>
    @endauth

</x-layout>