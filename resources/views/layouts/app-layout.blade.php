<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            {{-- TIDAK DIPERLUKAN. BETTER ATUR DI CLASS COMPONENT
            @if (isset($title))
                {{ $title }}
            @else
                Title
            @endif       --}}
            {{ $title }}
        </title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

        <style>
            .dropdown-header img {
                max-width: 40px; /* Atur lebar maksimum gambar */
                max-height: 40px; /* Atur tinggi maksimum gambar */
                border-radius: 50%; /* Agar gambar menjadi lingkaran (opsional) */
            }
        
            .dropdown-header p {
                margin-top: 5px; /* Jarak antara gambar dan teks nama pengguna */
                font-size: 14px; /* Ukuran teks nama pengguna */
            }
            .card.border-info {
                border: 2px solid #17a2b8; /* Warna border info blue */
            }
        </style>
        
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                {{-- Alert Messages --}}
                @if(session()->has('message'))
                <div class="p-2 text-center bg-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <!-- Content Header (Page header) -->
                @include('layouts.header')

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div><!-- /.container-fluid -->
                </div>
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            @include('layouts.footer')
        </div>

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        {{-- Price Format --}}
        <script src="{{ asset('plugins/jquery-priceformat/jquery.priceformat.min.js') }}"></script>
    </body>
</html>