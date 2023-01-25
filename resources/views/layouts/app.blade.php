<!doctype html>
<html>
<head>
     <title>منصة مساند المتحدة</title>
     
     <meta name="og:title" content=" منصة مساند المتحدة ">
     <meta  property="og:image"  content="https://musanedunited.sa/img/logicon.png">
     
    
    
        <meta charset="UTF-8">
  <meta name="description" content="مساند المتحدة">
  <meta name="keywords" content="   مساند المتحدة">
  <meta name="author" content="   مساند المتحدة">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="l7GU5icNidsX7w7CVzqaUB7YeoMd3fyCoqu1QCYyFvE" />
 


 
      
        

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  

    <!-- Fonts -->
    

      <link rel="shortcut icon" type="image/jpg" href="https://musanedunited.sa/img/mosanedlog.jpg" >

   

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                   
                  
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
