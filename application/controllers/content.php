<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style>
        
        #judul{
            text-align:center;
        }

        #halaman{
            background-color: rgb(255, 255, 255);
            width: auto; 
            height: auto; 
            position: absolute;
            border-radius: 10px;
            border: 1px solid rgb(182, 182, 182); 
            padding-top: 10px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
            margin: 30px;
            box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.15);
        }
        #halaman h2,p,h4,hr{
           padding: 0;
           margin: 2px;
        }
		.buttonku-sendiri.position-absolute{
  transform: translateY(100px);
}
.buttonku-sendiri{
  font-weight: 600;
  color: white;
  font-family: 'Poppins', sans-serif;
  padding: 12px 27px;
  background-color: #003367;
  border: 2px solid white;
  border-radius: 15px;
  font-style: normal;
  text-decoration: none;
}
.buttonku-sendiri:hover{
  font-weight: 600;
  color: rgb(255, 255, 255);
  font-family: 'Poppins', sans-serif;
  padding: 12px 27px;
  background-color: #1c73cb;
  border: 2px solid white;
  border-radius: 12px;
  outline: #fffba61a solid 5px;
  font-style: normal;
  text-decoration: none;
  transition: 0.5s;
}
.buttonku-sendiri:active{
  font-weight: 600;
  
  color: rgb(255, 255, 255);
  font-family: 'Poppins', sans-serif;
  padding: 14px 29px;
  background-color: #1c73cb;
  border: 2px solid white;
  border-radius: 12px;
  outline: #fffba61a solid 2px;
  font-style: normal;
  text-decoration: none;
  transition: 0.5s;
}
.buttonku-sendiri.kedua.w-100{
  /* border: 3px solid black; */
  display: flex;
  font-size: 1rem;
  font-weight: bold;
  color: #141619;
  font-family: 'Poppins', sans-serif;
  padding: 15px 19px;
  background-color: #FFB506;
  border: 3px solid black;
  border-radius: 15px;
  /* font-style: normal; */
  text-decoration: none;
  align-items: center;
  justify-content: center;
}
.buttonku-sendiri.kedua.w-100:active{
  /* border: 3px solid black; */
  display: flex;
  font-size: 1rem;
  font-weight: bold;
  color: #141619;
  font-family: 'Poppins', sans-serif;
  padding: 12px 19px;
  background-color: #FFB506;
  border: 3px solid black;
  border-radius: 15px;
  /* font-style: normal; */
  text-decoration: none;
  align-items: center;
  justify-content: center;
}
       

    </style>
</head>
<body>
    <div style="float: left;margin-right: 10px;">
        <img src="http://180.254.31.53/ijinkrk/assets/image/logo-brand.png" alt="Logo" style="height: 25px">        
    </div>
    <h2 style="margin-bottom: 0;"><?php echo $subjek;?></h2>
    https://simantan.pekalongankota.go.id
    <div style="clear: both"></div>
    <hr />
    <div style="font-family: Arial, Helvetica, sans-serif; color: aliceblue;font-style: italic; text-align: center; background-color: rgb(206, 13, 13);  vertical-align: middle; padding: 0; margin: 0 10vw; border-radius: 8px;">
        
        
    </div>
    <hr/>
    <div id="halaman">
        <div class="kopsurat">
            <table style="border-bottom: 3px solid black; width: 100%; text-align: center; ">
                <tbody><tr>
                    
                    <td>
                        <h2>PEMERINTAH KOTA PEKALONGAN </h2>
                        <h2>DINAS PENATAAN RUANG<br><br><br></h2>
                       
                    </td>
					<td>
                </tr>
            </tbody></table>
			<br><br>
			
        </div>
		<div align="center"> <h4>Silahkan Klik Tombol di bawah ini untuk Konfirmasi</h4></div>
		 <div align="center"> <?php echo $pesan;?><div>
         <div align="center"> <?php echo $pesan2;?><div>
        
    
        
 

    </div>
</body>
</html>