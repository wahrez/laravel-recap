<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Teacher',
                'salary' => '45000',
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '55000',
            ],
            [
                'id' => 3,
                'title' => 'Doctor',
                'salary' => '88000',
            ]
        ];
    }

    static function find($id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
             abort(404);
        }

        return $job;
    }
}
