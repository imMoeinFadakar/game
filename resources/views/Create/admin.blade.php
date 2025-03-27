<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class= "d-flex justify-content-center"  >
   

    
<form action="{{  route("admin.store") }}" class="col-6" method="post">
<a href="{{  route("admin.index") }}" class="btn btn-dark">بازگشت</a>
    @if (session('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif
          
        <div class="form-floating">
        <input type="text" name="name" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">name</label>
        </div>@csrf
        @error('name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror

        <div class="form-floating">
        <input type="number" name="age" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">age</label>
        </div>
        @error('age')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">email</label>
        </div>
        @error('email')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">password</label>
        </div>
        @error('password')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="text" name="Address" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Address</label>
        </div>
        @error('Address')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <button type="submit" class="btn btn-primary">ارسال</button>

    </form>
  


     
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>