
<?php
//for dynamic menu
function menu(){
$page = Page::all();
foreach ($page as $value) {
    $route = $value['route'];
    $title = $value['title'];
    ?>

    <li><a href="<?php echo $route; ?>"><?php echo $title; ?></a></li>


    <?php
}

}

echo menu();


?>






