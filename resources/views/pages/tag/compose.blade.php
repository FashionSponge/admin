@extends('...app')
@section('content')
  <div class="container">

            @include(
                 'include.category-menu',
                 array(
                    'menu' => array(
                        'material' => URL::to('tag/compose/material')
                    )
                 )
            )



              <form method="GET" action="{{URL::current()}}">

                    <button type="submit" class="btn btn-info" >Generate</button>
                     {!! Form::text('generate', 10, ['class' => 'great', 'placeholder'=>'1', 'id'=>'thisistheid', 'style'=>'width:60px;height: 33px;border-radius: 5px;padding: 5px;']) !!}

              </form>
              <br>
              <div class="portlet-body">
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered thumbnail-table" id="tag-compose-table">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Image</th>
                      </tr>
                    </thead>
                           @for($i=0; $i<$_GET['generate']; $i++)
                            <tr id="garment-item-container-{{$i}}">
                                <td>
                                    <div class="thumbnail">
                                         {!! Form::text('tagItemName-[' . $i . ']', null, ['class' => 'form-control', 'placeholder'=>'this is a text', 'id'=>'thisistheid']) !!}
                                    </div> <!-- /.thumbnail -->
                                </td>
                               <td class="valign-middle">
                                 <div class="fileinput fileinput-new" data-provides="fileinput">
                                   <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                   <input type="file" name="tagItemFileName[{{$i}}]">as</span>
                                   <span class="fileinput-filename"></span>
                                   <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                 </div>
                               </td>
                            @endfor
                  </table>
                  <div>
                    <button type="submit" class="btn btn-success">Save</button>
                  </div>
                  </div> <!-- /.table-responsive -->
                </div>
                <br><br><br>


  </div>
@endsection
