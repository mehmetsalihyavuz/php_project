{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .panel {
            background: linear-gradient(to right, #3498db, #2ecc71);
            padding: 0;
            border-radius: 10px;
            border: none;
            max-width: 800px;
            margin: 0 auto;
        }

        .panel-heading {
            padding: 20px 15px;
            border-radius: 10px;
        }
        
        .title {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 0;
        }

        .table {
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #fff;
            border-radius: 10px;
        }

        .table th,
        .table td {
            color: #333;
            font-size: 16px;
            padding: 12px;
            text-align: left;
        }

        .table thead th {
            text-align: center;
            background-color: #3498db;
            color: #fff;
        }

        .table tbody tr:nth-child(even) {
            text-align: center;
            background-color: #ecf0f1;
        }

        .table tbody tr:nth-child(odd) {
            text-align: center;
            background-color: #bdc3c7;
        }
    </style>
</head>

<body>
    <div class="panel">
        <div class="panel-heading">
            <h4 class="title">Licences That Gonna Expire In A Month</h4>
        </div>
        <div class="panel-body table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Job Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vincent Williamson</td>
                        <td>iOS Developer</td>
                    </tr>
                    <tr>
                        <td>Taylor Reyes</td>
                        <td>UI/UX Developer</td>
                    </tr>
                    <tr>
                        <td>Justin Block</td>
                        <td>Frontend Developer</td>
                    </tr>
                    <tr>
                        <td>Sean Guzman</td>
                        <td>Web Designer</td>
                    </tr>
                    <tr>
                        <td>Keith Carter</td>
                        <td>Graphic Designer</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .primary-body {
            display: block;
            padding: 0px;
            margin: 0px;
        }

        .second-body {
            width: 100%;
            display: block;
            overflow: hidden;
            background: #d3d3d3;
            font-size: 18px;
            font-weight: normal;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
        }

        .alarm-table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 0px;
            width: 640px;
            max-width: 90%;
            margin: 100px auto;
            border-radius: 10px;
            overflow: hidden;
        }

        .logo-container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
        }

        .logo {
            width: 70% !important;
            max-width: 250px;
            height: auto;
        }

        .divider {
            float: left;
            width: 100%;
            overflow: hidden;
            margin: 20px 0px;
            border-bottom: 2px solid #f2f2fd;
        }
          
        .header-container {
            display: flex;
            justify-content: center;
            background: linear-gradient(to right, #3498db, #2ecc71);
            padding: 0;
            border-radius: 10px;
            border: none;
            max-width: 800px;
            margin: 0 auto;
        }

        .header-wrapper {
            padding: 20px 15px;
            border-radius: 10px;
        }

        .header {
            color: black;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
             box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
         }


        .content {
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            color: #fff;
        }

        /* .panel {
            background: linear-gradient(to right, #3498db, #2ecc71);
            padding: 0;
            border-radius: 10px;
            border: none;
            max-width: 800px;
            margin: 0 auto;
        }

        .panel-heading {
            padding: 20px 15px;
            border-radius: 10px;
        } */
        
        .title {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 0;
        }

        .table {
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #fff;
            border-radius: 10px;
        }

        .table th,
        .table td {
            color: #333;
            font-size: 16px;
            padding: 12px;
            text-align: left;
        }

        .table thead th {
            text-align: center;
            background-color: #3498db;
            color: #fff;
        }

        .table tbody tr:nth-child(even) {
            text-align: center;
            background-color: #ecf0f1;
        }

        .table tbody tr:nth-child(odd) {
            text-align: center;
            background-color: #bdc3c7;
        }
     
        .margin {
            float: left;
            width: 100%;
            overflow: hidden;
            height: 40px;
            padding-bottom: 0px;
            box-sizing: border-box;
        }
    </style>
</head>


<body class="primary-body">
    <div class="second-body">
        <table class="alarm-table">
            <tbody>
                <tr>
                    <td colspan="10">
                        <div class="margin"></div>
                        <div class="logo-container">
                            <img src="https://www.bntpro.com/media/2021/06/bntpro_logo.svg" alt="Company Logo"
                                class="logo">
                        </div>
                        <div class="divider"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="header-container">
                            <div class="header-wrapper">                                
                                    <h4 class="title">Licenses That Will Expire Soon</h4>
                            </div>
                        </div> 
                        {{-- <div class="panel">
                            <div class="panel-heading">
                                <h4 class="title">Licences That Gonna Expire In A Month</h4>
                            </div>
                            <div class="panel-body table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Job Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vincent Williamson</td>
                                            <td>iOS Developer</td>
                                        </tr>
                                        <tr>
                                            <td>Taylor Reyes</td>
                                            <td>UI/UX Developer</td>
                                        </tr>
                                        <tr>
                                            <td>Justin Block</td>
                                            <td>Frontend Developer</td>
                                        </tr>
                                        <tr>
                                            <td>Sean Guzman</td>
                                            <td>Web Designer</td>
                                        </tr>
                                        <tr>
                                            <td>Keith Carter</td>
                                            <td>Graphic Designer</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="panel-body table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Job Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vincent Williamson</td>
                                        <td>iOS Developer</td>
                                    </tr>
                                    <tr>
                                        <td>Taylor Reyes</td>
                                        <td>UI/UX Developer</td>
                                    </tr>
                                    <tr>
                                        <td>Justin Block</td>
                                        <td>Frontend Developer</td>
                                    </tr>
                                    <tr>
                                        <td>Sean Guzman</td>
                                        <td>Web Designer</td>
                                    </tr>
                                    <tr>
                                        <td>Keith Carter</td>
                                        <td>Graphic Designer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="content table-responsive-sm table-bordered table-striped table-hover">
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
                                </tbody>
                            </table>
                        </div> --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
