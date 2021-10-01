<?php  

class About{
 
  public function index($nama = 'chandra', $pekerjaan = 'gamers')
  {
    echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
  }
  
  public function page()
  {
    echo 'About/page';
  }
}