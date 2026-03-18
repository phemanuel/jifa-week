<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Failed</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f5f5f5; padding:30px;">

<div style="max-width:600px;margin:auto;background:#ffffff;padding:25px;border-radius:8px;">

    <h2 style="color:#c0392b;">Payment Failed</h2>

    <p>Hello <strong>{{ $children->full_name }}</strong>,</p>

    <p>
        Unfortunately, your payment for the Child Model Registration was not successful.
    </p>

    <p><strong>Child Name:</strong> {{ $children->full_name }}</p>
    <p><strong>Parent/Guardian:</strong> {{ $children->parent_name }}</p>

    <p>
        Please return to the payment page and try again.
    </p>

    <p style="margin-top:30px;">
        Thank you.
    </p>

</div>

</body>
</html>