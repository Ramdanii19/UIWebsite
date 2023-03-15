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
            @foreach($spp as $row)
            <form action="/spp/update" method="post">
            {{ csrf_field() }}
	        <input type="hidden" name="id" value="{{ $row->id_spp }}"> <br/>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Tahun</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="tahun" value="{{ $row->tahun }}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nominal</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="nominal" value="{{ $row->nominal }}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@includeIf('layouts.footer')