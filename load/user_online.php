<?php
	include("../assets/dbconnect.php");
	include("../assets/function.php");
	// include("function.php");
?>
<ul class="notification-body">

<?php
								$txtcari=@$_GET['txtcari'];
								if(isset($txtcari))
								{
									$i = 1;
									$myquery="select * FROM users";
								}
								else
								{
							$i = 1;
									$myquery="select * FROM users";
								}	
								$daftarsiswa=mysql_query($myquery) or die (mysql_error());
								while($dataku=mysql_fetch_object($daftarsiswa))
								{
							?>
	<li>
		<span class="<?php if($dataku->status=='1') echo "bg-color-blueLight";?>">
			<a href="Profile.php?id=<?php echo  $dataku->id?>" class="msg">
				<img src="img/4.png" alt="" class="air air-top-left margin-top-5" width="40" height="40">
				<span class="from">
				<?php
				  $curenttime="2017-04-11 20:14:09";
				  date_default_timezone_set("Asia/Bangkok");
				  // date_default_timezone_get();
				  $time_ago =strtotime($curenttime);
				  echo timeAgo($time_ago);
				?>
 <i class="icon-paperclip"></i></span>
				<time> <?php echo time_elapsed_string('2017-04-11 19:22:35')?> </time>
				<span class="subject"><?php echo  $dataku->userEmail?>  </span>
				<a href="javascript:void(0);"><i class="fa fa-circle txt-color-green"></i> Online</a>
				<!-- <span class="msg-body">posisi </span> -->
			</a>
		</span>
	</li>
	<?php } ?>
</ul>