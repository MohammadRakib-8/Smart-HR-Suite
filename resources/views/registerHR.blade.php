<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register HR</title>
</head>
<body>
    <form id="addUserForm" action="{{route('')}}" method="POST">
    <label>Name:</label>
    <input type="text"id="nameADP" name="name" placeholder="Enter employee full name">
    <label>Email:</label>
    <input type="email" id="emailADP" name="email" placeholder="Enter employee email">
    <label>Role:</label>
    <input type="text" id="roleADP"name="role" placeholder="Enter employee role">
    <label>Password:</label>
    <input type="password" id="passAddU" name="password" placeholder="Enter password">
    <label>Confirm Password:</label>
    <input type="password" id="=confirmPassAddU" name="confirmPass" placeholder="Re-enter password">
    <button type="submit" id="submitAddU">Register</button>
    </form>
</body>
</html>