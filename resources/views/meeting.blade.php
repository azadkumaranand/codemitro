<!DOCTYPE html>
<html>
<head>
    <title>Join Meeting</title>
</head>
<body>
    <h1>Join Meeting</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if($meetLink)
        <a href="{{ $meetLink }}" target="_blank">Join Meeting</a>
    @else
        <p>No meeting link available. Please create a meeting first.</p>
    @endif
</body>
</html>
