<?php $user = Session::get('user'); ?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index_2">
    <div class="sidebar-brand-icon">
      <br><br>
      <img src="../images/MPlogo.png" width="200">
      <!--<i class="fas fa-laugh-wink"></i>-->
    </div>
    <br>
    <div class="sidebar-brand-text mx-3"><!--SB Admin <sup>2</sup>--></div>
  </a>

  <!-- Divider -->
  <div class="sidebar-divider"><br><br></div>
  <hr class="sidebar-divider">
  



  <!-- Heading -->
  <div class="sidebar-heading">
    MENU
  </div>

  <!-- Nav Item - Pages Collapse Menu 
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>แบบประเมินความเสี่ยง</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="#">Buttons</a>
        <a class="collapse-item" href="#">Cards</a>
      </div>
    </div>
  </li>
-->
@if(!empty($user[0]))
@if($user[0]->position_id==1)
  <li class="nav-item">
    <a class="nav-link collapsed" href="../question" >
      <i class="fas fa-fw fa-cog"></i>
      <span>แบบประเมินความเสี่ยงสำหรับผู้ใช้งานทั่วไป</span>
      
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="../result" >
      <i class="fas fa-fw fa-cog"></i>
      <span>ผลการประเมินความเสี่ยง</span>
      
    </a>
  </li>
@endif
@if($user[0]->position_id==2)
  <li class="nav-item">
    <a class="nav-link collapsed" href="../questionadmin" >
      <i class="fas fa-fw fa-cog"></i>
      <span>แบบประเมินความเสี่ยงสำหรับผู้ดูแลระบบสารสนเทศ</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="../resultadmin" >
      <i class="fas fa-fw fa-cog"></i>
      <span>ผลการประเมินความเสี่ยง</span>
    </a>
  </li>
@endif
@if($user[0]->position_id==3)
  <li class="nav-item">
    <a class="nav-link collapsed" href="question" >
      <i class="fas fa-fw fa-cog"></i>
      <span>แบบประเมินความเสี่ยงสำหรับผู้ใช้งานทั่วไป</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="questionadmin" >
      <i class="fas fa-fw fa-cog"></i>
      <span>แบบประเมินความเสี่ยงสำหรับผู้ดูแลระบบสารสนเทศ</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="report" >
      <i class="fas fa-fw fa-cog"></i>
      <span>รายงาน</span>
    </a>
  </li>
@endif
@else
<li class="nav-item">
  <a class="nav-link collapsed" href="loginForm" >
    <i class="fas fa-fw fa-cog"></i>
    <span>เข้าสู่ระบบ</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="signup" >
    <i class="fas fa-fw fa-cog"></i>
    <span>ลงทะเบียน</span>
  </a>
</li>
@endif
</ul>
<!-- End of Sidebar -->