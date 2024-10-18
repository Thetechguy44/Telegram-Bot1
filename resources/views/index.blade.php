<!-- resources/views/telegram.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram User Data</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <h1>Loading...</h1>
    </div>

    <script>
        window.onload = function() {
            const telegramWebApp = window.Telegram.WebApp;
            const userData = telegramWebApp.initDataUnsafe?.user;

            if (userData) {
                // Display user details
                const userDetails = `
                    <h1>User Data</h1>
                    <ul>
                        <li>ID: ${userData.id}</li>
                        <li>First Name: ${userData.first_name}</li>
                        <li>Last Name: ${userData.last_name || 'N/A'}</li>
                        <li>Username: ${userData.username || 'N/A'}</li>
                    </ul>
                `;
                
                document.getElementById('app').innerHTML = userDetails;

                // Send user data to the backend
                fetch('https://f865-105-112-222-147.ngrok-free.app/telegram/save-user', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(userData)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            } else {
                document.getElementById('app').innerHTML = "<p>No user data available.</p>";
            }
        };
    </script>
</body>
</html>
