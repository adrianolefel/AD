<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit a Need - IT Asset Management System</title>
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fc;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            border-radius: 10px;
        }
        .card-body {
            padding: 40px;
        }
        .form-control-user {
            border-radius: 25px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .btn-user {
            border-radius: 25px;
            padding: 12px 30px;
        }
        .form-img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12 text-center mb-4">
                        <h1 class="h4 text-gray-900">Submit a Need</h1>
                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="image_path_1.jpg" alt="Image 1" class="form-img">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form class="user" action="{{ route('needs.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user" id="description" name="description" rows="3" placeholder="Description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="repair">Repair</option>
                                        <option value="new_asset">New Asset</option>
                                        <option value="change_asset">Change Asset</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="submitter_email" name="submitter_email" placeholder="Your Email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Submit Need
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="image_path_2.jpg" alt="Image 2" class="form-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>