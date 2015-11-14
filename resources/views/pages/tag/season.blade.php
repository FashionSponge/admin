@extends('...app')
@section('content')
  <div class="container">
      @include(
         'include.category-menu',
         array(
            'menu' => array(
                'male and female show all' => URL::to('tag/season/all/all'),
                'male and plus size blogger' => URL::to('tag/season/male/yes'),
                'male and not plus size blogger' =>  URL::to('tag/season/male/no'),
                'male and not and plus size blogger' => URL::to('tag/season/male/both'),
                'female and plus size blogger' => URL::to('tag/season/female/yes'),
                'female and not plus size blogger' => URL::to('tag/season/female/no'),
                'female and both not and plus size blogger' => URL::to('tag/season/female/both'),
                'male and female plus size blogger' => URL::to('tag/season/both/yes'),
                'male and female not plus size blogger' => URL::to('tag/season/both/no'),
                'male and female both plus size blogger' => URL::to('tag/season/both/both'),
            )
         )
      )
    {{--{!! Form::open(array('url' => "'" . Route('tag.material.update') . "'", 'action'=>'POST')) !!}--}}
     {!! Form::open(array('route' => array('tag.season.update', 2)   , 'method' => 'PUT', 'enctype'=>'multipart/form-data')) !!}
       {{--<form method="POST" action="http://localhost/fs/admin/tag/material/2" enctype="multipart/form-data">--}}
           {{--<input name="_method" type="hidden" value="PUT">--}}
           {{--<input name="_token" type="hidden" value="TTipgx83kR18pYmDrEmIeHn6ISMSOJQClc1CSxbT">--}}

      <div class="portlet portlet-default">

        <div class="portlet-header">
          <h3 class="portlet-title"><u>Season</u></h3>
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
                  <th>gender</th>
                  <th>plus size</th>
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
                  <tr id="garment-item-container-{{$page->id}}" >
                    <td>
                      <div class="thumbnail">
                        <div class="thumbnail-view">
                          <a class="thumbnail-view-hover ui-lightbox" href="{{Session::get('imgSrcUploads') . '/season/' . $page->id . '.jpg'}}">
                            <i class="fa fa-plus" ></i>
                          </a>
                          <img src="{{Session::get('imgSrcUploads') . '/season/' . $page->id . '.jpg' }}" width="125" alt="Gallery Image" />
                        </div>
                        {{--http://localhost/fs/admin/public/img/material/50.jpg--}}
                        {{--http://localhost/fs/admin/public/img/material/58.jpg--}}
                      </div> <!-- /.thumbnail -->
                    </td>
                    <td class="valign-middle">
                    <a href="javascript:;" title="">{{$page->name}}</a>
                        <div class="input-group" id="admin-tag-field-name-{{$page->id}}" style="display:none" >
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$page->name}}" name="tagItemName[{{$page->id}}]">
                        </div>

                    </td>


                    <td class="valign-middle">
                        <a href="javascript:;" title="">{{$page->gender}}</a>
                        <div class="input-group" id="admin-tag-field-gender-{{$page->id}}" style="display:none" >

                            <select class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$page->gender}}" name="tagItemGender[{{$page->id}}]">
                                 <option value="">Select Gender..</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                    </td>

  		            <td class="valign-middle">
                        <a href="javascript:;" title="">{{$page->plus_size}}</a>
                        <div class="input-group" id="admin-tag-field-plus-size-{{$page->id}}" style="display:none" >
                             <select  class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$page->plus_size}}" name="tagItemPlusSize[{{$page->id}}]">
                                 <option value="">Select Plus Size..</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="both">Both</option>
                            </select>
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
                        <input type="file" name="tagItemFileName[{{$page->id}}]">as</span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                      </div>
                    </td>

                    <td class="file-info valign-middle">
                      <span><strong class="semibold"> {{ $page->created_at}} </strong> </span> <br />
                    </td>
                    <td class="text-center valign-middle">
                       <span class="btn btn-xs btn-info" id="admin-tag-edit-content" onclick="admin_tag_edit_item_open('#admin-tag-field-name-{{$page->id}}, #admin-tag-field-gender-{{$page->id}} , #admin-tag-field-plus-size-{{$page->id}}')"><i class="fa fa-pencil"></i></span>
                      &nbsp;
                      <span class="btn btn-xs btn-primary" onclick="admin_tag_delete_item('#garment-item-container-{{$page->id}}', '{{$page->id}}', 'material')" ><i class="fa fa-times"></i></span>
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
