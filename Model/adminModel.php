<?php

    class adminModel{
        function get($id){
            $sql = "
                    select * from admin where id = $id
            ";
            $request= koneksi()->query($sql);
            return $request->fetch_assoc();
        }
    }

// $tes = new adminModel;
// var_export($tes->get());die;