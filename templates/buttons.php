
<! --
/**
* Created by PhpStorm.
* User: Gilad Takoni
* Date: 06/04/2016
* Time: 9:57
*/
-->


<section class="buttons ju-width u-hidden">
    <?php $button_types = array('large','primary','secondary','small','mini','compact','tag'); ?>
    <?php $button_colors = array('blue-primary','blue-secondary','orange-primary'); ?>

    <h1>Buttons</h1>
    <h4>Class list : Button Button[color name] Button[size] u-Radios-width[5/45] (is-animation | is-disable | is-inverse)</h4>
    <?php foreach($button_colors as $color): ?>

        <div class="ju-row">
            <div class="ju-col-lg-24of24">
                <h4>
                    Color: <?php echo $color; ?>
                </h4>
            </div>
        </div>
        <?php foreach($button_types as $type): ?>
            <div class="ju-row">
                <div class="ju-col-lg-4of24">
                    <h5>
                        Size: <?php echo $type; ?>
                    </h5>
                </div>
            </div>
            <div class="ju-row">


                <div class="ju-col-lg-6of24 group">
                    <a href="#" class="Button Button--<?php echo $type; ?> Button--<?php echo $color; ?> u-Radios-width5 is-animation Button--shadow"><i class="fa fa-spinner fa-4"></i> Button</a>
                </div>
                <div class="ju-col-lg-6of24 group">
                    <button class="Button Button--<?php echo $type; ?> Button--<?php echo $color; ?> u-Radios-width45 is-loading Button--loading"><i class="fa fa-spinner fa-4"></i> Button</button>
                </div>
                <div class="ju-col-lg-6of24 group">
                    <button class="Button Button--<?php echo $type; ?> Button--<?php echo $color; ?> u-Radios-width45 is-disable">Button</button>
                </div>
                <div class="ju-col-lg-6of24 group">
                    <button class="Button Button--<?php echo $type; ?> Button--<?php echo $color; ?> u-Radios-width45 is-inverse is-animation">Button</button>
                </div>
            </div>
        <?php endforeach; ?>

    <?php endforeach; ?>

    <div class="ju-row">
        <button class="Button Button--compact u-SocialBg-facebook u-Radios-width5">
            <i class="fa fa-facebook-official"></i> Sign in with Facebook
        </button>

        <button class="Button Button--compact u-SocialBg-twitter u-Radios-width5">
            <i class="fa fa-twitter"></i> Sign in with twitter
        </button>
    </div>

</section>