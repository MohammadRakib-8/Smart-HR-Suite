<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <div class="loginFormDiv">
    <form method="POST" action="{{ route('login') }}">
        @csrf
<h2>Login</h2>
<label name="emailFeild">Email:</label>
<input type="email" id="emailF" name="email" placeholder="Enter Your Email ">
<label name="roleFeild">Role:</label>
<select name="role" id="employeeRole">
<option value="admin">Admin</option>
<option value="hr">HR Manager</option>
<option value="employee">Employee</option>
</select>
<label name="passFeild">Password:</label>
<input type="password" id="passwordF" name="password" placeholder="Enter Your Password">
<button type="submit" class="submitBtn">Submit</button>
    </form>
    </div>
</body>
</html>