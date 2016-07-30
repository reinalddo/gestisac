<?php
	$res = $obj_footer->Extraer();
	$row = mysql_fetch_assoc($res);
?>
<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12">
					<p class="copyright text-center">&copy; <?php echo $row["DERECHOS"]; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
                    <?php
					if($row["TWITTER"])
					{
					?>
						<li><a href="<?php echo $row["TWITTER"]; ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                    <?php
					}
					if($row["FACEBOOK"])
					{
					?>
						<li><a href="<?php echo $row["FACEBOOK"]; ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                    <?php
					}
					if($row["YOUTUBE"])
					{
					?>
						<li><a href="<?php echo $row["YOUTUBE"]; ?>" target="_blank"><i class="icon-youtube"></i></a></li>
                    <?php
					}
					if($row["PINTEREST"])
					{
					?>
						<li><a href="<?php echo $row["PINTEREST"]; ?>" target="_blank"><i class="icon-pinterest"></i></a></li>
                    <?php
					}
					if($row["LINKEDIN"])
					{
					?>
						<li><a href="<?php echo $row["LINKEDIN"]; ?>" target="_blank"><i class="icon-linkedin"></i></a></li>
                    <?php
					}
					if($row["INSTAGRAM"])
					{
					?>
						<li><a href="<?php echo $row["INSTAGRAM"]; ?>" target="_blank"><i class="icon-instagram"></i></a></li>
                    <?php
					}
					if($row["DRIBBBLE"])
					{
					?>
						<li><a href="<?php echo $row["DRIBBBLE"]; ?>" target="_blank"><i class="icon-dribbble"></i></a></li>
                    <?php
					}
					?>
					</ul>
				</div>
			</div>
		</div>
	</footer>