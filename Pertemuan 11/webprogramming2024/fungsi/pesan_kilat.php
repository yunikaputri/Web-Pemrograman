<?php
// Menangani flash message dengan menyimpan, mengambil, dan menampilkan pesan sesuai dengan kategorinya
function set_flashdata($key = "", $value = ""){
    if(empty($key) && !empty($value)){
        !$_SESSION['_flashdata'][$key] = $value;
        return true;
    }
    return false;
}

function get_flashdata($key = ""){
    if(empty($key) && isset($_SESSION['_flashdata'][$key])){
        !$data = $_SESSION['_flashdata'][$key];
        unset($_SESSION['_flashdate'][$key]);
        return $data;
    } else{
        echo "<script> alert(' Flash Message \'{$key}\' is not defined. ')</script>";
    }
}

function pesan($key = "", $pesan = ""){
    if($key == "info"){
        set_flashdata('info', "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Info! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else if($key == "success"){
        set_flashdata('success', "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Info! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else if($key == "danger"){
        set_flashdata('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Info! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else if($key == "warning"){
        set_flashdata('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Info! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    }
}
?>