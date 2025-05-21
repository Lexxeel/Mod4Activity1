<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Item Details</h1>
        <form>
            <div class="mb-3">
                <label for="itemNo" class="form-label">Item No:</label>
                <input type="text" class="form-control" id="itemNo" value="{{ $itemNo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="itemName" class="form-label">Name:</label>
                <input type="text" class="form-control" id="itemName" value="{{ $itemName }}" readonly>
            </div>
            <div class="mb-3">
                <label for="itemPrice" class="form-label">Price:</label>
                <input type="text" class="form-control" id="itemPrice" value="{{ $itemPrice }}" readonly>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>