<!DOCTYPE html>
<html>

<head>
    
</head>

<body>
    <!-- Header of the email -->
    <div class="header">
        <h2>Licenses That Will Expire Soon</h2>
    </div>

    <!-- Content of the email -->
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

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 BNTPRO. All rights reserved.</p>
    </div>
    
</body>

</html>
