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
              <h5 class="card-title">Data SPP</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                @php $i=1 @endphp
                @foreach($spp as $row)
                  <tr>
                    <td scope="row">{{ $i++ }}</td>
                    <td>{{ $row->tahun }}</td>
                    <td>Rp.{{ $row->nominal }}</td>
                    <td><a href="/spp/edit/{{ $row->id_spp }}"><i class="bi bi-pencil-fill" style="color: blue;"></i></a> | <a href="/spp/hapus/{{ $row->id_spp }}" onclick="return confirm('Are you sure you want to delete?');"><i class="bi bi-trash-fill" style="color: red;"></i></a></td>
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
                      <h5 class="modal-title">Tambah Data SPP</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!-- General Form Elements -->
            <form action="/spp/tambah" method="post">
            {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Tahun</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="tahun" required>
                  </div>
                </div>

                <!-- <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Select</label>
                  <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nominal</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="nominal" required>
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