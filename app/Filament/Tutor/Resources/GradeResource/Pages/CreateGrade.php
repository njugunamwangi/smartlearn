<?php

namespace App\Filament\Tutor\Resources\GradeResource\Pages;

use App\Filament\Tutor\Resources\GradeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGrade extends CreateRecord
{
    protected static string $resource = GradeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['class_teacher_id'] = auth()->user()->id;

        return $data;
    }
}
