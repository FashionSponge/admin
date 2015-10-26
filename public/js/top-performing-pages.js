function perform_top_performing_pages() {
    $(function () {
        /**
         * Data is being initialized when page is loaded
         */
        top_performing_page_init();

        /**
         * Ajax get call the controller
         * for the top performing pages
         */
        function top_performing_page_init() {
            //console.log('top performing page loaded');
            var xmlhttp = new XMLHttpRequest();
            var url = $('#ad-get-top-performing-pages-input').val();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    try {
                        var myArr = JSON.parse(xmlhttp.responseText);
                        top_performing_page_run(myArr)
                    } catch (e) {
                    }
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }

        /**
         * Print the top performing pages data and its design
         * @param myArr
         */
        function top_performing_page_run(myArr) {

            document.getElementById('top-performing-pages-table').innerHTML = '';
            var ctd, ntd;
            for (i = 0; i < myArr.length; i++) {
                ctd = document.getElementById('top-performing-pages-table').innerHTML;
                ntd = "<tr> <td>" + myArr[i][0] + "</td> <td class=\"text-right\">" + myArr[i][1] + "</td> <td class=\"text-right\">" + myArr[i][2] + "</td> </tr>";
                document.getElementById('top-performing-pages-table').innerHTML = ctd + ntd;
            }
        }
    });
}