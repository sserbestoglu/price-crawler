<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .search-form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .search-button {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="search-form">
                    <h2 class="text-center">Shopping Price Average Search</h2>
                    <form action="{{ route('search.perform') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="query">Search Term</label>
                            <input type="text" class="form-control" id="query" name="query" required>
                        </div>
                        <button type="submit" class="btn search-button btn-block">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
