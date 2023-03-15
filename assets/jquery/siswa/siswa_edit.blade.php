@includeIf('layouts.header')
@includeIf('layouts.navbar')
@includeIf('layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data Kelas</h5>

            <!-- General Form Elements -->
            <!-- General Form Elements -->
            @foreach($siswa as $row)
            <form action="/siswa/update" method="post">
            {{ csrf_field() }}
	        <input type="hidden" name="id" value="{{ $row->nisn }}"> <br/>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nis</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nis" required value="{{ $row->nis }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" required value="{{ $row->nama }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kelas</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="id_kelas" required value="{{ $row->id_kelas }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="alamat" required value="{{ $row->alamat }}"> 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">No Telepon</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_telp" required value="{{ $row->no_telp }}">
                  </div>
                </div>
                @endforeach

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">No SPP</label>
                  <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="id_spp">
                      <option selected>Open this select menu</option>
                      @foreach($siswa2 as $row)
                      <option value="{{ $row->id_spp }}">{{ $row->id_spp }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@includeIf('layouts.footer')