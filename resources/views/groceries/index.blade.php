<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Amount</th>
        </tr>

        @forelse($groceries as $grocery)
            <tr>
                <td>{{$grocery->name}}</td>
                <td>{{$grocery->price}}</td>
                <td>{{$grocery->amount}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No record found</td>
            </tr>
        @endforelse

    </table>
</body>
</html>