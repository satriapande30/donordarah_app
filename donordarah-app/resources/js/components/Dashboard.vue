<template>
  <div>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Beranda</h1>
      <div class="row">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 mb-4">
              <div class="card">
                <div class="card-body btn btn-danger">
                  <h5 class="card-title">Golongan Darah A</h5>
                  <!-- <h1>{{ $stokdarah[0] }}</h1> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body btn btn-danger">
                  <h5 class="card-title">Golongan Darah B</h5>
                  <!-- <h1>{{ $stokdarah[1] }}</h1> -->
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card danger">
                <div class="card-body btn btn-danger">
                  <h5 class="card-title">Golongan Darah AB</h5>
                  <!-- <h1>{{ $stokdarah[2] }}</h1> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body btn btn-danger">
                  <h5 class="card-title">Golongan Darah O</h5>
                  <!-- <h1>{{ $stokdarah[3] }}</h1> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>