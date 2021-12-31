<header class="header">
    <div class="container">
        <div class="header__logo">
            <h2><span>T</span>velia</h2>

            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            
        </div>

        
            
        <nav class="header__nav">
            <ul>
                <?php
                    $navItems = array("Home", "About", "Adventures", "About", "Contact", "Login", "Signup");
                    foreach ($navItems as $item) { ?>
                        <li><a href="#"><?=$item?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>

<script src="assets/js/toggle.js"></script>

