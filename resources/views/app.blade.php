<!DOCTYPE html>
<html>
<head>
    <title>Student Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Student Task Manager</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/students">Students</a></li>
            <li class="nav-item"><a class="nav-link" href="/tasks">Tasks</a></li>
            <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
