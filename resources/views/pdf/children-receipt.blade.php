<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>
body {
    font-family: DejaVu Sans, sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 40px;
    color: #333;
    position: relative;
}

/* WATERMARK */
.watermark {
    position: fixed;
    top: 30%;
    left: 20%;
    width: 400px;
    opacity: 0.05;
    z-index: -1;
}

/* HEADER */
.header {
    text-align: center;
    margin-bottom: 25px;
}

.header img {
    height: 70px;
    margin-bottom: 10px;
}

.company-name {
    font-size: 20px;
    font-weight: bold;
    margin: 0;
}

.receipt-title {
    font-size: 22px;
    margin: 5px 0;
}

.header p {
    margin: 2px 0;
    font-size: 13px;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #f5f5f5;
}

/* AMOUNT */
.amount {
    color: green;
    font-weight: bold;
    font-size: 18px;
}

/* FOOTER */
.footer {
    text-align: center;
    margin-top: 40px;
    font-size: 13px;
    color: #555;
}

.footer strong {
    display: block;
    margin-top: 10px;
}
</style>
</head>

<body>

<!-- WATERMARK -->
<img src="{{ public_path('images/jifa-logo.png') }}" class="watermark">

<!-- HEADER -->
<div class="header">
    <img src="{{ public_path('images/jifa-logo.png') }}" alt="Logo">

    <p class="company-name">Jewel International Fashion Art Week</p>
    <p class="receipt-title">Child Registration Receipt</p>

    <p>Date: {{ date('F d, Y') }}</p>
</div>

<!-- TABLE -->
<table>
<tr>
    <th>#</th>
    <th>Details</th>
</tr>

<tr>
    <td>Child Name</td>
    <td>{{ $child->full_name }}</td>
</tr>

<tr>
    <td>Gender</td>
    <td>{{ $child->gender }}</td>
</tr>

<tr>
    <td>Age</td>
    <td>{{ $child->age ?? 'N/A' }}</td>
</tr>

<tr>
    <td>Parent / Guardian</td>
    <td>{{ $child->parent_name }}</td>
</tr>

<tr>
    <td>Relationship</td>
    <td>{{ $child->relationship }}</td>
</tr>

<tr>
    <td>Phone</td>
    <td>{{ $child->phone }}</td>
</tr>

<tr>
    <td>Email</td>
    <td>{{ $child->email }}</td>
</tr>

<tr>
    <td>School</td>
    <td>{{ $child->school_name ?? 'N/A' }}</td>
</tr>

<tr>
    <td>Amount Paid</td>
    <td class="amount">₦{{ number_format($child->fee, 2) }}</td>
</tr>

<tr>
    <td>Payment Reference</td>
    <td>{{ $child->payment_reference }}</td>
</tr>
</table>

<!-- FOOTER -->
<div class="footer">
    <p>Thank you for registering your child.</p>
    <strong>Jewel International Fashion Art Week</strong>
</div>

</body>
</html>