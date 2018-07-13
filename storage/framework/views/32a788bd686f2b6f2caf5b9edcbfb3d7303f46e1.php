<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">category</h4>
        <ul>
            <li class="active"><a href="#"><i class="fa fa-angle-right"></i>Men's Collection (275)</a> </li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Women's Collection (320)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Kid's Collection (275)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Accessories (220)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Bag's Collection (175)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Shoes Collection (150)</a></li>
        </ul>
    </div>
</div>
<?php if(!empty($mProductType)): ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">Thể loại</h4>
        <ul>
            <?php foreach($mProductType as $value): ?>
                <li><a href="/p/?type=<?php echo e($value->id); ?>&t=<?php echo e($value->seo_link); ?>"><i class="fa fa-angle-right"></i><?php echo e($value->title); ?></a></li>
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
                <li><a href="/p/?brand=<?php echo e($value->id); ?>&t=<?php echo e($value->seo_link); ?>"><i class="fa fa-angle-right"></i><?php echo e($value->title); ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">filter by price</h4>
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
            <li class="active"><a href="/p/?size=xs">XS</a></li>
            <li><a href="/p/?size=s">S</a></li>
            <li><a href="/p/?size=m">M</a></li>
            <li><a href="/p/?size=l">L</a></li>
            <li><a href="/p/?size=xl">XL</a></li>
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

