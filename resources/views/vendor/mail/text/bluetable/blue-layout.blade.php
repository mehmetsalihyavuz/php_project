<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="primary-body">
    <div class="second-body">
        <div class="container">
                {{$header ?? ''}}
            <div>
                {{$table ?? ''}}
            </div>
            <div>
                {{$footer ?? ''}}
            </div>
        </div>
    </div>
</body>

</html>