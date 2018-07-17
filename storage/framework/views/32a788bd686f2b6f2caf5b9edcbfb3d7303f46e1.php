<?php if(!empty($mProductCate)): ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Danh mục</h4>
        <ul>
            <?php foreach($mProductCate as $value): ?>
                <?php  $active = ($cateID == $value->id) ? "active" : "";  ?>
                <li class="<?php echo e($active); ?>"><a href="/p/?category=<?php echo e($value->id); ?>&c=<?php echo e($value->seo_link); ?>"><i class="fa fa-angle-right"></i><?php echo e($value->title); ?></a> </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php if(!empty($mProductType)): ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Thể loại</h4>
        <ul>
            <?php foreach($mProductType as $value): ?>
                <?php  $active = ($typeID == $value->id) ? "active" : "";  ?>
                <li class="<?php echo e($active); ?>"><a href="/p/?type=<?php echo e($value->id); ?>&t=<?php echo e($value->seo_link); ?>"><i class="fa fa-angle-right"></i><?php echo e($value->title); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php if(!empty($mBrand)): ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Thương hiệu</h4>
        <ul>
            <?php foreach($mBrand as $value): ?>
                <?php  $active = ($brandID == $value->id) ? "active" : "";  ?>
                <li class="<?php echo e($active); ?>"><a href="/p/?brand=<?php echo e($value->id); ?>&t=<?php echo e($value->seo_link); ?>"><i class="fa fa-angle-right"></i><?php echo e($value->title); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Lọc theo giá</h4>
        <div class="price-filter">
            <div id="slider-range"></div>
            <div class="price-slider-amount">
                <div class="slider-values">
                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Kích cỡ</h4>
        <ul class="size-widget">
            <li <?php if(!empty($size) && $size == "xs"): ?> class="active" <?php endif; ?> ><a href="/p/?size=xs">XS</a></li>
            <li <?php if(!empty($size) && $size == "s"): ?> class="active" <?php endif; ?> ><a href="/p/?size=s">S</a></li>
            <li <?php if(!empty($size) && $size == "m"): ?> class="active" <?php endif; ?> ><a href="/p/?size=m">M</a></li>
            <li <?php if(!empty($size) && $size == "l"): ?> class="active" <?php endif; ?> ><a href="/p/?size=xs">L</a></li>
            <li <?php if(!empty($size) && $size == "xl"): ?> class="active" <?php endif; ?> ><a href="/p/?size=xl">XL</a></li>
        </ul>
    </div>
</div>
<?php if(!empty($mTag)): ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">tags</h4>
        <ul class="widget-tag">
            <?php foreach($mTag as $tag): ?>
                <li class="active"><a href="<?php echo e($tag->link); ?>"><?php echo e($tag->title); ?></a></li>
            <?php endforeach; ?>
        </ul >
    </div>
</div>
<?php endif; ?>