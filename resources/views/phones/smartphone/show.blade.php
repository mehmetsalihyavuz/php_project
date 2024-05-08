

<x-layout>
    <x-slot name="heading">
        <h1 class="text-3xl font-bold mb-4">Attributes of {{ $smartphone->brands->name }} {{ $smartphone->models->name }}</h1>
    </x-slot>

    <div class="bg-gray-100 rounded-lg shadow-md p-8 mb-6">
        <p class="text-lg text-center mb-4">{{ $smartphone->attributes($smartphone->brands->name, $smartphone->models->name, $smartphone->colors->name) }}</p>
    </div>

    <div class="bg-blue-500 rounded-lg shadow-md p-8 mb-6">
        <p class="text-lg text-white text-center">{{ $smartphone->makecall() }}</p>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="/phones/smartphone/{{$smartphone->id}}" class="mt-4">
            @csrf
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                Buy Now
            </button>
        </form>
    </div>
   
</x-layout>