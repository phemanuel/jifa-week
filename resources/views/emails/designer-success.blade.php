<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Successful</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8; padding:30px 0;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05);">

<!-- Header -->
<tr>
<td style="background:#08421a; color:#ffffff; padding:20px; text-align:center;">
<h2 style="margin:0;">Designer Registration</h2>
<p style="margin:5px 0 0;">Payment Confirmation</p>
</td>
</tr>

<!-- Body -->
<tr>
<td style="padding:30px; color:#333333;">

<p>Hello <strong>{{ $designer->designer_name }}</strong>,</p>

<p>
Your payment for the Designer Registration has been received successfully.
We are excited to have your brand participate.
</p>

<table width="100%" cellpadding="8" cellspacing="0" style="margin-top:20px; border-collapse:collapse;">

<tr style="background:#f7f7f7;">
<td><strong>Brand Name</strong></td>
<td>{{ $designer->brand_name }}</td>
</tr>

<tr>
<td><strong>Category</strong></td>
<td>{{ $designer->category }}</td>
</tr>

<tr style="background:#f7f7f7;">
<td><strong>Collection Title</strong></td>
<td>{{ $designer->collection_title }}</td>
</tr>

<tr>
<td><strong>Amount Paid</strong></td>
<td style="color:#27ae60; font-weight:bold;">₦100,000</td>
</tr>

<tr style="background:#f7f7f7;">
<td><strong>Payment Reference</strong></td>
<td>{{ $designer->payment_reference }}</td>
</tr>

</table>

<p style="margin-top:25px;">
Our team will contact you soon with further event details.
</p>

<p>
Thank you for being part of this experience.
</p>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="background:#f7f7f7; padding:20px; text-align:center; font-size:13px; color:#888;">
© {{ date('Y') }} Designer Event. All rights reserved.
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>