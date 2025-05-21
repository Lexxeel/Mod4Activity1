<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Order Details</h1>
        <form>
            <div class="mb-3">
                <label for="customerId" class="form-label">Customer ID:</label>
                <input type="text" class="form-control" id="customerId" value="{{ $customerId }}" readonly>
            </div>
            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name:</label>
                <input type="text" class="form-control" id="customerName" value="{{ $customerName }}" readonly>
            </div>
            <div class="mb-3">
                <label for="orderNo" class="form-label">Order No:</label>
                <input type="text" class="form-control" id="orderNo" value="{{ $orderNo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="orderDate" class="form-label">Date:</label>
                <input type="text" class="form-control" id="orderDate" value="{{ $orderDate }}" readonly>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>