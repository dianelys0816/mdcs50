<?php require_once 'bootstrap.php';?>
<!-- /.row -->
<div class="row">
    <div class="col-md-8">
        <?php if(isset($_POST['contact'])) : ?>

        <?php if (!empty($_POST['contact']['name']) && (!empty($_POST['contact']['phone'])) && (!empty($_POST['contact']['email'])) && (!empty($_POST['contact']['message']))) :  ?>
        <div id="success" class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Your message has been sent</strong>

            <div>
                Your message:
                <?php if (! empty($_POST['contact'])) : ?>
                    <?= htmlentities(strip_tags($_POST['contact']['message'])); ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php if (empty($_POST['contact']['name'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Please enter your name</strong>
                    <?php endif; ?>
                    <?php if (empty($_POST['contact']['phone'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Please enter your phone number</strong>
                        <?php endif; ?>
                        <?php if (empty($_POST['contact']['email'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Please enter your e-mail address</strong>
                            <?php endif; ?>
                            <?php if (empty($_POST['contact']['message'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>You forgot to write me a compliment</strong>
                                <?php endif; ?>
                                <?php if ((strlen($_POST['contact']['message'])) > 999) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><strong>Please make your compliment shorter and sweeter</strong>
                                    <?php endif; ?>

                                    <?php endif; ?>
                                </div>
