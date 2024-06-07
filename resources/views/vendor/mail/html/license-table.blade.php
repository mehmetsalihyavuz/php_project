@props(['job'])

<table cellspacing="10">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Expire Date</th>
            <th>Days to Expire</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($job as $jobs)
            <tr>
                <td>{{ $jobs->title }}</td>
                <td>{{ $jobs->created_at }}</td>
                <td>{{ $jobs->salary }}</td>
            </tr>
        @endforeach
    </tbody>

</table>