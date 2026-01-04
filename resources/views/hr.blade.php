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
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->phone }}</td>
                <td>{{ $post->role }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
    </div>
</body>
</html>