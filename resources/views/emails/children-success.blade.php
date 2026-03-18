<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Confirmation</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8; padding:30px 0;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05);">

<!-- Header -->
<tr>
<td style="background:#08421a; color:#ffffff; padding:20px; text-align:center;">
<h2 style="margin:0;">JIFAWEEK 2026</h2>
<p style="margin:5px 0 0;">Child Registration Payment Confirmation</p>
</td>
</tr>

<!-- Body -->
<tr>
<td style="padding:30px; color:#333333;">

<p>Hello <strong>{{ $children->parent_name }}</strong>,</p>

<p>
Your payment for your child’s participation in <strong>JIFAWEEK 2026</strong> has been received successfully 🎉.
</p>

<p>
We are excited to have <strong>{{ $children->full_name }}</strong> participate in this amazing experience.
</p>

<!-- <p>
Attached is the <strong>Participation Package</strong>, which contains full details and next steps.
</p> -->

<!-- Details Table -->
<table width="100%" cellpadding="8" cellspacing="0" style="margin-top:20px; border-collapse:collapse;">

<tr style="background:#f7f7f7;">
<td><strong>Child Name</strong></td>
<td>{{ $children->full_name }}</td>
</tr>

<tr>
<td><strong>Parent / Guardian</strong></td>
<td>{{ $children->parent_name }}</td>
</tr>

<tr style="background:#f7f7f7;">
<td><strong>Relationship</strong></td>
<td>{{ $children->relationship }}</td>
</tr>

<tr>
<td><strong>School</strong></td>
<td>{{ $children->school_name ?? 'N/A' }}</td>
</tr>

<tr style="background:#f7f7f7;">
<td><strong>Amount Paid</strong></td>
<td style="color:#27ae60; font-weight:bold;">₦{{ number_format($children->fee, 2) }}</td>
</tr>

<tr>
<td><strong>Payment Reference</strong></td>
<td>{{ $children->payment_reference }}</td>
</tr>

</table>

<p style="margin-top:25px;">
Our team will contact you soon with further event details, schedules, and preparation guidelines.
</p>

<p>
Thank you for trusting us with your child’s journey.
</p>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="background:#f7f7f7; padding:20px; text-align:center; font-size:13px; color:#888;">
© {{ date('Y') }} JIFAWEEK. All rights reserved.
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>