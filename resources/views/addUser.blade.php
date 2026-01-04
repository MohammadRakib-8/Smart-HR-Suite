<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Users</title>
</head>
<body>
    {{-- Success Message --}}
    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="addUserForm" action="{{route('storeUserData')}}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text"id="nameAddU" name="name" placeholder="Enter employee full name">
    <label>Email:</label>
    <input type="email" id="emailAddU" name="email" placeholder="Enter employee email">
     <label>Phone:</label>
    <input type="phone" id="phoneAddU" name="phone" placeholder="Enter employee phone number">
    <label name="roleFeild">Role:</label>
<select name="role" id="Role">
<option value="admin">Admin</option>
<option value="hr">HR Manager</option>
<option value="employee">Employee</option>
</select>
    <label>Password:</label>
    <input type="password" id="passAddU" name="password" placeholder="Enter password">
    <label>Confirm Password:</label>
    <input type="password" id="confirmPassAddU" name="password_confirmation" placeholder="Re-enter password">
    <button type="submit" id="submitAddU">Add</button>
    </form>
</body>
</html>