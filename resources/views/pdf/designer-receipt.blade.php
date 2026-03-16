<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
    font-family: DejaVu Sans, sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 0;
    color: #333;
}

.header {
    text-align: center;
    margin-bottom: 30px;
}

.header h2 {
    margin: 0;
    font-size: 24px;
}

.header p {
    margin: 5px 0 0 0;
    font-size: 14px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #f5f5f5;
}

.amount {
    color: green;
    font-weight: bold;
    font-size: 18px;
}

.footer {
    text-align: center;
    margin-top: 40px;
    font-size: 14px;
    color: #555;
}
</style>
</head>

<body>

<div class="header">
    <h2>Designer Registration Receipt</h2>
    <p>Date: {{ date('F d, Y') }}</p>
    <p>Receipt No: {{ $designer->receipt_number ?? 'N/A' }}</p>
</div>

<table>
<tr>
    <th>Field</th>
    <th>Details</th>
</tr>
<tr>
    <td>Designer Name</td>
    <td>{{ $designer->designer_name }}</td>
</tr>

<tr>
    <td>Brand Name</td>
    <td>{{ $designer->brand_name }}</td>
</tr>

<tr>
    <td>Category</td>
    <td>{{ $designer->category }}</td>
</tr>

<tr>
    <td>Collection</td>
    <td>{{ $designer->collection_title }}</td>
</tr>

<tr>
    <td>Amount Paid</td>
    <td class="amount">₦{{ number_format($designer->amount_paid, 2) }}</td>
</tr>

<tr>
    <td>Payment Reference</td>
    <td>{{ $designer->payment_reference }}</td>
</tr>
</table>

<div class="footer">
    <p>Thank you for registering as a designer.</p>
</div>

</body>
</html>