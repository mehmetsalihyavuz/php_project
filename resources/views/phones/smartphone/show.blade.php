<x-layout>
    <x-slot:heading>
        Attributes of {{$smartphone->brands->name}} {{$smartphone->models->name}}
    </x-slot:heading>
    {{$smartphone->attributes($smartphone->brands->name,
                              $smartphone->models->name,
                              $smartphone->colors->name)}}

    {{$smartphone->makecall()}}

    <x-button>Buy</x-button>
    
</x-layout>