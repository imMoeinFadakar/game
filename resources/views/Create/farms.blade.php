<!DOCTYPE html>
<html lang="fn" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>new farm</title>
</head>

<body class="d-flex justify-content-center" >
    <div class="col-6" >
          @if (session('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif
        <form action="{{  route("store.farm") }}" method="post" enctype="multipart/form-data" >

        <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">name</label>
        @error('name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        </div>@csrf
        <div class="form-floating">
        <input type="file" name="image" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">image</label>
        </div>
        @error('image')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="text" name="product_name" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">product_name</label>
        </div>
        @error('product_name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="min_reward" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">min_reward</label>
        </div>
        @error('min_reward')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="max_reward" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">max_reward</label>
        </div>
        @error('max_reward')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="text" name="slug" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">slug</label>
        </div>
        @error('slug')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="product_reward" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">product_reward</label>
        </div>
        @error('product_reward')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="reffral_require" class="form-control my-2 " id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">reffral_require</label>
        </div>
        @error('reffral_require')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="number" name="token_require" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">token_require</label>
        </div>
        @error('token_require')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <button class="btn btn-primary" type="submit" >submit</button>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        </form>
      
    </div>


 



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>