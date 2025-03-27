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
        <form method="post" class="col-6" action="{{  route("admin.update") }}" >

        <div class="form-floating mb-3">
            <input type="hidden" name="id" value="{{ $admin->id }}">
        <input type="text" name="name" value="{{  $admin->name }}" class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">name</label>
        </div>
        @error('name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating mb-3">
          
        <input type="text" name="age" value="{{  $admin->age }}" class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">age</label>
        </div>@csrf
        @error('age')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating mb-3">
          
        <input type="text" name="email" value="{{  $admin->email }}" class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">email</label>
        </div>
        @error('email')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror  <div class="form-floating mb-3">
           
        <input type="text" name="Address" value="{{  $admin->Address }}" class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Address</label>
        </div>@csrf
        @error('Address')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror  
        <div class="form-floating mb-3">
        <span class="text-danger">اگه نمی خوایی پسوردتو عوض کنی اینحا رو خالی بزار</span>    
        <input type="text" name="password"  class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">password</label>
        </div>
        @error('type')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <button class="btn btn-primary" type="sunmit">ارسال</button>

        </form>
        
</body>
</html>