<?php if(!empty($listMenu)): ?>
<div class="mainmenu-area text-center hidden-sm hidden-xs">
    <nav>
        <div class="mainmenu">
            <ul>
                <?php foreach($listMenu as $klv1 => $vlv1): ?>
                    <li><a href="<?php echo e($vlv1['href']); ?>"><?php echo e($vlv1['text']); ?></a>
                        <?php if(!empty($vlv1['children'])): ?>
                            <ul class="submenu-mainmenu">
                                <?php foreach($vlv1['children'] as $klv2 => $vlv2): ?>
                                    <li><a href="<?php echo e($vlv2['href']); ?>"></i><?php echo e($vlv2['text']); ?> <?php if(!empty($vlv2['children'])): ?><i class="fa fa-angle-right"></i><?php endif; ?></a>
                                        <?php if(!empty($vlv2['children'])): ?>
                                            <ul class="sub-submenu-mainmenu">
                                                <?php foreach($vlv2['children'] as $klv3 => $vlv3): ?>
                                                    <li><a href="<?php echo e($vlv3['href']); ?>"><i class="fa fa-circle"></i><?php echo e($vlv3['text']); ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</div>
<?php endif; ?>
<!-- Mobile Menu Area start -->
<?php if(!empty($listMenuSP)): ?>
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <?php foreach($listMenuSP as $klv1 => $vlv1): ?>
                                <li><a href="<?php echo e($vlv1['href']); ?>"><?php echo e($vlv1['text']); ?></a>
                                    <?php if(!empty($vlv1['children'])): ?>
                                        <ul>
                                            <?php foreach($vlv1['children'] as $klv2 => $vlv2): ?>
                                                <li><a href="<?php echo e($vlv2['href']); ?>"></i><?php echo e($vlv2['text']); ?> <?php if(!empty($vlv2['children'])): ?><?php endif; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end -->
<?php endif; ?>