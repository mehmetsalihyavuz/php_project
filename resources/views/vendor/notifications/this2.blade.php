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
            width: 767px;
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
            margin-bottom: 20px;
        }

        .header-wrapper {
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 24px;
            font-weight: bold;
            background: linear-gradient(45deg, #666666, #424242);
            color: #fff;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: separate;
            margin-bottom: 20px;
            border-radius: 7px;
            background-color: #fafafa;
            border: none;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
        }

        th {
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            color: #fff;
            font-weight: bold;
        }

        td {
            background: #ffffff;
            color: #000;
        }

        .margin {
            float: left;
            width: 100%;
            overflow: hidden;
            height: 40px;
            padding-bottom: 0px;
            box-sizing: border-box;
        }

        .header-wrapper h4 {
            color: #fff;
            font-size: 28px;
            font-weight: 900;
            text-transform: capitalize;
            margin: 0;
            font-style: normal;
            font-family: "Roboto", helvetica, arial, sans-serif;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
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
                        <div class="header-wrapper">
                            <h4> Licences That Expire In A Month</h4>
                        </div>
                        <div class="second-div">
                            <table class="second-table table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th> Company Name</th>
                                        <th> Expire Date</th>
                                        <th> Days To Expire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{ $job->title }}</td>
                                        <td> 2024-05-31</td>
                                        <td> 1</td>
                                    </tr>
                                    <tr>
                                        <td> {{ $job->title }}</td>
                                        <td> 2024-05-31</td>
                                        <td> 1</td>
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
