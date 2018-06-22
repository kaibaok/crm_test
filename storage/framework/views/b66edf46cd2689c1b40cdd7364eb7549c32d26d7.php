
<?php if(!empty($listSlider)): ?>
<div class="preview-2">
    <div id="nivoslider" class="slides">
        <?php foreach($listSlider as $key => $value): ?>
            <?php if(!empty($value->simg_detail) && file_exists(BASE_IMG."slider/".$value->simg_detail)): ?>
                <?php  $no = $key + 1;  ?>
                <img src="/public/upload/images/slider/<?php echo e($value->simg_detail); ?>" alt="" title="#slider-direction-<?php echo e($no); ?>" />
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <!-- direction 1 -->
    <?php foreach($listSlider as $key => $value): ?>
        <?php if(!empty($value->simg_detail) && file_exists(BASE_IMG."slider/".$value->simg_detail)): ?>
        <?php  $no = $key + 1;  ?>
            <div id="slider-direction-<?php echo e($no); ?>" class="slider-direction">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="nivo_text">
                                    <div class="nivo_text-wrapper">
                                       <?php echo $value->desc; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>