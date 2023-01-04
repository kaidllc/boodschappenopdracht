@extends('/layouts/app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{url('/groceries.update', $grocery->id)}}" method="post">
        @method('put')
        @csrf 

        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" value="{{old('name', $grocery->name)}}" required><br>
        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label for="category">Product Category</label>
        <select id="category_id" name="category_id" value="{{old('category_id', $grocery->category_id)}}" required>
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
        <input type="number" id="price" name="price" value="{{old('price', $grocery->price)}}" required><br>
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" value="{{old('amount', $grocery->amount)}}" required><br>
        @error('amount')
            <p>{{$message}}</p>
        @enderror

        <button type="submit" value="Submit">Edit</button>
        
    </form>

@endsection

<x-flash/>