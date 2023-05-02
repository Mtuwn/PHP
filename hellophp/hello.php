<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (empty($_POST['fullname'])) {
        $errors['fullname']['requierd'] = 'họ và tên không được để trống';
    } else {
        if (strlen($_POST['fullname']) < 5) {
            $errors['fullname']['min'] = 'họ và tên lớn hơn 5 kí tự';
        }
    }
    echo '<pre>';
    print_r($errors);
    echo '</pre>';
}
if (empty($errors)) {
    echo 'Thanh cong';
} else {
    echo 'Khong thanh cong';
}

?>
<form method="post">
    <p>
        Họ và tên: <br/>
        <input type="text" name="fullname" placeholder="Họ và tên..."/>
    </p>
    <p>
        Email: <br/>
        <input type="text" email="fullname" placeholder="Email..."/>

    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>