<?php if (!defined("IN_WALLET")) { die("Auth Error"); } ?>
                <h2>Tremendouscoin.me - Web wallet</h2>
                <strong>Store your Tremendouscoins here!</strong>
                Help stymie and enrage Trump by owning Tremendouscoins! (More info at bottom of page).
                <?php
                if (!empty($error))
                {
                    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
                }
                ?>
<div class="col-md-6">
                <p><strong><?php echo $lang['FORM_LOGIN']; ?></strong></p>
                <form action="index.php" method="POST">
                    <input type="hidden" name="action" value="login" />
                    <input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"><br/>
                    <input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"><br/>
<!-- <div class="col-md-2"><input type "text" class="form-control" name="auth" placeholder="<?php echo $lang['FORM_2FA']; ?>"></div>-->
                    <button type="submit" class="btn btn-default"><?php echo $lang['FORM_LOGIN']; ?></button>
                </form>
</div>
<div class="col-md-6">
                <p><strong><?php echo $lang['FORM_CREATE']; ?></strong></p>
                <form action="index.php" method="POST">
                    <input type="hidden" name="action" value="register" />
                    <input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"><br/>
                    <input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"><br/>
                    <input type="password" class="form-control" name="confirmPassword" placeholder="<?php echo $lang['FORM_PASSCONF']; ?>"><br/>
                    Terms: I understand that use of tremendouscoin.me is completely at my own risk, and that I will not be compensated for loss of Tremendouscoins for any reason.
                    Furthermore, I understand that Tremendouscoins may be removed from any account which has not been logged in to for 90 days or more. Finally, these terms may be modified without notice by being updated on this website.
                    <p/>
                    <button type="submit" class="btn btn-default">AGREE with Terms and SIGN UP</button>
                </form>
</div>