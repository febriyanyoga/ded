<section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-secondary"><i class="icon-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">    
        <li><?php echo anchor('beranda',"<i class='icon-home'></i> BERANDA");?></li>
        <?php if($_SESSION['id_user_level'] == '1') { ?>
        <li><?php echo anchor('skpa',"<i class='icon-book'></i> KELOLA SKPA");?></li>
        <li><?php echo anchor('ded',"<i class='icon-user'></i> KELOLA DED");?></li>
        <li><?php echo anchor('monitoring',"<i class='icon-user'></i> MONITORING");?></li>
        <li><?php echo anchor('profile/update/1',"<i class='icon-cog'></i> PENGATURAN");?></li>
        <li><?php echo anchor('user',"<i class='icon-user'></i> PENGGUNA");?></li>
        <?php }?>
       
        <?php
        // display all data main menu
        $this->db->where('is_main_menu',0);
        $this->db->where('is_aktif','y');
        $main_menu = $this->db->get('tbl_menu')->result();
        
        foreach ($main_menu as $menu){
            // chek is have sub menu
            $this->db->where('is_main_menu',$menu->id_menu);
            $this->db->where('is_aktif','y');
            $submenu = $this->db->get('tbl_menu');
            if($submenu->num_rows()>0){
                // display sub menu
                echo "<li class='treeview'>
                        <a href='#'>
                            <i class='$menu->icon'></i> <span>".strtoupper($menu->title)."</span>
                            <span class='pull-right-container'>
                                <i class='fa fa-angle-left pull-right'></i>
                            </span>
                        </a>
                        <ul class='treeview-menu' style='display: none;'>";
                        foreach ($submenu->result() as $sub){
                            echo "<li>".anchor($sub->url,"<i class='$sub->icon'></i> ".strtoupper($sub->title))."</li>"; 
                        }
                        echo" </ul>
                    </li>";
            }else{
                // display main menu
                echo "<li>";
                echo anchor($menu->url,"<i class='".$menu->icon."'></i> ".strtoupper($menu->title));
                echo "</li>";
            }
        }
        ?>
        <li><?php echo anchor('auth/logout',"<i class='icon-signout'></i> LOGOUT");?></li>
    </ul>
</section>
<!-- /.sidebar -->