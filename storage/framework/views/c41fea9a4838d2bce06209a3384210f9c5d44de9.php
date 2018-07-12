<?php $user = Auth::user(); ?>
 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>New Crm</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="/public/admin/images/img.jpg" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hi,</span>
                <h2><?php echo e($user->name); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
                <h3>Quản lý</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-archive"></i> Danh mục sản phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/product">Sản phẩm</a></li>
                      <li><a href="/admin/item-product">Danh mục</a></li>
                      <li><a href="/admin/brand">Thương hiệu</a></li>
                      <li><a href="/admin/cate-product">Loại sản phẩm</a></li>
                      <li><a href="/admin/type-product">Thể loại</a></li>
                      <li><a href="/admin/colors">Màu sắc</a></li>
                      <li><a href="/admin/inventory">Tồn kho</a></li>
                    </ul>
                  </li>
                 <?php /*  <li><a><i class="fa fa-book"></i> Đặt hàng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/product/cart">Danh sách đặt hàng</a></li>
                      <li><a href="/admin/delivery">Giao hàng</a></li>
                      <li><a href="/admin/re-product">Trả hàng</a></li>
                    </ul>
                  </li> */ ?>
                  <li><a><i class="fa fa-archive"></i> Danh mục tin tức <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/news">Tin tức</a></li>
                      <li><a href="/admin/news-cate">Loại tin</a></li>
                      <li><a href="/admin/event">Sự kiện</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-archive"></i> Top page <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/slider">Slider</a></li>
                      <li><a href="/admin/home-page">Home Page</a></li>
                      <li><a href="/admin/tag">Tag</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Quản Trị</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Quản Lý User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin/user">Danh sách User</a></li>
                    </ul>
                  </li>
                  <li><a href="/"><i class="fa fa-home"></i>Trang Chủ</a></li>
                  <li><a href="/admin/logout"><i class="fa fa-sign-out"></i>Đăng Xuất</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>