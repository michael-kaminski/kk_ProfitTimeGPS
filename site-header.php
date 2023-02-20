<nav class="py-2 d-none d-xxl-block">
    <div class="container-fluid d-flex flex-wrap top-nav">
      <div class="me-auto"></div>
      <?php wp_nav_menu( array( 'theme_location' => 'top-menu'   ) ); ?>
      
      <form action="<?php echo home_url(); ?>" id="search-form" method="get" class="col-12 col-lg-auto mb-3 mb-lg-0" >
            <div class="search-field">
                <table class="">
                    <tbody>
                        <tr>
                            <td width="285">
                                <input type="search" class="form-control" name="s" id="s" value="Search..." onblur="if(this.value=='')this.value='Search...'" onfocus="if(this.value=='Search...')this.value=''" />
                            </td>
                            <td width="35" class="text-center">
                                <input type="hidden" value="submit" />
                                <a class="search-icon"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</nav>
<header class="py-3 mb-4 d-none d-xxl-block">
    <div class="container-fluid d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none logo">
        <span>winning with</span><img src="../wp-content/themes/ProfitTimeGPS/img/vAuto-ProfitTimeGPS-rgb.svg">
      </a>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu'   ) ); ?>     
    </div>
</header>

<header class="d-xxl-none mobile">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <a href="/" class="mb-3 mt-3 mb-xxl-0 me-lg-auto text-dark text-decoration-none logo float-start text-center">
                    <span>winning with</span><br/>
                    <img src="../wp-content/themes/ProfitTimeGPS/img/vAuto-ProfitTimeGPS-rgb.svg">
                </a>
            </div>
            <div class="col">
                <button class="mobile-menu-icon float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <img src="../wp-content/themes/ProfitTimeGPS/img/icon-menu.svg">
                </button>
            </div>
        </div>
    </div>
</header>





<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="mobile-top-menu" id="mobile-top">
            <?php wp_nav_menu( array( 'theme_location' => 'top-menu'   ) ); ?>
        </div>
    </div>
    <div class="offcanvas-body">
        
        <form action="<?php echo home_url(); ?>" id="search-form" method="get" class="col-12 col-lg-auto mb-3 mb-lg-0" >
            <input type="search" class="form-control" name="s" id="s" value="Search..." onblur="if(this.value=='')this.value='Search...'" onfocus="if(this.value=='Search...')this.value=''" />
            <input type="hidden" value="submit" />
            <a class="search-icon"></a>
        </form>
        <div class="mobile-header-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu'   ) ); ?>
        </div>
        <div class="mobile-top-menu" id="mobile-bottom">
            <?php wp_nav_menu( array( 'theme_location' => 'top-menu'   ) ); ?>
        </div>
    </div>
</div>