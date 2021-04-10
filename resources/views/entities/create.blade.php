<html>
<body>
<h1>{{ session('success') }}</h1>

<form action="{{ route('entities.store') }}" method="post">
    @csrf

    <input type="text" name="name">
    <input type="email" name="email">
    <input type="submit" value="submit">
</form>
</body>
</html>