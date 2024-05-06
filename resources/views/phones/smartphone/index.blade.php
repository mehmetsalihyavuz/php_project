<x-layout>
    <x-slot:heading>
        Phone Market
    </x-slot:heading>

  {{--  <div>
    <table cellpadding="50" cellspacing="50">
        
        <thead>
            <th>Brands</th>
            <th>Models</th>
            <th>Colors</th>
        </thead>

        <tbody>

            @foreach ($smartphone as $phone)
                <tr>
                    <td>{{ $phone->brands->name}}</td>

                    <td>{{ $phone->models->name }} </td>

                    <td>{{ $phone->colors->name }} </td>

                    <td> <x-button href="/phones/{{$phone['id']}}"> Show Attributes</x-button> --}}
 
                  {{--   @can('edituser',$user)
                        <td><x-button href="/users/{{ $phone['id'] }}/edit">Buy</x-button></td>
                    @endcan

                    @can('edituser',$user)
                        <td><x-button href="/users/{{ $phone['id'] }}/edit">Show Attributes</x-button></td>
                    @endcan  --}}
{{-- 
                </tr>
            @endforeach

        </tbody>

    </table> 

   </div> --}}

    <div style="margin-top: 50px; overflow-x: auto;">
        <table cellpadding="20" cellspacing="0" style="width: 100%; border-collapse: separate; border-spacing: 0 20px; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="padding: 20px; border-bottom: 1px solid #ddd;">Brands</th>
                    <th style="padding: 20px; border-bottom: 1px solid #ddd;">Models</th>
                    <th style="padding: 20px; border-bottom: 1px solid #ddd;">Colors</th>
                    <th style="padding: 20px; border-bottom: 1px solid #ddd;">Actions</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($smartphone as $phone)
                <tr style="background-color: #fff;">
                    <td style="padding: 20px;">{{ $phone->brands->name }}</td>
                    <td style="padding: 20px;">{{ $phone->models->name }}</td>
                    <td style="padding: 20px;">{{ $phone->colors->name }}</td>
                    <td style="padding: 20px;">
                        <x-button href="/phones/smartphone/{{ $phone['id'] }}">Show Attributes</x-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
    
        </table>
    </div>


    <div>
        {{ $smartphone->links() }}
    </div>

</x-layout>