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
                    <th scope="col">Petugas</th>
                    <th scope="col">Siswa</th>
                    <th scope="col">Tanggal Bayar</th>
                    <th scope="col">Bulan Di Bayar</th>
                    <th scope="col">Tahun Di Bayar</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Jumlah Di Bayar</th>
                  </tr>
                </thead>

                <tbody>
                @php $i=1 @endphp
                @foreach($petugas as $row)
                  <tr>
                    <td scope="row">{{ $i++ }}</td>
                    <td scope="row">{{ $row->name }}</td>
                    <td scope="row">{{ $row->nama }}</td>
                    <td scope="row">{{ $row->tgl_bayar }}</td>
                    <td scope="row">{{ $row->bulan_dibayar }}</td>
                    <td scope="row">{{ $row->bulan_dibayar }}</td>
                    <td scope="row">{{ $row->id_spp }}</td>
                    <td scope="row">{{ $row->jumlah_bayar }}</td>
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

@includeIf('layouts.footer')