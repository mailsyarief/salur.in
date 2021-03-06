@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">

    <h3 align="center">Selamat Datang, {{Auth::user()->nama_lengkap}}!</h3>
    <br>
    {{-- alert --}}
    @if (session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
    @endif
    {{-- end - alert --}}    
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-light mb-3" style="max-width: 30rem;">
              <div class="card-header">Profil {{Auth::user()->nama_lengkap}}</div>
              <div class="card-body">
                <div class="form-group">
                @if(Auth::user()->foto == NULL)
                  <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" width="40%" height="auto">
                  <hr>
                @else
                  <img src="/fotoprofil/{{Auth::user()->foto}}" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                  <hr>
                @endif
                <table class="table table-borderless">
                  <tr>
                    <th>Nama</th>
                    <td>{{Auth::user()->nama_lengkap}}</td>
                  </tr>
                  <tr>
                    <th>No. Telepon</th>
                    <td>{{Auth::user()->telepon}}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>{{Auth::user()->email}}</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>{{Auth::user()->alamat}}</td>
                  </tr>
                  <tr>
                    <th>Wilayah Domisili</th>
                    <td>{{Auth::user()->wilayah}}</td>
                  </tr>
                </table>                            

                      
                </div>
                <hr>
                <div align="center">
                  <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#basicModal">Edit Data</a>
                </div>
              </div>
            </div>            
        </div>
        <div class="col-md-6">
            <div class="card bg-light mb-3" style="max-width: 30rem;">
              <div class="card-header">Terms & Agreement</div>
              <div class="card-body">
                <h5 class="card-title">Mohon Perhatian!</h5>
                <ul>
                  <li><p class="card-text">Anda bisa mencari pekerja sesuai kriteria yang anda pilih.</p></li>
                  <li><p class="card-text">setelah menemukan anda bisa kontak langsung dengan agen yang menaungi melalui telepon/email yang tertera.</p></li>
                  <li><p class="card-text">pastikan pekerja yang anda pilih sudah memenuhi berkas wajib seperti : SK Agen, SK bebas narkotika, SK bebas kriminal.</p></li>
                  <br>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="" checked="">
                    <label class="custom-control-label" for="customCheck2">Saya telah membaca & setuju!</label>
                  </div>                  
                </ul>
                
              </div>
            </div>            
        </div>
    </div>
</div>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <br><br>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="myModalLabel">Edit Profil</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/DataMajikan') }}" enctype="multipart/form-data">
          <div class="form-group" >
            {{ csrf_field() }}
            <label class="col-form-label" for="inputDefault">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama_lengkap" id="inputDefault" value="{{Auth::user()->nama_lengkap}}">
            <label class="col-form-label" for="inputDefault">Email</label>
            <input type="text" class="form-control" placeholder="Email" name="email" id="inputDefault" value="{{Auth::user()->email}}" readonly="">
            <label class="col-form-label" for="inputDefault">No. Telp</label>
            <input type="text" class="form-control" placeholder="No. Telp" name="telepon" id="inputDefault" value="{{Auth::user()->telepon}}">
            <label class="col-form-label" for="inputDefault">Foto profil</label>
              <div class="custom-file">
                <input type="file" accept=".png, .jpg, .jpeg" name="foto-profil" class="form-control-file" id="exampleFormControlFile1">
              </div>
            <label class="col-form-label" for="inputDefault">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="inputDefault" value="{{Auth::user()->alamat}}">
            <label class="col-form-label" for="inputDefault">Wilayah Domisili</label>
            <select name="wilayah" class="form-control" id="sel1">
              <option value="Surabaya">Surabaya</option>
              <option value="Sidoarjo">Sidoarjo</option>
              <option value="Malang">Malang</option>
            </select>        
          </div>
          <hr>
          <button type="submit" class="btn btn-md btn-primary">Save changes</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

@endsection
