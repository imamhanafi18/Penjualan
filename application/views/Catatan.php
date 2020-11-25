<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Basic</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover table-bordered">
											<thead>
												<tr>
													<th>No.</th>
													<th>Tgl</th>
													<th>Nama</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<?php if($hasil):?>
														<?php $nom = 1;?>
													<?php foreach($hasil as $has):?>
														<tr>
															<td><?php echo $nom;?></td>
															<td><?php echo $has->tgl?></td>
															<td><?php echo $has->nama;?></td>
															<td><?php echo $has->n_barang;?></td>
															<td><?php echo $has->jumlah;?></td>
															<td><?php echo $has->harga?></td>
															<td><?php $p = $has->jumlah;
															$l = $has->harga;
															$h = $p * $l;
															echo $h;?></td>
														</tr>
														<?php $nom++;?>
													<?php endforeach;?>
												<?php endif;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>