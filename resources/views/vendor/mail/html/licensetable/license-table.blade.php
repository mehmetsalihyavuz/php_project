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

<div class="table-users">
    <table>
        <thead>
            <tr>
                <th>Hosts</th>
                <th>Port</th>
                <th>Last Seen</th>
                <th>Subject</th>
                <th>Days to Expire</th>
                <th>Issuer</th>
                <th>Subject Alternative Names</th>
                <th>Owner</th>
                <th>Alert Days</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10.34.24.181</td>
                <td>443</td>
                <td>2024-05-06 12:00:17</td>
                <td>sectrailcmprod.local</td>
                <td>09-05-2024 10:39:27</td>
                <td>rootCA</td>
                <td>DNS:sectrailcmprod.local, DNS:sectrailcmprod.local</td>
                <td>abc.def@bntpro.com</td>
                <td>2</td>
            </tr>
            <tr>
                <td>10.34.24.181</td>
                <td>443</td>
                <td>2024-05-06 12:00:17</td>
                <td>sectrailcmprod.local</td>
                <td>09-05-2024 10:39:27</td>
                <td>rootCA</td>
                <td>DNS:sectrailcmprod.local</td>
                <td></td>
                <td>2</td>
            </tr>
            <tr>
                <td>10.34.24.181</td>
                <td>443</td>
                <td>2024-05-06 12:00:17</td>
                <td>sectrailcmprod.local</td>
                <td>09-05-2024 10:39:27</td>
                <td>rootCA</td>
                <td>DNS:sectrailcmprod.local</td>
                <td></td>
                <td>2</td>
            </tr>
            <tr>
                <td>10.34.24.181</td>
                <td>443</td>
                <td>2024-05-06 12:00:17</td>
                <td>sectrailcmprod.local</td>
                <td>09-05-2024 10:39:27</td>
                <td>rootCA</td>
                <td>DNS:sectrailcmprod.local</td>
                <td></td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
</div>