@section('content')
    <!-- Page Content -->             
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <br><br>
          <div class="list-group">
            <h3 class="text-primary">Cari Agen</h3>

            <a href="#" class="list-group-item">
              <label>Domisili : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Domisili</option>
                <option>Surabaya</option>
                <option>Sidoarjo</option>
                <option>Malang</option>
                <option>Gresik</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Kota Asal : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Kota</option>
                <option>Surabaya</option>
                <option>Sidoarjo</option>
                <option>Malang</option>
                <option>Gresik</option>
              </select>              
            </a>
            <a href="#" class="list-group-item">
              <label>Pendidikan Terakhir : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Pendidikan</option>
                <option>Kuliah</option>
                <option>SMA</option>
                <option>SMP</option>
                <option>SD</option>
                <option>Tidak Ada</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Status : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <Option>Semua</Option>
                <option>Menikah</option>
                <option>Lajang</option>
                <option>Janda/Duda</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Agama : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Agama</option>
                <option>Islam</option>
                <option>Kristen Protestan</option>
                <option>Kristen Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Tidak Beragama</option>
              </select>
            </a>
            <a href="#" class="list-group-item" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Cari</button>
            </a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <br><br>
          <div class="row">

          @if(1)
            @foreach($pekerja as $pekerja)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{ $pekerja->name}}</a>
                  </h4>
                  <p class="text-muted">Pengalaman Kerja :</p>
                  <h5>10 sTahun</h5>
                  <p class="card-text">Performa kerja yang luar biasa sebagai supir pribadi</p>
                </div>
                <div class="card-footer" style="text-align: center;">
                  @guest
                  <button type="button" class="btn btn-primary btn-md">Lihat Profil Lengkap</button>
                  @else
                    @if(Auth::user()->role == 'A')
                    <button type="button" class="btn btn-primary btn-md">Lihat Profil Lengkap</button>
                    <button type="button" class="btn btn-primary btn-md">Rekrut</button>
                    @elseif(Auth::user()->role == 'P')
                    <button type="button" class="btn btn-primary btn-md">Lihat Profil Lengkap</button>           
                  @endif
                  @endguest
                </div>
              </div>
            </div>
            @endforeach
          @endif


          </div>
          <!-- /.row -->
          <div style="background-color:red;">
          <ul class="next">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </ul>
          </nav>
        </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection