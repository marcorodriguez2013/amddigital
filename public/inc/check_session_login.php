<?php 
if(Session::exist()){
    ?>
<script>
    window.location.href = "<?php echo URL;?>Index/index";
</script>
<?php
}else{

}
?>