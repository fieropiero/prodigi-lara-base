<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1 style="color:red">@yield('title')</h1>

    <div class="container">
        @yield('content')

        <table class="table">
                <thead>
                    <tr>
                        @yield('table_head')
                    </tr>
                </thead>
                <tbody>
                    @yield('table_body')
                </tbody>
        </table>
    </div>

</body>
</html>