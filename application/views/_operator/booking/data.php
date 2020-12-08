<section class="section">
    <div class="section-header">
        <h1>Booking</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Master Data</div>
            <div class="breadcrumb-item active"><a href="">Booking</a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-success btn-flat" data-toggle="modal" data-target="#add-booking"><i class="fas fa-plus"></i> Booking</button>
                        <button class="btn btn-info btn-flat dropdown-toggle" type="button" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i> Export</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-file-excel"></i> Excel
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-file-pdf"></i> PDF
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <th width="5%">#</th>
                                <th>Nama Pemesan</th>
                                <th>Tempat</th>
                                <th>Nama Tim</th>
                                <th>Tgl</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Status</th>
                                <th width="12%">#</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Wakhid</td>
                                    <td>Champions A</td>
                                    <td>Unisnu</td>
                                    <td>16/11/2020</td>
                                    <td>17.00</td>
                                    <td>18.00</td>
                                    <td><div class="badge badge-warning">Unpaid</div></td>
                                    <td>
                                        <a href="#" title="Hapus" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <a href="#" title="Bayar" class="btn btn-icon btn-sm btn-info"><i class="fas fa-hand-holding-usd"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="add-booking" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-booking" aria-hidden="true" data-backdrop="">
            <div class="modal-dialog">
                <form action="<?=base_url('booking/data');?>" method="POST" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Booking</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama Pemesan</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <!-- <input type="text" name="nama" id="nama" class="form-control"> -->
                            <!-- pilih lapangan -->
                            <select name="tempat" id="tempat" class="form-control">
                                <option disabled selected>-- Pilih Tempat --</option>
                                <option value="1">Kenari</option>
                                <option value="2">Champion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tim">Nama Tim</label>
                            <input type="text" name="tim" id="tim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" name="tgl" id="tgl" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="start">Mulai</label>
                                    <input type="time" name="start" id="start" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="finish">Selesai</label>
                                    <input type="time" name="finish" id="finish" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>