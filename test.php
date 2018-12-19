

<table>


<th>name</th>
<th>images</th>
</table>
<?php
     $conn =mysqli_connect("localhost","root","","royal_hotel");
     $select =mysqli_query($conn,"SELECT * FROM loaiphong");
     while($row=mysqli_fetch_array($select)){
     ?>
     <tr>
        <td><?php echo $row['loaiphong'];?></td>
        <td><img src="images/<?php echo $row['img']; ?>" style="width: 50px; height: 50px;"></td>
     <?php } ?>
     </tr>