<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    @php
        $successMessage = session('success');
        $errorMessage = session('error');
    @endphp

    @if ($successMessage)
        <div class="alert alert-success"
            style="padding: 15px; border: 1px solid #d6e9c6; border-radius: 4px; color: #3c763d; background-color: #dff0d8;">
            {{ $successMessage }}
        </div>
    @endif

   
</x-layout>
