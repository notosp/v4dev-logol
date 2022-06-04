<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-10">
			<div id="basic-pills-wizard" class="twitter-bs-wizard">
				<ul class="twitter-bs-wizard-nav">
					<li class="nav-item">
						<a href="#steps-1" class="" data-toggle="tab">&nbsp;</a>
					</li>
					<li class="nav-item">
						<a href="#steps-2" class="" data-toggle="tab">&nbsp;</a>
					</li>
				</ul>
				<div class="tab-content twitter-bs-wizard-tab-content">
					<div class="tab-pane" id="steps-1">
						<div class="navbar">
							<span><a href="#">My Order</a> > Order Form</span>
						</div>
						<div class="nav-title mt-5">
							<h4>E-Depot</h4>
							<span>Please fill this form correctly to make better experience</span>
						</div>
						<div class="card mt-3">
							<div class="card-body p-4">
								<div class="row">
									<div class="col-lg-12">
										<div class="mt-3 mt-lg-0">
											<div>
												<select class="form-select w-50" name="depotId" id="depotId" onchange="selectDepo(this.value); return false;">
													<option value="">- Select Depo</option>
													<?php if (!empty($arrdepot)) : ?>
														<?php foreach ($arrdepot as $depot) : ?>
															<option value="<?php echo $depot['DEPOT_ID']; ?>"><?php echo strtoupper($depot['DEPOT_NAME']); ?></option>
														<?php endforeach; ?>
													<?php endif; ?>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion" id="accordionExample1" style="display:none">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne1">
									<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
										<img src="<?php echo base_url('assets/images/icon/menu/master.png'); ?>" />General Requirement
										<span style="margin-left:82%;display:none;" id="done" class="badge badge-soft-success">DONE</span>
									</button>
								</h2>
								<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
									<div class="accordion-body">
										<form>
											<div class="row">
												<div class="col-lg-8">
													<div>
														<div class="mb-3">
															<label class="form-label">NPWP <span style="color: #E05252;">*</span></label>
															<select class="form-select" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">
																<option>Select NPWP</option>
															</select>
														</div>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3 ">
															<label for="example-date-input" class="form-label">Internal Ref. Number</label>
															<input class="form-control" type="text" placeholder="Input Here">

														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3">
															<label for="example-date-input" class="form-label">Delivery Order Number <span style="color: #E05252;">*</span></label>
															<input class="form-control" type="text" placeholder="Input Here">
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3">
															<label for="example-date-input" class="form-label">Delivery Order Expiry Date <span style="color: #E05252;">*</span></label>
															<input class="form-control" type="date" placeholder="Input Here">
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3">
															<label for="example-date-input" class="form-label">Delivery Order Attachment <span style="color: #E05252;">*</span></label>
															<input class="form-control" type="file" placeholder="Upload Document">
														</div>
													</div>
												</div>
											</div>
											<hr />
											<div class="row">
												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3">
															<label for="example-date-input" class="form-label">Gate In Date <span style="color: #E05252;">*</span></label>
															<input class="form-control" name="date" type="date">
														</div>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3">
															<label for="example-date-input" class="form-label">Shipping Line <span style="color: #E05252;">*</span></label>
															<select class="form-select">
																<option>Select Type</option>
															</select>
														</div>
													</div>
												</div>

												<div class="col-lg-4">
													<div class="mt-3 mt-lg-0">
														<div class="mb-3">
															<label for="example-date-input" class="form-label">Shipping Line <span style="color: #E05252;">*</span></label>
															<input class="form-control" type="file" name="uploadSPPB" placeholder="Upload Document">
														</div>
													</div>
												</div>
											</div>
											<div class="row mx-2">
												<div class="col-sm-10">&nbsp;</div>
												<div class="col-sm-2" style="float:right">
													<button type="button" style="width:10em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light mb-sm-3" onClick="nextSteps();" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
														Continue <i class="bx bx-chevron-right ms-1"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="accordion mt-3" id="accordionExample" style="display:none">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Container Details
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<div class="row">
											<div class="col-md-6 col-sm-6" align="left">
												<label>Total : 2</label>
											</div>
											<div class="col-md-6 col-sm-6" align="right">
												<a href="#">EDIT</a>
											</div>
										</div>
										<div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
											<i class="mdi mdi-alert-outline align-middle me-3"></i><strong>Process Container</strong> - Please select container and add the quantity to process your order. You can add more container depends on your needs.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>

										<div class="row">
											<!--<div class="col-lg-3">
												<div class="card">
													<div class="card-body">
														<table>
															<tr>
																<td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
																<td style="width:100%;">
																	<select class="form-select" onchange="changeCont(this)" style="border:0;width:95px;font-weight:bold;">
																		<option value="default"><b>Select Container</b></option>
																		<option selected><b>20 Feet - General Purpose</b></option>
																		<option><b>40 Feet - General Purpose</b></option>
																		<option><b>45 Feet - High Cube</b></option>
																		<option><b>20 Feet - Reefer</b></option>
																		<option><b>40 Feet - Reefer High</b></option>

																	</select>
																	<label style="margin-left:8%;">General Purpose</label>
																</td>
															</tr>
															<tr>
																<td>
																	<div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
																	<span onClick="counting('min', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">-</span>
																	<span class="t_count" style="padding: 5px;"><label>0</label></span>
																	<span onClick="counting('plus', this)" style="padding: 5px 10px;font-size:15px;background: #F8F8F9;border-radius: 4px;">+</span>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
														-->
											<div class="col-lg-4">
												<div class="card">
													<!-- <button type="button" style="float:right;position:absolute;" class=" btn-close" data-bs-dismiss="btn-close" aria-label="Close"></button> -->
													<div class="alert-dismissible fade show">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
													<div class="card-body">
														<table>
															<tr>
																<td rowspan="3"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
																<td style="width:100%;">
																	<label style="font-weight: 500; font-size: 14px;color: #002985;margin-left:14px;">EGHU3826956</label>
																</td>
															</tr>
															<tr>
																<td>
																	<label style="margin-left:8%;font-weight: 700; font-size: 14px;color: #0E0E2C;">20 Feet</label>
																</td>
															</tr>
															<tr>
																<td>
																	<div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
																		<p style="font-weight: 400; font-size: 10px;color: #8C8CA2;">General Purpose</p>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card">
													<!-- <button type="button" style="float:right;position:absolute;" class=" btn-close" data-bs-dismiss="btn-close" aria-label="Close"></button> -->
													<div class="alert-dismissible fade show">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
													<div class="card-body">
														<table>
															<tr>
																<td rowspan="3"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
																<td style="width:100%;">
																	<label style="font-weight: 500; font-size: 14px;color: #002985;margin-left:14px;">EGHU3826956</label>
																</td>
															</tr>
															<tr>
																<td>
																	<label style="margin-left:8%;font-weight: 700; font-size: 14px;color: #0E0E2C;">20 Feet</label>
																</td>
															</tr>
															<tr>
																<td>
																	<div style=" cursor: pointer; text-align: left; vertical-align: middle; margin-left: 1em">
																		<p style="font-weight: 400; font-size: 10px;color: #8C8CA2;">General Purpose</p>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-booking">
													<div class="card" style="border: 2px dashed #C2D4FC;box-sizing: border-box;">
														<div class="card-body" align="center">
															<label style="margin:0 auto;padding:15% 0">Add Container
																<span>
																	<svg width="25" height="24" style="margin-top:7px;" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11.0001 6.89941H3.14014V18.8994H19.9401V12.75" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M6.14453 10.9004L6.14453 14.9004" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M9.72119 10.8994L9.72119 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M13.2979 10.8994L13.2979 14.8994" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M16.875 13.124L16.875 14.8997" stroke="#BFC9E0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M17.78 10.9798C20.1658 10.9798 22.1 9.04571 22.1 6.65984C22.1 4.27397 20.1658 2.33984 17.78 2.33984C15.3941 2.33984 13.46 4.27397 13.46 6.65984C13.46 9.04571 15.3941 10.9798 17.78 10.9798Z" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M16.3398 6.65918H19.2198" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																		<path d="M17.7798 5.21973V8.09973" stroke="#002985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
																	</svg>
																</span>
															</label>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row mx-2 mb-2">
										<div class="col-lg-10">&nbsp;</div>
										<div class="col-lg-2">
											<ul class="pager wizard twitter-bs-wizard-pager-link">
												<li class="next">
													<button type="button" style="width:10em" href="javascript: void(0);" class="btn btn-primary waves-effect waves-light mb-sm-3">
														Continue <i class="bx bx-chevron-right ms-1"></i>
													</button>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="steps-2">
						<ul class="pager wizard twitter-bs-wizard-pager-link">
							<li class="previous">
								<span style="cursor:pointer;">Back To Create Order</span>
							</li>
						</ul>
						<div class="row mt-3">
							<div class="col-md-8">
								<div class="card mb-0">
									<div class="card-body">
										<div class="row">
											<div class="col-md-8 col-sm-8" style="">
												<div class="nav-title">
													<h5>General Info</h5>
													<p>Requirement data that can be used on all services.</p>
												</div>
											</div>
											<div class="col-md-4 col-sm-4" style="text-align: end;">
												<button type="button" class="btn btn-outline-secondary waves-effect">Cancel Order</button>
												<button type="button" class="btn btn-primary waves-effect waves-light">Save Order</button>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-3 col-sm-3">
												<label class="t-title">Type of Order</label>
												<p class="t-desc">Export</p>
											</div>
											<div class="col-md-9 col-sm-9">
												<label class="t-title">NPWP</label>
												<p class="t-desc">08.178.554.2-123.321 - PT. TEGUH ABADI JAYA</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3 col-sm-3">
												<label class="t-title">DO Number</label>
												<p class="t-desc">DO_11233RBG_22</p>
											</div>
											<div class="col-md-3 col-sm-3">
												<label class="t-title">DO Date</label>
												<p class="t-desc">22/04/2022</p>
											</div>
											<div class="col-md-3 col-sm-3">
												<label class="t-title">Internal Ref. Number</label>
												<p class="t-desc">MRS123456</p>
											</div>
										</div>
									</div>
								</div>

								<div class="nav-title mt-5">
									<h5>Your Order Listing</h5>
									<p>Please select which order you will process into the next step (payment)</p>
								</div>

								<div class="row">
									<div class="col-md-12 col-sm-12">
										<input type="checkbox" class="" style="width: 20px; height: 20px;">
										<label class="form-title" style="vertical-align:middle; text-align: center; margin-left:1em; ">Select All</label>
									</div>
								</div>

								<div class="row mt-3">

									<div class="col-md-1 col-sm-1">
										<input type="checkbox" onclick="doSummary(this);" class="" style="width: 20px; height: 20px;">
									</div>
									<div class="col-md-11 col-sm-11" style="margin-left:-2.5em">
										<div class="card">
											<div class="card-header bg-transparent border-bottom">
												<h6>E-Depo</h6>
												<p>Depo Order Detail</p>
											</div>
											<div class="card-body p-4">

												<div class="row">

													<div class="col-md-3 col-sm-3">
														<label class="t-title">Depo</label>
														<p class="t-desc">BSA</p>
													</div>
													<div class="col-md-3 col-sm-3">
														<label class="t-title">Shipping Line</label>
														<p class="t-desc">Maersk Line</p>
													</div>
													<div class="col-md-3 col-sm-3">
														<label class="t-title">Bussiness Unit</label>
														<p class="t-desc">Maersk Sea Land</p>
													</div>
													<div class="col-md-3 col-sm-3">
														<label class="t-title">Container Grade</label>
														<p class="t-desc">GRADE B</p>
													</div>

													<div class="col-lg-5 mt-3">
														<div class="card">
															<div class="card-body">
																<table>
																	<tr>
																		<td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-20-dv.png'); ?>" /></td>
																		<td style="width:100%;">
																			<label style="margin-left:8%;font-weight:bold;">20 Feet</label>
																			<label style="margin-left:8%;">General Purpose</label>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label style="margin-left:8%;font-weight:bold;">x4</label>
																		</td>
																	</tr>
																</table>
															</div>
														</div>
													</div>

													<div class="col-lg-5 mt-3">
														<div class="card">
															<div class="card-body">
																<table>
																	<tr>
																		<td rowspan="2"><img src="<?php echo base_url('assets/images/icon/cont-40-dv.png'); ?>" /></td>
																		<td style="width:100%;">
																			<label style="margin-left:8%;font-weight:bold;">40 Feet</label>
																			<label style="margin-left:8%;">General Purpose</label>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label style="margin-left:8%;font-weight:bold;">x4</label>
																		</td>
																	</tr>
																</table>
															</div>
														</div>
													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="card">
									<div class="card-header bg-transparent border-bottom">
										<h6>Payment Summary</h6>
										<p>This is your payment summary from your order</p>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-12" align="center">
												<div id="p_details" class="mb-5 mt-5">
													<svg width="57" height="61" viewBox="0 0 57 61" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M25.8418 28.3442H44.294C46.51 28.3442 48.294 30.1282 48.294 32.3442V54.573C48.294 56.789 46.51 58.573 44.294 58.573H25.8418C23.6258 58.573 21.8418 56.789 21.8418 54.573V32.3442C21.8418 30.1282 23.6258 28.3442 25.8418 28.3442Z" fill="#E4EBF0" />
														<path d="M6.49117 6.02931C3.20176 6.02931 0.49707 8.734 0.49707 12.0234V55.0008C0.49707 58.2902 3.20176 60.9949 6.49117 60.9949H44.4931C47.7825 60.9949 50.502 58.2902 50.502 55.0008V27.7892C50.5064 26.6785 49.6049 25.7769 48.4941 25.7813C47.3892 25.7851 46.4967 26.6842 46.501 27.7892V55.0008C46.501 56.1434 45.6357 56.9939 44.4931 56.9939H6.49117C5.34858 56.9939 4.49805 56.1434 4.49805 55.0008V12.0234C4.49805 10.8808 5.34858 10.0303 6.49117 10.0303H13.9321C15.0371 10.0347 15.9362 9.14215 15.94 8.03719C15.9444 6.92646 15.0428 6.02493 13.9321 6.02931H6.49117ZM37.3032 6.02931C36.1982 6.03311 35.3057 6.93223 35.3101 8.03719C35.3138 9.13638 36.204 10.0265 37.3032 10.0303H44.4931C45.6357 10.0303 46.501 10.8808 46.501 12.0234V12.9978C46.5048 14.097 50.4982 14.1028 50.502 12.9978V12.0234C50.502 8.73399 47.7825 6.02931 44.4931 6.02931H37.3032Z" fill="#CDD0D6" />
														<path d="M18.1251 0.994629C14.8357 0.994629 12.1162 3.71408 12.1162 7.00349V8.9966C12.1162 12.286 14.8357 14.9907 18.1251 14.9907H32.8741C36.1635 14.9907 38.8682 12.286 38.8682 8.9966V7.00349C38.8682 3.71409 36.1635 0.994629 32.8741 0.994629H18.1251ZM18.1251 4.99561H32.8741C34.0167 4.99561 34.8672 5.8609 34.8672 7.00349V8.9966C34.8672 10.1392 34.0167 10.9897 32.8741 10.9897H18.1251C16.9825 10.9897 16.1172 10.1392 16.1172 8.9966V7.00349C16.1172 5.86091 16.9825 4.99561 18.1251 4.99561Z" fill="#5D5D6D" />
														<path d="M15.1211 19.0654C14.0219 19.0692 13.1317 19.9593 13.1279 21.0585C13.1236 22.1635 14.0161 23.0626 15.1211 23.0664H17.2588C18.3638 23.0626 19.2563 22.1635 19.2519 21.0585C19.2482 19.9593 18.358 19.0692 17.2588 19.0654H15.1211Z" fill="#CDD0D6" />
														<path d="M12.1162 47.8013C11.017 47.8051 10.1268 48.6952 10.1231 49.7944C10.1187 50.8994 11.0112 51.7985 12.1162 51.8023H25.219C26.3298 51.8067 27.2313 50.9052 27.2269 49.7944C27.2231 48.6895 26.324 47.7969 25.219 47.8013H12.1162Z" fill="#CDD0D6" />
														<path d="M52.1996 11.7896C49.5949 9.78078 45.7931 10.2773 43.7843 12.8821L23.0855 39.7226C21.382 41.9314 21.461 44.6378 21.7124 46.7059C21.9639 48.774 22.5392 50.4116 22.5392 50.4116C22.7951 51.1581 23.4659 51.6843 24.2518 51.7551C24.2518 51.7551 26.0012 51.9122 28.0904 51.6518C30.1796 51.3913 32.8398 50.8075 34.5569 48.5809L55.2705 21.7404C57.2793 19.1356 56.7827 15.3339 54.178 13.325L52.1996 11.7896ZM49.7636 14.9638L51.742 16.4845C52.6467 17.1822 52.7941 18.3848 52.0963 19.2896L31.3974 46.1449C30.8435 46.8631 29.2252 47.4781 27.6032 47.6803C26.7524 47.7864 26.578 47.731 26.0234 47.7249C25.8853 47.1983 25.7858 47.0572 25.6839 46.219C25.4892 44.6183 25.6773 42.9097 26.2449 42.1738L46.9585 15.3184C47.6563 14.4137 48.8588 14.2663 49.7636 14.9641L49.7636 14.9638Z" fill="#5D5D6D" />
														<path d="M15.1211 27.3154C14.0219 27.3192 13.1317 28.2093 13.1279 29.3085C13.1236 30.4135 14.0161 31.3126 15.1211 31.3164H17.2588C18.3638 31.3126 19.2563 30.4135 19.2519 29.3085C19.2482 28.2093 18.358 27.3192 17.2588 27.3154H15.1211Z" fill="#CDD0D6" />
														<path d="M15.1211 35.6904C14.0219 35.6942 13.1317 36.5843 13.1279 37.6835C13.1236 38.7885 14.0161 39.6876 15.1211 39.6914H17.2588C18.3638 39.6876 19.2563 38.7885 19.2519 37.6835C19.2482 36.5843 18.358 35.6942 17.2588 35.6904H15.1211Z" fill="#CDD0D6" />
													</svg>

													<p class="mt-4">There’s no information to show. Please select which services should be process.</p>
												</div>
												<div id="p_details2" style="display:none;" class="">
													<div class="accordion" id="accordionExamplePay">
														<div class="accordion-item">
															<h2 class="accordion-header" id="headingOne1">
																<button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
																	E-Depo
																</button>

															</h2>
															<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExamplePay">
																<div class="accordion-body">
																	<form align="left">
																		<div class="row mt-3">
																			<div class="col-md-8 col-sm-8">
																				<label class="t-desc">Depo Reimbursement</label>
																			</div>
																			<div class="col-md-4 col-sm-4">
																				<label class="t-desc">Rp 200.000</label>
																			</div>
																			<div class="col-md-12 col-sm-12">
																				<label class="t-desc-2">BSA</label>
																			</div>
																		</div>

																		<div class="row mt-3">
																			<div class="col-md-8 col-sm-8">
																				<label class="t-desc">Platform Fee</label>
																			</div>
																			<div class="col-md-4 col-sm-4">
																				<label class="t-desc">Rp 100.000</label>
																			</div>
																			<div class="col-md-12 col-sm-12">
																				<label class="t-desc-2">8x Containers</label>
																			</div>
																		</div>

																		<div class="row mt-3">
																			<div class="col-md-8 col-sm-8">
																				<label class="t-desc">Sub-Total</label>
																			</div>
																			<div class="col-md-4 col-sm-4">
																				<label class="t-desc">Rp 300.000</label>
																			</div>
																		</div>
																		<hr />
																		<div class="row mt-3">
																			<div class="col-md-8 col-sm-8">
																				<label class="t-desc">PPh23</label>
																			</div>
																			<div class="col-md-4 col-sm-4">
																				<label class="t-desc">Rp 6.000</label>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<div class="col-md-8 col-sm-8">
																				<label class="t-desc">PPN 10%</label>
																			</div>
																			<div class="col-md-4 col-sm-4">
																				<label class="t-desc">Rp 30.000</label>
																			</div>
																		</div>

																		<div class="row mt-3">
																			<div class="col-md-8 col-sm-8">
																				<label class="t-desc" style="font-size: 14px;">Total Amount</label>
																			</div>
																			<div class="col-md-4 col-sm-4">
																				<label class="t-desc" style="font-size: 14px; color: #044795;">Rp 336.000</label>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div><!-- end accordion -->
												</div>
												<a class="btn btn-secondary w-100 mt-5" href="<?= site_url('payment') ?>" id="btn-mthd" disabled>Select Payment Method</a>
												<button type="button" class="btn btn-outline-light waves-effect mt-4 w-100" style="border: none !important">Cancel Order</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script>
	function addCont() {

		$('#list-cont').append('<div class="row" style="margin-top:20px;">\
					<div class="col-md-4 col-sm-4">\
						<select class="form-control">\
							<option>Cont. type</option>\
						</select>\
					</div>\
					<div class="col-md-3 col-sm-3">\
						<select class="form-select">\
							<option>Choose Size</option>\
						</select>\
					</div>\
					<div class="col-md-4 col-sm-4">\
						<input type="text" placeholder="Cont. Number" class="form-control" />\
					</div>\
					<div class="col-md-1 col-sm-1">\
					<svg style="margin-top:8px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">\
<path d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20V20ZM7 11H17V13H7V11Z" fill="#8C8CA2"/>\
</svg>\
					</div>\
				</div>');

	}

	function nextSteps() {
		$("#done").show();
	}

	function selectDepo(id) {
		if (id != "") {
			$('#accordionExample1').fadeIn(300);
			$('#accordionExample').fadeIn(300);
			//$('#basic-pills-wizard').fadeIn(300);
		} else {
			$('#accordionExample1').fadeOut(300);
			$('#accordionExample').fadeOut(300);
			//$('#basic-pills-wizard').fadeOut(300);
		}
	}

	function changeCont(obj) {
		if (obj.value == "default") {
			$(obj).parent().find("label").text("")
			$(obj).parent().find("select").css('width', '100%')
		} else {
			let split = obj.value.split("-");
			$(obj).parent().find("label").text(split[1].trim())
			$(obj).parent().find("select").css('width', '95px')
		}
	}

	function counting(act, obj) {
		let vals = parseInt($(obj).parent().find("label").text())

		if (act == "min") {
			if (vals == 0) {
				$(obj).parent().find("label").text("0")
			} else {
				$(obj).parent().find("label").text((vals - 1));
			}
		} else {

			$(obj).parent().find("label").text((vals + 1));
		}
	}

	$(document).ready(function() {
		$('#basic-pills-wizard').bootstrapWizard();
	});
</script>

<!--  Extra Large modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myExtraLargeModalLabel">On Behalf Customer</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row mb-2">
					<div class="col-md-10 col-sm-10">
						<input type="text" class="form-control" />
					</div>
					<div class="col-md-2 col-sm-2">
						<a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl2">
							<svg width="97" height="32" viewBox="0 0 97 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 4C0 1.79086 1.79086 0 4 0H93C95.2091 0 97 1.79086 97 4V28C97 30.2091 95.2091 32 93 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
								<path d="M32.3335 10V12.6667C32.3335 12.8435 32.4037 13.013 32.5288 13.1381C32.6538 13.2631 32.8234 13.3333 33.0002 13.3333H35.6668" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M34.3335 22H27.6668C27.3132 22 26.9741 21.8595 26.724 21.6095C26.474 21.3594 26.3335 21.0203 26.3335 20.6667V11.3333C26.3335 10.9797 26.474 10.6406 26.724 10.3905C26.9741 10.1405 27.3132 10 27.6668 10H32.3335L35.6668 13.3333V20.6667C35.6668 21.0203 35.5264 21.3594 35.2763 21.6095C35.0263 21.8595 34.6871 22 34.3335 22Z" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M31 15.3333V19.3333" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M29 17.3333H33" stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M49.304 20H47.3268L50.3395 11.2727H52.7174L55.7259 20H53.7486L51.5626 13.267H51.4944L49.304 20ZM49.1805 16.5696H53.8509V18.0099H49.1805V16.5696ZM60.1101 20H57.0163V11.2727H60.1357C61.0135 11.2727 61.7692 11.4474 62.4027 11.7969C63.0362 12.1435 63.5234 12.642 63.8643 13.2926C64.2081 13.9432 64.38 14.7216 64.38 15.6278C64.38 16.5369 64.2081 17.3182 63.8643 17.9716C63.5234 18.625 63.0334 19.1264 62.3942 19.4759C61.7578 19.8253 60.9964 20 60.1101 20ZM58.8615 18.419H60.0334C60.5788 18.419 61.0376 18.3224 61.4098 18.1293C61.7848 17.9332 62.0661 17.6307 62.2536 17.2216C62.4439 16.8097 62.5391 16.2784 62.5391 15.6278C62.5391 14.983 62.4439 14.456 62.2536 14.0469C62.0661 13.6378 61.7862 13.3366 61.4141 13.1435C61.0419 12.9503 60.5831 12.8537 60.0376 12.8537H58.8615V18.419ZM69.0806 20H65.9868V11.2727H69.1061C69.984 11.2727 70.7396 11.4474 71.3732 11.7969C72.0067 12.1435 72.4939 12.642 72.8348 13.2926C73.1786 13.9432 73.3504 14.7216 73.3504 15.6278C73.3504 16.5369 73.1786 17.3182 72.8348 17.9716C72.4939 18.625 72.0038 19.1264 71.3646 19.4759C70.7283 19.8253 69.9669 20 69.0806 20ZM67.832 18.419H69.0038C69.5493 18.419 70.0081 18.3224 70.3803 18.1293C70.7553 17.9332 71.0365 17.6307 71.224 17.2216C71.4144 16.8097 71.5095 16.2784 71.5095 15.6278C71.5095 14.983 71.4144 14.456 71.224 14.0469C71.0365 13.6378 70.7567 13.3366 70.3845 13.1435C70.0124 12.9503 69.5536 12.8537 69.0081 12.8537H67.832V18.419Z" fill="#4A4A68" />
							</svg>
						</a>

					</div>

				</div>
				<table style="width:100%; font-size:12px;">
					<tr>
						<th>Onbehalf NPWP Number</th>
						<th>Onbehalf NPWP Name</th>
						<th>Onbehalf NPWP Address</th>
						<th>Attachment</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>90.000.000.0-000.000</td>
						<td>Rizki Fatimah</td>
						<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
							RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
						<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
						<td>
							<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
							<div class="mt-2">
								<span>
									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
										<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
								<span>

									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
										<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
									</svg>

								</span>
							</div>
						</td>
					</tr>
					<tr>
						<td>90.000.000.0-000.000</td>
						<td>Rizki Fatimah</td>
						<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
							RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
						<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
						<td>
							<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
							<div class="mt-2">
								<span>
									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
										<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
								<span>

									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
										<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
									</svg>

								</span>
							</div>
						</td>
					</tr>
					<tr>
						<td>90.000.000.0-000.000</td>
						<td>Rizki Fatimah</td>
						<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
							RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
						<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
						<td>
							<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
							<div class="mt-2">
								<span>
									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
										<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
								<span>

									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
										<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
									</svg>

								</span>
							</div>
						</td>
					</tr>
					<tr>
						<td>90.000.000.0-000.000</td>
						<td>Rizki Fatimah</td>
						<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
							RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
						<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
						<td>
							<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
							<div class="mt-2">
								<span>
									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
										<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
								<span>

									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
										<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
									</svg>

								</span>
							</div>
						</td>
					</tr>
					<tr>
						<td>90.000.000.0-000.000</td>
						<td>Rizki Fatimah</td>
						<td style="width:25%; padding-right:5%;">JL. Tambak Sari No. 5 RT.02
							RW.09, Kel. Tambak Sari, Kec. Simokerto, Kota Surabaya, Provinsi Jawa Timur (16402)</td>
						<td style="margin-left:5px;"><a href="#">NPWP Rizky.pdf</a></td>
						<td>
							<button type="button" class="btn btn-info waves-effect waves-light" style="font-size: 10px;">Choose NPWP</button>
							<div class="mt-2">
								<span>
									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 4C0 1.79086 1.79086 0 4 0H32C34.2091 0 36 1.79086 36 4V28C36 30.2091 34.2091 32 32 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#ECF1F4" />
										<path d="M15.9998 12.6667H13.9998C13.6462 12.6667 13.3071 12.8072 13.057 13.0573C12.807 13.3073 12.6665 13.6465 12.6665 14.0001V20.0001C12.6665 20.3537 12.807 20.6928 13.057 20.9429C13.3071 21.1929 13.6462 21.3334 13.9998 21.3334H19.9998C20.3535 21.3334 20.6926 21.1929 20.9426 20.9429C21.1927 20.6928 21.3332 20.3537 21.3332 20.0001V18.0001" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 18.0001H18L23.6667 12.3334C23.9319 12.0682 24.0809 11.7085 24.0809 11.3334C24.0809 10.9583 23.9319 10.5986 23.6667 10.3334C23.4014 10.0682 23.0417 9.91919 22.6667 9.91919C22.2916 9.91919 21.9319 10.0682 21.6667 10.3334L16 16.0001V18.0001Z" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M20.6665 11.3333L22.6665 13.3333" stroke="#8C8CA2" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
								<span>

									<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" fill="white" />
										<path d="M21.3335 11.9999H24.6668V13.3333H23.3335V21.9999C23.3335 22.1767 23.2633 22.3463 23.1382 22.4713C23.0132 22.5963 22.8436 22.6666 22.6668 22.6666H13.3335C13.1567 22.6666 12.9871 22.5963 12.8621 22.4713C12.7371 22.3463 12.6668 22.1767 12.6668 21.9999V13.3333H11.3335V11.9999H14.6668V9.99992C14.6668 9.82311 14.7371 9.65354 14.8621 9.52851C14.9871 9.40349 15.1567 9.33325 15.3335 9.33325H20.6668C20.8436 9.33325 21.0132 9.40349 21.1382 9.52851C21.2633 9.65354 21.3335 9.82311 21.3335 9.99992V11.9999ZM22.0002 13.3333H14.0002V21.3333H22.0002V13.3333ZM18.9428 17.3333L20.1215 18.5119L19.1788 19.4546L18.0002 18.2759L16.8215 19.4546L15.8788 18.5119L17.0575 17.3333L15.8788 16.1546L16.8215 15.2119L18.0002 16.3906L19.1788 15.2119L20.1215 16.1546L18.9428 17.3333ZM16.0002 10.6666V11.9999H20.0002V10.6666H16.0002Z" fill="#8C8CA2" />
										<rect x="0.5" y="0.5" width="35" height="31" rx="3.5" stroke="#ECF1F4" />
									</svg>

								</span>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--  Extra Large modal example -->
<div class="modal fade bs-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myExtraLargeModalLabel2">Add On Behalf Customer</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row mb-3">
					<div class="col-md-12">
						<input type="text" class="form-control" placeholder="Onbehalf of Customer Name" />
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-6">
						<input type="text" class="form-control" placeholder="Onbehalf of Customer Number" />
					</div>
					<div class="col-md-6">
						<input type="file" class="form-control" placeholder="Upload Onbhealf Of Customer" />
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-12">
						<label>Onbehalf NPWP Address</label>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-6">
						<select class="form-select">
							<option>Province</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-select">
							<option>City</option>
						</select>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-6">
						<select class="form-select">
							<option>District</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="form-select">
							<option>Area</option>
						</select>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-12">
						<input type="text" class="form-control" placeholder="Address" />
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-12">
						<input type="text" class="form-control" placeholder="Postal Code" />
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="wrapper-buttons-dialog wrapper-w-loader">
						<button class="btn-modal-dialog btn-dialog-cancel" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" style="width: 50%">Discard</button>
						<button class="btn-modal-dialog btn-dialog-submit" style="width: 50%"> Save </button>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-example-modal-center-booking" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="display: flex; -webkit-box-align: center; -ms-flex-align: center; align-items: center; min-height: calc(100% - 1rem);">
		<div class="modal-content">
			<div class="modal-header">
				<div>
					<span>
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.80078 8V7C4.2485 7 3.80078 7.44772 3.80078 8H4.80078ZM27.2008 8H28.2008C28.2008 7.44772 27.7531 7 27.2008 7V8ZM27.2008 24V25C27.7531 25 28.2008 24.5523 28.2008 24H27.2008ZM4.80078 24H3.80078C3.80078 24.5523 4.2485 25 4.80078 25V24ZM4.80078 9H27.2008V7H4.80078V9ZM26.2008 8V24H28.2008V8H26.2008ZM27.2008 23H4.80078V25H27.2008V23ZM5.80078 24V8H3.80078V24H5.80078Z" fill="#8C8CA2" />
							<path d="M8.80664 13.334L8.80664 18.6673" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M13.5742 13.333L13.5742 18.6663" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M18.3438 13.333L18.3437 18.6663" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M23.1133 13.334L23.1133 18.6673" stroke="#8C8CA2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<label class="modal-title" style="font-weight: 700;font-size: 16px;color: #4A4A68 !important;">Container List</label></span>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" align="center">
				<div class="row">
					<div class="col-md-4 col-sm-4" align="left">
						<label>Cnt. Type</label>
					</div>
					<div class="col-md-3 col-sm-3" align="left">
						<label>Cnt. Size</label>
					</div>
					<div class="col-md-4 col-sm-4" align="left">
						<label>Container Number</label>
					</div>
					<div class="col-md-1 col-sm-1" align="left">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<select class="form-select">
							<option>Choose type</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-3">
						<select class="form-select">
							<option>Choose Size</option>
						</select>
					</div>
					<div class="col-md-4 col-sm-4">
						<input type="text" placeholder="Cont. Number" class="form-control" />
					</div>
					<div class="col-md-1 col-sm-1">
						<a onclick="addCont();"><svg style="margin-top:8px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20Z" fill="#497DF5" />
							</svg>
						</a>
					</div>
				</div>
				<div id="list-cont">
					<!--<div class="row">
						<div class="col-md-6 col-sm-6">
							<select class="form-control">
								<option>Cont. type</option>
							</select>
						</div>
						<div class="col-md-5 col-sm-5">
							<input type="text" placeholder="Cont. Number" class="form-control" />
						</div>
						<div class="col-md-1 col-sm-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20Z" fill="#497DF5"/>
							</svg>
						</div>
					</div>-->
				</div>

				<div style="text-align: end;margin-top:20px;">
					<button style="width:25%;" type="button" class="btn btn-primary waves-effect waves-light">Save</button>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->