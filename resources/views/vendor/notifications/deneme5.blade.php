{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');

        .primary-body {
            padding: 0;
            margin: 0;
            max-height: 100%;
            max-width: 100%;
            background-color: #f4f4f9;
            box-sizing: border-box;
        }

        .second-body {
            display: flex;
            max-width: inherit;
            flex-direction: column;
            justify-content: space-between;
            /* padding: 20px; */
            background: linear-gradient(135deg, #eee, #ddd);
            display: flex;
            /* justify-content: center;
            align-items: center; */
            align-items: left;
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            /* padding: 20px; */
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
            max-width: 99.9%;
            background-color: #1b3057;
            font-family: Arial, sans-serif;
            text-transform: capitalize;
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
            padding: 17px 19px !important;
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
            border-right: 3px #ddd;
        }


        /* @media (max-width: 1080px) {
            .container {
                padding: 10px;
            }

            .table-users {
                overflow-x: auto;
            }

            .table-users th,
            .table-users td {
                padding: 10px 7px;
                font-size: 8px;
            }

            .table-header {
                font-size:9px;
                padding: 5px;
            }

            .divider-line {
                width: 100% !important;
            }

            .logo1 {
                width: 1% !important;
                height: 1% !important;
            }

            .logo2 {
                width: 20% !important;
                height: 20% !important;
            }
        } 

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .table-users th,
            .table-users td {
                padding: 8px 6px;
                font-size: 6px;
            }

            .table-header {
                font-size: 1.8vh !important;
                padding: 1.5vh !important;
            }

            .divider-line {
                width: 100% !important;
            }

            .logo1 {
                max-width: 10vh !important;
                max-height: 10vh !important;
            }

            .logo2 {
                width: 20% !important;
                height: 20% !important;
            }
        } */


        /* @media (max-width: 1080px) {
            .container {
                padding: 7vh !important;
            }

            .table-users {
                overflow-x: auto !important;
            }

            .table-users th,
            .table-users td {
                padding: 1.2vh 1.3vh !important;
                font-size: 1.4vh !important;
            }

            .table-header {
                font-size: 1.9vh !important;
                padding: 1.5vh !important;
            }

            .divider-line {
                max-width: 100% !important;
            }

            .logo1 {
                max-width: 12vh !important;
                max-height: 12vh !important;
            }

            .logo2 {
                max-width: 20% !important;
                max-height: 20% !important;
            }
        } 

        @media (max-width: 768px) {
            .container {
                padding: 5vh !important;
            }

            .table-users {
                overflow-x: auto !important;
            }

            .table-users th,
            .table-users td {
                padding: 0.9vh 0.7vh !important;
                font-size: 0.7vh !important;
            }

            .table-header {
                font-size: 1.4vh !important;
                padding: 1vh !important;
            }

            .divider-line {
                max-width: 100% !important;
            }

            .logo1 {
                max-width: 10vh !important;
                max-height: 10vh !important;
            }

            .logo2 {
                max-width: 20% !important;
                max-height: 20% !important;
            }
        }  */

        @media (max-width: 1080px) {
            .container {
                padding: 75.6px !important;
            }

            /* .table-users {
                overflow-x: auto;
            } */

            .table-users {
                overflow: scroll;
            }

            .table-users th,
            .table-users td {
                padding: 12.96px 14.04px !important;
                font-size: 15.12px !important;
            }

            .table-header {
                font-size: 20.52px !important;
                padding: 16.2px !important;
            }

            .divider-line {
                max-width: 100% !important;
            }

            .logo1 {
                max-width: 129.6px !important;
                max-height: 129.6px !important;
            }

            .logo2 {
                max-width: 20% !important;
                max-height: 20% !important;
            }
        } 

        @media (max-width: 768px) {
            .container {
                padding: 38.4px !important;
            }

            /* .table-users {
                overflow-x: auto ;
            } */

            .table-users {
                overflow: scroll;
            }

            .table-users th,
            .table-users td {
                padding: 6.912px 5.376px !important;
                font-size: 5.376px !important;
            }

            .table-header {
                font-size: 10.752px !important;
                padding: 7.68px !important;
            }

            .divider-line {
                max-width: 100% !important;
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
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün İçinde sertifikası sona erecek internal sertifikalar</span>
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

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&family=Courier+New:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;700&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Georgia:wght@400;700&family=Trebuchet+MS:wght@400;700&display=swap');


        .primary-body {
            display: block;
            padding: 0;
            margin: 0;
            min-height: 100vh;
        }

        .second-body {
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
            background: linear-gradient(135deg, #eee, #ddd);
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            padding: 14px;
            max-width: 100%;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 1;
        }

        .logo-divider {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .logo1 {
            margin: 20px;
            width: 90px !important;
            height: 50px !important;
        }

        .logo2 {
            width: 132px !important;
            height: 100px !important;
            margin: 0 !important;
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
            text-transform: capitalize;
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
            overflow-x: auto;
            transform: none;
        }

        .table-users table {
            transform: none;
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
            color: #ebedef;
            font-weight: 200;
            text-transform: capitalize;
            letter-spacing: 0.1em;
        }

        .table-users td {
            font-family: Arial, sans-serif;
            font-size: 13px;
            font-weight: 300;
        }

        .table-users th {
            padding: 17px 19px;
        }

        .table-users td {
            padding: 17px 12px;
        }

        .table-users thead th:last-child {
            border-right: none;
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

        .table-users tbody td:last-child {
            border-right: none;
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

       /*  .table-users thead th:nth-child(3),
        .table-users thead th:nth-child(5) {
            padding: 21px !important;
        }

        .table-users tbody td:nth-child(3),
        .table-users tbody td:nth-child(5) {
            padding: 21px !important;
        } */

        @media (max-width: 1080px) {
            .container {
                padding: 75.6px;
            }

            .table-users {
                overflow-x: auto;
            }

            .table-users th,
            .table-users td {
                padding: 12.96px 14.04px;
                font-size: 15.12px;
            }

            .table-header {
                font-size: 20.52px;
                padding: 16.2px;
            }

            .logo1 {
                max-width: 129.6px;
                max-height: 129.6px;
            }

            .logo2 {
                max-width: 20%;
                max-height: 20%;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 38.4px;
            }

            .table-users {
                overflow-x: auto;
            }

            .table-users th,
            .table-users td {
                padding: 9;
                font-size: 5.376px;
            }

            .table-header {
                font-size: 10.752px;
                padding: 7.68px;
            }

            .logo1 {
                max-width: 76.8px;
                max-height: 76.8px;
            }

            .logo2 {
                max-width: 20%;
                max-height: 20%;
            }
        }
    </style>
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">

            <div class="table-header">
                <span>7 gün içinde sertifikası sona erecek internal sertifikalar</span>
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