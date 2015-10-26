function perform_stacked_horizontal() {
    $(function () {
        /**
         * Data is being initialized when page is loaded
         */
        effective_cost_per_mile_init();

        /**
         * Ajax get call the controller
         * for the ad or user status
         */
        function effective_cost_per_mile_init() {
            var xmlhttp = new XMLHttpRequest();
            var url = $('#ad-get-effective-cost-per-mile-input').val();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    try {
                        var myArr = JSON.parse(xmlhttp.responseText);
                        effective_cost_per_mile_run(myArr);
                    } catch(e) {
                    }
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }

        /**
         * Print the line chart data and its design
         * @param ds
         */
        function effective_cost_per_mile_run(ds) {

            var data, chartOptions

            data = [{
                label: 'Product 1',
                data: ds[1]
            }, {
                label: 'Product 2',
                data: ds[0]
            }, {
                label: 'Product 3',
                data: ds[2]
            }];

            chartOptions = {
                xaxis: {},
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0
                },
                series: {
                    stack: true
                },
                bars: {
                    horizontal: true,
                    show: true,
                    barWidth: .25,
                    fill: true,
                    lineWidth: 0,
                    fillColor: {colors: [{opacity: 1}, {opacity: 1}]}
                },
                tooltip: true,
                tooltipOpts: {
                    content: '%s: %x'
                },
                colors: mvpready_core.layoutColors
            };

            var holder = $('#stacked-horizontal-chart')

            if (holder.length) {
                $.plot(holder, data, chartOptions)
            }
        }
    });
}