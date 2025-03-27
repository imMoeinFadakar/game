<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Page</title>  
    <!-- Bootstrap CSS -->  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <style>  
        body {  
            background-color: #f8f9fa;  
        }  
        h2 {  
            margin-bottom: 20px;  
        }  
        .form-group label {  
            font-weight: bold;  
        }  
        .btn {  
            font-weight: bold;  
        }  
    </style>  
</head>  
<body>  

    <div class="container">  
        <div class="row justify-content-center">  
            <div class="col-md-4">  
                <h2 class="text-center">Login</h2>  
                <form action="{{ route('login') }}" method="POST">  
                    @csrf 
                    <div class="form-group">  
                        <label for="email">Email address:</label>  
                        <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email" required>  
                        @error('email')  
                            <span class="text-danger">{{ $message }}</span>  
                        @enderror 
                    </div>  
                    <div class="form-group">  
                        <label for="password">Password:</label>  
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>  
                        @error('password')  
                             <span class="text-danger">{{ $message }}</span>  
                        @enderror 
                    
                    </div>  
                    <button type="submit" name="Password" class="btn btn-primary btn-block">Login</button>  
                </form>  
            
            </div>  
        </div>  
    </div>  

    <!-- Bootstrap JS and dependencies -->  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>  