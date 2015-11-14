@extends('...app')

@section('content')



  <div class="content">
    <div class="container">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h3 class="portlet-title"><u>Brand Data</u></h3>
            </div> <!-- /.portlet-header -->
              {!! $brands->render() !!}

            <div class="portlet-body" id="fragment">
              <div class="table-responsive">
              <table class="table table-striped table-bordered thumbnail-table">
                <thead>
                  <tr>
                      <th style="width: 150px">Image</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    @if(count($brands) > 0)
                        @foreach ($brands as $brand)
                          <tr>
                              <td>
                                <div class="thumbnail">
                                  <div class="thumbnail-view">
                                    <a class="thumbnail-view-hover ui-lightbox" href="{{Session::get('imgSrc') . '/' . $brand->bno . '_brand.jpg'}}">
                                      <i class="fa fa-plus"></i>
                                    </a>
                                    <img src="{{Session::get('imgSrc') . '/' . $brand->bno . '_brand.jpg'}}" width="125" alt="Gallery Image" />

                                  </div>
                                </div> <!-- /.thumbnail -->
                              </td>
                              <td class="valign-middle">
                                  {{ $brand->bname }} <br>
                                  TOTAL ITEM (2,999) <br>
                                  SPENT  (2,999) <br>
                                  STORE UR'L  (2,999) <br>
                                  MEMBERS  (2,999) <br>
                              </td>
                              <td class="valign-middle">Feb 12, 2012. 12:28</td>
                              <td class="text-center valign-middle">
                                <button class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button>
                                &nbsp;
                                <button class="btn btn-xs btn-secondary"><i class="fa fa-times"></i></button>
                              </td>
                            </tr>
                        @endforeach
                    @else
                        <h3> No Result found </h3>
                    @endif


                </tbody>
               </table>
              </div> <!-- /.table-responsive -->
            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

      {!! $brands->render() !!}
    </div>
  </div>
@endsection
