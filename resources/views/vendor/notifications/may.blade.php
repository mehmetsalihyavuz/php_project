<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            font-family: 'Baloo 2', 'Open Sans', 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, Tahoma, Arial, monospace, sans-serif;
            min-height: 100vh;
        }

        .second-body {
            width: 100%;
            display: block;
            overflow: hidden;
            background: linear-gradient(135deg, #696969, #a9a9a9);
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 767px;;
            margin: 50px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 150px !important;
            height: auto;
        }

        .divider {
            width: 100%;
            height: 2px;
            background-color: #f2f2fd;
            margin: 20px 0;
        }

        .header-wrapper {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background: linear-gradient(45deg, #666666, #424242);
            color: #fff;
            margin-bottom: 30px;
        }

        .header-wrapper h4 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border-radius: 7px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: linear-gradient(45deg, #ff0000, #b30000);
            color: #fff;
            font-weight: bold;
            text-align: center;
        }

        td {
            background: #ffffff;
            color: #000;
        }

        tr:hover td {
            background: #f9f9f9;
        }

        tr:nth-child(even) td {
            background: #f1f1f1;
        }

        @media (max-width: 600px) {
            table {
                width: 80%;
          /*       overflow-x: scroll; */
            }

            .container {
                padding: 10px;
            }

            .header-wrapper h4 {
                font-size: 20px;
            }

            th, td {
                padding: 10px;
            }

            .logo {
                max-width: 150px;
            }
        }

        .margin {
            float: left;
            width: 100%;
            overflow: hidden;
            height: 25px;
            padding-bottom: 0px;
            box-sizing: border-box;
        }

    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
            <div class="margin"></div>
            <div class="logo-container">
                {{-- "https://www.bntpro.com/media/2021/06/bntpro_logo.svg" --}}
                {{-- https://i.ytimg.com/vi/-DzrduG1ZoA/maxresdefault.jpg --}}
                <img src="https://i.imgur.com/e7Ejpv5.png"alt="Company Logo" class="logo">
            </div>
            <div class="divider"></div>
            <div class="header-wrapper">
                <h4>Licences That Will Expire In A Month</h4>
            </div>

            <div>
                <table class="table-responsive">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Expire Date</th>
                            <th>Days To Expire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>2024-05-31</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>2024-05-31</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
