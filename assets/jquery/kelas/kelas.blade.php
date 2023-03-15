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
    <br><br>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Kelas</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Kompetensi Keahlian</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                @php $i=1 @endphp
                @foreach($kelas as $row)
                  <tr>
                    <td scope="row">{{ $i++ }}</td>
                    <td>{{ $row->nama_kelas }}</td>
                    <td>{{ $row->kompetensi_keahlian }}</td>
                    <td><a href="/kelas/edit/{{ $row->id_kelas }}"><i class="bi bi-pencil-fill" style="color: blue;"></i></a> | <a href="/kelas/hapus/{{ $row->id_kelas }}" onclick="return confirm('Are you sure you want to delete?');"><i class="bi bi-trash-fill" style="color: red;"></i></a></td>
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
            <form action="/kelas/tambah" method="post">
            {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nama Kelas</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="kelas" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kompetensi Keahlian</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jurusan" required>
                  </div>
                </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </div>
            </form><!-- End General Form Elements -->
                  </div>
                </div>
              </div><!-- End Basic Modal-->
            </div>
    </div>

@includeIf('layouts.footer')