<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Aspirasi Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
          crossorigin="anonymous"/>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page" >
<div class="register-box" style="width:500px;">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>Form Pengaduan</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Selamat Datang</p>

            <form method="post"  action="{{ url('/postlapor') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="nik"
                           value="{{ old('nik') }}"
                           class="form-control @error('nik') is-invalid @enderror"
                           placeholder="Nik">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-address-card"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                           name="alamat"
                           class="form-control @error('alamat') is-invalid @enderror"
                           placeholder="alamat">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-map"></span></div>
                    </div>
                    @error('alamat')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

               
                <div class="form-group">

                        <select name="id_kategori" class="form-control">
                        <option value="#">--- Pilih Kategori ---</option>
                        @foreach($data as $data)
                          <option value="{{$data->id}}">{{$data->ket_kategori}}</option>
                         @endforeach
                        </select>
                      </div>
                      
                      <div class="input-group mb-3">
                      Lokasi
                    <textarea name="lokasi"placeholder="..." style="width:1000px;">
                    </textarea>
                   
                </div>
                <div class="input-group mb-3">
                      Keterangan
                    <textarea name="ket"placeholder="..." style="width:1000px;">
                    </textarea>
                   
                </div>
                <INPUT type="hidden" name="status" value="menunggu">
                <INPUT type="hidden" name="feedback" >
                
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms"  value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>

                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Next</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

</body>
</html>
