<?php
    $original_local = setlocale(LC_TIME,0);
    setlocale(LC_TIME,App::getLocale());
?>
<?php echo e(!empty($value) ? ucfirst(strftime("%B, %d %G", strtotime($value))) : null); ?>

<?php
    setlocale(LC_TIME,$original_local);
?><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/vendor/crocodicstudio/crudbooster/src/views/default/type_components/date/component_detail.blade.php ENDPATH**/ ?>