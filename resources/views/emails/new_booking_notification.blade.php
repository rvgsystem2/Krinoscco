<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #2c3e50, #8B4513);
            color: #ecf0f1;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: left;
        }

        h2 {
            color: #8B4513;
            text-align: center;
        }

        p {
            color: #333;
            font-size: 16px;
            line-height: 1.5;
        }

        .details {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 5px 0;
            font-size: 15px;
            color: #555;
        }

        .button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px 15px;
            text-align: center;
            background: #8B4513;
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .button:hover {
            background: #6B3410;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #ccc;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>New Booking Alert</h2>
        <p>A new booking has been received:</p>
        <div class="details">
            <ul>
                <li>Contact: {{ $booking['contact'] }}</li>
                <li>Check-in: {{ $booking['checkin'] }}</li>
                <li>Check-out: {{ $booking['checkout'] }}</li>
                <li>Adults: {{ $booking['adults'] }}</li>
                <li>Children: {{ $booking['children'] }}</li>
                <li>Rooms: {{ $booking['rooms'] }}</li>
            </ul>
        </div>
        <p>Please review the details and confirm.</p>

        <a href="{{ route('home') }}" class="button">Visit Our Website</a>

        <p class="footer">Hotel Krinoscco, Amaniganj Ram Path, Ayodhya U.P Pin 224001</p>
    </div>
</body>

</html>
