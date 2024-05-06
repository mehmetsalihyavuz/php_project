<x-layout>
    <x-slot:heading>
        Phone Market
    </x-slot:heading>
   {{--  <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray 200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">   
                    {{$job->employer->name}}  <!--From Job class, it returns all Employer attributes -->
                </div>
                <div>
                    <strong>{{ $job['title'] }} :</strong> Pays {{ $job['salary'] }} per year
                </div>
            </a>
        @endforeach

        <div>
            {{$jobs->links()}} <!--- To display the pagination  -->
        </div>
    </div> --}}

    {{-- <div>
    <table cellpadding="50" cellspacing="50">
        
        <thead>
            <th>Brands</th>
            <th>Models</th>
            <th>Colors</th>
        </thead>

        <tbody>

            @foreach ($phones as $phone)
                <tr>
                    <td>{{ $phone->brands->name}}</td>

                    <td>{{ $phone->models->name }} </td>

                    <td>{{ $phone->colors->name }} </td>

                    <td> <x-button href="/phones/{{$phone['id']}}"> Show Attributes</x-button>
 
                   {{--  @can('edituser',$user)
                        <td><x-button href="/users/{{ $user['id'] }}/edit">Buy</x-button></td>
                    @endcan

                    @can('edituser',$user)
                        <td><x-button href="/users/{{ $user['id'] }}/edit">Show Attributes</x-button></td>
                    @endcan --}}

                {{-- </tr>
            @endforeach

        </tbody>

    </table> 
   --}}

    {{-- div>
        {{ $phones->links() }} <!--- To display the pagination  -->
    </div> --}}

   {{--  <h2 style="text-align: center; font-family: Arial, sans-serif;">Explore Our Phone Collection</h2> --}}


{{-- <div style="display: flex; justify-content: space-around; margin-top: 50px;">
    
    <a href="{{ route('smartphone.index') }}" style="text-decoration: none; "></a>
    <div style="width: 30%; background-color: #ffc107; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
      <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Smartphones</h2>
      <p style="color: #666; font-size: 16px;">Explore our collection of smartphones.</p>
    </div>
    
    <div style="width: 30%; background-color: #03a9f4; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
      <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Landline Phones</h2>
      <p style="color: #666; font-size: 16px;">Discover our selection of landline phones.</p>
    </div>
    
    <div style="width: 30%; background-color: #4caf50; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
      <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Feature Phones</h2>
      <p style="color: #666; font-size: 16px;">Browse our assortment of feature phones.</p>
    </div>
</div> --}}

<div style="display: flex; justify-content: space-around; margin-top: 50px;">

    <a href="{{ route('smartphone.index') }}" style="text-decoration: none;">
      <div style="flex: 0 0 30%; background-color: #ffc107; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Smartphones</h2>
        <p style="color: #666; font-size: 16px;">Explore our collection of smartphones.</p>
      </div>
    </a>
    
    <a href="{{ route('landlinephone.index') }}" style="text-decoration: none;">
      <div style="flex: 0 0 30%; background-color: #03a9f4; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Landline Phones</h2>
        <p style="color: #666; font-size: 16px;">Discover our selection of landline phones.</p>
      </div>
    </a>
  
    <a href="{{ route('featurephone.index') }}" style="text-decoration: none;">
      <div style="flex: 0 0 30%; background-color: #4caf50; padding: 20px; text-align: center; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
        <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Feature Phones</h2>
        <p style="color: #666; font-size: 16px;">Browse our assortment of feature phones.</p>
      </div>
    </a>
  
</div>
  
    
</x-layout>
