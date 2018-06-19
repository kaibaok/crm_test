<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('rightcontent'); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?php echo e($title); ?></h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
              <div class="input-group">
                <a class="btn btn-primary" href="/admin/slider">Trở về</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="clearfix"></div>
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
                <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Hình ảnh banner 1 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['img1']) && !empty($product['img1'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['img1']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="img1">
                                </label>
                                <?php if(isset($product['img1']) && !empty($product['img1'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img1_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="img1_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Hình ảnh banner 2</label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['img2']) && !empty($product['img2'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['img2']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="img2">
                                </label>
                                <?php if(isset($product['img2']) && !empty($product['img2'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img2_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="img2_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Hình ảnh banner 3 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['img3']) && !empty($product['img3'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['img3']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="img3">
                                </label>
                                <?php if(isset($product['img3']) && !empty($product['img3'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img3_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="img3_url">Remove</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="item form-group image_upload">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Hình ảnh banner 4 </label>
                     <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="imageupload">
                            <div class="file-tab">
                                <?php if(isset($product['img4']) && !empty($product['img4'])): ?>
                                    <img style="width: 250px" class="thumbnail" src="<?php echo e($url.$product['img4']); ?>" />
                                <?php endif; ?>
                                <label class="btn btn-dark btn-file">
                                    <span>Browse</span>
                                    <input type="file" name="img4">
                                </label>
                                <?php if(isset($product['img4']) && !empty($product['img4'])): ?>
                                    <button type="button" class="btn btn-danger" style="display: inline-block;" rel="img4_url">Remove</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-danger" rel="img4_url">Remove</button>
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
            <h2>Registration Form <small>Click to validate</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <!-- start form for validation -->
            <form id="demo-form" data-parsley-validate>
              <label for="fullname">Full Name * :</label>
              <input type="text" id="fullname" class="form-control" name="fullname" required />

              <label for="email">Email * :</label>
              <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

              <label>Gender *:</label>
              <p>
                M:
                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                <input type="radio" class="flat" name="gender" id="genderF" value="F" />
              </p>

              <label>Hobbies (2 minimum):</label>
              <p style="padding: 5px;">
                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                <br />

                <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                <br />

                <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                <br />

                <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                <br />
                <p>

                  <label for="heard">Heard us by *:</label>
                  <select id="heard" class="form-control" required>
                    <option value="">Choose..</option>
                    <option value="press">Press</option>
                    <option value="net">Internet</option>
                    <option value="mouth">Word of mouth</option>
                  </select>

                  <label for="message">Message (20 chars min, 100 max) :</label>
                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                    data-parsley-validation-threshold="10"></textarea>

                  <br/>
                  <span class="btn btn-primary">Validate form</span>

            </form>
            <!-- end form for validations -->

          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Buttons <small>Sessions</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="col-sm-3 control-label">Button addons</label>

                <div class="col-sm-9">
                  <div class="input-group">
                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-primary">Go!</button>
                                  </span>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-primary">Go!</button>
                                  </span>
                  </div>
                </div>
              </div>
              <div class="divider-dashed"></div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Button addons</label>

                <div class="col-sm-9">
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#">Action</a>
                        </li>
                        <li><a href="#">Another action</a>
                        </li>
                        <li><a href="#">Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a>
                        </li>
                      </ul>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-primary">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("admin.layout", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>