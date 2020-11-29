<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $userAccess = $ci->db->get_where('users', ['role_id' => $role_id]);
        if ($userAccess->num_rows() < 1) {
            if ($role_id == 3) {
                // user
                redirect('home');
            } else if ($role_id == 2) {
                // operator
                redirect('dashboard/op');
            } else if ($role_id == 1) {
                // admin
                redirect('dashboard/adm');
            } else {
                redirect('error');
            }
        }
    }
}

function auth_logged()
{
    // helper buat mengecek authentication pada semua user
    $ci = &get_instance();
    $user_session = $ci->session->userdata('email');
    if ($user_session) {
        // redirect('dashboard');
        echo "<script>window.history.back();</script>";
    }
}

function not_logged()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('email');
    if (!$user_session) {
        // redirect('auth');
        echo "<script>window.history.back();</script>";
    }
}

function idr($idr)
{
    $idr = "Rp. " . number_format($idr, 0, ',', '.');
    return $idr;
}

function count_student()
{
    // load student number
    $ci = &get_instance();
    $query = $ci->db->get('students');
    return $query->num_rows();
}
