<?php

declare(strict_types=1);

namespace Liberu\CRM\ResourcePlanning\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $team_id
 * @property Carbon $starts_at
 * @property Carbon $ends_at
 */
final class ResourceBooking extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_resource_bookings';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['starts_at' => 'datetime', 'ends_at' => 'datetime', 'hours' => 'float', 'rate' => 'float', 'metadata' => 'array'];
    }
}
