@extends("admin.layout")
@section('title') {{$title}} @endsection
@section('rightcontent')
<form id="demo-form" class="form-horizontal" enctype="multipart/form-data" method="post" action="">
    {{ csrf_field() }}
    <input type="hidden" id="out" name="list" value="{!!$menu['list']!!}">
    <input type="hidden" id="outSP" name="list_sp" value="{!!$menu['list_sp']!!}">
    <div class="page-title">
        <div class="title_left">
            <h3>{{$title}}</h3>
        </div>
        <div class="title_right">
            <div class=" pull-right">
                <div class="input-group">
                    <button type="submit" id="btnSave" class="btn btn-success btn-submit">&nbsp;Save&nbsp;</button>
                    <a class="btn btn-info" href="/admin/">Trở về</a>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="clearfix"></div>
    <div class="row treemenu">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix"><h5 class="pull-left">Menu PC</h5>
                    <div class="pull-right">
                        <button id="btnReload" type="button" class="btn btn-default">
                            <i class="glyphicon glyphicon-triangle-right"></i> Load Data</button>
                    </div>
                </div>
                <div class="panel-body" id="cont">
                    <ul id="myEditor" class="sortableLists list-group">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit sub menu PC</div>
                <div class="panel-body">
                    <form id="frmEdit" class="form-horizontal">
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Text</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control item-menu" name="text" id="text" placeholder="Text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="href" class="col-sm-2 control-label">URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="target" class="col-sm-2 control-label">Target</label>
                            <div class="col-sm-10">
                                <select name="target" id="target" class="form-control item-menu">
                                    <option value="_self">Self</option>
                                    <option value="_blank">Blank</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fa fa-refresh"></i> Cập nhật</button>
                    <button type="button" id="btnAdd" class="btn btn-success"><i class="fa fa-plus"></i> Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row treemenu">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix"><h5 class="pull-left">Menu SP</h5>
                    <div class="pull-right">
                        <button id="btnReloadSP" type="button" class="btn btn-default">
                            <i class="glyphicon glyphicon-triangle-right"></i> Load Data</button>
                    </div>
                </div>
                <div class="panel-body" id="cont">
                    <ul id="myEditorSP" class="sortableLists list-group">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit sub menu SP</div>
                <div class="panel-body">
                    <form id="frmEditSP" class="form-horizontal">
                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Text</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" class="form-control item-menu" name="text" placeholder="Text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="href" class="col-sm-2 control-label">URL</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control item-menu" name="href" placeholder="URL">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="target" class="col-sm-2 control-label">Target</label>
                            <div class="col-sm-10">
                                <select name="target" class="form-control item-menu">
                                    <option value="_self">Self</option>
                                    <option value="_blank">Blank</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <button type="button" id="btnUpdateSP" class="btn btn-primary" disabled><i class="fa fa-refresh"></i> Cập nhật</button>
                    <button type="button" id="btnAddSP" class="btn btn-success"><i class="fa fa-plus"></i> Thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
    <script>  @if(isset($errors['finish'])) popupNotice("{{$errors['finish']}}");  @endif  </script>
    <script src='/public/admin/js/menutop/bs-iconpicker/js/bootstrap-iconpicker.min.js'></script>
    <script src="/public/admin/js/menutop/jquery-menu-editor.min.js"></script>
    <script> var strjson = '{!!$menu['list']!!}';
    var strjsonSP = '{!!$menu['list_sp']!!}'; </script>
@endsection