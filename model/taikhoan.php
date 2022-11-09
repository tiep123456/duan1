<?php
    function list_taikhoan(){
        $sql = "select * from users";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($name, $phone, $pass){
        $sql="insert into users(name, phone, password) values('$name','$phone','$pass')";
        pdo_execute($sql);
    }
    function checkuser($phone){
        $sql = "select * from users where phone = '".$phone."'";
        $sp = pdo_query($sql);
        return $sp;
    }
    function update_taikhoan($id, $phone, $pass, $email, $level){
        $sql = "update users set phone='".$phone."', password='".$pass."', email='".$email."', level=".$level." where id=".$id;
        pdo_execute($sql);
    }
    function delete_taikhoan($id){
        $sql="delete from users where id=".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id){
        $sql = "select * from users where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>