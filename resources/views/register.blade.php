<form action="{{route('users.store')}}" method="post">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Gender: <input type="text" name="gender"><br><br>
    Address; <input type="text" name="address"><br><br>
    Mobile: <input type="text" name="mobile"><br><br>
    <input type="hidden" name="role" value="customer">
    
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="btn">Sign Up</button>
</form>