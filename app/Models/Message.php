<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    /** @var string  */
    public const PENDING = 'pending';

    /** @var string  */
    public const SENT = 'sent';

    /** @var string  */
    public const FAILED = 'failed';

    protected $fillable = [
        'number',
        'text',
        'status',
        'sender_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * return th bootstrap class for displaying if the message was sent
     *
     * @return string
     */
     public function getListStyle() : string
    {
        switch ($this->status) {
            case self::SENT:
                return 'success';
                break;
            case self::FAILED:
                return 'danger';
                break;
            case self::PENDING:
            default:
                return 'warning';
                break;
        }
    }
}
