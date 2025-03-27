<!DOCTYPE html>  
<html lang="fa" dir="rtl">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">  
    <title>نوار کناری با ۱۰ بخش</title>  
    <style>  
        body {  
            display: flex;  
            height: 100vh;  
        }  
        .sidebar {  
            width: 250px;  
            background-color: #f8f9fa;  
            padding-top: 20px;  
        }  
        .content {  
            flex-grow: 1;  
            padding: 20px;  
            display: none; /* Initially hide content */  
        }  
        .content.active {  
            display: block; /* Show the active content */  
        }  
    </style>  
</head>  
<body>  

    <div class="sidebar">  
        <h2 class="text-center">نوار کناری</h2>  
        <ul class="nav flex-column">  
            <li class="nav-item">  
                <a href="{{ route("users")  }}">کاربران</a>  
            </li>  
            <li class="nav-item">  
                <a  href="{{ route("farms")  }}" >مزارع</a>  
            </li>  
           
            <li class="nav-item">  
                <a href="{{  route("levels") }}">سطح انبارها</a>
            </li>  
            <li class="nav-item">  
                <a href="{{ route("userfarm") }}" class=""> مدیریت مزارع کاربران</a> 
            </li>  
            <li class="nav-item">  
                <a href="{{ route("giftcart") }}">مدیریت گیفت کارت ها</a> 
            </li>  
            <li class="nav-item">  
                <a  href="{{ route("transfer") }}">مدیریت نقل و انتقالات توکن ها</a>  
            </li>  
            <li class="nav-item"> 
                @if (Auth::guard("admin")->user()->type === "manager")
                    <a  href="{{ route("admin.index") }}">  مدیریت  ادمین ها   </a>   
                @endif 
                  
            </li>  
            <li class="nav-item">  
                <a href="{{  route("user_reffral") }}">مدیریت رفرال ها</a> 
            </li>  
            <li class="nav-item">  
                <a href="{{  route("user_reffral_managment") }}">>مدیریت رفرال های کاربران</a> 
            </li>  
            <li class="nav-item">  
                <form action=" {{   route("logout") }}" method="post">
                    @csrf
                <button type="submit" class="btn btn-danger">خروج</button>
                </form>
                 
            </li>  
        </ul>  
    </div>  

    <div class="content" id="section1">  
        <h1>کاربران</h1>  
       <div class="col-12 d-flex justify-content-center">
        <div class="col-6"><input type="text"><button class="btn btn-dark m-3">جستجو</button></div>
        <div class="col-6"></div>
       </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">اسلاگ</th>
      <th scope="col">موحودی توکن</th>
      <th scope="col">تعداد مزارع فعال</th>
      <th scope="col">تاریخ پیوستن</th>
        


    </tr>
  </thead>
  <tbody>
  
   
 
  </tbody>
</table>




    </div>  
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>  
    <script>  
        // JavaScript for toggling content  
        const links = document.querySelectorAll('.nav-link');  
        const contents = document.querySelectorAll('.content');  

        links.forEach(link => {  
            link.addEventListener('click', function (e) {  
                e.preventDefault();  

                // Hide all content sections  
                contents.forEach(content => {  
                    content.classList.remove('active');  
                });  

                // Remove 'active' class from all links  
                links.forEach(link => {  
                    link.classList.remove('active');  
                });  

                // Show the clicked section  
                const target = document.querySelector(this.getAttribute('data-target'));  
                target.classList.add('active');  

                // Add 'active' class to the clicked link  
                this.classList.add('active');  
            });  
        });  

        // Show the first content by default  
        contents[0].classList.add('active');  
    </script>  
</body>  
</html>  