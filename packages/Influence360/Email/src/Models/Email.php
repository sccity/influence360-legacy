<?php

namespace Influence360\Email\Models;

use Illuminate\Database\Eloquent\Model;
use Influence360\Contact\Models\PersonProxy;
use Influence360\Email\Contracts\Email as EmailContract;
use Influence360\Lead\Models\LeadProxy;
use Influence360\Tag\Models\TagProxy;

class Email extends Model implements EmailContract
{
    protected $table = 'emails';

    protected $casts = [
        'folders'       => 'array',
        'sender'        => 'array',
        'from'          => 'array',
        'reply_to'      => 'array',
        'cc'            => 'array',
        'bcc'           => 'array',
        'reference_ids' => 'array',
    ];

    /**
     * The attributes that are appended.
     *
     * @var array
     */
    protected $appends = [
        'time_ago',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject',
        'source',
        'name',
        'user_type',
        'is_read',
        'folders',
        'from',
        'sender',
        'reply_to',
        'cc',
        'bcc',
        'unique_id',
        'message_id',
        'reference_ids',
        'reply',
        'person_id',
        'parent_id',
        'lead_id',
    ];

    /**
     * Get the parent email.
     */
    public function parent()
    {
        return $this->belongsTo(EmailProxy::modelClass(), 'parent_id');
    }

    /**
     * Get the lead.
     */
    public function lead()
    {
        return $this->belongsTo(LeadProxy::modelClass());
    }

    /**
     * Get the emails.
     */
    public function emails()
    {
        return $this->hasMany(EmailProxy::modelClass(), 'parent_id');
    }

    /**
     * Get the person that owns the thread.
     */
    public function person()
    {
        return $this->belongsTo(PersonProxy::modelClass());
    }

    /**
     * The tags that belong to the lead.
     */
    public function tags()
    {
        return $this->belongsToMany(TagProxy::modelClass(), 'email_tags');
    }

    /**
     * Get the attachments.
     */
    public function attachments()
    {
        return $this->hasMany(AttachmentProxy::modelClass(), 'email_id');
    }

    /**
     * Get the time ago.
     */
    public function getTimeAgoAttribute(): string
    {
        return $this->created_at->diffForHumans();
    }
}
