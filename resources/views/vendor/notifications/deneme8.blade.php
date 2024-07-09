{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
        }

        .second-body {
            max-width: 100%;
            overflow: hidden;
            background: linear-gradient(135deg, #eee, #ddd);
            padding: 20px;
            box-sizing: border-box;
            display: flex;
        }

        .container {
            width: 100%;
            padding: 10px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        .logo-divider {
            display: flex;
            align-items: center;
            width: 100% !important;
        }

        .logo1 {
            margin: 20px 0px;
            width: 90px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 132px;
            height: 100px !important;
            margin: auto auto 20px auto;
        }

        .divider-line {
            width: 100%;
            flex-grow: 1;
            height: 2px;
            background-color: #1b3057;
            margin: 40px 20px;
        }

        .table-header {
            width: 99.9%;
            background-color: #1b3057;
            color: #fff;
            padding: 10px;
            text-transform: capitalize;
            text-align: center;
            font-size: 13px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .table-users {
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
            margin: 0 auto;
            overflow-x: auto;
        }

        .table-users table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-users th,
        .table-users td {
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal;
        }

        .table-users th {
            font-family: Arial, sans-serif;
            font-size: 13px;
            background-color: #708196;
            color: #ebedef !important;
            font-weight: 200 !important;
            letter-spacing: 0.1em;
            position: relative;
            top: 0;
            z-index: 999;
        }

        .table-users td {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 300 !important;
        }

        .table-users th {
            padding: 12px 19px 12px 12px !important;
        }

        .table-users td {
            padding: 7px 8px 7px 7px !important;
        }

        .table-users th,
        .table-users td {
            border-right: 2px solid #fff;
        }

        .table-users tr {
            border-bottom: 2px solid #fff;
        }

        .table-users tbody td {
            border-right: 2px solid #fff;
        }

        .table-users tbody tr {
            background-color: #f7f7f7;
        }

        .table-users thead th {
            border-top: 2px solid #fff;
        }

        .table-users tbody td:first-child {
            border-left: 3px #ddd;
        }

        .table-users tbody td:last-child {
            border-right: 3px #ddd;
        }

        .ms-Icon[data-icon-name="FullScreen"] {
            display: none;
        }

        @media (max-width: 768px) {

            .primary-body,
            .second-body,
            .container {
                width: 100% !important;
            }

            .table-users {
                width: 100% !important;
            }

            .table-users table{
                table-layout: auto;
            }

            .table-users th,
            .table-users td {
                padding: 5.912px 5.376px !important;
                font-size: 7px !important;
            }

            .table-header {
                width: 99.9%;
                font-size: 9px !important;
                padding: 5px !important;
            }

            .divider-line {
                width: 100% !important;
            }

            .logo1 {
                max-width: 76.8px !important;
                max-height: 76.8px !important;
            }

            .logo2 {
                max-width: 20% !important;
                max-height: 20% !important;
            }
        }
    </style>
    <!--[if mso]>
    <style>
        .table-header  {
            font-size: 2% !important;
        }
        .ms-Icon[data-icon-name="FullScreen"] {
            display: none;
        }
    </style>
    <![endif]-->
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün İçinde Sertifikası Sona Erecek Internal Sertifikalar</span>
            </div>
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
                            <td>sectrailcmprodabcdefkgsdfpskfps.locals</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>sectrailcm.local</td>
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

            <div class="logo-divider">
                <img src="https://i.imgur.com/5CUUbS2.png" alt="Logo 1" class="logo1">
                <div class="divider-line"></div>
                <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo 2" class="logo2">
            </div>
        </div>
    </div>
</body>

</html>
 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');

        .primary-body {
            display: flex;
            padding: 0;
            margin: 0;
            /* min-height: fit-content; */
            min-width: fit-content;
            background-color: #f4f4f9;
        }

        .second-body {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background: linear-gradient(135deg, #eee, #ddd);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .logo-divider {
            display: flex;
            align-items: center;
            width: 100% !important;
        }

        .logo1 {
            margin: 20px 0px;
            width: 90px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 132px;
            height: 100px !important;
            margin: auto auto 20px auto;
        }

        .divider-line {
            width: 100%;
            flex-grow: 1;
            height: 2px;
            background-color: #1b3057;
            margin: 40px 20px;
        }

        .table-header {
            max-width: 100%;
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .table-users {
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            width: 100%;
            box-sizing: border-box;
            margin: 0 auto;
            overflow-x: auto;
        }

        .table-users table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-users th,
        .table-users td {
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #444;
            word-wrap: normal;
        }

        .table-users th {
            font-family: Arial, sans-serif;
            font-size: 13px;
            background-color: #708196;
            color: #ebedef !important;
            font-weight: 200 !important;
            text-transform: capitalize;
            letter-spacing: 0.1em;
            position: relative;
            top: 0;
            z-index: 999;
        }

        .table-users td {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 300 !important;
        }

        .table-users th {
            padding: 12px 17px !important;
        }

        .table-users td {
            padding: 17px 12px !important;
        }

        .table-users th,
        .table-users td {
            border-right: 2px solid #fff;
        }

        .table-users tr {
            border-bottom: 2px solid #fff;
        }

        .table-users tbody td {
            border-right: 2px solid #fff;
        }

        .table-users tbody tr {
            background-color: #f7f7f7;
        }

        .table-users thead th {
            border-top: 2px solid #fff;
        }

        .table-users tbody td:first-child {
            border-left: 3px #ddd;
        }

        .table-users tbody td:last-child {
            border-right: none;
        }

        .table-users thead th:last-child {
            border-right: none;
        }

        @media (max-width: 1080px) {

            .container {
                padding: 23px;
            }

            /* .table-users {
                overflow-x: auto;
            } */

            .table-users th,
            .table-users td {
                padding: 12.96px 14.04px;
                font-size: 15.12px;
            }

            .table-header {
                font-size: 12px !important;
                padding: 8px !important;
            }

            .divider-line {
                width: 100%;
            }

            .logo1 {
                width: 129.6px;
                height: 129.6px;
            }

            .logo2 {
                width: 20%;
                height: 20%;
            }
        }

        @media (max-width: 768px) {

            .second-body,
            .container {
                padding: 7px !important;
            }

            .table-users {
                overflow-x: auto;
            }

            .table-users th,
            .table-users td {
                padding: 6.912px 5.376px;
                font-size: 5.376px;
            }

            .table-header {
                font-size: 9.8px !important;
                padding: 7.68px !important;
            }

            .divider-line {
                width: 100%;
            }

            .logo1 {
                padding: 2px !important;
                width: 20% !important;
                height: 20% !important;
            }

            .logo2 {
                width: 20% !important;
                height: 10% !important;
            }
        }
    </style>
    <!--[if mso]>
    <style>
        .secondary-body, .container {
            padding: 2px !important;
        }
    </style>
    <![endif]-->
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün İçinde Sertifikası Sona Erecek Internal Sertifikalar</span>
            </div>
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
                            <td>sectrailcmprodabcdefkgsdfpskfps.locals</td>
                            <td>09-05-2024 10:39:27</td>
                            <td>sectrailcm.local</td>
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

            <div class="logo-divider">
                <img src="https://i.imgur.com/5CUUbS2.png" alt="Logo 1" class="logo1">
                <div class="divider-line"></div>
                <img src="https://www.bntpro.com/media/2022/09/SecTrail-CM-Logo1.png" alt="Logo 2" class="logo2">
            </div>
        </div>
    </div>
</body>

</html>
