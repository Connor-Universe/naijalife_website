<!--footer section start-->
			<footer>
			<?php
                           // include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){


               ?>
			   <p>&copy; 2020 Admin Panel Made by  <a href="https://pristinedigitals.com/" target="_blank">Pristine Digitals</a></p>
          <?php } ?>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>