
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JVECTORMAP
                    <small>Taken from <a href="http://jvectormap.com/" target="_blank">jvectormap.com</a></small>
                </h2>
            </div>
            <!-- Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXAMPLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example -->
        </div>
   
    <!-- Google Maps API Js -->
    <script src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script>
    <!-- JVectorMap Plugin Js -->
    <script src="<?= base_url()?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url()?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Custom Js -->
    <script src="<?= base_url()?>public/js/pages/maps/jvectormap.js"></script>
