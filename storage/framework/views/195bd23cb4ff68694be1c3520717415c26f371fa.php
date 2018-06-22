<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('rightcontent'); ?>
<?php  $url = URL_IMG."home/"  ?>
<form id="demo-form" class="form-horizontal" enctype="multipart/form-data" method="post" action="">
<?php echo e(csrf_field()); ?>

<div>
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                    <a class="btn btn-primary" href="/admin/">Trở về</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
    <input type="hidden" id="himg1_url" name="himg1_url" value="<?php echo e(isset($home['himg1']) ? $home['himg1'] : ''); ?>" />
    <input type="hidden" id="himg2_url" name="himg2_url" value="<?php echo e(isset($home['himg2']) ? $home['himg2'] : ''); ?>" />
    <input type="hidden" id="himg3_url" name="himg3_url" value="<?php echo e(isset($home['himg3']) ? $home['himg3'] : ''); ?>" />
    <input type="hidden" id="himg4_url" name="himg4_url" value="<?php echo e(isset($home['himg4']) ? $home['himg4'] : ''); ?>" />
    <input type="hidden" id="himg5_url" name="himg5_url" value="<?php echo e(isset($home['himg5']) ? $home['himg5'] : ''); ?>" />
    <input type="hidden" id="himg6_url" name="himg6_url" value="<?php echo e(isset($home['himg6']) ? $home['himg6'] : ''); ?>" />
    <input type="hidden" id="himg7_url" name="himg7_url" value="<?php echo e(isset($home['himg7']) ? $home['himg7'] : ''); ?>" />
    <input type="hidden" id="himg8_url" name="himg8_url" value="<?php echo e(isset($home['himg8']) ? $home['himg8'] : ''); ?>" />
    <input type="hidden" id="himg9_url" name="himg9_url" value="<?php echo e(isset($home['himg9']) ? $home['himg9'] : ''); ?>" />
    <input type="hidden" id="himg10_url" name="himg10_url" value="<?php echo e(isset($home['himg10']) ? $home['himg10'] : ''); ?>" />
    <input type="hidden" id="himg11_url" name="himg11_url" value="<?php echo e(isset($home['himg11']) ? $home['himg11'] : ''); ?>" />
    <input type="hidden" id="himg12_url" name="himg12_url" value="<?php echo e(isset($home['himg12']) ? $home['himg12'] : ''); ?>" />
    <input type="hidden" id="himg13_url" name="himg13_url" value="<?php echo e(isset($home['himg13']) ? $home['himg13'] : ''); ?>" />
    <input type="hidden" id="himg14_url" name="himg14_url" value="<?php echo e(isset($home['himg14']) ? $home['himg14'] : ''); ?>" />
    <input type="hidden" id="himg15_url" name="himg15_url" value="<?php echo e(isset($home['himg15']) ? $home['himg15'] : ''); ?>" />
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>4 Banner <small>phía dưới slide show</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title1" id="title1" class="ckedit" tool='basic'> <?php if(isset($home['title1'])): ?> <?php echo e($home['title1']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link1">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link1" class="form-control col-md-7 col-xs-12" name="link1" value="<?php echo e(isset($home['link1']) ?  $home['link1'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg1']) && !empty($home['himg1'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg1']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg1">
                                        </label>
                                        <?php if(isset($home['himg1']) && !empty($home['himg1'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg1_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg1_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title2" id="title2" class="ckedit" tool='basic'> <?php if(isset($home['title2'])): ?> <?php echo e($home['title2']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link2">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link2" class="form-control col-md-7 col-xs-12" name="link2" value="<?php echo e(isset($home['link2']) ?  $home['link2'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg2']) && !empty($home['himg2'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg2']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg2">
                                        </label>
                                        <?php if(isset($home['himg2']) && !empty($home['himg2'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg2_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg2_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title3" id="title3" class="ckedit" tool='basic'> <?php if(isset($home['title3'])): ?> <?php echo e($home['title3']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link3">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link3" class="form-control col-md-7 col-xs-12" name="link3" value="<?php echo e(isset($home['link3']) ?  $home['link3'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg3']) && !empty($home['himg3'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg3']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg3">
                                        </label>
                                        <?php if(isset($home['himg3']) && !empty($home['himg3'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg3_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg3_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 4</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title4" id="title4" class="ckedit" tool='basic'> <?php if(isset($home['title4'])): ?> <?php echo e($home['title4']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link4">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link4" class="form-control col-md-7 col-xs-12" name="link4" value="<?php echo e(isset($home['link4']) ?  $home['link4'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 4 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg4']) && !empty($home['himg4'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg4']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg4">
                                        </label>
                                        <?php if(isset($home['himg4']) && !empty($home['himg4'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg4_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg4_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>5 Banner <small> nằm giữa (từ trái qua phải)</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title8" id="title8" class="ckedit" tool='basic'> <?php if(isset($home['title8'])): ?> <?php echo e($home['title8']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link8">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link8" class="form-control col-md-7 col-xs-12" name="link8" value="<?php echo e(isset($home['link8']) ?  $home['link8'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg8']) && !empty($home['himg8'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg8']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg8">
                                        </label>
                                        <?php if(isset($home['himg8']) && !empty($home['himg8'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg8_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg8_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title9" id="title9" class="ckedit" tool='basic'> <?php if(isset($home['title9'])): ?> <?php echo e($home['title9']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link9">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link9" class="form-control col-md-7 col-xs-12" name="link9" value="<?php echo e(isset($home['link9']) ?  $home['link9'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg9']) && !empty($home['himg9'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg9']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg9">
                                        </label>
                                        <?php if(isset($home['himg9']) && !empty($home['himg9'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg9_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg9_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title10" id="title10" class="ckedit" tool='basic'> <?php if(isset($home['title10'])): ?> <?php echo e($home['title10']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link10">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link10" class="form-control col-md-7 col-xs-12" name="link10" value="<?php echo e(isset($home['link10']) ?  $home['link10'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg10']) && !empty($home['himg10'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg10']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg10">
                                        </label>
                                        <?php if(isset($home['himg10']) && !empty($home['himg10'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg10_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg10_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 4</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title11" id="title11" class="ckedit" tool='basic'> <?php if(isset($home['title11'])): ?> <?php echo e($home['title11']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link11">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link11" class="form-control col-md-7 col-xs-12" name="link11" value="<?php echo e(isset($home['link11']) ?  $home['link11'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 4 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg11']) && !empty($home['himg11'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg11']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg11">
                                        </label>
                                        <?php if(isset($home['himg11']) && !empty($home['himg11'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg11_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg11_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 5</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title12" id="title12" class="ckedit" tool='basic'> <?php if(isset($home['title12'])): ?> <?php echo e($home['title12']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link12">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link12" class="form-control col-md-7 col-xs-12" name="link12" value="<?php echo e(isset($home['link12']) ?  $home['link12'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 5 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg12']) && !empty($home['himg12'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg12']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg12">
                                        </label>
                                        <?php if(isset($home['himg12']) && !empty($home['himg12'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg12_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg12_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>3 Banner <small> góc bìa</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title5" id="title5" class="ckedit" tool='basic'> <?php if(isset($home['title5'])): ?> <?php echo e($home['title5']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link5">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link5" class="form-control col-md-7 col-xs-12" name="link5" value="<?php echo e(isset($home['link5']) ?  $home['link5'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg5']) && !empty($home['himg5'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg5']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg5">
                                        </label>
                                        <?php if(isset($home['himg5']) && !empty($home['himg5'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg5_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg5_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title6" id="title6" class="ckedit" tool='basic'> <?php if(isset($home['title6'])): ?> <?php echo e($home['title6']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link6">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link6" class="form-control col-md-7 col-xs-12" name="link6" value="<?php echo e(isset($home['link6']) ?  $home['link6'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg6']) && !empty($home['himg6'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg6']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg6">
                                        </label>
                                        <?php if(isset($home['himg6']) && !empty($home['himg6'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg6_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg6_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title7" id="title7" class="ckedit" tool='basic'> <?php if(isset($home['title7'])): ?> <?php echo e($home['title7']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link7">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link7" class="form-control col-md-7 col-xs-12" name="link7" value="<?php echo e(isset($home['link7']) ?  $home['link7'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg7']) && !empty($home['himg7'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg7']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg7">
                                        </label>
                                        <?php if(isset($home['himg7']) && !empty($home['himg7'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg7_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg7_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>3 Banner <small> góc dưới</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-horizontal form-label-left input_mask">
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 1</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title13" id="title13" class="ckedit" tool='basic'> <?php if(isset($home['title13'])): ?> <?php echo e($home['title13']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link13">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link13" class="form-control col-md-7 col-xs-12" name="link13" value="<?php echo e(isset($home['link13']) ?  $home['link13'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 1 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg13']) && !empty($home['himg13'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg13']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg13">
                                        </label>
                                        <?php if(isset($home['himg13']) && !empty($home['himg13'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg13_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg13_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title14" id="title14" class="ckedit" tool='basic'> <?php if(isset($home['title14'])): ?> <?php echo e($home['title14']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link14">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link14" class="form-control col-md-7 col-xs-12" name="link14" value="<?php echo e(isset($home['link14']) ?  $home['link14'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 2</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg14']) && !empty($home['himg14'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg14']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg14">
                                        </label>
                                        <?php if(isset($home['himg14']) && !empty($home['himg14'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg14_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg14_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tiêu đề 3</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <textarea name="title15" id="title15" class="ckedit" tool='basic'> <?php if(isset($home['title15'])): ?> <?php echo e($home['title15']); ?> <?php endif; ?> </textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="link15">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                            <input type="text" id="link15" class="form-control col-md-7 col-xs-12" name="link15" value="<?php echo e(isset($home['link15']) ?  $home['link15'] : ''); ?>" >
                            </div>
                        </div>
                        <div class="item form-group image_upload">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Banner 3 </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="imageupload">
                                    <div class="file-tab">
                                        <?php if(isset($home['himg15']) && !empty($home['himg15'])): ?>
                                        <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$home['himg15']); ?>" /> <?php endif; ?>
                                        <label class="btn btn-dark btn-file">
                                            <span>Browse</span>
                                            <input type="file" name="himg15">
                                        </label>
                                        <?php if(isset($home['himg15']) && !empty($home['himg15'])): ?>
                                        <button type="button" class="btn btn-danger" style="display: inline-block;" rel="himg15_url">Remove</button>
                                        <?php else: ?>
                                        <button type="button" class="btn btn-danger" rel="himg15_url">Remove</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>