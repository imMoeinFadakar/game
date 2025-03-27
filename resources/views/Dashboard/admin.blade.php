<!doctype html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>




  

    <div class="col-6 d-flex justify-content-center">

    @if (session('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @endif

        <a href="{{ route("admin.create") }}" class="btn btn-success m-5">اقزودن ادمین جدید</a>

    </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">سن</th>
      <th scope="col">ایمیل</th>
      <th scope="col">ادرس</th>
      <th scope="col">نقش</th>
      <th scope="col">ویرایش</th>
      <th scope="col">خدف</th>

     
    </tr>
  </thead>
  <tbody>
    @foreach ($allAdmins as $allAdmin)
    <tr>
      <th scope="row">{{ $allAdmin->id }}</th>
      <td>{{ $allAdmin->name }}</td>
      <td>{{ $allAdmin->age }}</td>
      <td>{{  $allAdmin->email }}</td>
      <td>{{  $allAdmin->Address }}</td>
      <td>{{  $allAdmin->type }}</td>
      <td><a href="admin/edit/{{ $allAdmin->id }}" class="btn btn-warning">ویرایش</a></td>
      <td><a href="admin/destroy/{{ $allAdmin->id }}" class="btn btn-danger">حذف</a></td>
    </tr>
    @endforeach
   

  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>