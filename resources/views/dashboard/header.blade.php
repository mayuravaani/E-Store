@if(Auth::user()->role == "admin")  
    <div style="background-color:brown; color:white">Admin DashBoard </div>
    <div>{{ Auth::user()->name }}<a href="{{route('products.index')}}"> products </a>  <a href="{{route('users.index')}}">
     employee </a> <a href="{{url('logout')}}"> logout</a> </div> 
@elseif(Auth::user()->role == "employee")
    <div style="background-color:brown; color:white">Employee DashBoard </div>
    <div>{{ Auth::user()->name }}<a href="{{route('myorder')}}"> My Orders </a>  <a href="{{url('logout')}}"> logout</a> </div>
@elseif(Auth::user()->role == "customer")
    <div style="background-color:brown; color:white">Customer DashBoard </div>
    <div><h2>{{ Auth::user()->name }}<a href="{{route('orders.index')}}"> Place Order </a>  <a href="{{url('logout')}}"> logout</a></h2> </div>
@endif
@yield('content')