@extends('...app')





@section('content')


    <div class="container">
      <div class="content">
          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h3 class="portlet-title"><u>Categories Male</u></h3>
            </div> <!-- /.portlet-header -->
            <div class="portlet-body">
              <div class="row">
                @foreach($brandCategoryMale as $brandC)

                      <?php $bno = App\Brand::getLastUploadBnoByBCNO($brandC->bcno);  ?>


                    <div class="col-md-3">
                      <div class="thumbnail">
                        <div class="thumbnail-view">
                          <a   href="{{Session::get('imgSrc') . '/' . $bno . '_brand.jpg'}}" class="thumbnail-view-hover thumbnail-view-hover-lg ui-lightbox brand-category-thumbnail">
                            <i class="fa fa-plus"></i>
                          </a>
                          <img src="{{Session::get('imgSrc') . '/' . $bno . '_brand.jpg'}}" class="brand-category-thumbnail" alt="Gallery Image">
                        </div>
                        <div class="caption">
                          <h3>{{$brandC->bc_name}}</h3>
                          <p>
                            <a href="{{url() . '/brand/' . strtolower($brandC->bc_name) . '/male'}}" class="btn btn-secondary btn-sm btn-sm">Visit</a>
                          </p>
                        </div>
                        <div class="thumbnail-footer">
                          <div class="pull-left">
                            <a href="javascript:;"><i class="fa fa-thumbs-up"></i> 123</a>
                            <a href="javascript:;"><i class="fa fa-thumbs-down"></i> 29</a>
                          </div>

                          <div class="pull-right">
                            <a href=""><i class="fa fa-clock-o"></i> 2 days ago</a>
                          </div>
                        </div>
                      </div>
                    </div> <!-- /.col -->
                @endforeach


              </div> <!-- /.row -->

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->



           <div class="portlet portlet-default">

              <div class="portlet-header">
                <h3 class="portlet-title"><u>Categories Female</u></h3>
              </div> <!-- /.portlet-header -->
              <div class="portlet-body">
                <div class="row">
                  @foreach($brandCategoryFemale as $brandC)


                      <?php $bno = App\Brand::getLastUploadBnoByBCNO($brandC->bcno);  ?>

                      <div class="col-md-3">
                        <div class="thumbnail">
                          <div class="thumbnail-view">
                            <a   href="{{Session::get('imgSrc') . '/' . App\Brand::getLastUploadBnoByBCNO($brandC->bcno) . '_brand.jpg'}}" class="thumbnail-view-hover thumbnail-view-hover-lg ui-lightbox brand-category-thumbnail">
                                <i class="fa fa-plus"></i>
                            </a>
                            <img src="{{Session::get('imgSrc') . '/' . App\Brand::getLastUploadBnoByBCNO($brandC->bcno) . '_brand.jpg'}}" class="brand-category-thumbnail"  alt="Gallery Image">
                          </div>
                          <div class="caption">
                            <h3>{{$brandC->bc_name}}</h3>
                              <p>
                                <a href="{{url() . '/brand/' . strtolower($brandC->bc_name) . '/female'}}" class="btn btn-secondary btn-sm btn-sm">Visit</a>
                              </p>
                          </div>
                          <div class="thumbnail-footer">
                            <div class="pull-left">
                              <a href="javascript:;"><i class="fa fa-thumbs-up"></i> 123</a>
                              <a href="javascript:;"><i class="fa fa-thumbs-down"></i> 29</a>
                            </div>

                            <div class="pull-right">
                              <a href="javascript:;"><i class="fa fa-clock-o"></i> 2 days ago</a>
                            </div>
                          </div>
                        </div>
                      </div> <!-- /.col -->
                  @endforeach
            </div> <!-- /.row -->

          </div> <!-- /.portlet-body -->

        </div> <!-- /.portlet -->
      </div>
  </div>
@endsection
