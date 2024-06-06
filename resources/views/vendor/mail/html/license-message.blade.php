<x-mail::license-layout >
    <x-slot:header>
            <x-mail::license-header :url="$url">

            </x-mail::license-header>
    </x-slot:header>

    <x-slot:table>
            <x-mail::license-table :job="$job">
            
            </x-mail::license-table>
    </x-slot:table>

</x-mail::license-layout>