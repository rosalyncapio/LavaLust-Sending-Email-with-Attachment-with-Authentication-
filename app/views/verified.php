<?php ((isset($email)))? "" : redirect('login'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .verification-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .display-4 {
            color: #4a5568;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .lead {
            color: #4a5568;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        .email-highlight {
            font-weight: 600;
            color: #4c51bf;
        }
        .btn-primary, .btn-danger {
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #4c51bf;
            border-color: #4c51bf;
        }
        .btn-primary:hover {
            background-color: #434190;
            border-color: #434190;
            transform: translateY(-2px);
        }
        .btn-danger {
            background-color: #e53e3e;
            border-color: #e53e3e;
        }
        .btn-danger:hover {
            background-color: #c53030;
            border-color: #c53030;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="verification-container">
        <h1 class="display-4">Email Verified</h1>
        <p class="lead">Your email (<span class="email-highlight"><?php echo $email; ?></span>) has been successfully verified.</p>
        <p>Thank you for verifying your email. You can now access your account.</p>
        <a href="/upload" class="btn btn-primary mb-3">Send a file to another email</a>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>