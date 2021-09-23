<section class="content" ng-app="myApp" ng-controller="myCtrl">
     <div class="row">
          <div class="flash-berhasil" data-flashdata="<?= $this->session->tempdata('sukses'); ?>">
          </div>
          <div class="flash-gagal" data-flashdata="<?= $this->session->tempdata('gagal'); ?>">
          </div>
          <!-- /.col -->
          <div class="col-md-12">
               <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                         <li class="active"><a href="#konsumenNonAktif" data-toggle="tab">Konsumen non aktif</a></li>
                         <!-- <li><a href="#konsumenSemiAktif" data-toggle="tab">Konsumen Semi Aktif</a></li> -->
                         <li><a href="#konsumenAktif" data-toggle="tab">Konsumen Aktif</a></li>
                    </ul>
                    <div class="tab-content">
                         <div class="active tab-pane" id="konsumenNonAktif">
                              <div class="callout callout-info">
                                   <h4>Konsumen - Konsumen Non AKtif</h4>
                                   Halaman berisi informasi konsumen non aktif
                              </div>
                              <div class="box box-primary">
                                   <div class="box-header with-border">
                                        <h3 class="box-title">Fiter Konsumen yang ingin ditampilkan</h3>
                                   </div>
                                   <div class="row">
                                        <div class="col-md-3">
                                             <label class="margin">Pilih Tahun konsumen non aktif</label>
                                             <div class="input-group" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
                                                  <input type="text" class="form-control" placeholder="pilih tahun" id="konsumenYear" ng-model='year' style="border-radius: 2px; margin-right: 5px;">
                                                  <span class="input-group-btn">
                                                       <!-- <button type="button" class="btn btn-success btn-flat" id="cariKonsumenNonAktif">Cari</button> -->
                                                       <button type="button" class="btn btn-success" ng-click="get(year)">Cari</button>
                                                  </span>
                                             </div>
                                        </div>
                                        <div class="col">
                                             <div class="col-md-3">
                                                  <label class="margin">Filter Motor</label>
                                                  <div class="input-group" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
                                                       <input type="text" class="form-control" placeholder="Suzuki ..." id="konsumenYear" ng-model='year' style="border-radius: 2px; margin-right: 5px;">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col">
                                             <div class="col-md-3">
                                                  <label class="margin">Filter Nama</label>
                                                  <div class="input-group" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
                                                       <input type="text" class="form-control" placeholder="Budi ..." id="konsumenYear" ng-model='year' style="border-radius: 2px; margin-right: 5px;">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col">
                                             <div class="col-md-3">
                                                  <label class="margin">Filter Nomor</label>
                                                  <div class="input-group" style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
                                                       <input type="text" class="form-control" placeholder="085 ..." id="konsumenYear" ng-model='year' style="border-radius: 2px; margin-right: 5px;">
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <p style="padding: 10px;"></p>
                                   <div class="box">
                                        <div class="box-header d-flex justify-content-between">
                                             <h3 class="box-title" style="margin-top: 5px;">Table Konsumen</h3>
                                             <!-- <a href="pack-add" class="btn btn-primary pull-right">Tambah Paket</a> -->
                                        </div>
                                        <div class="box-body">
                                             <table class="table table-bordered table-striped table-hover table-responsive" style="width: 100%;">
                                                  <thead>
                                                       <tr>
                                                            <th>No</th>
                                                            <th>Motor</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Faktur</th>
                                                            <th>Cabang</th>
                                                            <th>Wilayah</th>
                                                            <th>Telp 1</th>
                                                            <th>Telp 2</th>
                                                            <th>Telp 3</th>
                                                            <th>Last Status</th>
                                                            <th>Last Update</th>
                                                            <th class="text-center" style="width: 15%;">Aksi</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr ng-repeat="x in karyawanNonAktif">
                                                            <td>{{$index+1}}</td>
                                                            <td>{{ x.motor }}</td>
                                                            <td>{{ x.nkonsumen }}</td>
                                                            <td>{{ x.tglfkt | date:'d-MMMM-yyyy'}}</td>
                                                            <td>{{ x.NCABANG  }}</td>
                                                            <td>{{ x.nwilayah }}</td>
                                                            <td>{{ x.hp }}</td>
                                                            <td>{{ x.telp }}</td>
                                                            <td>{{ x.telp1 }}</td>
                                                            <td>{{ x.status }}</td>
                                                            <td>{{ x.stcall }}</td>
                                                            <td class="text-nowrap text-center">
                                                                 <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default" ng-click="hitKonsumen($index)"><i class="fa fa-fw fa-list-alt"></i></button>
                                                                 <button class="btn btn-success btn-sm" ng-click="alert($index)"><i class="fa fa-fw fa-whatsapp"></i></button>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                                  <tfoot>
                                                       <tr>
                                                            <th>No</th>
                                                            <th>Motor</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Faktur</th>
                                                            <th>Cabang</th>
                                                            <th>Wilayah</th>
                                                            <th>Telp 1</th>
                                                            <th>Telp 2</th>
                                                            <th>Telp 3</th>
                                                            <th>Last Status</th>
                                                            <th>Last Update</th>
                                                            <th class="text-center">Aksi</th>
                                                       </tr>
                                                  </tfoot>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                              <div class="modal fade" id="modal-default">
                                   <div class="modal-dialog" style="width: 95%;">
                                        <div class="modal-content" style="width: 100%; height: 100%;">
                                             <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Aktivitas Komunikasi - Dengan Teknologi Whatsapp API</h4>
                                             </div>
                                             <div class="modal-body">
                                                  <div class="row" style="margin-bottom: 20px;">
                                                       <div class="col">
                                                            <div class="col-md-6">
                                                                 <div class="box box-warning">
                                                                      <div class="box-header with-border bg-warning">
                                                                           <h3 class="box-title">Informasi Konsumen</h3>
                                                                           <div class="box-tools pull-right">
                                                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                                                </button>
                                                                           </div>
                                                                      </div>
                                                                      <div class="box-body" style="padding: 0;">
                                                                           <table class="table table-hover">
                                                                                <tbody>
                                                                                     <tr>
                                                                                          <td scope="row">Nama Lengkap</td>
                                                                                          <td>{{nkonsumen}}</td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td scope="row">Alamat</td>
                                                                                          <td>{{alamat}}</td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td scope="row">No Handphone</td>
                                                                                          <td>{{cek1}}</td>
                                                                                     </tr>
                                                                                </tbody>
                                                                           </table>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col">
                                                            <div class="col-md-6">
                                                                 <div class="box box-warning">
                                                                      <div class="box-header with-border bg-warning">
                                                                           <h3 class="box-title">Informasi Konsumen</h3>

                                                                           <div class="box-tools pull-right">
                                                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                                                </button>
                                                                           </div>
                                                                      </div>
                                                                      <div class="box-body" style="padding: 0;">
                                                                           <table class="table table-hover">
                                                                                <tbody>
                                                                                     <tr>
                                                                                          <td scope="row">Nama Lengkap</td>
                                                                                          <td>{{nkonsumen}}</td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td scope="row">Alamat</td>
                                                                                          <td>{{alamat}}</td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td scope="row">No Handphone</td>
                                                                                          <td>{{cek1}}</td>
                                                                                     </tr>
                                                                                </tbody>
                                                                           </table>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="row" style="margin-bottom: 20px;">
                                                       <div class="col">
                                                            <div class="col-md-12">
                                                                 <div class="box box-primary">
                                                                      <div class="box-header box-primary with-border bg-primary" style="color:#fff" n>
                                                                           <h3 class="box-title">Riwayat Service</h3>
                                                                           <div class="box-tools pull-right">
                                                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                                                </button>
                                                                           </div>
                                                                      </div>
                                                                      <div class="box-body" style="padding: 0;">
                                                                           <table class="table table-hover">
                                                                                <thead>
                                                                                     <tr>
                                                                                          <th>Cek </th>
                                                                                          <th>Cek </th>
                                                                                          <th>Cek </th>
                                                                                     </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                     <tr>
                                                                                          <td scope="row">cek</td>
                                                                                          <td>cek1</td>
                                                                                          <td>cek1</td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td scope="row">cek</td>
                                                                                          <td>cek1</td>
                                                                                          <td>cek1</td>
                                                                                     </tr>
                                                                                </tbody>
                                                                           </table>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                  </div>
                                                  <div class="row" style="margin-bottom: 20px;">
                                                       <div class="col">
                                                            <div class="col-md-12">
                                                                 <div class="box box-primary">
                                                                      <div class="box-header box-primary with-border bg-primary" style="color:#fff">
                                                                           <h3 class="box-title">Riwayat Komunikasi</h3>
                                                                           <div class="box-tools pull-right">
                                                                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                                                </button>
                                                                           </div>
                                                                      </div>
                                                                      <div class="box-body" style="padding: 0;">
                                                                           <table class="table table-hover">
                                                                                <thead>
                                                                                     <tr>
                                                                                          <th>Cek </th>
                                                                                          <th>Cek </th>
                                                                                          <th>Cek </th>
                                                                                     </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                     <tr>
                                                                                          <td scope="row">cek</td>
                                                                                          <td>cek1</td>
                                                                                          <td>cek1</td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                          <td scope="row">cek</td>
                                                                                          <td>cek1</td>
                                                                                          <td>cek1</td>
                                                                                     </tr>
                                                                                </tbody>
                                                                           </table>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                  </div>
                                                  <div class="row" style="margin-bottom: 20px;">
                                                       <div class="col-md-6">
                                                            <div class="box box-success">
                                                                 <div class="box-header with-border bg-success">
                                                                      <h3 class="box-title">Aktivitas</h3>
                                                                      <div class="box-tools pull-right">
                                                                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                                           </button>
                                                                      </div>
                                                                 </div>
                                                                 <div class="box-body" style="padding: 0;">
                                                                      <!-- form Aktivitas -->
                                                                      <form role="form">
                                                                           <div class="box-body">
                                                                                <div class="form-group">
                                                                                     <label>Paket Penawaran</label>
                                                                                     <select ng-model="paketSelected" class="form-control" style="border-radius:3px" required ng-change="selectPaket()">
                                                                                          <option style=" padding-top:10px" value="">- Pilih Paket Service -</option>
                                                                                          <option style="padding-top:10px" value="{{x.id}}" ng-repeat="x in servicePaket">{{x.name}}</option>
                                                                                     </select>
                                                                                </div>
                                                                                <div class="form-group" ng-if="paketSelected">
                                                                                     <label>List {{paketSelected}}</label>
                                                                                     <div class="box">
                                                                                          <div class="box-body table-responsive no-padding">
                                                                                               <table class="table table-hover">
                                                                                                    <tr>
                                                                                                         <th>ID</th>
                                                                                                         <th>Nama</th>
                                                                                                         <th>Quantity</th>
                                                                                                         <th>Price</th>
                                                                                                         <th>Total</th>
                                                                                                    </tr>
                                                                                                    <tr ng-repeat="x in listservicePaket">
                                                                                                         <td>#</td>
                                                                                                         <td>{{x.name}}</td>
                                                                                                         <td>{{x.qty}}</td>
                                                                                                         <td>{{x.price}}</td>
                                                                                                         <td>{{x.qty*x.price }}</td>
                                                                                                    </tr>
                                                                                               </table>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                     <label>No WhatApp Konsumen</label>
                                                                                     <select class="form-control" style="border-radius:3px" required ng-model="selectedWhatApp">
                                                                                          <option style="padding-top:10px" value="">- Pilih Nomor WhatApp -</option>
                                                                                          <option ng-if="whatApp.hp !=''" style="padding-top:10px" ng-model="whatAppHp" value="{{whatApp.hp}}">{{whatApp.hp}}</option>
                                                                                          <option ng-if="whatApp.tlpn !=''" style="padding-top:10px" ng-model="whatAppTlpn" value="{{whatApp.tlpn}}">{{whatApp.tlpn}}</option>
                                                                                          <option ng-if="whatApp.tlpn1 !=''" style="padding-top:10px" ng-model="whatAppTlpn1" value="{{whatApp.tlpn1}}">{{whatApp.tlpn1}}</option>
                                                                                          <option style="padding-top:10px" value="whatAppAdd">lainnya</option>
                                                                                     </select>
                                                                                </div>
                                                                                <div ng-if="selectedWhatApp=='whatAppAdd'" class="form-group">
                                                                                     <label>No WhatApp Lainnya</label>
                                                                                     <input ng-model="selectedWhatApp" type="text" class="form-control" placeholder="085 .." required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="box-footer">
                                                                                <button class="btn btn-primary" style="width:100%"><i class="fa fa-fw fa-whatsapp" ng-click="cek()"></i> Kirim Pesan</button>
                                                                           </div>
                                                                      </form>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                            <div class="box box-success">
                                                                 <div class="box-header with-border bg-success">
                                                                      <h3 class="box-title">Rekomendasi Dari Aplikasi</h3>

                                                                      <div class="box-tools pull-right">
                                                                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                                           </button>
                                                                      </div>
                                                                 </div>
                                                                 <div class="box-body" style="padding: 0;">
                                                                      <table class="table table-hover">
                                                                           <tbody>
                                                                                <tr>
                                                                                     <td scope="row"></td>
                                                                                     <td>Merekomendasikan Service Berat</td>
                                                                                </tr>
                                                                                <tr>
                                                                                     <td scope="row"></td>
                                                                                     <td>Merekomendasikan Service Ringan</td>
                                                                                </tr>
                                                                           </tbody>
                                                                      </table>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="modal-footer">
                                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>
                         <!-- penutup konsumen non aktif -->

                         <div class="tab-pane" id="konsumenSemiAktif">
                              <div class="callout callout-info">
                                   <h4>Konsumen - Konsumen Semi AKtif</h4>
                                   Halaman berisi informasi konsumen Semi aktif
                              </div>
                              <div class="box box-success">
                                   <div class="box-header with-border">
                                        <h3 class="box-title">Pilih Tahun Konsumen Semi aktif</h3>
                                   </div>
                                   <form role="form">
                                        <div class="box-body">
                                             <div class="form-group">
                                                  <label for="exampleInputEmail1">Email address</label>
                                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                             </div>
                                        </div>
                                        <div class="box-footer">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                   </form>
                              </div>
                         </div>


                         <div class="tab-pane" id="konsumenAktif">
                              <div class="callout callout-info">
                                   <h4>Konsumen - Konsumen Aktif</h4>
                                   Halaman berisi informasi konsumen aktif
                              </div>
                              <div class="box box-success">
                                   <div class="box-header with-border">
                                        <h3 class="box-title">Pilih Tahun Konsumen aktif</h3>
                                   </div>
                                   <form role="form">
                                        <div class="box-body">
                                             <div class="form-group">
                                                  <label for="exampleInputEmail1">Email address</label>
                                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                             </div>
                                        </div>
                                        <div class="box-footer">
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                   </form>
                              </div>

                              <div class="callout callout-info">
                                   <h4>Konsumen - Konsumen Non AKtif</h4>
                                   Halaman berisi informasi konsumen non aktif
                              </div>
                              <div class="box">
                                   <div class="box-header d-flex justify-content-between">
                                        <h3 class="box-title">Table Paket</h3>
                                        <a href="pack-add" class="btn btn-primary pull-right">Tambah Paket</a>
                                   </div>
                                   <div class="box-body">
                                        <table id="tabelSemiAktif" class="table table-bordered table-striped" style="width: 100%;">
                                             <thead>
                                                  <tr>
                                                       <th>No</th>
                                                       <th>Kode Paket</th>
                                                       <th>Nama Paket</th>
                                                       <th>Unit</th>
                                                       <th>Deskripsi</th>
                                                       <th style="width: 220px;">Aksi</th>
                                                  </tr>
                                             </thead>
                                             <tbody>

                                             </tbody>
                                             <tfoot>
                                                  <tr>
                                                       <th>No</th>
                                                       <th>Kode Paket</th>
                                                       <th>Nama Paket</th>
                                                       <th>Unit</th>
                                                       <th>Deskripsi</th>
                                                       <th>Aksi</th>
                                                  </tr>
                                             </tfoot>
                                        </table>

                                        <h1>Todos</h1>
                                        <h4>{{todos.length}} remain</h4>
                                        <ul>
                                             <li ng-repeat="todo in filteredTodos">{{todo.text}}</li>
                                        </ul>
                                        <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"></div>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>