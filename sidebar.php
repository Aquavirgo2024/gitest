<!-- ▼ ここからsidebar.php ▼-->
<nav id="wp-menu-wrap" role="navigation">
                  <ul class="sf-menu" id="wp-primary-menu">
                    <li>
                      <a href="<?php site_url(); ?>/">Home</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_path('search')->ID); ?>">Search</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_path('company')->ID); ?>">Company</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a>
                    </li>
                    <li>
                      <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">Contact</a>
                    </li>
                  </ul>
                </nav>
<!-- ▲ ここまでsidebar.php ▲-->