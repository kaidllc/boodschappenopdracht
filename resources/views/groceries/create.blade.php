@extends('/layouts/app')

@section('content')
    <h1>Add Product</h1>

    <form action="{{ route('groceries.store') }}" method="POST">
        @csrf 
        {{ csrf_field() }}

        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" placeholder="Product Name" required><br>
        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label for="category">Product Category</label>
        <select id="category_id" name="category_id" required>
            <option value="1">Beverages</option>
            <option value="2">Bread/Bakery</option>
            <option value="3">Canned/Jarred Goods</option>
            <option value="4">Dairy</option>
            <option value="5">Dry/Baking Goods</option>
            <option value="6">Frozen Foods</option>
            <option value="7">Meat</option>
            <option value="8">Produce</option>
            <option value="9">Other</option>
        </select></br>
        @error('category')
            <p>{{$message}}</p>
        @enderror

        <label for="price">Price</label>
        <input id="price" name="price" placeholder="Price" required><br>
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