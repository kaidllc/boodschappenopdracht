@extends('/layouts/app')

@section('content')

    <form action="{{action('GroceriesController@store')}}" method="store">
        
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name"><br>

        <label for="price">Price</label>
        <input type="number" id="price" name="price"><br>

        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount"><br>

        {{ csrf_field() }}
        <button type="submit" value="Submit">Submit</button>
    </form>

@endsection