@extends('...app')
@section('content')
  <div class="container">

      <section class="demo-section">

        <div class="heading-block">
          <h4>
            Tag Data Management
          </h4>
        </div> <!-- /.heading-block -->


        <div class="panel-group accordion-panel" id="accordion-paneled">

          <div class="panel open">

            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-paneled" href="#collapseOne">

                 Color
              </a>
              </h4>
            </div> <!-- /.panel-heading -->

            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                  <h2>Bordered Table</h2>
                   <p></p>
                   <table class="table table-bordered">
                     <thead>
                       <tr>
                         <th>Name</th>
                         <th>Color</th>
                         <th>Order</th>
                          <th>Name</th>
                          <th>Color</th>
                          <th>Order</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                             <td>Red</td>
                             <td><div style="background-color: red; padding:5px; width:10px;">   </div> </td>
                             <td><input type="text" value="1" style=" padding:5px; width:20px;" /></td>
                            <td>Green</td>
                            <td><div style="background-color: green; padding:5px; width:10px;">   </div> </td>
                            <td><input type="text" value="2" style=" padding:5px; width:20px;" /></td>
                       </tr>
                       <tr>
                          <td>Yellow</td>
                          <td><div style="background-color: yellow; padding:5px; width:10px;">   </div> </td>
                          <td><input type="text" value="3" style=" padding:5px; width:20px;" /></td>
                            <td>Green</td>
                          <td><div style="background-color: green; padding:5px; width:10px;">   </div> </td>
                          <td><input type="text" value="2" style=" padding:5px; width:20px;" /></td>
                      </tr>
                        <tr>
                             <td>Red</td>
                             <td><div style="background-color: red; padding:5px; width:10px;">   </div> </td>
                             <td><input type="text" value="1" style=" padding:5px; width:20px;" /></td>
                            <td>Green</td>
                            <td><div style="background-color: green; padding:5px; width:10px;">   </div> </td>
                            <td><input type="text" value="2" style=" padding:5px; width:20px;" /></td>
                       </tr>
                       <tr>
                          <td>Yellow</td>
                          <td><div style="background-color: yellow; padding:5px; width:10px;">   </div> </td>
                          <td><input type="text" value="3" style=" padding:5px; width:20px;" /></td>
                            <td>Green</td>
                          <td><div style="background-color: green; padding:5px; width:10px;">   </div> </td>
                          <td><input type="text" value="2" style=" padding:5px; width:20px;" /></td>
                      </tr>
                       <tr>
                           <td>Red</td>
                           <td><div style="background-color: red; padding:5px; width:10px;">   </div> </td>
                           <td><input type="text" value="1" style=" padding:5px; width:20px;" /></td>
                          <td>Green</td>
                          <td><div style="background-color: green; padding:5px; width:10px;">   </div> </td>
                          <td><input type="text" value="2" style=" padding:5px; width:20px;" /></td>
                     </tr>
                     <tr>
                        <td>Yellow</td>
                        <td><div style="background-color: yellow; padding:5px; width:10px;">   </div> </td>
                        <td><input type="text" value="3" style=" padding:5px; width:20px;" /></td>
                          <td>Green</td>
                        <td><div style="background-color: green; padding:5px; width:10px;">   </div> </td>
                        <td><input type="text" value="2" style=" padding:5px; width:20px;" /></td>
                    </tr>
                     </tbody>
                   </table>
              </div> <!-- /.panel-body -->
            </div> <!-- /.panel-collapse -->

          </div> <!-- /.panel -->

          <div class="panel ">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-paneled" href="#collapseTwo">
                Material
                </a>
              </h4>
            </div> <!-- /.panel-heading -->

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div> <!-- /.panel-body -->
            </div> <!-- /.panel-collapse -->

          </div> <!-- /.panel -->

          <div class="panel ">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-paneled" href="#collapseThree">
                    Pattern
                </a>
              </h4>
            </div> <!-- /.panel-heading -->

            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div> <!-- /.panel-body -->
            </div> <!-- /.panel-collapse -->

          </div> <!-- /.panel -->

          <div class="panel ">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-paneled" href="#collapseFour">
                    Garment
                </a>
              </h4>
            </div> <!-- /.panel-heading -->

            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div> <!-- /.panel-body -->
            </div> <!-- /.panel-collapse -->

          </div> <!-- /.panel -->

        </div> <!-- /.accordion -->

      </section> <!-- /.demo-section -->


  </div>
@endsection
