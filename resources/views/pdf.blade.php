<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quote PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; background: #f4f6fa; margin: 0; padding: 0; }
        .container { max-width: 500px; margin: 40px auto; background: #fff; border-radius: 16px; box-shadow: 0 4px 24px rgba(52,144,220,0.10); padding: 32px 28px; }
        h1 { color: #3490dc; font-size: 2rem; margin-bottom: 24px; text-align: center; }
        .details { margin-bottom: 24px; }
        .details p { font-size: 1.05rem; margin: 8px 0; }
        .label { color: #6c757d; font-weight: 600; }
        hr { border: none; border-top: 1px solid #e2e8f0; margin: 24px 0; }
        .cost-label { color: #38a169; font-size: 1.2rem; font-weight: bold; margin-bottom: 8px; text-align: center; }
        .cost-value { color: #155724; font-size: 2.2rem; font-weight: bold; text-align: center; margin-bottom: 0; }
    </style>
</head>
<body>
    <div style="font-size: 0.95rem; color: #6c757d; margin-bottom: 18px;">
        <span style="color: #3490dc;">Home</span> / <span style="color: #495057;">PDF Summary</span>
    </div>
    <div class="container">
        <h1>Insurance Cost Summary</h1>
        <div class="details">
            <p><span class="label">Name:</span> {{ $quote->name }}</p>
            <p><span class="label">Age:</span> {{ $quote->age }}</p>
            <p><span class="label">Gender:</span> {{ ucfirst($quote->gender) }}</p>
            <p><span class="label">Plan:</span> {{ ucfirst($quote->plan_type) }}</p>
            <p><span class="label">Pre-existing Conditions:</span> {{ $quote->has_conditions ? 'Yes' : 'No' }}</p>
            <p><span class="label">Smoker:</span> {{ $quote->is_smoker ? 'Yes' : 'No' }}</p>
        </div>
        <hr>
        <div class="cost-label">Total Cost</div>
        <div class="cost-value">${{ number_format($quote->calculated_premium, 2) }}</div>
    </div>
</body>
</html>
