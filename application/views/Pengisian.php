<form method="POST" action="<?php echo base_url('Pengisian/tambahCatatan');?>">
<div class="col-lg-12">
                <div class="grid" style="background-color: rgb(193,193,193);">
                  <p class="grid-header" >Pencatatan Penjualan</p>
                  <div class="grid-body">
                    <div class="item-wrapper">
                      <div class="row mb-3">
                        <div class="col-md-8 mx-auto">
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="inputType1">Tanggal Pencatatan</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="inputType1" name="tgl_catat" value="<?php $date = date("d M yy");
                              echo $date;?>" disabled>
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="inputType12">Nama Admin</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" name="nama" class="form-control" id="inputType2">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="inputType13">Nama Barang</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" name="nama_barang" class="form-control" id="inputType3"> </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="inputType1">Jumlah Barang</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="number" name="jumlah_barang" class="form-control" id="jumlah">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="inputType5">Harga</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" name="harga" class="form-control" id="harga" onchange="total()">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="inputType7">Total Harga</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="total" placeholder="Total Harga" disabled="">
                            </div>
                          </div>
                          <center><button class="btn btn-success" type="submit"> Submit </button></center>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
               <script src="http://code.jquery.com/jquery-2.1.4.js"></script> 
              <script type="text/javascript">
               $(document).ready(function(){
               $("#harga").keyup(function(){ 
               var jum = parseInt($("#jumlah").val());
               var har = parseInt($("#harga").val());
               var total1 = jum * har;
               $("#total").val(total1); 
               }); 
               }); 
              </script> 