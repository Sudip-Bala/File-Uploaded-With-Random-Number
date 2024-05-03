<?php
echo "File Name: ";
echo $_FILES['image']['name'];
echo "<br/> <br/>";

echo "Image Size: ";
echo $_FILES['image']['size'];
echo "<br/><br/>";

echo "Extension : ";
echo$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

if($extension == 'jpg'  || $extension == 'png'){
$filename = 'uploads/' . rand(0000, 999999) . '.' . $extension;
if(file_exists($filename)){
    echo "File Already exists";
}else{
    move_uploaded_file($_FILES['image']['tmp_name'], $filename);
    ?> <img src="<?php echo $filename; ?>"><?php
}

}else{
    echo "Invalid File";
}
?>



