<h2>
<?php
echo $data["SoThich"][1];
echo $data["Number"];
?>
</h2>

<?php
while($row = mysqli_fetch_array($data["SV"])){
    echo $row["hoten"];
}
?>

