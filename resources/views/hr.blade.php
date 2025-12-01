<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HR</title>
            @vite('resources/css/hr.css')

</head>
<body>
    <h1 id="welcomeMsgA">Hello,HR</h1>
    <div class="leftDiv">
    <a href="" id="stat">Statistics</a>
    <a href="" id="detailedInfo">Detailed Info</a>
    <a href="" id="quickActions">Quick Actions</a>
<button type="button" id="LogOutBtn" >Logout</button>
    </div>
    <div class="rightDiv">
{{-- Here all the info show for the specific button of leftDiv --}}
    </div>
</body>
</html>