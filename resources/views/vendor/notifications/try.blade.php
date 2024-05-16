<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/mail-styles.css')}}">
</head>

<body>
    <!-- Header of the email -->
    <div class="header">
        <h2>Job Information</h2>
    </div>

    <!-- Content of the email -->
    <div class="content">
        <table>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
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

        <!-- Additional content or call-to-action button -->
        <p>Thank you for your attention!</p>
        <a href="#" class="button">Visit our website</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
</body>

</html>