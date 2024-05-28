<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body.primary-body {
            background-color: #d3d3d3;
            margin: 0;
            padding: 0;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
        }

        .second-body {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }

        .logo-container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
        }

        .logo {
            width: 70%;
            max-width: 250px;
            height: auto;
        }

        .divider {
            width: 100%;
            height: 2px;
            background-color: #f2f2fd;
            margin: 20px 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            text-transform: uppercase;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content {
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background: linear-gradient(45deg, #cc0000, #990000);
            color: #fff;
            font-weight: bold;
        }

        td {
            background: #ffffff;
            color: #000;
            border-bottom: 1px solid #ddd;
        }

        @media (max-width: 600px) {
            .header, .content {
                margin: 10px;
            }

            th, td {
                padding: 8px;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="logo-container">
            <img src="https://www.bntpro.com/media/2021/06/bntpro_logo.svg" alt="Company Logo" class="logo">
        </div>
        <div class="divider"></div>
        <div class="header">
            <h2>Licenses That Will Expire Soon</h2>
        </div>
        <div class="content">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Company Name</th>
                            <th>Expire Date</th>
                            <th>Days To Expire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>2024-05-24</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>2024-05-24</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>2024-05-24</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
