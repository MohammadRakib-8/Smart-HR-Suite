<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee: {{ $employee->name }}</h1>

    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $employee->name }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $employee->email }}" required><br>

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $employee->phone }}" required><br>

        <label>Role:</label>
        <select name="role" required>
            <option value="employee" {{ $employee->role == 'employee' ? 'selected' : '' }}>Employee</option>
            <option value="hr" {{ $employee->role == 'hr' ? 'selected' : '' }}>HR</option>
            <option value="admin" {{ $employee->role == 'admin' ? 'selected' : '' }}>Admin</option>
        </select><br>

        <label>Salary:</label>
        <input type="number" name="salary" value="{{ $employee->salary }}" required><br>

        <label>Absent Count:</label>
        <input type="number" name="absent_count" value="{{ $employee->absent_count }}" min="0" required><br>

        <button type="submit">Update Employee</button>
    </form>
</body>
</html>
