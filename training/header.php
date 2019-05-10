<header class="headerCntr">
<div class="centered">
    <div class="headerBox">
        <a href="/home.php" class="logo">
            <img src="/images/logo1.png" alt="sdvfdvg">    
        </a>
        <div class="actionsBox">
        
            <?php if(isset($_SESSION['id'])) : ?>
                <img src="/uploads/<?= Helper::currentUsers()['avatar']; ?>" alt="sdvfdvg">
                <span> <?= Helper::currentUsers()['name']; ?></span>
                <i class="dropdown fas fa-chevron-circle-down">
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="/update.php">Update Profile</a></li>
                            <!-- <li>
                                <form action="/home.php">
                                    <button class="button" value="1" name="logout">Log out</button>
                                </form>
                            </li> -->
                            <li><a href="/post.php">Post</a></li>
                            <li><a href="/welcome.php">Log out</a></li>
                        </ul>
                    </div>
                </i>
            <?php else: ?>
                <a href="/" class="button">Sign in</a>
                <a href="/register.php" class="button">Create Account</a>
            <?php endif; ?>
        </div>
    </div>
</div>

</header>