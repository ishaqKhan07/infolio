<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>

@if(@$phone)
    <p><strong>Phone:</strong> {{ $phone }}</p>
@endif
@if(@$service)
    <p><strong>Service:</strong> {{ $service }}</p>
@endif
@if(@$subject)
    <p><strong>Subject:</strong> {{ $subject }}</p>
@endif

<p><strong>Message:</strong> {{ $contactMsg }}</p>
</body>
</html>
