<!--
/**
 * Created by PhpStorm.
 * User: giladtakoni
 * Date: 10/04/2016
 * Time: 14:31
 */
 -->

<?php $button_types = array('large','primary','secondary','small','mini','compact','tag'); ?>
<?php $button_colors = array('blue-primary','blue-secondary','orange-primary'); ?>
<?php $colors_list = array_merge($button_colors,array('light-blue','cool-gray','pale-blue')); ?>
<?php $buttons_state = array('','hover','active');?>

<section class="typography ju-width ju-row">
    <div class="ju-col-lg-24of24">
        <h1>Typography</h1>
    </div>

    <div class="ju-col-lg-24of24">
        <?php for($i=1; $i<=4; $i++):;?>
            <h<?php echo $i; ?>>Headline h<?php echo $i; ?> <h<?php echo $i; ?>>
        <?php endfor; ?>
    </div>

    <div class="ju-col-lg-24of24">
        <h1>Colors</h1>


        <?php foreach($colors_list as $color): ?>
            <div class="ju-col-lg-12of24 group">
                    <?php foreach($buttons_state as $button_state): ?>
                    <div class="ju-col-lg-12of24 ">
                        <?php $class_name = $color; ?>
                        <?php
                        if(!empty($button_state)):
                            $class_name .="--".$button_state;
                        endif;?>
                        <div class="ColorBox u-Background--<?php echo $class_name ;?>">
                            <div class="color"></div>
                            <div class="text">
                                <?php $class_name = str_replace('--',' ',$class_name);?>
                                <?php $class_name = str_replace('-',' ',$class_name);?>
                                <?php echo ucfirst($class_name); ?>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; ?>
            </div>
        <?php endforeach; ?>



    </div>



</section>
