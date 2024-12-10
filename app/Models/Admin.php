<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
    'kode_admin',
    'nama_admin',
    'email',
    'password', 
    'no_telepon'];

    public function emisi_carbon(){
        return $this->hasMany(EmisiCarbon::class,'kode_admin');
    }
    public function pembelian_carbon_credit(){
        return $this->hasMany(PembelianCarbonCredit::class,'kode_admin');
}
    public function notifikasi(){
        return $this->hasMany(Notifikasi::class,'kode_admin');
}
}
