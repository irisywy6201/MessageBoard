<?php

namespace App;
use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['subject','content'];

        // 新增,取得此篇message撰寫之user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

// class User extends Eloquent {

//     public function Message()
//     {
//         return $this->has_many( 'Message' );
//     }

// }

// class Message extends Eloquent {

// $messages = Message ::with( array( 'User', 'User.name' ) )->first();
// }