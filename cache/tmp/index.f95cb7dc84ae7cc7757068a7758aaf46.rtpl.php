<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("header") . ( substr("header",-1,1) != "/" ? "/" : "" ) . basename("header") );?>

<!--
 @nom: index
 @auteur: Idleman (idleman@idleman.fr)
 @description: Page d'accueil
-->


<?php $counter1=-1; if( isset($places) && is_array($places) && sizeof($places) ) foreach( $places as $key1 => $value1 ){ $counter1++; ?>


<div class="panel panel-default col-xs-12">
    <div class="panel-body">
        <h5 class="text-center">Toutes les lumières</h5>
        <div class="btn-group col-xs-12">
            <a class="btn btn-success col-xs-6" onclick="send('action.php?engine=id-7&amp;action=CHANGE_STATE&amp;code=-1&amp;state=on')">ON</a>
            <a class="btn btn-danger col-xs-6" onclick="send('action.php?engine=id-7&amp;action=CHANGE_STATE&amp;code=-1&amp;state=off')">OFF</a>
        </div>
    </div>
</div>

<?php $counter2=-1; if( isset($engines) && is_array($engines) && sizeof($engines) ) foreach( $engines as $key2 => $value2 ){ $counter2++; ?>

<?php if( $value2['code'] != -1 ){ ?>
<div class="panel panel-default col-xs-6">
    <div class="panel-body">
        <h5 class="text-center"><?php echo $value2['name'];?></h5>
        <div class="btn-group col-xs-12">
            <a class="btn btn-success col-xs-6"
               onclick="send('action.php?engine=<?php echo $key2;?>&amp;action=CHANGE_STATE&amp;code=<?php echo $value2['code'];?>&amp;state=on')">ON</a>
            <a class="btn btn-danger col-xs-6"
               onclick="send('action.php?engine=<?php echo $key2;?>&amp;action=CHANGE_STATE&amp;code=<?php echo $value2['code'];?>&amp;state=off')">OFF</a>
        </div>
    </div>
</div>
<?php } ?>
<?php } ?>


<?php } ?>

<script>

    function send( sURL ) {
        $.get( sURL );
    }

</script>
