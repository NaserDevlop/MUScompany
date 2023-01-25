<header>
 

    <nav class="navbar navbar-expand-lg navigation" id="navbar">
       <div class="container">
          <a class="navbar-brand" href="#">
             
             <div class="d-flex align-items-center ">
               <img src="{{asset('img/mosanedlog.jpg')}}" alt="" class="img-fluid" style="width: 100px">
               <div class="lh-1">
                 <h1 class="h6 mb-0  lh-1"> منصة سعودية مرخصة </h1>
                 <small style="font-size: 66%;">راس مال 60 مليون ريال </small>
               </div>
             </div>
          </a>
             
 
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
             aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
             <span class="icofont-navigation-menu"></span>
          </button>
 
          <div class="collapse navbar-collapse" id="navbarmain">
             <ul class="navbar-nav ml-auto">
                <li  class="nav-item">
    <a  class="nav-link"  href="{{route('home')}}"  target="_self" >الصفحة الرئيسية</a>
 </li>
 
  
    
 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('about')}}"  target="_self" >من نحن</a>
 </li>
 
  
    
 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('Professionalism')}}"  target="_self" >  الشروط والأحكام </a>
 </li>
 
  
    
 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('service')}}"  target="_self" >خدماتنا</a>
 </li>
 
  
    
 <li  class="nav-item">
    <a  class="nav-link" href="{{route('contact.index')}}" target="_self" >تواصل معنا</a>
 </li>
 
  

         <li  class="nav-item">
         
            {{-- <a  class="nav-link"  href="{{route('register')}}"  target="_self" >تسجيل الدخول</a> --}}
            <a style="    background: #42155c;  width: 100px;"  href="{{route('register')}}" class="btn site_color text-white btn-block p-2 shadow rounded-pill">إشترك الان</a>
            {{-- <a href="{{route('register')}}"  class="btn btn-main-2 btn-icon btn-round-full">سجل الان <i class="icofont-simple-right ml-2"></i></a> --}}
         </li>
    

 
              
             </ul>
          </div>
         
       </div>
    </nav>
 </header>
 