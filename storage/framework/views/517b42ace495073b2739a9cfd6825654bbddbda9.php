<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<form id="demo-form" data-parsley-validate class="form-horizontal" method="post" enctype="multipart/form-data">

<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3><?php echo e($title); ?></h3>
		</div>
		<div class="title_right">
	        <div class=" pull-right">
	          <div class="input-group">
	          	<button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
	            <a class="btn btn-info" href="/admin/product">Trở về</a>
	          </div>
	        </div>
	      </div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
	          <div class="x_content">
					<?php echo e(csrf_field()); ?>

					<input  type ="hidden" value="<?php echo e(time()); ?>" name="code_id">
					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Hiển thị</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="status" class="btn-group" data-toggle="buttons">
		                        <label><input type="radio" class="flat" name="status" value="0" checked="" /> Ẩn </label>
								<label><input type="radio" class="flat" name="status"  value="1" /> Hiện </label>
							</div>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Sản phẩm mới</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="is_new" class="btn-group" data-toggle="buttons">
								<input type="checkbox" name="is_new" value="1" class="flat"
								<?php if(isset($params['is_new']) && $params['is_new'] == 1): ?> checked <?php endif; ?> />
							</div>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Sản phẩm bán chạy</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="editProduct" class="btn-group" data-toggle="buttons">
								<input type="checkbox" name="is_best_sell" value="1" class="flat"
								<?php if(isset($params['is_best_sell']) && $params['is_best_sell'] == 1): ?> checked <?php endif; ?> />
							</div>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Size</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="btn-group" data-toggle="buttons">
								<label><input type="checkbox" name="size_xs" value="1" class="flat"
								<?php if(isset($params['size_xs']) && $params['size_xs'] == 1): ?> checked <?php endif; ?> /> XS
								</label> <br>
								<label><input type="checkbox" name="size_s" value="1" class="flat"
								<?php if(isset($params['size_s']) && $params['size_s'] == 1): ?> checked <?php endif; ?> /> S
								</label><br>
								<label><input type="checkbox" name="size_m" value="1" class="flat"
								<?php if(isset($params['size_m']) && $params['size_m'] == 1): ?> checked <?php endif; ?> /> M
								</label><br>
								<label><input type="checkbox" name="size_l" value="1" class="flat"
								<?php if(isset($params['size_l']) && $params['size_l'] == 1): ?> checked <?php endif; ?> /> L
								</label><br>
								<label><input type="checkbox" name="size_xl" value="1" class="flat"
								<?php if(isset($params['size_xl']) && $params['size_xl'] == 1): ?> checked <?php endif; ?> /> XL
								</label>
							</div>
						</div>
					</div>


					<div class="item form-group <?php if(isset($errors['title'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sản phẩm <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset($params['title']) ? $params['title'] : ''); ?>" >
						</div>
						<?php if(isset($errors['title'])): ?> <div class="alert"><?php echo e($errors['title']); ?></div> <?php endif; ?>
					</div>
					<div class="item form-group <?php if(isset($errors['seo_link'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Seo Link <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" id="seo_link" class="form-control col-md-7 col-xs-12" name="seo_link" value="<?php echo e(isset($params['seo_link']) ? $params['seo_link'] : ''); ?>" >
						</div>
						<?php if(isset($errors['seo_link'])): ?> <div class="alert"><?php echo e($errors['seo_link']); ?></div> <?php endif; ?>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Loại sản phẩm <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" name="id_cate">
								<?php if(isset($listCategory)): ?>
									<?php foreach($listCategory as $key => $value): ?>
										<?php $selected = ""; if(isset($params['id_cate']) && $key == $params['id_cate']) $selected = "selected"; ?>
											<option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
									<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Thương hiệu <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" name="brand">
								<?php if(isset($listBrand)): ?>
									<?php foreach($listBrand as $key => $value): ?>
										<?php $selected = ""; if(isset($params['brand']) && $key == $params['brand']) $selected = "selected"; ?>
											<option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
									<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>
					</div>


					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Thể loại <span class="required">*</span></label>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" name="type">
								<?php if(isset($listType)): ?>
									<?php foreach($listType as $key => $value): ?>
										<?php $selected = ""; if(isset($params['type']) && $key == $params['type']) $selected = "selected"; ?>
											<option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
									<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả ngắn <span class="required">*</span></label>
						<div class="col-md-10 col-sm-12 col-xs-12">
                  			<textarea  name="short_desc" id="short_desc" class="form-control" rows="5">
                  				<?php if(isset($params['short_desc'])): ?>
                  					<?php echo e($params['short_desc']); ?>

                  				<?php endif; ?>
                  			</textarea>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
						<div class="col-md-10 col-sm-12 col-xs-12">
                  			<textarea  name="desc" id="desc" class="ckedit">
                  				<?php if(isset($params['desc'])): ?>
                  					<?php echo e($params['desc']); ?>

                  				<?php endif; ?>
                  			</textarea>
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Loại giá</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div id="type_price" class="btn-group" data-toggle="buttons">
		                        <label><input type="radio" class="flat" name="type_price" value="1" checked="" /> Giá bình thường </label>
								<label><input type="radio" class="flat" name="type_price"  value="2" /> Giá liên hệ </label>
								<label><input type="radio" class="flat" name="type_price"  value="3" /> Hết hàng </label>
							</div>
						</div>
					</div>

					<div class="item form-group <?php if(isset($errors['price'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Giá <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="number" id="price" class="form-control col-md-7 col-xs-12" name="price" value="<?php echo e(isset($params['price']) ? $params['price'] : ''); ?>" >
						</div>
						<?php if(isset($errors['price'])): ?> <div class="alert"><?php echo e($errors['price']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Giá giảm</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="number" id="discount" class="form-control col-md-7 col-xs-12" name="discount" value="<?php echo e(isset($params['discount']) ? $params['discount'] : ''); ?>" >
						</div>
					</div>

					<div class="item form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Phần trăm giảm <span class="required">*</span>
						</label>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="number" id="percent" class="form-control col-md-7 col-xs-12" name="percent" value="<?php echo e(isset($params['percent']) ? $params['percent'] : ''); ?>" >
						</div>
					</div>

					<div class="item form-group <?php if(isset($errors['numbers'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Số Lượng <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                       <input type="number" id="numbers" name="numbers" class="form-control" value="<?php echo e(isset($params['numbers']) ? $params['numbers'] : ''); ?>" >
                      	</div>
                      	<?php if(isset($errors['numbers'])): ?> <div class="alert"><?php echo e($errors['numbers']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group <?php if(isset($errors['colors'])): ?> bad <?php endif; ?>">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Màu sắc<span class="required">*</span> </label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 ">
	                    <?php 
							$colors        = $listColors;
							$chooseColors = (!empty($params['colors'])) ? $params['colors'] : array();
							$count = 0;
	                     ?>
	                    <?php foreach($colors as $key => $item): ?>
	                    	<?php  $checked = in_array($key,$chooseColors) ? "checked" : ""; $count++;  ?>
		                    <input type="checkbox" name="colors[]" value="<?php echo e($key); ?>" class="flat" <?= $checked; ?> />
		                    <span style="background: <?php echo e($item['code']); ?>; vertical-align:bottom; width: 20px; height: 20px; display: inline-block; margin-right: 5px;border-radius: 50%"></span>
		                <?php endforeach; ?>
                      	</div>
                      	<?php if(isset($errors['colors'])): ?> <div class="alert"><?php echo e($errors['colors']); ?></div> <?php endif; ?>
					</div>

					<div class="item form-group ">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Ngày hết hạn <span class="required">*</span>
						</label>
	                    <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
	                        <input type="text" class="form-control has-feedback-left date_picker" id="limit_at" aria-describedby="inputSuccess2Status" name="limit_at" value="<?php echo e(isset( $params['limit_at']) ?  $params['limit_at'] : ''); ?>">
	                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      	</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">* 227x274</span>
						</label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg_list">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">* 1920x320</span>
						</label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg_detail">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 1 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg1">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 2</label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg2">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 3 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg3">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 4 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg4">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>

					<div class="item form-group image_upload">
						<label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 5 </label>
						 <div class="col-md-4 col-sm-4 col-xs-12 ">
							<div class="imageupload">
				                <div class="file-tab">
				                    <label class="btn btn-dark btn-file">
				                        <span>Browse</span>
				                        <!-- The file is stored here. -->
				                        <input type="file" name="pimg5">
				                    </label>
				                    <button type="button" class="btn btn-danger">Remove</button>
					            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>  <?php if(isset($errors['finish'])): ?> popupNotice("<?php echo e($errors['finish']); ?>");  <?php endif; ?>  </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>