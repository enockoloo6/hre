<?php require_once("includes/header.php"); ?>
<!--
 You need to include this script on any page that has a Google Map.
 When using Google Maps on your own site you MUST signup for your own API key at:
 https://developers.google.com/maps/documentation/javascript/tutorial#api_key
 After your sign up replace the key in the URL below..
-->
       <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <ol class="breadcrumb">

                <li class="active">
                    <strong>Google maps</strong>
                          
                    <br><br><button id="fe" class="btn btn-primary">Find house locations in the map</button>                   
                </li>

            </ol>
        </div>
          <div class="col-sm-8">
            <div class="title-action">
                <a href="<?= base_url();?>index.php/housesearch" class="btn btn-primary">house search</a>
            </div>
        </div>
    </div>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70&libraries=places"></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

            <div class="row">
                <div class="col-md-10">
                    <div class="ibox">
                        <div class="ibox-content">
                            <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                            <!-- <input id="fe" type="button" value="Find house locations in the map"> -->
                            <div class="hre-googlemap" id="map1"></div>
                        </div>
                    </div>
                </div>
            </div>

             
<?php require_once("includes/footer.php");