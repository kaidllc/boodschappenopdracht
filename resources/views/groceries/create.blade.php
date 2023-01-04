@extends('/layouts/app')

@section('content')
    <h1>Add Product</h1>

    <form action="{{url('/groceries.store')}}" method="POST">
        @csrf 

        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" placeholder="Product Name" required><br>
        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label for="price">Price</label>
        <input type="number" id="price" name="price" placeholder="Price" required><br>
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" placeholder="Amount" required><br>
        @error('amount')
            <p>{{$message}}</p>
        @enderror

        <button type="submit" value="Submit">Submit</button>
        
    </form>

@endsection

<x-flash/>