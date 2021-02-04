@extends('base')
@section('container1')

<title>Signup | SHARE</title>

<h3 class="text-center mt-3">This is SIGNUP page</h3>
<br>
<hr>
<div class="form-div">
    <form action="/action_page.php">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="fname" class="form-control" placeholder="Enter your first name" required>
        </div>
        <div class="form-group">
            <label for="lasttname">Last Name:</label>
            <input type="text" name="lastname" id="lname" class="form-control" placeholder="Enter your last name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
        </div>
        <button type="submit" class="btn btn-outline-dark">Sign up</button>
    </form>
</div>

@endsection