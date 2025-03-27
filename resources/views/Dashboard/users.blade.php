<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row d-flex justify-content-center">
      <form  method="get" action="{{ route(name: 'user.search') }}" class="col-6">
        <input type="text" name="query"  >
        <button class="btn btn-warning"  type="submit" >حستحو</button>
      </form>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">رفرال کد</th>
      <th scope="col">ایدی تلگرام</th>
      <th scope="col">تعداد کل توکن</th>
      <th scope="col"> وضعیت </th>
      <th scope="col"> تعداد کل گیفت کارت ها</th>
      <th scope="col"> تعداد کل رفرال ها</th>
      <th scope="col"> تعداد کل مزارع</th>
   
      <th scope="col"> مسدود کرن کاربر </th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{ $user->name }}</td>
      <td>{{  $user->reffral_code }}</td>
     
      
      <td>{{ $user->telegram_id }}</td>
      <td>{{ $user->wallet_amount }}</td>
      @if ($user->status === "active")
        <td>فعال</td>
      @else
      <td>غیر فعال</td>
      @endif
      <td>{{ $user->gift_cards_count }}</td>
      <td>{{ $user->referrals_count  }}</td>
      <td>{{ $user->farms_count }}</td>
      @if ($user->status === "active")
      <td><a class="btn btn-danger" href="ban/{{ $user->id }}">مسود کرن این کابر</a></td>
      @else
      <td><a class="btn btn-success" href="ban/{{ $user->id }}">ازاد کردن این کاربر</a></td>
      @endif
    </tr>
    @endforeach
 
  
  </tbody>
</table>

</body>
</html>