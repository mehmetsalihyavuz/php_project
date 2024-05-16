<x-layout>
    <x-slot:heading>
        {{ $user->id}}
    </x-slot:heading>
    
    <div>
    <table cellpadding="50" cellspacing="50">
        
        <thead>
            <th>Brands</th>
            <th>Models</th>
            <th>Colors</th>
        </thead>

        <tbody>

            @foreach ($landlinephone as $phone)
                <tr>
                    <td>{{ $phone->brands->name}}</td>

                    <td>{{ $phone->models->name }} </td>

                    <td>{{ $phone->colors->name }} </td>

                 {{--    <td> <x-button href="/phones/{{$phone['id']}}"> Show Attributes</x-button>
 
                    @can('edituser',$user)
                        <td><x-button href="/users/{{ $phone['id'] }}/edit">Buy</x-button></td>
                    @endcan

                    @can('edituser',$user)
                        <td><x-button href="/users/{{ $phone['id'] }}/edit">Show Attributes</x-button></td>
                    @endcan   --}}
 
                </tr>
            @endforeach

        </tbody>

    </table> 

   </div> 
    {{$landlinephone->links()}}
</x-layout>