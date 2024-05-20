<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .results-box {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="results-box">
                    <h2 class="text-center">Search Results</h2>
                    <br>
                    <strong>{{ $output }}</strong>
                    <br>
                    <br>
                    <a href="{{ route('search.index') }}" class="btn btn-primary btn-block">New Search</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
