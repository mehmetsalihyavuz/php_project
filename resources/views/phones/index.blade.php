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

                   {{--  @can('edituser',$user)
                        <td><x-button href="/users/{{ $user['id'] }}/edit">Buy</x-button></td>
                    @endcan

                    @can('edituser',$user)
                        <td><x-button href="/users/{{ $user['id'] }}/edit">Show Attributes</x-button></td>
                    @endcan --}}

                </tr>
            @endforeach

        </tbody>

    </table>

    <div>
        {{ $phones->links() }} <!--- To display the pagination  -->
    </div>

</x-layout>
