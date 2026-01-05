<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payroll</title>
</head>
<body>
    <h1>Payroll for {{ $employee->name }}</h1>

    <p>Monthly Salary: {{ $employee->salary }}</p>
    <p>Absent Count: {{ $employee->absent_count }}</p>
    <p>Daily Salary: {{ number_format($dailySalary, 2) }}</p>
    <p>Total Deduction: {{ number_format($deduction, 2) }}</p>
    <h3>Final Salary: {{ number_format($finalSalary, 2) }}</h3>

    <a href="{{ route('hrPage') }}">Back to Dashboard</a>
</body>
</html>
