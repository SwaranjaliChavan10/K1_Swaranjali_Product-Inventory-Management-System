<?php 
include 'db.php';
require 'vendor/autoload.php';

$result = $conn -> query("select * from product");
$pdf = new TCPDF();
$pdf-> AddPage();
$pdf-> setFont('times','I','12');

$html = '<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Category</td>
<td>Price</td>
<td>Quantity</td>
<td>Description</td>
</tr>';
while($row = $result-> fetch_assoc()){
$html.='<tr>
<td>'.$row["id"].'</td>
<td>'.$row["pname"].'</td>
<td>'.$row["pcategory"].'</td>
<td>'.$row["pprice"].'</td>
<td>'.$row["pquantity"].'</td>
<td>'.$row["pdes"].'</td>
</tr>';
}

$html.='</table>';
$pdf-> writeHTML($html,true,false,true,false,' ');

$pdf-> Output('product.pdf','D');


?>