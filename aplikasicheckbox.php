<?php 

	class Check 
	{	

		function form_open($method,$link)
		{
			return "<form method='$method' action='$link'>";
		}

		function tulisanbesar($nama)
		{
			return "<h1> $nama : </h1>";
		}

		function tulispesan($namaBlod)
		{
			return "<b>$namaBlod : </b>";
		}

		function CheckBox($Array,$Data)
		{
			foreach ($Array as $key => $row) 
			{
				echo "<input type='checkbox' name='$Data' value='$row'>$row"."<br>";
			}
		}

		function submit($Name)
		{
			return "<input type='submit' name='$Name' value='$Name'>";
		}	

		function form_close()
		{	
			return "</form>";
		}
	}


	$data = array('Soto Ayam','Nasi Pecel','Nasi Goreng','Nasi Gudeg','Rawon','Sate Ayam');

	$Objek = New Check();

	echo $Objek->form_open("POST","");
	echo $Objek->tulisanbesar("Pesan Makanan");
    $Objek->CheckBox($data,"Pemilihan[]");
    echo $Objek->submit("Pesan");
    echo $Objek->form_close();

    if (isset($_POST['Pesan'])) 
    {	
    	echo $Objek->tulispesan("Pesan jadi : ")."<br>";

    	$no = 1;
    	foreach ($_POST['Pemilihan'] as $key => $value) 
    	{
    		echo $no.". ".$value."<br>";
    		$no++;
    	}
    }

 ?>

	
	

 

