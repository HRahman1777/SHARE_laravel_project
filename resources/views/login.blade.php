@extends('base')
@section('container1')

<title>Login | SHARE</title>

<h3 class="text-center mt-3">This is LOGIN page</h3>
<br>
<hr>
<div class="form-div">
    <form action="/action_page.php">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-outline-dark">Login</button>
    </form>
</div>


@endsection