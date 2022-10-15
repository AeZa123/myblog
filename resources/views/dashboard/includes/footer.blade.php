<footer>
    <div class="footer-area">
        <p>© Copyright 2022. All right reserved. Template by <a href="#">Colorlib</a>.</p>
    </div>
</footer>

 <!-- jquery latest version -->
 <script src="{{ asset('assets-dashboard/js/vendor/jquery-2.2.4.min.js') }}"></script>
 <!-- bootstrap 4 js -->
 <script src="{{ asset('assets-dashboard/js/popper.min.js') }}"></script>
 <script src="{{ asset('assets-dashboard/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets-dashboard/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets-dashboard/js/metisMenu.min.js') }}"></script>
 <script src="{{ asset('assets-dashboard/js/jquery.slimscroll.min.js') }}"></script>
 <script src="{{ asset('assets-dashboard/js/jquery.slicknav.min.js') }}"></script>

 <!-- start chart js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <!-- start highcharts js -->
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <!-- start zingchart js -->
 <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
 <script>
 zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
 ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
 </script>
 <!-- all line chart activation -->
 <script src="{{ asset('assets-dashboard/js/line-chart.js') }}"></script>
 <!-- all pie chart -->
 <script src="{{ asset('assets-dashboard/js/pie-chart.js') }}"></script>

@yield('foot')

 <!-- others plugins -->
 <script src="{{ asset('assets-dashboard/js/plugins.js') }}"></script>
 <script src="{{ asset('assets-dashboard/js/scripts.js') }}"></script>
