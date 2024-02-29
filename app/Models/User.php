<?php

 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;

 class User extends Model{

    protected $table = 'tbluser';

    protected $primaryKey = 'uid';

    // column sa table
    protected $fillable = [
    'uid','username', 'password'
    ];

 }