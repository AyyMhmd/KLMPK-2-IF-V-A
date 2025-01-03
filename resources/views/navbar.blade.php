 <!-- top -->
 <div>
     <ul class="nav justify-content-end fixed-top bg-success">
         <li class="nav-item">
             <button class="nav-link" id="switch">
                 <i id="icon" class="bi bi-moon-fill"></i>
             </button>
         </li>
         <li class="nav-item dropdown">
             <!-- Tombol dropdown dengan ikon pencarian -->
             <a class="nav-link haha dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                 aria-expanded="false">
                 <i class="fas fa-search"></i>
                 <!-- Ikon pencarian -->
             </a>
             <!-- Dropdown dengan form pencarian -->
             <ul class="dropdown-menu p-3 bg-success" onclick="event.stopPropagation();">
                 <li>
                     <!-- Tambahkan onclick untuk fokus pada form input -->
                     <p class="haha text-center" onclick="document.getElementById('searchInput').focus();"
                         style="cursor: pointer">
                         what do you want to know about us, bro?
                     </p>
                     <form class="d-flex" role="search">
                         <!-- Tambahkan ID pada input untuk diakses dari JavaScript -->
                         <input id="searchInput" class="form-control me-2" type="search"
                             placeholder="Type something bruh..." aria-label="Search" style="width: 300px" />
                         <button class="btn btn-outline-light" type="submit">
                             Search
                         </button>
                     </form>
                 </li>
             </ul>
         </li>
         <li class="nav-item dropdown">
             <!-- Tombol dropdown untuk sosial media -->
             <a class="nav-link haha dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                 aria-expanded="false">
                 Social Media
             </a>

             <!-- Dropdown untuk link sosial media -->
             <ul class="dropdown-menu p-3 bg-success">
                 <li>
                     <!-- Tautan Facebook -->
                     <a href="https://www.facebook.com/sttcipasung" target="_blank" class="dropdown-item">
                         <i class="bi bi-facebook me-2"></i>
                         Facebook
                     </a>
                 </li>
                 <li>
                     <!-- Tautan Twitter -->
                     <a href="https://twitter.com/stt_cipasung" target="_blank" class="dropdown-item">
                         <i class="bi bi-twitter me-2"></i>
                         Twitter
                     </a>
                 </li>
                 <li>
                     <!-- Tautan Instagram -->
                     <a href="https://www.instagram.com/sttcipasung_official" target="_blank" class="dropdown-item">
                         <i class="bi bi-instagram me-2"></i>
                         Instagram
                     </a>
                 </li>
                 <li>
                     <!-- Tautan LinkedIn -->
                     <a href="https://id.linkedin.com/school/sttcipasung/" target="_blank" class="dropdown-item">
                         <i class="bi bi-linkedin me-2"></i>
                         LinkedIn
                     </a>
                 </li>
                 <li>
                     <!-- Tautan YouTube -->
                     <a href="https://www.youtube.com/channel/UCfMqh9VkAU2q_C-fPNKksiQ" target="_blank"
                         class="dropdown-item">
                         <i class="bi bi-youtube me-2"></i>
                         YouTube
                     </a>
                 </li>
                 <li>
                     <!-- Tautan TikTok -->
                     <a href="https://www.tiktok.com/@sttcipasung" target="_blank" class="dropdown-item">
                         <i class="bi bi-tiktok me-2"></i>
                         TikTok
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item dropdown">
             <!-- Tombol dropdown untuk Career -->
             <a class="nav-link dropdown-toggle haha" href="#" role="button" data-bs-toggle="dropdown"
                 aria-expanded="false">
                 Career
             </a>

             <!-- Dropdown untuk link Career -->
             <ul class="dropdown-menu p-3 bg-success">
                 <li>
                     <!-- Tautan Lowongan Pekerjaan -->
                     <a href="https://yourwebsite.com/jobs" target="_blank" class="dropdown-item">
                         Job Openings
                     </a>
                 </li>
                 <li>
                     <!-- Tautan Internship -->
                     <a href="https://yourwebsite.com/internships" target="_blank" class="dropdown-item">
                         Internships
                     </a>
                 </li>
                 <li>
                     <!-- Tautan Program Magang -->
                     <a href="https://yourwebsite.com/graduate-program" target="_blank" class="dropdown-item">
                         Graduate Program
                     </a>
                 </li>
                 <li>
                     <!-- Tautan Tips dan Sumberdaya Karir -->
                     <a href="https://yourwebsite.com/career-tips" target="_blank" class="dropdown-item">
                         Career Tips & Resources
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item">
             <!-- Tombol dropdown untuk Career -->
             <a class="nav-link haha" href="{{ route('login') }}" role="button" aria-expanded="false">
                 Login
             </a>
         </li>
         <li class="nav-item">
             <!-- Tombol dropdown untuk Career -->
             <a class="nav-link haha" href="#" role="button" aria-expanded="false">
                 Sign up
             </a>
         </li>
     </ul>
 </div>
 <!-- end top -->

 <!-- navbar -->
 <nav class="navbar navbar-expand-md bg-light">
     <div class="container-fluid semua-nav">
         <!-- Navbar Brand -->
         <a class="navbar-brand align-items-center" title="home" style="padding: 0;" href="{{ route('home') }}">
             <img src="https://sttcipasung.ac.id/wp-content/uploads/2023/07/STT-CIPASUNG-2-e1688823058980.png"
                 alt="Logo kampus" class="rounded-5 rounded-top-0" style="height: 71px; width: auto" />
         </a>
         <!-- Toggler Button for Offcanvas -->
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
             aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <!-- Offcanvas Menu -->
         <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="offcanvasNavbar"
             aria-labelledby="offcanvasNavbarLabel">
             <div class="offcanvas-header bg-success text-light">
                 <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                 <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                     aria-label="Close"></button>
             </div>
             <div class="offcanvas-body">
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                     <form class="d-flex mb-2 d-md-none order-xs-1" role="search">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                         <button class="btn btn-outline-success" type="submit">
                             Search
                         </button>
                     </form>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle do" href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Tentang
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end bg-success" style="margin-top: 11px;">
                             <li>
                                 <a class="dropdown-item" href="{{ route('tentang') }}"> About </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Accreditation </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Student Achievements </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Contact </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle do" href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Academics
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end bg-success" style="margin-top: 11px;">
                             <li>
                                 <a class="dropdown-item" href="{{ route('faculty') }}">
                                     Faculty
                                 </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Academics </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     Bachelor of Arts Degree
                                 </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     Master of Arts Degree
                                 </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     Experiential Learning
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle do" href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Admissions & Aid
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end bg-success" style="margin-top: 11px;">
                             <li>
                                 <a class="dropdown-item" href="#"> How to Apply </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     Tuition & Financial Aid
                                 </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     International Students
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle do" href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Campus Life
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end bg-success" style="margin-top: 11px;">
                             <li>
                                 <a class="dropdown-item" href="#"> Campus Life </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Residential Life </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Honor Code </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#"> Parents </a>
                             </li>
                             <li>
                                 <a class="dropdown-item" href="#">
                                     Center for Ethical Living and Learning (ZCELL)
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="row gap-2 ms-0 me-0 mb-2 order-xs-2">
                         <a class="col btn btn-success w-100" href="#" role="button">
                             PMB
                         </a>
                         <a class="col btn btn-primary w-100 d-md-none" href="#" role="button">
                             login
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>
 <!-- end navbar -->
