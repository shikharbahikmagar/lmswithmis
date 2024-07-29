<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }
        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .details {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .details strong {
            font-weight: bold;
        }
        .footer {
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update on Book Request Status and Return Date</h2>
        
        <p>Dear {{ $student_name }},</p>
        
        <div class="details">
            <p><strong>Book Title:</strong> {{ $book_name }}</p>
            <p><strong>Request Status:</strong> {{ $status }}</p>
            <p><strong>Return Date:</strong> {{ $return_date }}</p>
        </div>
        
        <p>Please ensure that the book is returned by the specified date to avoid any late fees or inconvenience to other students who may be waiting to borrow it. If you have any questions regarding this, feel free to reach out to SOE Library.</p>
        
        <p>Thank you for your attention to this matter.</p>
        
        <div class="footer">
            <p>Best regards,<br>
            Shikhar Bahik<br>
            Librarian<br>
            98******</p>
        </div>
    </div>
</body>
</html>
