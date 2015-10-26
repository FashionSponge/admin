function perform_donut() {
    $(function () {
        /**
         * Data is being initialized when page is loaded
         */
        break_down_init();

        /**
         * Ajax get call the controller
         * for the ad or user status
         */
        function break_down_init() {
            var xmlhttp = new XMLHttpRequest();
            var url = $('#ad-get-stat-break-down-input').val();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    try {
                        var myArr = JSON.parse(xmlhttp.responseText);
                        break_down_run(myArr);
                    } catch(e) {
                    }
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }

        /**
         * Print the product break down data and its design
         * @param data
         */
        function break_down_run(data) {

            var chartOptions;

            chartOptions = {
                series: {
                    pie: {
                        show: true,
                        innerRadius: .5,
                        stroke: {
                            width: 5
                        }
                    }
                },
                legend: {
                    position: 'ne'
                },
                tooltip: true,
                tooltipOpts: {
                    content: '%s: %y'
                },
                grid: {
                    hoverable: true
                },
                colors: mvpready_core.layoutColors
            }

            var holder = $('#donut-chart')

            if (holder.length) {
            $.plot(holder, data, chartOptions )
        }
        }

    });

}