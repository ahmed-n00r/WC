<?php function text($id, $val){ ?>
<script>
	$(document).ready(function(){
	$(<?php echo $id; ?>).text("<?php echo($val); ?>");
});
</script>
<?php } ?>

<?php function html($id, $val){ ?>
<script>
	$(document).ready(function(){
	$(<?php echo $id; ?>).html("<?php echo($val); ?>");
});
</script>

<?php } ?>

<?php function val($id, $val){ ?>
<script>
	$(document).ready(function(){
	$(<?php echo $id; ?>).val("<?php echo($val); ?>");
});
</script>

<?php } ?>

<?php function cssBackImg($id, $val){ ?>
<script>
	$(document).ready(function(){
		$(<?php echo $id; ?>).css("background-image", "<?php echo($val); ?>");
});
</script>

<?php } ?>
 