<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HR</title>

</head>
<body>
    <h1 id="welcomeMsgA">Hello,HR</h1>
    <div class="leftDiv">
    <a href="/statistics" id="stat">Statistics</a>
    <a href="/detailedInfo" id="detailedInfo">Detailed Info</a>
    <a href="{{ route('quickAc') }}" id="quickActions">Quick Actions</a>
<button type="button" id="LogOutBtn" >Logout</button>
    </div>

    <div class="rightDiv">


{{-- Here all the info show for the specific button of leftDiv --}}
    
<div class="dataFetchTable">
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>role</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->role }}</td>
                <td>{{ $employee->created_at }}</td>
                <td>{{ $employee->updated_at }}</td>
                <td>
                    <a href="">Edit</a>
                   <form action="{{ route('delete', $employee->id) }}"
          method="POST"
          style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit"
                onclick="return confirm('Are you sure?')">
            Delete
        </button>
    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
    </div>
</body>
</html>