{{-- <x-layout>
    <x-slot name="heading">
        <h1 class="text-3xl font-bold mb-4">Attributes of {{ $featurephone->brands->name }} {{ $featurephone->models->name }}</h1>
    </x-slot>

    <div class="bg-gray-100 rounded-lg shadow-md p-8 mb-6">
        <p class="text-lg text-center mb-4">{{ $featurephone->attributes($featurephone->brands->name, $featurephone->models->name, $featurephone->colors->name) }}</p>
    </div>

    <div class="bg-blue-500 rounded-lg shadow-md p-8 mb-6">
        <p class="text-lg text-white text-center">{{ $featurephone->makecall() }}</p>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="/phones/featurephone/{{$featurephone->id}}" class="mt-4">
            @csrf
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                Buy Now
            </button>
        </form>
    </div>
   
</x-layout> --}}


<x-layout>
    <x-slot name="heading">
        <h1 class="text-3xl font-bold mb-4">Attributes of {{ $featurephone->brands->name }} {{ $featurephone->models->name }}</h1>
    </x-slot>

    <div class="bg-gray-100 rounded-lg shadow-md p-8 mb-6">
        <p class="text-lg text-center mb-4">{{ $featurephone->attributes($featurephone->brands->name, $featurephone->models->name, $featurephone->colors->name) }}</p>
    </div>

    <div class="bg-blue-500 rounded-lg shadow-md p-8 mb-6">
        <p class="text-lg text-white text-center">{{ $featurephone->makecall() }}</p>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="/phones/featurephone/{{$featurephone->id}}" class="mt-4">
            @csrf
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                Buy Now
            </button>
        </form>
    </div>
   
</x-layout>
