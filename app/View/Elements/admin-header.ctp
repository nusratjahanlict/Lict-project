
<header class="main-header">
<!-- Logo -->
<a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--        <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">-->
        <?php echo $this->Html->image('user2-160x160.jpg', ['class' => 'user-image','alt' => 'User Image'])?>
        <span class="hidden-xs"><?php echo "&nbsp;User&nbsp;"// h($admin['Admin']['name']); ?></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
<!--            <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
            <?php echo $this->Html->image('user2-160x160.jpg', ['class' => 'user-image','alt' => 'User Image'])?>
            <p>
                <?php echo "User"//h($admin['Admin']['name']); ?>
                <small>Admin/Doc/Patient</small>

            </p>
            <br><br><br>
            <?php echo $this->Html->link(__('Logout'), array('controller'=>'users','action' => 'logout'),array('class'=>'btn btn-default btn-flat')); ?>
        </li>
        <!-- Menu Body -->

        <!-- Menu Footer-->
    </ul>
</li>
<!-- Control Sidebar Toggle Button -->
</ul>
</div>
</nav>
</header>
