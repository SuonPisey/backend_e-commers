<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">ព៌ត័មានអចលនទ្រព្យ</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="table-search-form row gx-1 align-items-center">
									<div class="col-auto">
										<input type="text" id="search-orders" name="searchorders"
											class="form-control search-orders" placeholder="Search">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Search</button>
									</div>
								</form>

							</div><!--//col-->
							<div class="col-auto">

								<select class="form-select w-auto">
									<option selected value="option-1">All</option>
									<option value="option-2">This week</option>
									<option value="option-3">This month</option>
									<option value="option-4">Last 3 months</option>

								</select>
							</div>
							<div class="col-auto">
								<a class="btn app-btn-secondary" href="#">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
										<path fill-rule="evenodd"
											d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
									</svg>
									Download CSV
								</a>
							</div>
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->


			<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				<a class="flex-sm-fill text-sm-center nav-link active" id="​property_type_list-tab" data-bs-toggle="tab"
					href="#​property_type_list" role="tab" aria-controls="orders-all"
					aria-selected="true">បញ្ជីប្រភេទអចលនទ្រព្យ</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="create_property_type-tab" data-bs-toggle="tab"
					href="#create_property_type" role="tab" aria-controls="orders-paid"
					aria-selected="false">បង្កើតថ្មី</a>
				<!-- <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
					<a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a> -->
			</nav>


			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="​property_type_list" role="tabpanel"
					aria-labelledby="​property_type_list-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">ល.រ</th>
											<th class="cell">ឈ្មោះអចលនទ្រព្យ</th>
											<th class="cell">តម្លៃ</th>
											<th class="cell">​បរិយាយ</th>
											<th class="cell">រូបភាព</th>
											<th class="cell">ប្រភេទអចលនទ្រព្យជាខ្មែរ</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$sql = "SELECT
                                        p.property_id,
                                        p.property_name,
                                        p.property_price,
                                        p.property_dec,
                                        p.property_img,
                                        pt.property_type_kh 
                                    FROM
                                        tbl_property p
                                        JOIN tbl_property_type pt USING ( property_type_ID );";
										$result = mysqli_query($conn, $sql);
										while ($row = mysqli_fetch_array($result)) {
											?>
											<tr>
												<td class="cell">
													<?= $row[0] ?>
												</td>
												<td class="cell">
													<?= $row[1] ?>
												</td>
												<td class="cell">
													<?= $row[2] ?>
												</td>
												<td class="cell">
													<?= $row[3] ?>
												</td>
                                                <td class="cell">
													<?= $row[4] ?>
												</td><td class="cell">
													<?= $row[5] ?>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div><!--//table-responsive-->

						</div><!--//app-card-body-->
					</div><!--//app-card-->
					<nav class="app-pagination">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav><!--//app-pagination-->

				</div><!--//tab-pane-->

				<div class="tab-pane fade" id="create_property_type" role="tabpanel"
					aria-labelledby="create_property_type-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">


							<div class="col-12 col-md-12">
								<div class="app-card app-card-settings shadow-sm p-4">

									<div class="app-card-body">
										<form class="settings-form">
											<div class="mb-3">
												<label for="txt_property_type_kh"
													class="form-label">ឈ្មោះប្រភេទអចលនទ្រព្យជាខ្មែរ <span style="color:red;">*</span>
													<span class="ms-2" data-bs-container="body" data-bs-toggle="popover"
														data-bs-trigger="hover focus" data-bs-placement="top"
														data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
														<svg width="1em" height="1em" viewBox="0 0 16 16"
															class="bi bi-info-circle" fill="currentColor"
															xmlns="http://www.w3.org/2000/svg">
														</svg>
													</span>
												</label>
												<input type="text" name="txt_property_type_kh" class="form-control" id="txt_property_type_kh"​ value="" required>
											</div>
											<div class="mb-3">
												<label for="txt_property_type_en"
													class="form-label">ឈ្មោះប្រភេទអចលនទ្រព្យជាអង់គ្លេស<span style="color:red;">*</span>
												</label>
												<input type="text" name="txt_property_type_en" class="form-control" id="txt_property_type_en"
													value="" required>
											</div>
											<div class="mb-3">
												<label for="txt_property_type_dec" class="form-label">បរិយាយ</label>
											<textarea class="form-control" name="txt_property_type_dec" id="txt_property_type_dec" rows="3" style="height: 70px;" ></textarea>
											</div>
											<button type="submit" class="btn app-btn-primary">រក្សាទុក</button>
										</form>
									</div><!--//app-card-body-->

								</div><!--//app-card-->
							</div>
						</div><!--//row-->
						<hr class="my-4">
						<div class="row g-4 settings-section">



						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->

				<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">Order</th>
											<th class="cell">Product</th>
											<th class="cell">Customer</th>
											<th class="cell">Date</th>
											<th class="cell">Status</th>
											<th class="cell">Total</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="cell">#15345</td>
											<td class="cell"><span class="truncate">Consectetur adipiscing elit</span>
											</td>
											<td class="cell">Dylan Ambrose</td>
											<td class="cell"><span class="cell-data">16 Oct</span><span
													class="note">03:16 AM</span></td>
											<td class="cell"><span class="badge bg-warning">Pending</span></td>
											<td class="cell">$96.20</td>
											<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
										</tr>
									</tbody>
								</table>
							</div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->
				<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">Order</th>
											<th class="cell">Product</th>
											<th class="cell">Customer</th>
											<th class="cell">Date</th>
											<th class="cell">Status</th>
											<th class="cell">Total</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td class="cell">#15342</td>
											<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
											<td class="cell">Reina Brooks</td>
											<td class="cell"><span class="cell-data">12 Oct</span><span
													class="note">04:23 PM</span></td>
											<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
											<td class="cell">$59.00</td>
											<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
										</tr>

									</tbody>
								</table>
							</div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->
			</div><!--//tab-content-->



		</div><!--//container-fluid-->
	</div><!--//app-content-->

	<footer class="app-footer">
		<div class="container text-center py-3">
			<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
					style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com"
					target="_blank">Xiaoying Riley</a> for developers</small>

		</div>
	</footer><!--//app-footer-->

</div><!--//app-wrapper-->


<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


<!-- Page Specific JS -->
<script src="assets/js/app.js"></script>

</body>

</html>