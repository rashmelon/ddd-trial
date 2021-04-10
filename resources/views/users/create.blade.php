<html>
<body>
    <h1>{{ session('success') }}</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf

    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="submit">
</form>
</body>
</html>