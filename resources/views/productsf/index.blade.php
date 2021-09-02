
@extends('dashboard.header')

 <!--defines a section of content-->
@section('content')
    <div>
       
                <h2>E-Store Products</h2>
         
            <div>
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
   @php
   $i=1;
   @endphp
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a  href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a  href="{{ route('products.edit',$product->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection