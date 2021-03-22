<?php
	namespace view\admin;
	/**
	 * 
	 */
	class AdminView extends \model\admin\ModelAdmin
	{
		
		public function alldealers()
		{

			$result = $this->getAlldealer();
			
			foreach ($result as $value) {
				echo "<tr >";
			    echo "<td class='dealID'>".$value['idDealer']."</td>";
			    echo "<td>".$value['emailDealer']."</td>";
			     

				echo "<td>
					<button type='button' data-toggle='modal' data-target='#modalDeal' >Deals</button>
				</td>";
				echo "</tr>";
			    
			}
			
		}

		public function dealOne()
		{

		
				//print_r($value['idDealer']);	
				$filterResult= $this->onedealer();
				
				foreach ($filterResult as $filterValue) {
				echo "<tr>";
					echo "</br>".$filterValue['dealerProId']."</br>";
					echo "<td>".$filterValue['productName']."</td>";
				    echo "<td>".$filterValue['productBrandName']."</td>";
				    echo "<td>".$filterValue['productSize']."</td>";
				    echo "<td>".$filterValue['productPrize']."</td>";
				    echo "<td>".$filterValue['productQuantity']."</td>";
				 echo "</tr>";
				}
				
		}


		public function testadminview()
		{
			$this->testmodelAdmin();
			echo "this is testadminview";
		}
	}


?>