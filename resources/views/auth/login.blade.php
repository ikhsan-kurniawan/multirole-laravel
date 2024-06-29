<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        .catatan {
            border: 1px solid black;
            position: fixed;
            bottom: 0; 
            right: 0; 
            padding: 10px;
            z-index: 1000; 
        }
    </style>
</head>
<body>
    <div class="container vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-4">
                
                            <h3 class="fw-bold mb-2">Multi Role Users</h3>
                            <p class="text-white-50 mb-5">Masukan username dan password anda!</p>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="username">Username</label>
                                    <input name="username" type="text" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" autocomplete="off"/>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                    
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                 
                                <button class="btn btn-outline-light px-5" type="submit">Masuk</button>
                            </form>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catatan">
        <p>Super Admin: superadmin superadmin</p>
        <p>Admin: admin admin</p>
        <p>Member: member member</p>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>