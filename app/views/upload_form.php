<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
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
        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        .form-container h1 {
            color: #4a5568;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .form-container .lead {
            color: #718096;
            margin-bottom: 30px;
        }
        .form-control {
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            padding: 12px 15px;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-primary, .btn-danger {
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
        }
        .btn-primary:hover {
            background-color: #5a67d8;
            border-color: #5a67d8;
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
        .alert-danger {
            background-color: #fed7d7;
            border-color: #feb2b2;
            color: #c53030;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <!-- Display errors if any -->
        <?php if(isset($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error): ?>
                    <?= $error ?><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <h1 class="display-6 text-center">Send to Email</h1>
        <p class="lead text-center">Try sending a file to your email.</p>
        
        <form action="<?php echo site_url('/do_upload');?>" method="post" enctype="multipart/form-data">
            <input type="text" name="name" class="form-control" placeholder="Enter the Email's Title or your name..." required />
            <input type="email" name="email" class="form-control" placeholder="Enter recipient's Email..." required />
            <input type="text" name="subject" class="form-control" placeholder="Enter email's Subject..." required />
            <textarea name="content" class="form-control" placeholder="Enter email's Content..." rows="4" ></textarea>
            <input type="file" name="userfile" class="form-control" accept="image/png, image/gif, image/jpeg" />
            <button type="submit" class="btn btn-primary w-100 mt-3">Upload</button>
        </form>

        <div class="text-center mt-4">
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>