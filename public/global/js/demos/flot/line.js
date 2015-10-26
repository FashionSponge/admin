function perform_line() {
    $(function () {

        /**
         * Data is being initialized when page is loaded
         */
        line_chart_init();

        /**
         * Ajax get call the controller
         * for the ad or user status
         */
        function line_chart_init() {
            var xmlhttp = new XMLHttpRequest();
            var url = $('#ad-get-stat-line-chart-input').val();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    try {
                        var myArr = JSON.parse(xmlhttp.responseText);
                        line_chart_run(myArr['plot1'], myArr['plot2'], myArr['plot3'])
                    } catch(e) {
                        //alert('something went wrong!')
                    }
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }

        /**
         * Print the line chart data and its design
         * @param d1
         * @param d2
         * @param d3
         */
        function line_chart_run(d1, d2, d3) {

            var data, chartOptions;

            data = [{
                  label: "Total visitors 1 ",
                  data: d1
                }
                , {
                  label: "Total Sales",
                  data: d2
                }, {
                  label: "Total Convention",
                  data: d3
                }
            ]

            chartOptions = {
                xaxis: {
                    min: (new Date(2009, 12, 1)).getTime(),
                    max: (new Date(2010, 11, 2)).getTime(),
                    mode: "time",
                    tickSize: [2, "month"],
                    monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    tickLength: 0
                },
                yaxis: {

                },
                series: {
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    points: {
                        show: true,
                        radius: 3,
                        fill: true,
                        fillColor: "#ffffff",
                        lineWidth: 2
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0
                },
                legend: {
                    show: true
                },
                tooltip: true,
                tooltipOpts: {
                    content: '%s: %y'
                },
                colors: mvpready_core.layoutColors
            };

            var holder = $('#line-chart')

            if (holder.length) {
                $.plot(holder, data, chartOptions )
            }
        }



    });
}