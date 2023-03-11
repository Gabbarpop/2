<head>
 <!-- <script src="path/to/your/javascript/file.js"></script>
-->
</head>

<style>
.sidebar-submenu {
  display: none;
}
.sidebar-item.active > .sidebar-submenu {
  display: block;
}
</Style>

<aside class="main-sidebar sidebar-dark-primary elevation-8">

    <div class="dropdown">

   	<a href="./" class="brand-link">

        <?php if($_SESSION['login_type'] == 1): ?>

        <h3 class="text-center p-0 m-0"><b>ADMIN</b></h3>

        <?php else: ?>

        <h3 class="text-center p-0 m-0"><b>STAFF</b></h3>

        <?php endif; ?>



    </a>



    </div>

    <div class="sidebar pb-4 mb-4 ">

      <nav class="mt-2">

	   <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item dropdown">

            <a href="./" class="nav-link nav-home">

              <i class="nav-icon fas fa-tachometer-alt"></i>

			   <p>		

                Dashboard

				</p>

            </a>

          </li>   

		  <?php if($_SESSION['login_type'] == 1): ?>

          <li class="nav-item">

            <a href="#" class="nav-link nav-edit_branch">

              <i class="nav-icon fas fa-building"></i>

              <p>

                Configuration

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

         <ul class="nav nav-treeview" style="display: block;">

          <li class="nav-item">

                <a href="./index.php?page=list" class="nav-link nav-list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Company</p>

                </a>

      	    <li class="nav-item">

                <a href="./index.php?page=admin_panel" class="nav-link nav-admin_panel tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Admin Panel</p>

			    </a>

			 </li>

			<li class="nav-item">

                <a href="./index.php?page=new_branch" class="nav-link nav-new_branch tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>User Management</p>

                </a>

              </li>

		 <ul class="nav nav-treeview" style="display: block;">

             <li class="nav-item ">

			  <a href="#" class="nav-link  nav-new_branch tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Settings</p>

                </a>

              </li>

			  </ul>

			 <li class="nav-item has-treeview menu-open">

			 <a href="./index.php?page=continent" class="nav-link nav-continent" >

                  <i class="fas fa-angle-right nav-icon"></i>

                <p>

                   Masters

                    <i class="right fas fa-angle-left"></i>

                  </p>

                </a>



               <ul class="nav nav-treeview" style="display: block;">

                  <li class="nav-item">

                    <a href="./index.php?page=continent#" class="nav-link">

                      <i class="far fa-dot-circle nav-icon"></i>

                      <p>Continent</p>

                    </a>

                  </li>

				  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="far fa-dot-circle nav-icon"></i>

                      <p>Zone</p>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="far fa-dot-circle nav-icon"></i>

                      <p>Country</p>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="far fa-dot-circle nav-icon"></i>

                      <p>State</p>

                    </a>

                  </li>

                  <li class="nav-item">

					<a href="#" class="nav-link">

						<i class="far fa-circle nav-icon"></i>

						<p>City</p>

					</a>

				   </li>

				</ul>

			</li>

			</ul>





			<ul class="nav nav-treeview" style="display: block;">

			   <li class="nav-item has-treeview menu-open">

                <a href="./index.php?page=new_branch" class="nav-link nav-new_branch tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Template</p>

                </a>

              </li>

              <li class="nav-item">

            <a href="./index.php?page=branch_list" class="nav-link nav-branch_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>List</p>

                </a>

              </li>

            </ul>



<li class="nav-item">

            <a href="#" class="nav-link nav-edit_branch">

              <i class="nav-icon fas fa-building"></i>

              <p>

                Client Management

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./index.php?page=new_branch" class="nav-link nav-new_branch tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Business Dashboard</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=branch_list" class="nav-link nav-branch_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Quotation</p>

                </a>

              </li>

			  <li class="nav-item">

                <a href="./index.php?page=branch_list" class="nav-link nav-branch_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Sales</p>

                </a>

              </li>

			 <!-- Customer tree to child list -->

			 <ul class="nav nav-treeview" style="display: block;">

             <li class="nav-item has-treeview menu-open">

                <a href="#" class="nav-link">

                  <i class="fa fa-fw fa-cubes nav-icon"></i>

                  <p>

                    CM

                    <i class="right fas fa-angle-left"></i>

                  </p>

                </a>

                <ul class="nav nav-treeview" style="display: block;">

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="fas fa-angle-right nav-icon"></i>

                      <p>Add Customer</p>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="fas fa-angle-right nav-icon"></i>

                      <p>Quotation</p>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="fas fa-angle-right nav-icon"></i>

                      <p>Sales</p>

                    </a>

                  </li>

                </ul>

              </li>

              <li class="nav-item">

                <a href="#" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>list 1</p>

                </a>

</ul>

              </li>



			  <li class="nav-item">

                <a href="./index.php?page=branch_list" class="nav-link nav-branch_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>List</p>

                </a>

              </li>

            </ul>

          </li>

		  </li>



		  <li class="nav-item">

            <a href="#" class="nav-link nav-edit_staff">

              <i class="nav-icon fas fa-users"></i>

              <p>

                Billing

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Billing Structure</p>

                </a>

              </li>

			  <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Reconcilation</p>

                </a>

              </li>

			  <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Invoice Generation</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Reports</p>

                </a>

              </li>

            </ul>

          </li>

		  <li class="nav-item">

            <a href="#" class="nav-link nav-edit_staff">

              <i class="nav-icon fa fa-fw fa-search"></i>          <p>

                Pincode Search

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Add New</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>List</p>

                </a>

              </li>

            </ul>

          </li>

		  <li class="nav-item">

            <a href="#" class="nav-link nav-edit_staff">

              <i class="nav-icon fas fa-users"></i>

              <p>

                Payments

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Payment Sync</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>List</p>

                </a>

              </li>

            </ul>

          </li>



		<!-- Customer tree to child list -->  	 

        <li class="nav-item">

            <a href="#" class="nav-link nav-edit_branch">

              <i class="nav-icon fas fa-building"></i>

              <p>

                Reports

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>       

                <ul class="nav nav-treeview" style="display: block;">

             <li class="nav-item has-treeview menu-open" .>

                <a href="#" class="nav-link">

                  <i class="fa fa-fw fa-cubes nav-icon"></i>

                  <p>

                    Test

                    <i class="right fas fa-angle-left"></i>

                  </p>

                </a>





                <ul class="nav nav-treeview" style="display: block;">

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="fas fa-angle-right nav-icon"></i>

                      <p>Add Customer</p>

                    </a>

                  </li>  

</ul>				  

				</li>

				</ul>

				</li>

             <!-- Customer tree to child list -->

			    <ul class="nav nav-treeview" style="display: block;">

		 <li class="nav-item has-treeview menu-open">

            <a href="#" class="nav-link nav-edit_staff">

              <i class="nav-icon fa fa-fw fa-paper-plane-o"></i>

              <p>

                Operation - Activity

                <i class="right fas fa-angle-left"></i>

              </p>

	  </a>



			  <ul class="nav nav-treeview" style="display: block;">

			   <li class="nav-item has-treeview menu-open">

			   <a href="#" class="nav-link">

                  <i class="fa fa-fw fa-fighter-jet nav-icon"></i>

                  <p>

                    Pickup

                    <i class="right fas fa-angle-left"></i>

                  </p>

                </a>



                <ul class="nav nav-treeview" style="display: block;">

                  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="fas fa-angle-right nav-icon"></i>

                      <p>Booking Management for Client</p>

                    </a>

                  </li>

				  </ul>

                  <ul class="nav nav-treeview" style="display: block;">

				  <li class="nav-item">

                    <a href="#" class="nav-link">

                      <i class="fas fa-angle-right nav-icon"></i>

                      <p>Pickup Management</p>

                    </a>

                  </li>

				  </ul>

			<ul class="nav nav-treeview" style="display: block;">

              <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Booking Management vendor assignement</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>In-Transit Management</p>

                </a>

              </li>

            </ul>



		   <ul class="nav nav-treeview" style="display: block;">

              <li class="nav-item">

                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Delivery Management</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>RTO</p>

                </a>

              </li>

            </ul>

			</li>

		  </ul>

		  </li>

		  </ul>





        <?php endif; ?>

          <li class="nav-item">

            <a href="#" class="nav-link nav-edit_parcel">

              <i class="nav-icon fas fa-boxes"></i>

              <p>

                Parcels

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./index.php?page=new_parcel" class="nav-link nav-new_parcel tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>Add New</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index.php?page=parcel_list" class="nav-link nav-parcel_list nav-sall tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p>List All</p>

                </a>

              </li>

              <?php 

              $status_arr = array("Item Accepted<br/>by Courier","Collected","Shipped","In-Transit","Arrived At<br/>Destination","Out for Delivery","Ready to Pickup","Delivered","Picked-up","Unsuccessfull<br/>Delivery Attempt");

              foreach($status_arr as $k =>$v):

              ?>

              <li class="nav-item">

                <a href="./index.php?page=parcel_list&s=<?php echo $k ?>" class="nav-link nav-parcel_list_<?php echo $k ?> tree-item">

                  <i class="fas fa-angle-right nav-icon"></i>

                  <p><?php echo $v ?></p>

                </a>

              </li>

            <?php endforeach; ?>

            </ul>

          </li>

           <li class="nav-item dropdown">

            <a href="./index.php?page=track" class="nav-link nav-track">

              <i class="nav-icon fas fa-search"></i>

              <p>

                Track Parcel

              </p>

            </a>

          </li>  

           <li class="nav-item dropdown">

            <a href="./index.php?page=reports" class="nav-link nav-reports">

              <i class="nav-icon fas fa-file"></i>

              <p>

                Reports

              </p>

            </a>

          </li>  

        </ul>

      </nav>
<script>
const subMenus = document.querySelectorAll(".sub-menu");

subMenus.forEach((subMenu) => {
  const parentLi = subMenu.parentElement;
  parentLi.addEventListener("click", (event) => {
    event.preventDefault();
    subMenu.classList.toggle("show");
  });
});

const burger = document.querySelector(".burger");
const sidebar = document.querySelector(".sidebar");

burger.addEventListener("click", () => {
  sidebar.classList.toggle("show");
});
</script>

    </div>

  </aside>

  <script>

  	$(document).ready(function(){

      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';

  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';

      if(s!='')

        page = page+'_'+s;

  		if($('.nav-link.nav-'+page).length > 0){

             $('.nav-link.nav-'+page).addClass('active')

  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){

            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')

  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')

  			}

        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){

          $('.nav-link.nav-'+page).parent().addClass('menu-open')

        }



  		}



  	})

  </script>

  <script>
  const submenus = document.querySelectorAll('.sidebar-submenu');

submenus.forEach(submenu => {
  const parentItem = submenu.parentElement;
  parentItem.addEventListener('click', () => {
    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
  });
});
</script>