<?php
	include("assets/dbconnect.php");
	// include("function.php");
?>
<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
							<thead>			                
								<tr>
									<th data-hide="phone">No.</th>
									<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Nama</th>
									<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Tanggal Lahir</th>
									<th>Umur</th>
									<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i> Photo</th>
									<th data-hide="phone,tablet">No. Punggung</th>
									<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Posisi</th>
								</tr>
							</thead>
							<tbody>
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
								<tr bgcolor="<?php if($dataku->status=='1') echo "#3ab132";?>">
									<td align="center"><?php echo  $i++ ?></td>
									<td><a href="Profile.php?id=<?php echo  $dataku->id?>"><?php echo  $dataku->userEmail?></a></td>
									<td align="center"><?php echo  $dataku->userName?></td>
									<td align="center"><?php echo $dataku->umur?></td>
									<td align="center"><img src="<?php echo $dataku->photo?>"></td>
									<td align="center">Fogo</td>
									<td>03/04/14</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>