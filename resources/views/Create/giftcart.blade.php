<!doctype html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center">
    
  
        <form action="{{ route("store.giftcart") }}" method="post" class="col-6">
        <h1 class="text-center">ساخت گیفت کارت</h1>
        <div class="form-floating">
        <input type="text" name="name" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">نام</label>
        </div>@csrf
        @error('name')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="text" name="value" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">مفدار</label>
        </div>
        @error('value')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <div class="form-floating">
        <input type="text" name="rowCount" class="form-control my-2" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">تعداد مورد نیاز</label>
        </div>
        @error('rowCount')  
             <span class="text-danger">{{ $message }}</span>  
        @enderror
        <button type="submit" class="btn btn-primary">ارسال</button>


        </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>