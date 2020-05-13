<?php 
	$clubbola = [
    "Juve"   => " Juventus",
	"Barcelona"   => " Barcelona",
	"Real Madrid"   => " Real Madrid",
	"Liverpool" 	=> " Liverpool",
	"PSG"  	=> " Paris Saint Germain",
	"Liverpool"   => " Liverpool",
	"Ac Milan" 	=> " Ac Milan",

];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>193040009</title>
 	
 </head>
 <body>
 	<b>Daftar pemain bola terkenal dan clubnya</b>
 	<table cellpadding="5" cellspacing="0"><br><br>
 		<tr align="left">
 			<th>Cristiano Ronaldo</th>
 			<td>:</td>
 			<td><?php echo $clubbola['Juve']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Lionel Messi</th>
 			<td>:</td>
 			<td><?php echo $clubbola['Barcelona']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Luca Modric</th>
 			<td>:</td>
 			<td><?php echo $clubbola['Real Madrid']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Mohammad Salah</th>
 			<td>:</td>
 			<td><?php echo $clubbola['Liverpool']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Neymar Jr</th>
 			<td>:</td>
 			<td><?php echo $clubbola['PSG']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Sadio Mane</th>
 			<td>:</td>
 			<td><?php echo $clubbola['Liverpool']; ?></td>
 		</tr>
 		<tr align="left">
 			<th>Zlatan Ibrahimovic</th>
 			<td>:</td>
 			<td><?php echo $clubbola['Ac Milan']; ?></td>
 		</tr>
 	</table>
	 <br><a href="index.php">Menu</a>
 </body>
 </html>