
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><strong>Email:</strong> {{$contactus['email']}} </p>
    <p>Hi, {{$contactus['name']}}</p>
    <p><strong>Your Message:</strong> {{$contactus['message']}} </p>
    <p>Thank you for your email, we will contact you as soon as possible</p>
    <p>Best regards</p>
    
</body>
</html>