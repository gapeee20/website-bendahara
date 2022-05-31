<?php $cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2); ?>  
<?php $sub_tab = $this->uri->segment(3)==''?'dashboard': $this->uri->segment(3); ?> 
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
  <!-- User Info -->
  <div class="user-info">
    <div class="image">
      <img src="<?= base_url()?>public/images/user.png" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
      <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($this->session->userdata('name'));?></div>
      <div class="email"><?= $this->session->userdata('email');?></div>
      <div class="btn-group user-helper-dropdown">
        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
        <ul class="dropdown-menu pull-right">
          <li id=""><a href="<?= base_url('user/profile'); ?>"><i class="material-icons">person</i>Profile</a></li>
          <li role="seperator" class="divider"></li>
          <li id=""><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
          <li id=""><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
          <li id=""><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
          <li role="seperator" class="divider"></li>
          <li id=""><a href="<?= base_url('auth/logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- #User Info -->
  <!-- Menu -->
  <div class="menu">
    <ul class="list">
      <li class="header">MAIN NAVIGATION</li>
      <li id="profile">
        <a href="<?= base_url('user/profile');?>">
          <i class="material-icons">person</i>
          <span>Profile</span>
        </a>
      </li>
      <li id="typography">
        <a href="<?= base_url('user/typography');?>">
          <i class="material-icons">text_fields</i>
          <span>Typography</span>
        </a>
      </li>
      <li id="helper">
        <a href="<?= base_url('user/helper');?>">
          <i class="material-icons">layers</i>
          <span>Helper Classes</span>
        </a>
      </li>
      <li id="widgets">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">widgets</i>
          <span>Widgets</span>
        </a>
        <ul class="ml-menu">
          <li id="cards">
            <a href="javascript:void(0);" class="menu-toggle">
              <span>Cards</span>
            </a>
            <ul class="ml-menu">
              <li id="">
                <a href="<?= base_url('user/widgets/basic');?>">Basic</a>
              </li>
              <li id="">
                <a href="<?= base_url('user/widgets/colored');?>">Colored</a>
              </li>
              <li id="">
                <a href="<?= base_url('user/widgets/no_header');?>">No Header</a>
              </li>
            </ul>
          </li>
          <li id="infobox">
            <a href="javascript:void(0);" class="menu-toggle">
              <span>Infobox</span>
            </a>
            <ul class="ml-menu">
              <li id="">
                <a href="<?= base_url('user/widgets/infobox_1');?>">Infobox-1</a>
              </li>
              <li id="">
                <a href="<?= base_url('user/widgets/infobox_2');?>">Infobox-2</a>
              </li>
              <li id="">
                <a href="<?= base_url('user/widgets/infobox_3');?>">Infobox-3</a>
              </li>
              <li id="">
                <a href="<?= base_url('user/widgets/infobox_4');?>">Infobox-4</a>
              </li>
              <li id="">
                <a href="<?= base_url('user/widgets/infobox_5');?>">Infobox-5</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li id="ui">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">swap_calls</i>
          <span>User Interface (UI)</span>
        </a>
        <ul class="ml-menu">
          <li id="alerts">
            <a href="<?= base_url('user/ui/alerts');?>">Alerts</a>
          </li>
          <li id="animations">
            <a href="<?= base_url('user/ui/animations');?>">Animations</a>
          </li>
          <li id="badges">
            <a href="<?= base_url('user/ui/badges');?>">Badges</a>
          </li>

          <li id="breadcrumbs">
            <a href="<?= base_url('user/ui/breadcrumbs');?>">Breadcrumbs</a>
          </li>
          <li id="buttons">
            <a href="<?= base_url('user/ui/buttons');?>">Buttons</a>
          </li>
          <li id="collapse">
            <a href="<?= base_url('user/ui/collapse');?>">Collapse</a>
          </li>
          <li id="colors">
            <a href="<?= base_url('user/ui/colors');?>">Colors</a>
          </li>
          <li id="dialogs">
            <a href="<?= base_url('user/ui/dialogs');?>">Dialogs</a>
          </li>
          <li id="icons">
            <a href="<?= base_url('user/ui/icons');?>">Icons</a>
          </li>
          <li id="labels">
            <a href="<?= base_url('user/ui/labels');?>">Labels</a>
          </li>
          <li id="list_group">
            <a href="<?= base_url('user/ui/list_group');?>">List Group</a>
          </li>
          <li id="media_object">
            <a href="<?= base_url('user/ui/media_object');?>">Media Object</a>
          </li>
          <li id="modals">
            <a href="<?= base_url('user/ui/modals');?>">Modals</a>
          </li>
          <li id="notifications">
            <a href="<?= base_url('user/ui/notifications');?>">Notifications</a>
          </li>
          <li id="pagination">
            <a href="<?= base_url('user/ui/pagination');?>">Pagination</a>
          </li>
          <li id="preloaders">
            <a href="<?= base_url('user/ui/preloaders');?>">Preloaders</a>
          </li>
          <li id="progressbars">
            <a href="<?= base_url('user/ui/progressbars');?>">Progress Bars</a>
          </li>
          <li id="range_sliders">
            <a href="<?= base_url('user/ui/range_sliders');?>">Range Sliders</a>
          </li>
          <li id="sortable_nestable">
            <a href="<?= base_url('user/ui/sortable_nestable');?>">Sortable & Nestable</a>
          </li>
          <li id="sortable_nestable">
            <a href="<?= base_url('user/ui/sortable_nestable');?>">Tabs</a>
          </li>
          <li id="thumbnails">
            <a href="<?= base_url('user/ui/thumbnails');?>">Thumbnails</a>
          </li>
          <li id="tooltips_popovers">
            <a href="<?= base_url('user/ui/tooltips_popovers');?>">Tooltips & Popovers</a>
          </li>
          <li id="waves">
            <a href="<?= base_url('user/ui/waves');?>">Waves</a>
          </li>
        </ul>
      </li>
      <li id="forms">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">assignment</i>
          <span>Forms</span>
        </a>
        <ul class="ml-menu">
          <li id="basic">
            <a href="<?= base_url('user/forms/basic');?>">Basic Form Elements</a>
          </li>
          <li id="advanced">
            <a href="<?= base_url('user/forms/advanced');?>">Advanced Form Elements</a>
          </li>
          <li id="examples">
            <a href="<?= base_url('user/forms/examples');?>">Form Examples</a>
          </li>
          <li id="validation">
            <a href="<?= base_url('user/forms/validation');?>">Form Validation</a>
          </li>
          <li id="wizard">
            <a href="<?= base_url('user/forms/wizard');?>">Form Wizard</a>
          </li>
          <li id="editors">
            <a href="<?= base_url('user/forms/editors');?>">Editors</a>
          </li>
        </ul>
      </li>
      <li id="tables">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">view_list</i>
          <span>Tables</span>
        </a>
        <ul class="ml-menu">
          <li id="normal">
            <a href="<?= base_url('user/tables/normal');?>">Normal Tables</a>
          </li>
          <li id="jquery">
            <a href="<?= base_url('user/tables/jquery');?>">Jquery Datatables</a>
          </li>
          <li id="editable">
            <a href="<?= base_url('user/tables/editable');?>">Editable Tables</a>
          </li>
        </ul>
      </li>
      <li id="medias">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">perm_media</i>
          <span>Medias</span>
        </a>
        <ul class="ml-menu">
          <li id="gallery">
            <a href="<?= base_url('user/medias/gallery');?>">Image Gallery</a>
          </li>
          <li id="carousel">
            <a href="<?= base_url('user/medias/carousel');?>">Carousel</a>
          </li>
        </ul>
      </li>
      <li id="charts">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">pie_chart</i>
          <span>Charts</span>
        </a>
        <ul class="ml-menu">
          <li id="morris">
            <a href="<?= base_url('user/charts/morris');?>">Morris</a>
          </li>
          <li id="flot">
            <a href="<?= base_url('user/charts/flot');?>">Flot</a>
          </li>
          <li id="chartjs">
            <a href="<?= base_url('user/charts/chartjs');?>">ChartJS</a>
          </li>
          <li id="sparkline">
            <a href="<?= base_url('user/charts/sparkline');?>">Sparkline</a>
          </li>
          <li id="jquery_knob">
            <a href="<?= base_url('user/charts/jquery_knob');?>">Jquery Knob</a>
          </li>
        </ul>
      </li>
      <li id="examples">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">content_copy</i>
          <span>Example Pages</span>
        </a>
        <ul class="ml-menu">
          <li id="signin">
            <a href="<?= base_url('user/examples/signin');?>">Sign In</a>
          </li>
          <li id="signup">
            <a href="<?= base_url('user/examples/signup');?>">Sign Up</a>
          </li>
          <li id="forgot_password">
            <a href="<?= base_url('user/examples/forgot_password');?>">Forgot Password</a>
          </li>
          <li id="blank">
            <a href="<?= base_url('user/examples/blank');?>">Blank Page</a>
          </li>
          <li id="page_404">
            <a href="<?= base_url('user/examples/page_404');?>">404 - Not Found</a>
          </li>
          <li id="page_500">
            <a href="<?= base_url('user/examples/page_500');?>">500 - Server Error</a>
          </li>
        </ul>
      </li>
      <li id="maps">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">map</i>
          <span>Maps</span>
        </a>
        <ul class="ml-menu">
          <li id="google">
            <a href="<?= base_url('user/maps/google');?>">Google Map</a>
          </li>
          <li id="yandex">
            <a href="<?= base_url('user/maps/yandex');?>">YandexMap</a>
          </li>
          <li id="jvector">
            <a href="<?= base_url('user/maps/jvector');?>">jVectorMap</a>
          </li>
        </ul>
      </li>
      <li id="">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">trending_down</i>
          <span>Multi Level Menu</span>
        </a>
        <ul class="ml-menu">
          <li id="">
            <a href="javascript:void(0);">
              <span>Menu Item</span>
            </a>
          </li>
          <li id="">
            <a href="javascript:void(0);">
              <span>Menu Item - 2</span>
            </a>
          </li>
          <li id="">
            <a href="javascript:void(0);" class="menu-toggle">
              <span>Level - 2</span>
            </a>
            <ul class="ml-menu">
              <li id="">
                <a href="javascript:void(0);">
                  <span>Menu Item</span>
                </a>
              </li>
              <li id="">
                <a href="javascript:void(0);" class="menu-toggle">
                  <span>Level - 3</span>
                </a>
                <ul class="ml-menu">
                  <li id="">
                    <a href="javascript:void(0);">
                      <span>Level - 4</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li id="changelogs">
        <a href="<?= base_url('user/changelogs'); ?>">
          <i class="material-icons">update</i>
          <span>Changelogs</span>
        </a>
      </li>
      <li class="header">LABELS</li>
      <li id="">
        <a href="javascript:void(0);">
          <i class="material-icons col-red">donut_large</i>
          <span>Important</span>
        </a>
      </li>
      <li id="">
        <a href="javascript:void(0);">
          <i class="material-icons col-amber">donut_large</i>
          <span>Warning</span>
        </a>
      </li>
      <li id="">
        <a href="javascript:void(0);">
          <i class="material-icons col-light-blue">donut_large</i>
          <span>Information</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- #Menu -->
  <!-- Footer -->
  <div class="legal">
    <div class="copyright">
      &copy; 2018-2019 <a href="javascript:void(0);">Codeigniter - Material Admin</a>.
    </div>
  </div>
  <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->

<script>
  $("#<?= $cur_tab; ?>").addClass('active');
  $("#<?= $sub_tab; ?>").addClass('active');
</script>
