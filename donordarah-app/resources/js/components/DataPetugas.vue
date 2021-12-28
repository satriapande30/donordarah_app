<template>
  <div class="container-fluid px-4 mt-6">
    <!-- Jadiang 1 line nah, misi jarak dan letakkan paling kanan -->
    <!-- Lamen be suud, ingetang hapus komen -->
    <button class="btn btn-warning">Import Data</button>
    <button class="btn btn-primary">Eksport Data</button>
    <button class="btn btn-success">Tambah Data</button>
    <div class="card mb-4">
      <div class="card-header">
        <svg
          class="svg-inline--fa fa-table fa-w-16 me-1"
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="table"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
          data-fa-i2svg=""
        >
          <path
            fill="currentColor"
            d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"
          ></path></svg
        ><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
        Tabel Data Petugas
      </div>
      <div class="card-body">
        <div
          class="
            dataTable-wrapper dataTable-loading
            no-footer
            sortable
            searchable
            fixed-columns
          "
        >
          <div class="dataTable-top">
            <div class="dataTable-dropdown">
              <label
                ><select class="dataTable-selector">
                  <option value="5">5</option>
                  <option value="10" selected="">10</option>
                  <option value="15">15</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                </select>
                entries per page</label
              >
            </div>
            <div class="dataTable-search">
              <input
                class="dataTable-input"
                placeholder="Search..."
                type="text"
              />
            </div>
          </div>
          <div class="dataTable-container">
            <table id="datatablesSimple" class="dataTable-table">
              <thead>
                <tr>
                  <th data-sortable="" style="width: 19.4245%" class="desc">
                    <a href="#" type="" id="">User</a>
                  </th>
                  <th data-sortable="" style="width: 30.7914%" class="">
                    <a href="#" type="" id="">Nama</a>
                  </th>
                  <th data-sortable="" style="width: 15.1079%">
                    <a href="#" type="" id="">Umur</a>
                  </th>
                  <th data-sortable="" style="width: 8.92086%">
                    <a href="#" type="" id="">Jk</a>
                  </th>
                  <th data-sortable="" style="width: 14.6763%">
                    <a href="#" type="" id="">Alamat</a>
                  </th>
                  <th data-sortable="" style="width: 11.0791%">
                    <a href="#" type="" id="">Telepon</a>
                  </th>
                  <th data-sortable="" style="width: 11.0791%">
                    <a href="#" type="" id="">Action</a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Zorita Serrano</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>56</td>
                  <td>2012/06/01</td>
                  <td>$115,000</td>
                  <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="dataTable-bottom">
            <div class="dataTable-info">Showing x to x of x entries</div>
            <nav class="dataTable-pagination">
              <ul class="dataTable-pagination-list">
                <li class="active"><a href="#" data-page="1">1</a></li>
                <li class=""><a href="#" data-page="2">2</a></li>
                <li class=""><a href="#" data-page="3">3</a></li>
                <li class=""><a href="#" data-page="4">4</a></li>
                <li class=""><a href="#" data-page="5">5</a></li>
                <li class=""><a href="#" data-page="6">6</a></li>
                <li class="pager"><a href="#" data-page="2">›</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>