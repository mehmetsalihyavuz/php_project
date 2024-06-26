{{-- <div class="table-responsive">
    <table class="table-custom" id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Expire Date</th>
                <th>Days To Expire</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($job as $jobs)
                <tr>
                    <td>{{ $loop->iteration}}</td> 
                    <td>{{ $jobs->title }}</td>
                    <td>{{ $jobs->created_at }}</td>
                    <td>{{ $jobs->salary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}

{{$slot}}