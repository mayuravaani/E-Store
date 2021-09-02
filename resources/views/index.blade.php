<html>
@if ($errors->any())
    <div >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{url('login')}}" method="post">
        @csrf
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="logbtn">Login</button>
    <br><br><br>
    <a href="{{url('cusregister')}}" >Register</a>
</form>
</html>