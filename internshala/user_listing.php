<?php
ob_start();
include('config.php');
include('header.php');
 
echo "string";
$recorad_page = mysql_query("select * from user");
if(!$recorad_page){
    echo "ghj";
}
$totalrow=mysql_num_rows($recorad_page);  
echo $totalrow; die;
 ?> 
 <div class="box-inner">   
   <div id="content" class="col-lg-10 col-sm-10">
        <div class="box-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
							<th>Date registered</th>
                            <th>Status</th>
							<th>Action</th>
                        </tr>
                        </thead>
						<tbody>
                   <?php 
					if($numrow>0){	
						while($row = mysql_fetch_array($recorad_page)){?>
						
                        <tr>
						
                            <td><?Php echo $row['name'];?></td>
                            
                            <td><?Php echo $row['email'];?></td>
                            <td><?Php echo $row['password'];?></td>
							<td class="center">
							<span class="label-default label">USer</span>
                            </td>
                            <td><?Php echo $row['created'];?></td>
                            
							<td class="center">
                                <a href="user_view.php?id=<?php echo $row['id'];?>"class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>
                                <a href="edit_user.php?id=<?php echo $row['id'];?>"class="btn btn-info" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a href="user_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                            
                        </tr>
						<?php }
							}else{?>
							
							<tr><td colspan="5" style="text-align:center;">No record found.</td></tr>
							<?php }?>
                        </tbody>

						</table>
						
				<?php if($totalrow>0){?>
						<ul class="pagination pagination-centered paging">
                       <?php for($i=1;$i<=$totalrow;$i++){?>
                        <li class="" id="li_<?php echo $i;?>">
                            <a href="user_listing.php?page=<?php echo $i;?>" id="pageNumber_<?php echo $i;?>"><?php echo $i;?></a>
                        </li>
                        <?php } ?>
                        
                    </ul>
					<?php }?>
			   </div>
			</div>
		</div>
<script type ="text/javascript">
	$(document).ready(function(){
		var page = '<?php echo isset($_GET['page'])?$_GET['page']:'1';?>';
		$('#li_'+page).addClass('active');
		$('#pageNumber_'+page).attr('href','javascript:');
	
	});
</script>		
<?php  include('footer.php'); ?>