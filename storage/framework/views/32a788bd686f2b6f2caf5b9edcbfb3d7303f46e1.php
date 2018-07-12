<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">category</h4>
        <ul>
            <li class="active"><a href="#"><i class="fa fa-angle-right"></i>Men's Collection (275)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Women's Collection (320)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Kid's Collection (275)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Accessories (220)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Bag's Collection (175)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Shoes Collection (150)</a></li>
        </ul>
    </div>
</div>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">materials</h4>
        <ul>
            <li><a href="#"><i class="fa fa-angle-right"></i>Cotton (180)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Cotton Blends (150)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Lilen (120)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Polister Blends (175)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Jeans (150)</a></li>
        </ul>
    </div>
</div>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">brands</h4>
        <ul>
            <li><a href="#"><i class="fa fa-angle-right"></i>Zara (150)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Walmart (100)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Arong (150)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Velloci (120)</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i>Dolce &amp; Gabbana (175)</a></li>
        </ul>
    </div>
</div>
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
        <h4 class="text-uppercase">filter by size</h4>
        <ul class="size-widget">
            <li class="active"><a href="#">XS</a></li>
            <li><a href="#">S</a></li>
            <li><a href="#">M</a></li>
            <li><a href="#">L</a></li>
            <li><a href="#">XL</a></li>
        </ul>
    </div>
</div>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">filter by color</h4>
        <ul class="color-widget">
            <li class="active white"><a href="#"></a></li>
            <li class="red"><a href="#"></a></li>
            <li class="merun"><a href="#"></a></li>
            <li class="megenta"><a href="#"></a></li>
            <li class="blue"><a href="#"></a></li>
            <li class="neviblue"><a href="#"></a></li>
            <li class="green"><a href="#"></a></li>
            <li class="yellow"><a href="#"></a></li>
            <li class="purple"><a href="#"></a></li>
            <li class="black"><a href="#"></a></li>
        </ul>
    </div>
</div>
<?php if(!empty($listTag)): ?>
<div class="single-left-widget">
    <div class="section-title">
        <h4 class="text-uppercase">tags</h4>
        <ul class="widget-tag">
            <?php foreach($listTag as $tag): ?>
                <li class="active"><a href="<?php echo e($tag->link); ?>"><?php echo e($tag->title); ?></a></li>
            <?php endforeach; ?>
        </ul >
    </div>
</div>
<?php endif; ?>

