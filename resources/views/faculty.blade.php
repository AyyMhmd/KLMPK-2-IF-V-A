@extends('layout.app')
@section('content')

    <h1>PROGRAM STUDI</h1>

    <div class="container text-center mb-5">
        <div class="facultas">
            <h2>FACULTY</h2>
        </div>
        <!-- content split -->
        <div class="row align-items-center mt-5 justify-content-center">
            <!-- content 3 Left -->
            <div class="col-xl-6 mb-3 mb-sm-0 row-one">
                <div class="card-faculty mx-auto">
                    <img src="storage/img/INFORMATIKA (1).png" alt="LOGO INFORMATIKA" class="logo-informatika" />
                    <div class="card-content">
                        <h2 class="if">INFORMATIKA</h2>
                    </div>
                    <p class="Informatika">
                        Di Jurusan Informatika kamu akan mempelajari berbagai prinsip
                        terkait ilmu komputer mulai dari proses perancangan,
                        pengembangan, pengujian, hingga evaluasi sistem operasi
                        perangkat lunak.
                    </p>
                    <a href="{{ route('if') }}" class="button text-light">
                        Find out more
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                    </a>
                </div>
            </div>
            <!-- end content Left -->

            <!-- content 3 Right -->
            <div class="col-xl-6 mb-3 mb-sm-0 row-two">
                <div class="card-faculty mx-auto">
                    <img src="storage/img/TEKNIK INDUSRTRI.png" alt="LOGO TEKNIK INDUSTRI" class="logo-teknik-industri" />
                    <div class="card-content">
                        <h2>TEKNIK INDUSTRI</h2>
                        <p>
                            Keilmuan Teknik Industri lahir dari keinginan untuk
                            memperbaiki sistem pekerjaan yang sudah ada. Itu dibuktikan
                            dengan salah satu bahasan dalam keilmuan Teknik Industri
                            yang menerapkan Plan, Do, Check, Action.
                        </p>
                        <a href="{{ route('ti') }}" class="button">
                            Find out more
                            <span class="material-symbols-outlined">arrow_right_alt</span>
                        </a>
                    </div>
                </div>
            </div>
