<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h1 class="page-title">Form</h1>
    <div class="" style="margin-bottom:10px;margin-top:15px;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{route('create')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" name="first_name" id="first_name" class=" form-control col-sm-6 @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name') }}" required />
                            @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" id="last_name" class=" form-control col-sm-6 @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name') }}" required />
                            @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" id="email_id" class="form-control col-sm-6 @error('email') is-invalid @enderror" placeholder="Email Id" value="{{ old('email') }}" required / >
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>City:</label>
                            <select name="city_name" id="city_name" class=" form-control col-sm-6 @error('city') is-invalid @enderror" required>
                                <option value="delhi">Delhi</option>
                                <option value="mumbai">Mumbai</option>
                                <option value="kolkata">Kolkata</option>
                                <option value="chennai">Chennai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mobile:</label>
                            <input type="tel" name="tel" id="tel_id" class="form-control col-sm-6 @error('tel') is-invalid @enderror" placeholder="Contact" value="{{ old('tel') }}" required / >
                            @error('tel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" id="password" class="form-control col-sm-6 @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}" required / >
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="profile" id="img_id" class="form-control col-sm-6  @error('profile') is-invalid @enderror"  value="{{ old('profile') }}" required / >
                            @error('profile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                     <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
