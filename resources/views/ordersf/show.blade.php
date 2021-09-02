@extends('dashboard.header')
@section('content')
@php($i=1)
<table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>price</th>
            <th>Customer Name</th>
            <th>Cus Address</th>
            <th>Cus Mobile No</th>
            <th>Date</th>
            
        </tr>
        @foreach ($data as $order)
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $order->prod_name }}</td>
            <td>{{ $order->detail }}</td> 
            <td>{{ $order->price }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->mobile }}</td>  
            <td>{{ $order->created_at }}</td>
            
            
                       
        </tr>
        @endforeach
    </table>

@endsection
