<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">
    <nav class="container mx-auto pt-6 pb-2" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500">
            <li><a href="/" class="hover:underline text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-gray-700">Saved Quotes</li>
        </ol>
    </nav>
    <div class="container mx-auto p-4 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-6">
            <h1 class="text-3xl font-extrabold mb-6 text-center text-blue-700">Saved Quotes</h1>
            <div class="flex justify-end mb-4">
                <a href="{{ route('form') }}" class="inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition font-semibold shadow">Calculate Quote</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Age</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Plan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Cost</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach($quotes as $quote)
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $quote->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $quote->age }}</td>
                            <td class="px-6 py-4 whitespace-nowrap capitalize">{{ $quote->plan_type }}</td>
                            <td class="px-6 py-4 whitespace-nowrap font-semibold text-green-700">${{ number_format($quote->calculated_premium, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('quote.show', $quote->id) }}" class="inline-block px-4 py-2 bg-gray-200 text-blue-700 rounded hover:bg-gray-300 transition font-medium shadow mr-2">View</a>
                                <a href="{{ route('quote.download', $quote->id) }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition font-medium shadow">PDF</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
