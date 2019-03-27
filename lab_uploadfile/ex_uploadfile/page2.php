<html>
    <?php
        $newfile='image/'.$_FILES['picture']['name'];
        if(copy($_FILES['picture']['tmp_name'],$newfile)){
            echo '<center><img height="150"src="'.$newfile.'"></center>';
        }
    ?>

</html>
