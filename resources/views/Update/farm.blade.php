<!DOCTYPE html>
<html lang="fn" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
<title>Document</title>
</head>
<body class="d-flex justify-content-center" >
    <form class="col-6" method="post" enctype="multipart/form-data" action="{{ route("update.post.farm") }}" >
    @if (session('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif
        
          <div class="form-floating mb-3">
            <input type="hidden" name="id" value="{{ $farms->id }}">
        <input type="text" name="name" value="{{  $farms->name }}" class="form-control my-2" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">name</label>
        </div>@csrf
        @error('name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="file" name="image" value="{{  $farms->image }}" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">image</label>
        </div>
        @error('image')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="product_name"  value="{{  $farms->product_name }}" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">product_name</label>
        </div>
        @error('product_name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="min_reward" value="{{  $farms->min_reward }}" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">min_reward</label>
        </div>
        @error('min_reward')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="max_reward" value="{{  $farms->max_reward }}" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">max_reward</label>
        </div>
        @error('max_reward')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="slug" value="{{  $farms->slug }}" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">slug</label>
        </div>
        @error('slug')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="product_reward" value="{{  $farms->product_reward }}" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">product_reward</label>
        </div>
        @error('product_reward')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="reffral_require" value="{{  $farms->reffral_require }}" class="form-control my-2 " id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">reffral_require</label>
        </div>
        @error('reffral_require')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <div class="form-floating">
        <input type="text" name="token_require" value="{{  $farms->token_require }}" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">token_require</label>
        </div>
        @error('token_require')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror 
        <button class="btn btn-primary" type="submit" >submit</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>