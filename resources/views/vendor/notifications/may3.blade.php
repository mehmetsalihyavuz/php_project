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

        .header {
            background-color: #2c6268;
            color: white;
            font-size: 25px;
            padding: 1rem;
            text-align: center;
            text-transform: capitalize;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 150px;
        }

        .divider {
            height: 2px;
            background-color: #2c6268;
            margin: 20px 0;
        }

        .table-users {
            border: 1px solid #2c6268;
            border-radius: 10px;
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            max-width: calc(100% - 2em);
            margin: 1em auto;
            overflow: hidden;
            width: 800px;
            background-color: #ffffff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            background-color: #f9f9f9;
            color: #255154;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #e6f3f3;
            font-weight: 300;
        }

        tr:nth-child(even) {
            background-color: #d3d3d3;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .container {
/*             max-width: 1000px;*/
            max-width: 767px;;
            margin: 50px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .logo {
            width: 150px !important;
            height: auto;
        }

    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="table-users">
            <div class="container">
                <img src="https://i.imgur.com/e7Ejpv5.png" alt="Company Logo" class="logo">
                <div class="divider"></div>
                <div class="header">Licenses That Will Expire In A Month</div>
                <table cellspacing="10">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Expire Date</th>
                            <th>Days to Expire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Company A</td>
                            <td>2024-06-15</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Company B</td>
                            <td>2024-06-20</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Company C</td>
                            <td>2024-06-25</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>Company D</td>
                            <td>2024-06-30</td>
                            <td>30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
