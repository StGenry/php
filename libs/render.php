<?php
function render($galleryCode) {
// TODO: удалить старый div c ID = gallery
// интернета по прежнему нет, возможно очистку div-а делать правильней через jquery? тогда будет так: $('#gallery'.clear()) и после этого рендер
?>
<div id="gallery">
    <?=$galleryCode?>    
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name = 'file'>
        <input type="submit">
    </form>
</div>
<?php
}
?>
    