<?php
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $Gemail= $_POST['Gemail'];
    $message= $_POST['message'];
    $to="burayamailadresiniyaz";
    $headers="Şu  mailden".$Gemail;
    $txt="web sitesindeki iletişim formundan mail var".$name."\n\n".$message;
    mail($to, $subject , $txt , $headers);
}
header("Location: iletisimtitiz.html"); 

?>
