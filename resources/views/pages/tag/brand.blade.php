@extends('...app')
@section('content')
  <div class="container">


      @include(
         'include.category-menu',
         array(
            'menu' => array(
                'Back' => Route('route_brand'),
            )
         )
      )

    {{--{!! Form::open(array('url' => "'" . Route('tag.material.update') . "'", 'action'=>'POST')) !!}--}}
     {!! Form::open(array('route' => array('tag.brand.update', 2)   , 'method' => 'PUT', 'enctype'=>'multipart/form-data')) !!}
       {{--<form method="POST" action="http://localhost/fs/admin/tag/material/2" enctype="multipart/form-data">--}}
           {{--<input name="_method" type="hidden" value="PUT">--}}
           {{--<input name="_token" type="hidden" value="TTipgx83kR18pYmDrEmIeHn6ISMSOJQClc1CSxbT">--}}

      <div class="portlet portlet-default">

        <div class="portlet-header">
          <h3 class="portlet-title"><u>Brand Items</u></h3>
        </div> <!-- /.portlet-header -->

        <div id="fragment-top" >
            {!! $pagination->fragment('fragment-top')->render() !!}
        </div>
        <div class="portlet-body">
          <div class="table-responsive">
          <table class="table table-striped table-bordered thumbnail-table">
            <thead>
              <tr>
                  <th style="width: 150px">Image</th>
                  <th>Name</th>
                  <th>Total Post Using</th>
                  <th>Total People Using</th>
                  <th>Select Image</th>
                  <th>Date Created</th>
                  <th class="text-center">Edit / Delete</th>
              </tr>
            </thead>
            <tbody>
              @if(count($pagination) > 0)
                @foreach ($pagination as $page)
                  <tr id="garment-item-container-{{$page->bno}}" >
                    <td>
                      <div class="thumbnail">
                        <div class="thumbnail-view">
                          <a class="thumbnail-view-hover ui-lightbox" href="{{Session::get('imgSrcUploads') . '/brands/' . $page->bno . '_brand.jpg'}}">
                            <i class="fa fa-plus" ></i>
                          </a>
                          <img src="{{Session::get('imgSrcUploads') . '/brands/' . $page->bno . '_brand.jpg' }}" width="125" alt="Gallery Image" />
                        </div>
                        {{--http://localhost/fs/admin/public/img/material/50.jpg--}}
                        {{--http://localhost/fs/admin/public/img/material/58.jpg--}}
                      </div> <!-- /.thumbnail -->
                    </td>

                    <td class="valign-middle">
                        <a href="javascript:;" title="">{{$page->bname}}</a>
                        <div class="input-group" id="admin-tag-field-name-{{$page->bno}}" style="display:none" >
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$page->bname}}" name="tagItemName[{{$page->bno}}]">
                        </div>
                    </td>

                    <td class="valign-middle">
                        <a href="javascript:;" title=""> {{rand(0,1000)}} </a>
                    </td>
                    <td class="valign-middle">
                        <a href="javascript:;" title=""> {{rand(0,1000)}} </a>
                    </td>
                    <td class="valign-middle">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                        <input type="file" name="tagItemFileName[{{$page->bno}}]">as</span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                      </div>
                    </td>

                    <td class="file-info valign-middle">
                      <span><strong class="semibold"> {{ $page->created_at}} </strong> </span> <br />
                    </td>
                    <td class="text-center valign-middle">
                      <span class="btn btn-xs btn-info" id="admin-tag-edit-content" onclick="admin_tag_edit_item_open('#admin-tag-field-name-{{$page->bno}}, #admin-tag-field-gender-{{$page->bno}} , #admin-tag-field-plus-size-{{$page->bno}}')"  ><i class="fa fa-pencil"></i></span>
                      &nbsp;
                      <span class="btn btn-xs btn-primary" onclick="admin_tag_delete_item('#garment-item-container-{{$page->bno}}', '{{$page->bno}}', 'brand', '{{route('tag.brand.destroy', $page->bno)}}')" ><i class="fa fa-times"></i></span>
                    </td>
                  </tr>

                 <?php //break; ?>
                @endforeach
              @else
                 <h3> No Result found </h3>
             @endif

            </tbody>
          </table>
          <div>
            <button type="submit" class="btn btn-success">Save</button>
          </div>


            <div id="fragment-bottom" >
                {!! $pagination->fragment('fragment-bottom')->render() !!}
            </div>

          </div> <!-- /.table-responsive -->
        </div> <!-- /.portlet-body -->

      </div> <!-- /.portlet -->
    {!! Form::close() !!}

  </div>
@endsection
