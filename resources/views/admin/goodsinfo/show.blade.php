@extends('admin.layout.index')

@section('main')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title text-center">
        @if (count(session('error')) > 0)
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button><font style="vertical-align: inherit;"><font style="vertical-align: inherit; font-size: 20px">
            {{ session('error') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            </font></font>
        </div>
        @endif

        </h2>
    </div>
    <div class="panel-heading">
        <h2 class="panel-title text-center">
        @if (count(session('success')) > 0)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button><font style="vertical-align: inherit;"><font style="vertical-align: inherit; font-size: 20px">
            {{ session('success') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            </font></font>
        </div>
        @endif

        </h2>
    </div>
    <div class="panel-body row">
         <div id="pad-wrapper" class="gallery">
            <div class="row header">
                <div class="col-md-12">
                    <h3>选项图册</h3>
                </div>                
            </div>

            <!-- gallery wrapper -->
            <div class="gallery-wrapper">
                <div class="row gallery-row">
                    <!-- single image -->
                    @foreach($goodsimage as $k=>$v)
                    <div class="col-md-2 img-container" style="margin-bottom:1px">
                        <div class="img-box">
                            <span class="icon edit">
                                <a data-toggle="modal" href="#myModal"><i class="gallery-edit"></i></a>
                            </span>
                            <span class="icon trash">
                                <i class="gallery-trash"></i>
                            </span>
                            <a class="btn btn-danger btn-xs pull-right a1" href="/admin/goodsimage/delete/{{ $v->id }}" style="position:relative;top:21px;right:0px;opacity:0;">×</a>
                            <img src="{{ $v->img }}" class="img-responsive img1">
                            <a class="btn btn-info btn-xs a2" style="position:relative;bottom:21px;opacity:0;" data-toggle="modal" 
                           data-target="#{{ $v->id }}">查看大图</a>


                            
                        </div>
                    </div>
                    <!-- single image -->
                    <div class="modal fade text-center" id="{{ $v->id }}">
                        <div class="modal-dialog modal-lg" style="display: inline-block; width: auto;">
                            <div class="modal-content">
                                <button type="button" class="close" 
                              data-dismiss="modal" 
                              aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                                </button>
                                <img id="showImage" src="{{ $v->img }}" style="width:800px">
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <!-- new image button -->
                    <div class="col-md-2 img-container" style="margin-bottom:1px">
                        <div class="img-box">
                            <span class="icon edit">
                                <a data-toggle="modal" href="#myModal"><i class="gallery-edit"></i></a>
                            </span>
                            <span class="icon trash">
                                <i class="gallery-trash"></i>
                            </span>
                            <a class="btn btn-danger btn-xs pull-right " style="opacity:0;">×</a>
                            <a data-toggle="modal" href="#myModal">
                            <img src="/uploads/goodsinfo/imgs1/new-gallery-img.png" class="img-responsive ">
                            </a>
                            <a class="btn btn-info btn-xs " style="opacity:0;">查看大图</a>


                            
                        </div>
                    </div>                   
                </div>
            </div>
            <!-- end gallery wrapper -->
            <br><br>
            <!-- blank state -->
            <div class="no-gallery">
                <div class="row header">
                    <div class="col-md-12">
                        <h3>商品配图</h3>
                    </div>
                </div>
                <div class="gallery-wrapper">
                <div class="row gallery-row">
                    <!-- single image -->
                    @foreach($goodsimage2 as $k=>$v)
                    <div class="col-md-2 img-container" style="margin-bottom:1px">
                        <div class="img-box">
                            <span class="icon edit">
                                <a data-toggle="modal" href="#myModal"><i class="gallery-edit"></i></a>
                            </span>
                            <span class="icon trash">
                                <i class="gallery-trash"></i>
                            </span>
                            <a class="btn btn-danger btn-xs pull-right a1" href="/admin/goodsimage/delete/{{ $v->id }}" style="position:relative;top:21px;right:0px;opacity:0;">×</a>
                            <img src="{{ $v->img }}" class="img-responsive img1">
                            <a class="btn btn-info btn-xs a2" style="position:relative;bottom:21px;opacity:0;" data-toggle="modal" 
                           data-target="#{{ $v->id }}">查看大图</a>


                            
                        </div>
                    </div>
                    <!-- single image -->
                    <div class="modal fade text-center" id="{{ $v->id }}">
                        <div class="modal-dialog modal-lg" style="display: inline-block; width: auto;">
                            <div class="modal-content">
                                <button type="button" class="close" 
                              data-dismiss="modal" 
                              aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                                </button>
                                <img id="showImage" src="{{ $v->img }}" style="width:800px">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-md-2 img-container" style="margin-bottom:1px">
                        <div class="img-box">
                            <span class="icon edit">
                                <a data-toggle="modal" href="#myModal"><i class="gallery-edit"></i></a>
                            </span>
                            <span class="icon trash">
                                <i class="gallery-trash"></i>
                            </span>
                            <a class="btn btn-danger btn-xs pull-right " style="opacity:0;">×</a>
                            <a data-toggle="modal" href="#myModal2">
                            <img src="/uploads/goodsinfo/imgs1/new-gallery-img.png" class="img-responsive ">
                            </a>
                            <a class="btn btn-info btn-xs " style="opacity:0;">查看大图</a>


                            
                        </div>
                    </div>
                    <!-- new image button -->
                    
            </div>
            <!-- end blank state -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Add new image</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="/admin/goodsimage/insert/{{ $id }}" method="post" enctype="multipart/form-data"> 
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="input1" class="col-lg-2 control-label">Image:</label>
                                <div class="col-lg-10">
                                    <input type="file" id="input1" name="imgs1[]" class="pull-left" multiple accept="image/gif,image/jpeg,image/jpg,image/png,image/svg">
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>


            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Add new image</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" action="/admin/goodsimage/insert/{{ $id }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="input1" class="col-lg-2 control-label">Image:</label>
                                <div class="col-lg-10">
                                    <input type="file" id="input1" name="imgs2[]" class="pull-left" multiple accept="image/gif,image/jpeg,image/jpg,image/png,image/svg">
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>


        </div> 
    </div>
</div>

<script type="text/javascript">
    $('.img1').mouseover(function(){
        
        $(this).prev().css('opacity', 1);

    }).mouseout(function(){

        $(this).prev().css('opacity', 0);

    });

    $('.a1').mouseover(function(){
        
        $(this).css('opacity', 1);

    }).mouseout(function(){

        $(this).css('opacity', 0);

    });

    $('.img1').mouseover(function(){
        
        $(this).next().css('opacity', 1);

    }).mouseout(function(){

        $(this).next().css('opacity', 0);

    });

    $('.a2').mouseover(function(){
        
        $(this).css('opacity', 1);

    }).mouseout(function(){

        $(this).css('opacity', 0);

    });
</script>
@endsection