@extends('/layouts/app')

@section('content')
    <?php $total = 0; ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Subtotal</th>
        </tr>
        
        @forelse($groceries as $grocery)
            <?php $total += $items->product_price; ?>
            <tr>
                <td>{{$grocery->name}}</td>
                <td>{{$grocery->price}}</td>
                <td>{{$grocery->amount}}</td>
                <td>{{$grocery->sum('price')}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No record found</td>
            </tr>
        @endforelse

        <tr>
            <td>Total</td>
            <td colspan="3" type="number" value="0">{{$total}}</td>
        </tr>

    </table>
    
@endsection


<!-- check if table loop works -->