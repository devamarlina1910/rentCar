<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Booking Details</h1>
    <p><strong>Car:</strong> {{ $booking->car->name }}</p>
    <p><strong>User:</strong> {{ $booking->user->name }}</p>
    <p><strong>Start Date:</strong> {{ $booking->start_date }}</p>
    <p><strong>End Date:</strong> {{ $booking->end_date }}</p>
    <p><strong>Total Price:</strong> {{ $booking->total_price }}</p>
</body>
</html>
