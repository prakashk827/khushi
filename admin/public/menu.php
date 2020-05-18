<?php include_once("properties/companyInfo.php");?>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/logo.png" alt="User Image">
        <div>
            
          <p class="app-sidebar__user-name"><?php echo $_SESSION["uname"];?></p>
          <p class="app-sidebar__user-designation"><?php title()?></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li><a class="app-menu__item" href="../index.php"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">Visit Site</span></a></li>

        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item" href="https://www.addthis.com/dashboard#dashboard-analytics"><i class="app-menu__icon fa fa-line-chart"></i><span class="app-menu__label">
          <?php analyticsTitle();?>
        </span></a></li>
        <li><a class="app-menu__item" href="contact-list.php"><i class="app-menu__icon fa <?php contactList();?>"></i><span class="app-menu__label"><?php  contactListTitle();?></span></a></li>
        
        <li><a class="app-menu__item" href="LeadList.php"><i class="app-menu__icon fa <?php leadListIcon();?>"></i><span class="app-menu__label"><?php  leadListTitle();?></span></a></li>

        <li><a class="app-menu__item" href="projects.php"><i class="app-menu__icon fa <?php projectsAddIcon();?>"></i><span class="app-menu__label"><?php  projectsTitle();?></span></a></li>

        <li><a class="app-menu__item" href="projectsList.php"><i class="app-menu__icon fa <?php projectsViewIcon();?>"></i><span class="app-menu__label"><?php  projectsTitle();?></span></a></li>
        
 </ul>
    </aside>