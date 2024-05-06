<x-layout>
    <x-slot:heading>
        Attributes of {{$featurephone->brands->name}} {{$featurephone->models->name}}
    </x-slot:heading>

    {{$featurephone->attributes($featurephone->brands->name,
                                $featurephone->models->name,
                                $featurephone->colors->name)}}

    {{$featurephone->makecall()}}

</x-layout>