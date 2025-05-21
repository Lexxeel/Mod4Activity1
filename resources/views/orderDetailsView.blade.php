<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Transaction Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Order Transaction Details</h1>
        <form>
            <div class="mb-3">
                <label for="transNo" class="form-label">Transaction No:</label>
                <input type="text" class="form-control" id="transNo" value="{{ $transNo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="orderNo" class="form-label">Order No:</label>
                <input type="text" class="form-control" id="orderNo" value="{{ $orderNo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="itemId" class="form-label">Item ID:</label>
                <input type="text" class="form-control" id="itemId" value="{{ $itemId }}" readonly>
            </div>
            <div class="mb-3">
                <label for="itemName" class="form-label">Item Name:</label>
                <input type="text" class="form-control" id="itemName" value="{{ $itemName }}" readonly>
            </div>
            <div class="mb-3">
                <label for="itemPrice" class="form-label">Price:</label>
                <input type="text" class="form-control" id="itemPrice" value="{{ $itemPrice }}" readonly>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="text" class="form-control" id="quantity" value="{{ $quantity }}" readonly>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>