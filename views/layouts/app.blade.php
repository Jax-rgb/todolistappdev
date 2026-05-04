<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .card { box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .table th { background-color: #2c3e50; color: white; }
        .btn-primary { background-color: #2c3e50; border: none; }
        .status-to-do { 
        background-color: #000000; 
        color: #ffffff; 
    }
    .status-in-progress { 
        background-color: #ffc107; 
        color: #ffffff; 
    }
    .status-completed { 
        background-color: #198754; 
        color: #ffffff; 
    }
    
    /* Basic badge padding for better look */
    .badge {
        padding: 0.5em 0.8em;
        border-radius: 4px;
    }
    </style>
</head>
<body>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
