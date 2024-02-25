<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website</h1>
        <nav>
            <ul class="menu">
                <li><a href="/category">Products</a></li>
                <li><a href="#" onclick="getData()">User</a></li>
                <li><a href="/sales">Sales</a></li>
            </ul>
        </nav>
    </div>
    <script>
        function getData() {
            let id = prompt('Masukkan user ID : '); 
            let name = prompt('Masukkan user Name : '); 
            window.location.href = '/user/' + id + '/name/' + name;
        }
    </script>
</body>
</html>
