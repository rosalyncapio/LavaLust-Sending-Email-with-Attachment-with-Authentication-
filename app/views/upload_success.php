<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Success</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        .success-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .display-4 {
            color: #10B981;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .filename-text {
            font-size: 1.1rem;
            color: #4B5563;
            margin: 20px 0;
            word-break: break-all;
        }
        .btn-primary, .btn-danger {
            padding: 12px 30px;
            border-radius: 10px;
            margin: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: #3B82F6;
            border-color: #3B82F6;
        }
        .btn-primary:hover {
            background-color: #2563EB;
            border-color: #2563EB;
            transform: translateY(-2px);
        }
        .btn-danger {
            background-color: #EF4444;
            border-color: #EF4444;
        }
        .btn-danger:hover {
            background-color: #DC2626;
            border-color: #DC2626;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="success-container">
        <h1 class="display-4">Your file was successfully sent to the email!</h1>
        <p class="filename-text"><?php echo $filename; ?></p>
        <a href="/upload" class="btn btn-primary">Upload another file?</a>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>