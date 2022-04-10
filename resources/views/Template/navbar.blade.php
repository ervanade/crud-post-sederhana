 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="{{ route('home') }}" class="nav-link">Home</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="" class="nav-link">Contact</a>
         </li>
     </ul>

     <!-- SEARCH FORM -->
     <form class="form-inline ml-3">
         <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </form>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <li class="nav-item dropdown pr-3">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="fas fa-user"></i>
                 <span class="badge badge-warning navbar-badge"></span>
             </a>  
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <span class="dropdown-header">{{ auth()->user()->name }}</span>
                 <div class="dropdown-divider"></div>
                 <a href="{{ route('logout') }}" class="dropdown-item">
                     <i class="fas fa-sign-out-alt pr-1"></i>LOGOUT
                 </a>
                
             </div>
         </li>
        
     </ul>
 </nav>
