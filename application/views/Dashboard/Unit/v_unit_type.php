<section class="content">
     <div class="row">
          <div class="flash-berhasil" data-flashdata="<?= $this->session->tempdata('sukses'); ?>">
          </div>
          <div class="flash-gagal" data-flashdata="<?= $this->session->tempdata('gagal'); ?>">
          </div>
          <div class="col-md-12">
               <div class="callout callout-info">
                    <h4>Unit</h4>
                    Halaman berisi informasi unit Type kategori dari unit tersebut dan juga untuk menambahkan dan menghapus unit type
               </div>
          </div>
          <div class="col-xs-12">
               <div class="box">
                    <div class="box-header d-flex justify-content-between">
                         <h3 class="box-title">Tabel List Unit Type</h3>
                         <a href="<?= base_url('') . 'unit-type-add/' . $this->uri->segment(2) . '' ?>" class="btn btn-primary pull-right"><i class="fa fa-fw fa-plus-square"></i> Tambah Type</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                         <table id="example1" class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th style="width: 1%;">No</th>
                                        <th>Id</th>
                                        <th>Unit Id</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th style="width: 12%">Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php if ($unit_type == 'failed') { ?>
                                        <tr>
                                             <td colspan="7" style="text-align: center;">
                                                  <h5>Data unit tidak ditemukan silahkan menambahkan data unit terlebih dahulu</h5>
                                             </td>
                                        </tr>
                                        <?php } else {
                                        $no = 1;
                                        foreach ($unit_type as $item) {; ?>
                                             <tr>
                                                  <td class="text-center"><?= $no++ . '.' ?></td>
                                                  <td><?= $item->id; ?></td>
                                                  <td><?= $item->units_id; ?></td>
                                                  <td><?= $item->name; ?></td>
                                                  <td><?= $item->description; ?></td>
                                                  <td class="text-center">
                                                       <a class='btn btn-danger btn-sm btn-hapus' href="<?= base_url('') . 'unit-type-delete/' . $item->id ?>"><i class="fa fa-fw fa-trash"></i></a>
                                                       <!-- <a class='btn btn-primary btn-sm' href="<?= base_url('') . 'unit-edit/' . $item->id ?>">Edit</a> -->
                                                  </td>
                                             </tr>
                                   <?php };
                                   } ?>
                              </tbody>
                              <tfoot>
                                   <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Unit Id</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th style="width: 20px;">Aksi</th>
                                   </tr>
                              </tfoot>
                         </table>
                    </div>
                    <!-- /.box-body -->
               </div>
               <!-- /.box -->

          </div>
     </div>
</section>