<template>
  <div class="row">
    <div class="col-lg grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">DATA PENDONOR</h4>
          <form class="forms-sample">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>User ID</label>
                  <input
                    type="text"
                    v-model="pendonor.user"
                    class="form-control"
                    name="user"
                    placeholder="Masukkan User ID"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input
                    type="text"
                    v-model="pendonor.name"
                    class="form-control"
                    name="nama"
                    placeholder="Masukkan Nama Lengkap"
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Umur</label>
                  <input
                    type="number"
                    v-model="pendonor.umur"
                    class="form-control"
                    name="umur"
                    placeholder="Masukkan Umur"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select
                    class="form-control"
                    v-model="pendonor.jk"
                    name="jk"
                    required
                  >
                    <option value="" disabled selected hidden>
                      Pilih Jenis Kelamin
                    </option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea
                    rows="1"
                    v-model="pendonor.alamat"
                    class="form-control"
                    placeholder="Masukkan Alamat Sesuai KTP"
                    name="alamat"
                    required
                  ></textarea>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Telepon</label>
                  <input
                    type="number"
                    v-model="pendonor.alamat"
                    class="form-control"
                    name="hp"
                    placeholder="Masukkan No Telepon"
                  />
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Golongan Darah</label>
                  <select
                    class="form-control"
                    v-model="pendonor.goldarah"
                    name="goldarah"
                    required
                  >
                    <option value="" disabled selected hidden>
                      Pilih Golongan Darah
                    </option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-lg-end mb-3">
              <div class="btn-wrapper">
                <button class="btn btn-light">Cancel</button>
                <button type="submit" class="btn btn-primary me-2">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>