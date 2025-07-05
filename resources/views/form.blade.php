<!DOCTYPE html>
<html>
<head>
    <title>Insurance Cost Calculator</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb container">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cost Calculator</li>
        </ol>
    </nav>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h5 class="alert-heading">Please fix the following errors:</h5>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 class="mb-4 text-center">Cost Calculator</h2>
            <form method="POST" action="{{ route('calculate') }}">
                @csrf
                <div class="mb-3">
                    <input name="name" class="form-control" placeholder="Your Name" required value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <input name="age" type="number" class="form-control" placeholder="Age" required value="{{ old('age') }}">
                </div>
                <div class="mb-3">
                    <select name="gender" class="form-select" required>
                        <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select name="plan_type" class="form-select" required>
                        <option value="" disabled {{ old('plan_type') ? '' : 'selected' }}>Select Plan Type</option>
                        <option value="basic" {{ old('plan_type') == 'basic' ? 'selected' : '' }}>Basic</option>
                        <option value="family" {{ old('plan_type') == 'family' ? 'selected' : '' }}>Family</option>
                        <option value="senior" {{ old('plan_type') == 'senior' ? 'selected' : '' }}>Senior</option>
                    </select>
                </div>
                <div class="form-check mb-2">
                    <input type="hidden" name="has_conditions" value="0">
                    <input class="form-check-input" type="checkbox" name="has_conditions" id="has_conditions" value="1" {{ old('has_conditions') ? 'checked' : '' }}>
                    <label class="form-check-label" for="has_conditions">Pre-existing Conditions</label>
                </div>
                <div class="form-check mb-3">
                    <input type="hidden" name="is_smoker" value="0">
                    <input class="form-check-input" type="checkbox" name="is_smoker" id="is_smoker" value="1" {{ old('is_smoker') ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_smoker">Smoker</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calculate</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS (optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
