<!DOCTYPE html>
<html>
<head>
    <style>
        table {
    
        }
    </style>
</head>
<body>
    <p>Products</p>
    <table>
        <thead>
            <tr>
                @foreach (['id', 'name', 'category'] as $column)
                    <th>{{ ucfirst($column) }}</th> <!-- Use 'th' for header and ucfirst to capitalize the first letter -->
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['category'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Tasks:</p>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

    <p>Global Variables:</p>
    <p>{{ $sharedVariables }}</p>

    <p>Product Key: {{ $productKey }}</p>

</body>
</html>
