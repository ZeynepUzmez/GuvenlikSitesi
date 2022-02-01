<?php
if(isset($_POST['submit'])){
    $nameB= $_POST['nameB'];
    $telno= $_POST['telno'];
    $GemailB= $_POST['GemailB'];
    $file= $_POST['file'];
    $mailTo="burayamailadresiniyaz";
    $headers="Şu  mailden".$GemailB;
    $txt=" web sitesindeki iş başvuru formundan mail var".$nameB."\n\n"."isim ve cvsi".$file;
    mail($mailTo,$telno,$txt,$headers);   
}
header("Location: kvktitiz.html");
?>