<html >

	<head>
	<link rel="stylesheet" href="images/HigherGround.css" type="text/css" />
	<title>Restoran Kuy</title>
	</head>


	<body>
	<div id="wrap">
	<div id="top-bg"></div>
	<div id="header">
	<h1 id="logo-text">
	<a>Restoran Kuy</a></h1>
	
	<div id="header-links">
	</div>
	</div>
	<div id="header-photo"></div>
	<div id="nav">
	<ul>
	<li id="current"><a href="home.php">Daftar Menu</a></li>
	<li><a href="index.php">Order</a></li>
	<li><a href="galery.php">Galerry</a></li>
	<li><a href="Profil_Kami.php">Tentang Kami</a></li>
	
	</ul>
	</div>
	<div id="content-wrap">
	<div id="main"> <a name="TemplateInfo"></a>
	<h2><a href="index.html" title=""></a></h2>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<title>Restoran Kuy</title>
	  </head>
	  <body>
		<a href="home.php">Kembali Ke Menu</a>
		<h1>TAMBAH DATA PELANGGAN</h1>
		
		
	<form name="myForm" method="post" action="simpan-pesan.php">
		
		<table border="0">
		<tr>
		<td> Nama Pelanggan </td>
			<td> : </td>
			<td> <input type="text" name="namapelanggan" placeholder="Nama Pelanggan" ><br></td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td> <input type="text" name="alamat" placeholder="Alamat" ></td>
		</tr>
		<tr>
			<td> Tanggal Pesan</td>
			<td> : </td>
			<td> <input type="date" name="tanggalpesan"  ></td>
		</tr>
	
		</table>
	<table border="2" cellspacing=0 cellpadding=5 >
			<colgroup align="center">
			<colgroup align="center">
			<colgroup align="center">
			<thead valign="middle">
			<tr>
			<th width="35"><font color="black" size="2">No</font>
			<th width="200"><font color="black" size="2">Makanan/Minuman</font>
			<th width="180"><font color="black" size="2">Harga Satuan</font>
			<th width="100"><font color="black" size="2">Pesan</font>
			</tr>
			<tbody>
			<tr>
			<td>1<td>Gurameh goreng<td><input type="text" value="50000" disabled="true"/><td>
			<input  type="text"  name="order1"  placeholder="" onChange="jumlah()" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required />
			</tr>
			<tr>
			<td>2<td>Gurameh bakar<td><input type="text" value="55000" disabled="true"/><td>
			<input  type="text"  name="order2" value="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>3<td>Udang goreng<td><input  type="text"   value="15000" disabled="true"/> <td>
			<input  type="text"  name="order3" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>4<td>Lobster saus tiram<td><input  type="text"   value="40000" disabled="true"/>
			<td><input  type="text"  name="order4" value="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>5<td>Cumi saus tiram<td><input  type="text"   value="30000" disabled="true"/> <td>
			<input  type="text"  name="order5" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>6<td>Bawal sambal kecap<td><input  type="text"   value="25000" disabled="true"/> <td>
			<input  type="text"  name="order6" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>7<td>Ca kangkung<td><input  type="text"   value="12000" disabled="true"/> <td>
			<input  type="text"  name="order7" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>8<td>Jus alpukat<td><input  type="text"   value="10000" disabled="true"/> <td>
			<input  type="text"  name="order8" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>9<td>Oreo milkshake<td><input  type="text"   value="13000" disabled="true"/> <td>
			<input  type="text"  name="order9" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>10<td>Es teh<td><input  type="text"   value="3000" disabled="true"/> <td>
			<input  type="text"  name="order10" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>11<td>Es jeruk<td><input  type="text"   value="3500" disabled="true"/> <td>
			<input  type="text"  name="order11" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>12<td>Es Buah<td><input  type="text"   value="10000" disabled="true"/> <td>
			<input  type="text"  name="order12" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td colspan=3 align="right">Total Harga<td><input type="text"  id="total" name="totalharga" value="" />
			</tr>
			<tr>
			<td colspan=3 align="right">Jumlah Total Barang<td><input type="text"  id="totalbarang" name="totalbarang" value="" />
			</tr>
			
	</table>
<br/>
<input type="reset" value="CANCEL" onClick="resetForm()" />
<input type="submit" value="ORDER" />
</form>
	</div>
	
<script language="JavaScript" type="text/javascript">
function jumlah() {
//var myForm = document.form1;
var gugor = 50000 * myForm.order1.value;
var gubar = 55000 * myForm.order2.value;
var udgor = 15000 * myForm.order3.value;
var lobsa = 40000 * myForm.order4.value;
var cumsa = 30000 * myForm.order5.value;
var basam = 25000 * myForm.order6.value;
var caka = 12000 * myForm.order7.value;
var jusal = 10000 * myForm.order8.value;
var oreo =  13000 * myForm.order9.value;
var esteh = 3000 * myForm.order10.value;
var esjer = 3500 * myForm.order11.value;
var esbuah = 10000 * myForm.order12.value;
var hasil = gugor+gubar+udgor+lobsa+cumsa+basam+caka+jusal+oreo+esteh+esjer+esbuah
var jumlah = (gugor/50000)+(gubar/55000)+(udgor/15000 )+(lobsa/40000)+(cumsa/30000)+(basam/25000)+(caka/12000)+(jusal/10000)+(oreo/13000)+(esteh/3000)+(esjer/3500)+(esbuah/10000);

	//var coba = bakso;
	//document.myForm.total.value = hasil;
	//eval(myForm.total.value = bakso);
	myForm.totalbarang.value = jumlah;
if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 10000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
 
	</body>
</html>