function header_status() {
    $(function () {

        /**
         * Data is being initialized when page is loaded
         */
        header_status_init();

        /**
         * Ajax get call the controller
         */
        function header_status_init() {
            var xmlhttp = new XMLHttpRequest();
            var url = $('#ad-get-header-status-input').val();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    try {
                        var myArr = JSON.parse(xmlhttp.responseText);
                        header_status_run(myArr)
                    } catch(e) {
                    }
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }

        /**
         * Print the data and its design
         */
        function header_status_run(myArr) {

            document.getElementById('revenue-today').innerHTML         = myArr[0]['revenue today'];
            document.getElementById('revenue-this-month').innerHTML    = myArr[0]['revenue this month'];
            document.getElementById('total-users').innerHTML           = myArr[0]['total users'];
            document.getElementById('currently-active-uses').innerHTML = myArr[0]['currently active uses'];
        }

    });
}