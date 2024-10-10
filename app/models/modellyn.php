<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class modellyn extends Model {
    public function getUsers()
    {
        return $this->db->table('table_caps')->get_all();
    }
    public function searchUser($id)
    {
        return $this->db->table('table_caps')->where('id', $id)->get()->getRowArray();
    }
    public function addUser($data)
    {
        return $this->db->table('table_caps')->insert($data);
    }
    public function updateToken($id,$data)
    {
        return $this->db->table('table_caps')->where('id',$id)->update($data);
    }
    public function generateOTP($userId)
    {
        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $expiry = date('Y-m-d H:i:s', strtotime('+15 minutes'));
        $this->db->table('table_caps')->where('id', $userId)->update([
            'otp' => $otp,
            'otp_expiry' => $expiry
        ]);
        return $otp;
    }

    public function verifyOTP($userId, $otp)
{
    $user = $this->db->table('table_caps')
        ->where('id', $userId)
        ->where('otp', $otp)
        ->get();  
    
    // If user exists (ensure it's not empty)
    if (!empty($user)) {
        $this->db->table('table_caps')
            ->where('id', $userId)
            ->update([
                'token' => 'verified',
                'otp' => null,
                'otp_expiry' => null
            ]);
        return true;
    }

    return false;
}

    
}
?>