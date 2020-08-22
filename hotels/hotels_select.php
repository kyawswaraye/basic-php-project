<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <!-- <th>Description</th> -->
        <th>availability</th>
        <th>Total Room</th>
        <th>Left Room</th>
        <th>Upper Price</th>
        <th>Lower Price</th>
        <th>Image</th>
        <th colspan="2"></th>
    </tr>


<?php
    $no=1;
    require "config.php";
    $sql = "SELECT h_id, h_name, h_address, h_phone, h_email, h_description, h_availability, h_total_room, h_left_room,h_upper_price_bound, h_lower_price_bound, h_images FROM hotels";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
    <td><?php echo $no;$no=$no+1; ?></td>
    <td><?php echo $row["h_name"] ?></td>
    <td><?php echo $row["h_address"] ?></td>
    <td><?php echo $row["h_phone"] ?></td>
    <td><?php echo $row["h_email"] ?></td>
    <!-- <td><?php echo $row["h_description"] ?></td> -->
    <td><?php echo $row["h_availability"] ?></td>
    <td><?php echo $row["h_total_room"] ?></td>
    <td><?php echo $row["h_left_room"] ?></td>
    <td><?php echo $row["h_upper_price_bound"] ?></td>
    <td><?php echo $row["h_lower_price_bound"] ?></td>
    <td><?php echo $row["h_images"] ?></td>
    <td>
        <form action="./hotels/deletedata.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['h_id'] ?>">
            <input type="submit" value="Delete">
        </form>
    </td>
    <td></td>
  </tr>

    <?php } } ?>
</table>
