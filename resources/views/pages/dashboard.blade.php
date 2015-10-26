@extends('...app')

@section('content')
  <div class="content">

    <div class="container">

      <div class="portlet portlet-default">

        <div class="portlet-header hide">
          <h4 class="portlet-title">
            Monthly Stats
          </h4>
        </div> <!-- /.portlet-header -->

        <div class="portlet-body">

          <div class="row">

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Revenue Today</p>
                <h3 class="row-stat-value" id="revenue-today" >$890.00</h3>
                <span class="label label-success row-stat-badge">+43%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Revenue This Month</p>
                <h3 class="row-stat-value"  id="revenue-this-month" >$8290.00</h3>
                <span class="label label-success row-stat-badge">+17%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Total Users</p>
                <h3 class="row-stat-value" id="total-users" >98,290</h3>
                <span class="label label-success row-stat-badge">+26%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

            <div class="col-sm-6 col-md-3">
              <div class="row-stat">
                <p class="row-stat-label">Currently Active Uses</p>
                <h3 class="row-stat-value" id="currently-active-uses" >19</h3>
                <span class="label label-danger row-stat-badge">+5%</span>
              </div> <!-- /.row-stat -->
            </div> <!-- /.col -->

          </div> <!-- /.row -->

        </div> <!-- /.portlet-body -->

      </div> <!-- /.portlet -->


        

          <div class="row">

            <div class="col-md-8">

              <div class="portlet portlet-default">

                <div class="portlet-header">
                  <h4 class="portlet-title">
                    Revenue Per Month
                  </h4>
                </div> <!-- /.portlet-header -->

                <div class="portlet-body">

                <!--
                  <div class="chart-bg bg-secondary" >
                    <div id="reports-line-chart" class="chart-holder-250"></div>
                  </div> <!-- /.bg-chart -->  

                   <div class="portlet-body">
                    <!-- <div id="line-chart" class="chart-holder"></div> -->
                    <div id="line-chart" class="chart-holder-250"  > </div>
                  </div> <!-- /.portlet-body --> 
                    <!-- <div id="line-chart" class="chart-holder-250"  > </div> -->
                  <br>

              </div> <!-- /.portlet-body -->

            </div> <!-- /.portlet -->







            </div> <!-- /.col -->

            <div class="col-md-4">

              <div class="portlet portlet-default">

                <div class="portlet-header">
                  <h4 class="portlet-title">
                    Product Breakdown
                  </h4>
                </div> <!-- /.portlet-header -->

                <div class="portlet-body">

                  <div id="donut-chart" class="chart-holder" style="width: 70%;"></div>

                </div> <!-- /.portlet-body -->

              </div> <!-- /.portlet -->

            </div> <!-- /.col -->

          </div> <!-- /.row -->


      <div class="row">

        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h4 class="portlet-title">
                Top Performing Pages
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="portlet-body">

              <table class="table table-bordered" id="top-performing-pages-table">
                <thead>
                  <tr>
                    <th>Page</th>
                    <th class="text-right">eCPM</th>
                    <th class="text-right">Revenue</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->



        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">
              <h4 class="portlet-title">
                eCPM by Country
              </h4>
            </div> <!-- /.portlet-header -->

            <div class="portlet-body">

              <div id="stacked-horizontal-chart" class="chart-holder-250"></div>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

      <div class="row" style="display:none">

        <div class="col-md-6">

          <div class="portlet portlet-default">

            <div class="portlet-header">

            </div> <!-- /.portlet-header -->

            <div class="porlet-body">

              <div id="auto-chart" class="chart-holder-250" ></div>

            </div> <!-- /.portlet-body -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->




















      <br>


      <div class="portlet portlet-default">

        <div class="portlet-header">
          <h4 class="portlet-title">
            <u>Pagination</u>
          </h4>
        </div> <!-- /.portlet-header -->

        <div class="portlet-body">

          <table
            class="table table-striped table-bordered table-hover ui-datatable"
            data-ajax="{{Route('route_ad_pagination')}}"
            data-global-search="false"
            data-length-change="false"
            data-info="true"
            data-paging="true"
            data-page-length="10"
          >
            <thead>
              <tr>

                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn</th>
                <th>Start Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn</th>
                <th>Start Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>

        </div> <!-- /.portlet-body -->

      </div> <!-- /.portlet -->













    </div> <!-- /.container -->

  </div> <!-- .content -->



@endsection
