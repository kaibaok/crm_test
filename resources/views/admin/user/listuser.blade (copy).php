@extends("admin.layout")
@section('title') {{$view['title']}} @endsection
@section('rightcontent')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách User </h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" id="btn_search">Tìm</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <!-- <th>
                      <input type="checkbox" id="check-all" class="flat">
                    </th> -->
                    <th class="column-title">Name </th>
                    <th class="column-title">Email </th>
                    <th class="column-title">Created At </th>
                    <th class="column-title">Updated At </th>
                    <th class="column-title">Permission</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                   <!--  <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bạn chọn ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th> -->
                  </tr>
                </thead>

                <tbody>
                  <tr class="even pointer">
                    <!-- <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td> -->
                    <td class=" ">121000040</td>
                    <td class=" ">May 23, 2014 11:47:56 PM </td>
                    <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                    <td class=" ">John Blank L</td>
                    <td class="a-right a-right ">$7.45</td>
                    <td class=" last"><a href="#">View</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="btn-toolbar pull-right">
                <div class="btn-group">
                  <a class="btn btn-success" href="#">1</a>
                  <a class="btn btn-success" href="#">1</a>
                  <a class="btn btn-success" href="#">2</a>
                  <a class="btn btn-success" href="#">3</a>
                  <a class="btn btn-warning" href="#">4</a>
                  <a class="btn btn-success" href="#">1</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
