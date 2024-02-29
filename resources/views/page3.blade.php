<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        header img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }

        .powered-by {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="{{ asset('assets/mulah.jpeg') }}" alt="Mulah Logo">
        </header>
        <h1>Data from Page 2</h1>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Birthday:</strong> {{ $data['day'] }}/{{ $data['month'] }}/{{ $data['year'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        @if ($data['noEmail'])
            <p><strong>No Email Address</strong></p>
        @endif
        <footer>
            <p>Powered by <span class="powered-by">MulahRewards.com</span></p>
        </footer>
    </div>
</body>
</html>
