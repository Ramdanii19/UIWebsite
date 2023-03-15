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

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
        <i class="ri-add-fill"></i> Tambah Data
    </button>
    <!-- <a href="/siswa/halaman_tambah" class="btn btn-primary">Tambah Data</a> -->
    <br><br>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data SPP</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nisn</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">No SPP</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                @php $i=1 @endphp
                @foreach($siswa as $row)
                  <tr>
                    <td scope="row">{{ $i++ }}</td>
                    <td>{{ $row->nisn }}</td>
                    <td>Rp.{{ $row->nis }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->nama_kelas }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->no_telp }}</td>
                    <td>{{ $row->id_spp }}</td>
                    <td><a href="/siswa/edit/{{ $row->nisn }}"><i class="bi bi-pencil-fill" style="color: blue;"></i></a> | <a href="/siswa/hapus/{{ $row->nisn }}" onclick="return confirm('Are you sure you want to delete?');"><i class="bi bi-trash-fill" style="color: red;"></i></a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

    <!-- Modal -->
    <div class="card">
            <div class="card-body">
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Data Kelas</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!-- General Form Elements -->
                      <form action="/siswa/tambah" method="post">
            {{ csrf_field() }}

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nisn</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nisn" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nis</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nis" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Kelas</label>
                  <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="id_kelas">
                      @foreach($siswa2 as $row)
                      <option value="{{ $row->id_kelas }}">{{ $row->nama_kelas }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="alamat" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">No Telepon</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_telp" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">No SPP</label>
                  <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="id_spp">
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
              </div><!-- End Basic Modal-->
            </div>
    </div>

@includeIf('layouts.footer')