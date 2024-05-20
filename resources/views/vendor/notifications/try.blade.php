<!DOCTYPE html>
<html>

<body>
    <div class="logo-container">
        <img src="{{ url('https://www.bntpro.com/media/2021/06/bntpro_logo.svg') }}" alt="Company Logo" class="logo">
    </div>

    <div class="header">
        <h2>Licenses That Will Expire Soon</h2>
    </div>

    <div class="content">
        <table>
            <tr>
                <th>Company Name</th>
                <th>Expire Date</th>
            </tr>
            <tr>
                <td>Job Title</td>
                <td>{{ $job->title }}</td>
            </tr>
            <tr>
                <td>User Email</td>
                <td>{{ $job->employer->user->email }}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>{{ $job->employer->user->username }}</td>
            </tr>
        </table>
    </div>

    {{-- <div class="footer">
        <p>&copy; 2024 BNTPRO</p>
    </div> --}}
</body>

</html>