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
        <tr>
            <td>{{$job->title}}</td>
            <td>2024-06-15</td>
            <td>15</td>
        </tr>
        <tr>
            <td>{{$job->title}}</td>
            <td>2024-06-20</td>
            <td>20</td>
        </tr>
        <tr>
            <td>{{$job->title}}</td>
            <td>2024-06-25</td>
            <td>25</td>
        </tr>
        <tr>
            <td>{{$job->title}}</td>
            <td>2024-06-30</td>
            <td>30</td>
        </tr>
    </tbody>

    {{-- <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->description }}</td>
                <td>{{ $job->created_at }}</td>
                <td>{{ $job->updated_at }}</td>
            </tr>
        @endforeach
    </tbody> --}}
    
</table>