<?php $__env->startSection('title'); ?> <?php echo e($view['title']); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
  <link href="/public/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <?php /* CSS img upload  */ ?>
  <link href="/public/js/imageupload/dist/css/bootstrap-imageupload.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightcontent'); ?>
<?php /* set default url link */ ?>
<?php  $url = "/public/upload/images/"   ?>

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($view['title']); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/product">Trở về</a>
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
                <form id="demo-form" data-parsley-validate class="form-horizontal" method="post" action="" enctype="multipart/form-data" autocomplete="on">
                <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e(isset( $view['product']['id']) ?  $view['product']['id'] : ''); ?>"/>
                    <input type="hidden" id="img_list_url" name="img_list_url" value="<?php echo e(isset( $view['product']['img_list']) ?  $view['product']['img_list'] : ''); ?>"/>
                    <input type="hidden" id="img_detail_url" name="img_detail_url" value="<?php echo e(isset( $view['product']['img_detail']) ?  $view['product']['img_detail'] : ''); ?>"/>
                    <input type="hidden" id="img1_url" name="img1_url" value="<?php echo e(isset( $view['product']['img1']) ?  $view['product']['img1'] : ''); ?>"/>
                    <input type="hidden" id="img2_url" name="img2_url" value="<?php echo e(isset( $view['product']['img2']) ?  $view['product']['img2'] : ''); ?>"/>
                    <input type="hidden" id="img3_url" name="img3_url" value="<?php echo e(isset( $view['product']['img3']) ?  $view['product']['img3'] : ''); ?>"/>
                    <input type="hidden" id="img4_url" name="img4_url" value="<?php echo e(isset( $view['product']['img4']) ?  $view['product']['img4'] : ''); ?>"/>
                    <input type="hidden" id="img5_url" name="img5_url" value="<?php echo e(isset( $view['product']['img5']) ?  $view['product']['img5'] : ''); ?>"/>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2b col-xs-12">Hiển thị</label>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                            <div id="status" class="btn-group" data-toggle="buttons">
                                <label><input type="radio" class="flat" name="status" value="0" <?php if(isset($view['product']['status']) && $view['product']['status'] == 0): ?> checked <?php endif; ?> /> Ẩn </label>&nbsp;
                              <label><input type="radio" class="flat" name="status"  value="1" <?php if(isset($view['product']['status']) && $view['product']['status'] == 1): ?> checked <?php endif; ?> /> Hiện</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Tên sản phẩm <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="title" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo e(isset( $view['product']['title']) ?  $view['product']['title'] : ''); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại sản phảm <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="id_cate">
                                <?php if(isset($view['list_category'])): ?>
                                    <?php foreach($view['list_category'] as $key => $value): ?>
                                        <?php $selected = ""; if(isset( $view['product']['id_cate']) && $key ==  $view['product']['id_cate']) $selected = "selected"; ?>
                                            <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Loại trọng lượng <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <select class="form-control" name="type">
                                <?php if(isset($view['list_type'])): ?>
                                    <?php foreach($view['list_type'] as $key => $value): ?>
                                        <?php $selected = ""; if(isset( $view['product']['type']) && $key ==  $view['product']['type']) $selected = "selected"; ?>
                                            <option value="<?php echo e($key); ?>" <?php echo e($selected); ?>><?php echo e($value); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Mô tả <span class="required">*</span></label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <textarea  name="desc" id="desc">
                                <?php if(isset( $view['product']['desc'])): ?>
                                    <?php echo e($view['product']['desc']); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Giá <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="number" id="price" class="form-control col-md-7 col-xs-12" name="price" value="<?php echo e(isset( $view['product']['price']) ?  $view['product']['price'] : ''); ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Số Lượng <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                           <input type="number" id="numbers" name="numbers" class="form-control" value="<?php echo e(isset( $view['product']['numbers']) ?  $view['product']['numbers'] : ''); ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Màu sắc<span class="required">*</span> </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <?php 
                            $colors        = $view['list_colors'];
                            $choose_colors = (!empty($view['product']['colors'])) ? explode("|",$view['product']['colors']) : array();
                         ?>
                        <?php foreach($colors as $key => $item): ?>
                            <?php  $checked = in_array($key,$choose_colors) ? "checked" : "";  ?>
                            <input type="checkbox" name="colors[]" value="<?php echo e($key); ?>" class="flat" <?= $checked; ?> />
                            <span style="background: <?php echo e($item['code']); ?>; vertical-align:bottom; width: 20px; height: 20px; display: inline-block; margin-right: 5px;border-radius: 50%"></span>
                        <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Ngày hết hạn <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="limit_at" aria-describedby="inputSuccess2Status" name="limit_at" value="<?php echo e(isset( $view['product']['limit_at']) ?  $view['product']['limit_at'] : ''); ?>">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang list <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img_list']) && !empty($view['product']['img_list'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img_list']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img_list">
                                    </label>
                                    <?php if(isset($view['product']['img_list']) && !empty($view['product']['img_list'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img_list_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img_list_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh trang detail <span class="required">*</span></label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img_detail']) && !empty($view['product']['img_detail'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img_detail']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img_detail">
                                    </label>
                                     <?php if(isset($view['product']['img_detail']) && !empty($view['product']['img_detail'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img_detail_url">Remove</button>
                                     <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img_detail_url" >Remove</button>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 1 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img1']) && !empty($view['product']['img1'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img1']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img1">
                                    </label>
                                    <?php if(isset($view['product']['img1']) && !empty($view['product']['img1'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img1_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img1_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 2 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img2']) && !empty($view['product']['img2'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img2']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img2">
                                    </label>
                                    <?php if(isset($view['product']['img2']) && !empty($view['product']['img2'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img2_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img2_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 3 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img3']) && !empty($view['product']['img3'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img3']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img3">
                                    </label>
                                    <?php if(isset($view['product']['img3']) && !empty($view['product']['img3'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img3_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img3_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 4 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img4']) && !empty($view['product']['img4'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img4']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img4">
                                    </label>
                                    <?php if(isset($view['product']['img4']) && !empty($view['product']['img4'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img4_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img4_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Hình ảnh item 5 </label>
                         <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="imageupload">
                                <div class="file-tab">
                                    <?php if(isset($view['product']['img5']) && !empty($view['product']['img5'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$view['product']['img5']); ?>" />
                                    <?php endif; ?>
                                    <label class="btn btn-dark btn-file">
                                        <span>Browse</span>
                                        <!-- The file is stored here. -->
                                        <input type="file" name="img5">
                                    </label>
                                    <?php if(isset($view['product']['img5']) && !empty($view['product']['img5'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img5_url">Remove</button>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="img5_url">Remove</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div><label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                        <span class="help-block">
                            <strong>
                                <?php echo e($view['errors']); ?>

                            </strong>
                        </span>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                        <button type ="reset" class="btn btn-primary">Reset</button>
                        <button type ="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                        <input  type ="hidden" value="<?php echo e(time()); ?>" name="code_id">
                        </div>
                    </div>
                    </form>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="/public/js/imageupload/dist/js/bootstrap-imageupload.js"></script>
<script src="/public/js/ckeditor/ckeditor.js"></script>
<script src="/public/js/ckeditor/ckfinder/ckfinder.js"></script>
<?php /* bootstrap-daterangepicker */ ?>
<script src="/public/js/moment/min/moment.min.js"></script>
<script src="/public/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- validator -->
<script type="text/javascript">
var editor = CKEDITOR.replace( 'desc', {
language: 'vi',
toolbarGroups: [
        {"name":"basicstyles","groups":["basicstyles"]},
        {"name":"links","groups":["links"]},
        {"name":"paragraph","groups":["list","blocks"]},
        {"name":"document","groups":["mode"]},
        {"name":"insert","groups":["insert"]},
        {"name":"styles","groups":["styles"]},
        {"name":"about","groups":["about"]}
    ],
});

CKFinder.setupCKEditor( editor,"/public/js/ckeditor/ckfinder/");

$('#limit_at').daterangepicker({
    locale: {format: 'YYYY-MM-DD'},
    singleDatePicker: true, singleClasses: "picker_1",
});

var $imageupload = $('.imageupload');
$imageupload.imageupload();

$(".btn-danger").click(function(event) {
    id = $(this).attr('rel');
    $("#"+id).val("");
});


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>