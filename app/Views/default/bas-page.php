
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?= $this->assetUrl('js/vendor/jquery-1.12.4.min.js') ?>"><\/script>')</script>

    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script> $.fn.modal || document.write('<script src="<?= $this->assetUrl('js/vendor/bootstrap-3.3.7.min.js') ?>"><\/script>')</script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= $this->assetUrl('js/modal.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/plugins.js') ?>"></script>

    <!-- Chargement programme principal -->
    <script src="<?= $this->assetUrl('js/main.js') ?>"></script>

    
    <!-- Google Analytics: changer UA-XXXXX-X par l'ID de votre site. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

</body>
</html>