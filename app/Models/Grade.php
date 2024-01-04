<?php

namespace App\Models;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const CREATED_AT = null;
    public const UPDATED_AT = null;

    public function stream(): BelongsTo {
        return $this->belongsTo(Stream::class);
    }

    public function classTeacher(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function classPrefect(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function school(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public static function getForm(): array {
        return [
            TextInput::make('grade')
                ->required()
                ->maxLength(255),
            Select::make('school_id')
                ->relationship('school', 'name')
                ->options(Role::find(Role::IS_SCHOOL)->users->pluck('name', 'id'))
                ->searchable()
                ->preload()
                ->required(),
            Select::make('class_prefect_id')
                ->relationship('classPrefect', 'name')
                ->searchable()
                ->options(Role::find(Role::IS_STUDENT)->users->pluck('name', 'id'))
                ->preload(),
            Select::make('stream_id')
                ->relationship('stream', 'stream')
                ->searchable()
                ->preload(),
        ];
    }
}
