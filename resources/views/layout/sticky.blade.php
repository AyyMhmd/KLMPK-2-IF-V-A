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
            <a class="nav-link haha" href="src/login.html" role="button" aria-expanded="false">
                Login
            </a>
        </li>
        {{-- <li class="nav-item">
            <!-- Tombol dropdown untuk Career -->
            <a class="nav-link haha" href="#" role="button" aria-expanded="false">
                Sign up
            </a>
        </li> --}}
    </ul>
</div>
