<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission Data</title>
</head>
<body>
    <h2>Form Data Received!</h2>
    <p>Thank you, the following data was submitted:</p>
    <ul>
        {{-- Laravel passes variables to the view.
             We access them using the $ symbol. --}}
        <li><strong>Name:</strong> {{ $name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
    </ul>

    <p>This data was passed from the anonymous function in your router to this Blade file.</p>
</body>
</html>