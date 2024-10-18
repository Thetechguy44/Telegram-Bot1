<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
    <h1>Telegram User Data</h1>
    <ul>
        <li>First Name: {{ $user['first_name'] }}</li>
        <li>Last Name: {{ $user['last_name'] ?? 'N/A' }}</li>
        <li>Username: {{ $user['username'] ?? 'N/A' }}</li>
        <li>ID: {{ $user['id'] }}</li>
    </ul>
</body>
</html>
