<!Doctype html>
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta content="<?php print AUTHOR;?>" name="author" />
    <meta content="<?php print DESCRIPTION;?>" name="description" />
    <head>
    <title><?php echo NOMBRE_EMPRESA ?></title>
    <link rel="shortcut icon" href="<?php print URL . URLIMG . NOMBRE_FAVICON;?>" />
    <script>
    var URLPRINCIPAL = '<?php echo URL ?>';
    </script>
<?php
ArchivosHead::ListarFw('jquery', 'jquery.min.js');
ArchivosHead::ListarFw('bootstrap/css', 'bootstrap.min.css');
ArchivosHead::ListarFw('bootstrap/js', 'bootstrap.min.js');
ArchivosHead::ListarFw('vuejs', 'vue.js');
ArchivosHead::ListarFw('vuejs', 'vue-resource.min.js');

//ArchivosHead::ListarFw('materialize/css', 'materialize.min.css');
//ArchivosHead::ListarFw('materialize/js', 'materialize.min.js');
ArchivosHead::ListarCarpetas('css');
ArchivosHead::ListarCarpetas('js');
ArchivosHead::ListarFw(URLCSS, $this->archivo . '.css', true);
ArchivosHead::ListarFw(URLJS, $this->archivo . '.js', true);
?>
    </head>
    <body>




