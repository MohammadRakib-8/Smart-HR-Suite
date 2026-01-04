<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quick Actions</title>
</head>
<body>
    <h1>Employee Actions</h1>
    <a href="{{route('addUserPage')}}" id="addNewUsersButton">Add Users</a>
<table class="table">
<tr>
<th>Employee ID</th>
<th>Employee Name</th>
<th>Employee Email</th>
<th>Employee Mobile</th>
<th>Role</th>
<th>Attendence</th>
<th>Action</th>
</table>
<tr>
<td>1</td>
<td>Mohammad Rakib</td>
<td>mohammadrakib@gmail.com</td>
<td>01800000000</td>
<td>Developer</td>
<td>20</td>
<td><button id="attendenceMarkedBtn">Marked Attendence</button>
<button id="editBtn">Edit</button>
</td>
</tr>
</body>
</html>