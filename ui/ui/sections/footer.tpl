            </div>
        </div>
        <!--**********************************
                Content body end
        ***********************************-->

        <!--**********************************
                Footer start
            ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Designed & Developed by <span class="heart"></span> <a href="#">Codevibe</a> 2024</p>
            </div>
        </div>
        <!--**********************************
                Footer end
        ***********************************-->
        </div>
        <!--**********************************
            Scripts
        ***********************************-->
        
        <!--
        <script src="ui/ui/scripts/jquery.min.js"></script>
        <script src="ui/ui/scripts/plugins/select2.min.js"></script>
        <script src="ui/ui/assets/vendor/global/global.min.js"></script>
        <script src="ui/ui/assets/js/dashboard/dashboard-1.js"></script>
        <script src="ui/ui/assets/js/custom.min.js"></script>
        <script src="ui/ui/assets/js/deznav-init.js"></script>
        <script src="ui/ui/assets/js/styleSwitcher.js"></script>
        <script src="ui/ui/assets/vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="ui/ui/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="ui/ui/assets/vendor/peity/jquery.peity.min.js"></script>
        <script src="ui/ui/assets/js/styleSwitcher.js"></script>
        <script src="ui/ui/assets/js/demo.js"></script>-->
        <!--<script src="ui/ui/scripts/jquery.min.js"></script>
        <script src="ui/ui/assets/vendor/global/global.min.js"></script>
        <script src="ui/ui/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="ui/ui/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="ui/ui/assets/vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="ui/ui/scripts/plugins/select2.min.js"></script>
        <script src="ui/ui/assets/vendor/peity/jquery.peity.min.js"></script>
        <script src="ui/ui/assets/js/dashboard/dashboard-1.js"></script>
        <script src="ui/ui/assets/js/custom.min.js"></script>
        <script src="ui/ui/assets/js/deznav-init.js"></script>-->
        <script src="ui/ui/scripts/jquery.min.js"></script>
        <script src="ui/ui/assets/vendor/global/global.min.js"></script>
        <script src="ui/ui/scripts/bootstrap.min.js"></script>
    	<script src="ui/ui/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    	<script src="ui/ui/assets/vendor/chart.js/Chart.bundle.min.js"></script>
    	
    	<!-- Chart piety plugin files -->
        <script src="ui/ui/assets/vendor/peity/jquery.peity.min.js"></script>
    	
    	<!-- Apex Chart -->
    	<!--<script src="ui/ui/assets/vendor/apexchart/apexchart.js"></script>-->
    	
    	<!-- Dashboard 1 -->
    	<script src="ui/ui/assets/js/dashboard/dashboard-1.js"></script>
    	
        <script src="ui/ui/assets/js/custom.min.js"></script>
    	<script src="ui/ui/assets/js/deznav-init.js"></script>
    	<script src="ui/ui/assets/js/demo.js"></script>
        <!--<script src="ui/ui/assets/js/styleSwitcher.js"></script>   -->
        
        
        <script src="ui/ui/scripts/plugins/select2.min.js"></script>
        <script src="ui/ui/scripts/pace.min.js"></script>
        <script src="ui/ui/scripts/custom.js"></script>



        {if isset($xfooter)}
            {$xfooter}
        {/if}
        {literal}
            <script>
                $(document).ready(function() {
                // Select2 initialization
                $('.select2').select2({
                    width: '100%',
                    height: '52px',
                    containerCssClass: ':all:'
                });
                $('.select2tag').select2({
                    width: '100%',
                    height: '52px',
                    tags: true,
                    containerCssClass: ':all:'
                });
    
                // Button click event listeners
                var listAtts = document.querySelectorAll(`button[type="submit"]`);
                listAtts.forEach(function(el) {
                    if (el.addEventListener) {
                        el.addEventListener("click", function() {
                            $(this).html(`<span class="loading"></span>`);
                        }, false);
                    } else {
                        if (el.attachEvent) {
                            el.attachEvent("click", function() {
                                $(this).html(`<span class="loading"></span>`);
                            });
                        }
                    }
                });

                var listAtts = document.querySelectorAll(`[api-get-text]`);
                listAtts.forEach(function(el) {
                    $.get(el.getAttribute('api-get-text'), function(data) {
                        el.innerHTML = data;
                    });
                });

                function setCookie(name, value, days) {
                    var expires = "";
                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                    }
                    document.cookie = name + "=" + (value || "") + expires + "; path=/";
                }

                function getCookie(name) {
                    var nameEQ = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                    }
                    return null;
                }
            </script>
        {/literal}
    </body>

</html>