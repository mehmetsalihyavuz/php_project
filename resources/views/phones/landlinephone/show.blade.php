<x-layout>
    <x-slot:heading>
        Attributes of {{$landlinephone->brands->name}} {{$landlinephone->models->name}}
    </x-slot:heading>
    {{$landlinephone->attributes($landlinephone->brands->name,
                                 $landlinephone->models->name,
                                 $landlinephone->colors->name)}}

    {{$landlinephone->makecall()}}

</x-layout>