<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'provider',
        'provider_id',
        'avatar',
        // 'profile_picture', 'location', 'phone_number', 
        // 'verification_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's profile.
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Get the user's bids.
     */
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    /**
     * Get the user's payments.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Get the messages sent by the user.
     */
    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * Get the messages received by the user.
     */
    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }

    /**
     * Get the user's education records.
     */
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * Get the user's work experience records.
     */
    public function experience()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get the user's portfolio.
     */
    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }

    /**
     * Get the reviews given by the user.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'reviewer_id');
    }
}
