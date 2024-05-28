{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <div class="logo-container">
        <img src="{{ url('https://www.bntpro.com/media/2021/06/bntpro_logo.svg') }}" alt="Company Logo" class="logo">
    </div>

    <div class="header-container">
        <div class="header">
            <h2>Licenses That Will Expire Soon</h2>
        </div>
    </div>

   <div class="content">
        <table class="table table-responsive-sm table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Company Name</th>
                    <th>Expire Date</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div> 

    <div class="content">
        <table class="table table-responsive-sm table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Company Name</th>
                    <th>Expire Date</th>
                    <th>Days To Expire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >{{ $job->title }}</td>
                    <td >2024-05-24</td>
                    <td >1</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html> --}}




{{--  --}}




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .logo-container {
            text-align: center;
            padding: 20px;
            background-color: #cc3333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid #e0e0e0;
        }

        .logo {
            max-width: 150px;
            height: auto;
        }

        .divider {
            width: 100%;
            height: 20px;
            background-color: #e0e0e0;
            margin: 20px 0;
        }

        .header-container {
            display: flex;
            justify-content: center;
        }

        .header {
            width: 80%;
            max-width: 800px;
            text-align: center;
            background: linear-gradient(45deg, #333333, #000000);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-family: 'Times New Roman', Times, serif;
        }

        .content {
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }

        th {
            background: linear-gradient(45deg, #cc0000, #990000);
            color: #fff;
            font-weight: bold;
        }

        td {
            background: linear-gradient(45deg, #505050, #333333);
            color: #fff;
        }

        tr:nth-child(even) td {
            background: linear-gradient(45deg, #999999, #666666);
        }

        .table-hover tbody tr:hover td {
            background-color: #424242;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <img src="https://www.bntpro.com/media/2021/06/bntpro_logo.svg" alt="Company Logo" class="logo">
    </div>

    <div class="divider"></div>

    <div class="header-container">
        <div class="header">
            <h2>Licenses That Will Expire Soon</h2>
        </div>
    </div>

    <div class="content">
        <table class="table table-responsive-sm table-bordered table-striped table-hover">
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
            </tbody>
        </table>
    </div>
</body>

</html>
 --}}




{{--  --}}

{{-- <!DOCTYPE html>
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
            width: 200px;
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
        }

        .header {
           /*  width: 80%;
            max-width: 800px; */
            text-align: center;
            background: #000000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-radius: 8px;

            font-family: 'Times New Roman', Times, serif;
        }

        .content {
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
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
            color: #fff;
        }

        /*   tr:nth-child(even) td {
            background: linear-gradient(45deg, #999999, #666666);
        } */
/* 
        .table-hover tbody tr:hover td {
            background-color: #424242;
        } */

        .table-margin {
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

                        <div class="table-margin"></div>

                        <div class="logo-container">
                            <img src="https://www.bntpro.com/media/2021/06/bntpro_logo.svg" alt="Company Logo"
                                class="logo">
                        </div>

                        <div class="divider"></div>

                    </td>
                </tr>

                <tr>
                    <td colspan="10" style="">
                        <div class="header-container">
                            <div class="header">
                                <h2>Licenses That Will Expire Soon</h2>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr colspan="10">
                    <td>
                        <div class="content">
                            <table class="table table-responsive-sm table-bordered table-striped table-hover">
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
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
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
        }

        .header-wrapper {
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 12px;
            font-weight: bold;
        }

        .header {
            color: black;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
/*             box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 */        }


        .content {
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1px solid black;
            border-radius: 7px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
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
        }

        .table-margin {
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
                        <div class="table-margin"></div>
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
                                <div class="header">
                                    <h2>Licenses That Will Expire Soon</h2>
                                </div>
                            </div>
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="content table-responsive-sm table-bordered table-striped table-hover">
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
