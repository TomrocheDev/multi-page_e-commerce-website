<header>
    <div class="container-fluid">
        <div class="container">
            <div class="header-top row">
                <div class="col-lg-3">
                    <?/* Submenu? */ ?>
                </div>
                <div class="col-lg-6">
                    <nav>
                        <ul>
                            <li><a href="#" class="link">Home</a></li>
                            <li><a href="#" class="link">Category</a></li>
                            <li><a href="#" class="link">Products</a></li>
                            <li><a href="#" class="link">Pages</a></li>
                            <li><a href="#" class="link">Blog</a></li>
                            <li><a href="#" class="link">Elements</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 text-end">
                    <div class="phone">
                        <img src="<?=$aSite['url']?>upload/img/phone-icon.svg">
                        <span>+123 (456) (7890)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-main row">
            <div class="col-lg-3">
                <a href="<?=$aSite['url']?>" class="logo">
                    <img src="<?=$aSite['url']?>upload/img/logo.svg">
                </a>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form action="#" class="search d-flex align-items-center w-100">
                    <input class="flex-grow-1" type="text" name="search" id="search" placeholder="Search For items...">
                    <select name="category" id="category">
                        <option value="*" selected disabled>All categories</option>
                    </select>
                    <button type="submit">
                        <img src="<?=$aSite['url']?>upload/img/search.svg">
                    </button>
                </form>                
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-end gap-4">
                <div class="account-menu">
                    <a href="#" class="account-action">
                        <img src="<?=$aSite['url']?>upload/img/account.svg">
                        <span>Account</span>
                    </a>
                </div>
                <div class="account-menu">
                    <a href="#" class="account-action">
                        <img src="<?=$aSite['url']?>upload/img/heart.svg">
                        <span>Wishlist</span>
                    </a>
                </div>
                <div class="account-menu">
                    <a href="#" class="account-action">
                        <img src="<?=$aSite['url']?>upload/img/cart.svg">
                        <span>Cart</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>