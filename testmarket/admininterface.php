<?php
	session_start();
//echo $_SESSION['admin'];
	include 'action/header.php';
	if (!isset($_SESSION['admin'])) {
		echo "error";
		header("location:adminlogin.php");
	}else{
			$dealerview = new view\admin\AdminView;
?>
	<div class="row no-gutters ">
		<div class="col-md-3 left vh-100">

			<div class="bg-light px-3">
		<div class=" d-flex align-items-center align-items-center ">
			<span class="fa-stack fa-2x">
			  <i class="fas fa-user fa-stack-2x"></i> 
			  <i class="fab fa-user fa-stack-1x fa-inverse"></i>
			</span>
			<div class="text-center align-center d-flex ">
				<form action="action/admin/logoutAdmin.inc.php">
					<h4><?php echo$_SESSION['admin'] ?></h4>
					<button type="submit" >Logout</button>
				</form>
			</div>
		</div>
		<div class="mt-3 ">
			<a href="#" class="d-flex justify-content-between dealerlink">
				<p>Dashboard</p>
				<span class="fa-stack">
				  <i class="fas fa-chart-line fa-stack-2x"></i>
				  <i class="fab fa-chart-line fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>




		<div>
			<a href="#" class="d-flex justify-content-between dealerlink">
			<p>Dealer</p>
				<span class="fa-stack">
				  <i class="fas fa-user-tie fa-stack-2x"></i>
				  <i class="fab fa-user-tie fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>
		<div >
			<a href="#" class="d-flex justify-content-between dealerlink">
				<p >User</p>
				<span class="fa-stack">
				  <i class="fas fa-users fa-stack-2x"></i>
				  <i class="fab fa-users fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>
		<div >
			<a href="#" class="d-flex justify-content-between dealerlink">
				<p >Product</p>
				<span class="fa-stack">
				  <i class="fab fa-product-hunt fa-stack-2x"></i>
				 
				</span>
			</a>
		</div>
		

		
	</div>

		</div>
		<div class="col-md-9">
			<div class="bg-warning d-none" id="dashboard">
		dasboard
	</div>
	<div class="bg-warning d-none" id="dealer">
		

		<table class="table table-fit">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Email</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		    	<?php 
					$dealerview->alldealers();
				?>
		  </tbody>
		</table>
	</div>
	<div class="bg-warning d-none" id="user">
		user
	</div>
	<div class="bg-warning d-none" id="product">
		product
	</div>


		</div>
	</div>



<!-- Modal -->
<div class="modal fade" id="modalDeal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
		<table class="table table-fit">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Brand</th>
		      <th scope="col">Size</th>
		      <th scope="col">Price</th>
		      <th scope="col">Quantity</th>
		    
		      
		    </tr>
		  </thead>
		  <tbody>
      		<?php
      		 $dealerview->dealOne();

      		?>
      		</tbody>
		</table>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<?php
	}
	include 'action/footer.php';
?>