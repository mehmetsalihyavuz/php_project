<x-layout>
    <x-slot:heading>
        Users
    </x-slot:heading>
    
    <table cellpadding="50" cellspacing="50">
        
        <thead>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </thead>

        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username}}</td>

                    <td>{{ $user->first_name }} </td>

                    <td>{{ $user->last_name }} </td>

                    <td>{{ $user->email }} </td>

                    @can('edituser',$user)
                        <td><x-button href="/users/{{ $user['id'] }}/edit">Edit</x-button></td>
                    @endcan
                </tr>
            @endforeach

        </tbody>

    </table>

    <div class="mx-20 mt-10">
        {{ $users->links() }} 
    </div>
</x-layout>
