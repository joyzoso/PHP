<form action="example2.php" method="POST">
    <table>
       <tr>
            <td>Size <br>
            (Only applicable for T-Shirt):</td>
            <td><select name=size>
            <option value=N>NIL</option>
            <option value=S>S</option>
            <option value=M>M</option>
            <option value=L>L</option>
            <option value=XL>XL</option>
            </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Insert" /></td>
        </tr>
    </table>
</form>
<?php $size = $_POST['size'];
echo $size;
?>