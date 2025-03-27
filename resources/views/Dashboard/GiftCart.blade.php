<!doctype html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
  </head>
  <body>
    <h1 class="">مدیزیت گیقت کارت ها</h1>
    @if (session('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
        
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif
        <div class="col-6 d-flex  justify-content-center "><a class="btn btn-success" href="{{  route("create.giftcart") }}">اقزودن گیفت کارت</a></div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام</th>
      <th scope="col">مقدار</th>
      <th scope="col">کد</th>
      <th scope="col">حدف</th>

      
    </tr>
  </thead>
  <tbody>
    @foreach ($allGiftCarts as $giftcart)
    <tr>
      <th scope="row">{{ $giftcart->id }}</th>
      <td>{{  $giftcart->name }}</td>
      <td>{{  $giftcart->value }}</td>
      <td>{{ $giftcart->code  }}</td>
      <td><a href="destroy/giftcart/{{ $giftcart->id }}"class="btn btn-danger" >حذف</a></td>
    </tr>
    @endforeach
   

  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
