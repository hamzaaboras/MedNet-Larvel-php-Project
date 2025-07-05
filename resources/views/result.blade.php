<!DOCTYPE html>
<html>
<head>
    <title>Cost Result</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb container">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cost Result</li>
        </ol>
    </nav>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 450px; width: 100%;">
            <h2 class="mb-4 text-center">Cost Quote</h2>
            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item"><strong>Name:</strong> {{ $quote->name }}</li>
                <li class="list-group-item"><strong>Age:</strong> {{ $quote->age }}</li>
                <li class="list-group-item"><strong>Gender:</strong> {{ ucfirst($quote->gender) }}</li>
                <li class="list-group-item"><strong>Plan:</strong> {{ ucfirst($quote->plan_type) }}</li>
                <li class="list-group-item"><strong>Conditions:</strong> {{ $quote->has_conditions ? 'Yes' : 'No' }}</li>
                <li class="list-group-item"><strong>Smoker:</strong> {{ $quote->is_smoker ? 'Yes' : 'No' }}</li>
            </ul>
            <div class="text-center mb-4">
                <h3 class="fw-bold">Total Cost</h3>
                <div class="display-5 text-success mb-2">${{ number_format($quote->calculated_premium, 2) }}</div>
            </div>
            <div class="d-grid">
                <a href="{{ route('quote.download', $quote->id) }}" class="btn btn-primary btn-lg">Download PDF</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
