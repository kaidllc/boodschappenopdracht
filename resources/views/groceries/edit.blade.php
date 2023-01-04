@extends('/layouts/app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{url('/groceries.update', $grocery->id)}}" method="post">
        @method('put')
        @csrf 

        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Product Name" required><br>
        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label for="price">Price</label>
        <input type="number" id="price" name="price" value="{{old('price')}}" placeholder="Price" required><br>
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" value="{{old('amount')}}" placeholder="Amount" required><br>
        @error('amount')
            <p>{{$message}}</p>
        @enderror

        <button type="submit" value="Submit">Edit</button>
        
    </form>

@endsection

<x-flash/>