@extends('dashboard.header')
@section('content')
Place Order
<form action="{{route('orders.store')}}" method="post">
@csrf
{{$product->name}}
<br>
{{$product->detail}}
<br>
<select name="employee_id" >
@foreach ($employees as $user) {
    <option value="{{$user->id}}">{{$user->name}}</option>
}
@endforeach
</select>
<br>
<input  type="hidden" value="{{Auth::user()->id}}" name="customer_id" >
<input  type="hidden" value="{{$product->id}}" name="product_id" >
{{$product->price}}

<button type="submit" name="sub" >Order</button>




</form>
@endsection