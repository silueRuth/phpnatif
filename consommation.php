<?php 
if (isset($_POST['submit'])){
    $employe = mysql_real_escape_string($_POST['employe']);
    $post = mysql_real_escape_string($_POST['post']);
    $detail = mysql_real_escape_string($_POST['detail']);

    $form_data = array(

        'employe' => $employe,
        'post' => $post,
        'detail' => $detail
    );

    $str = http_build_query($form_data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://127.0.0.1:8000/api/contrats");
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $str);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo $output;
}
?>

