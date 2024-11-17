<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Validators\Failure;

class UsersImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue, WithEvents, SkipsOnFailure, WithValidation, SkipsOnError
{
    use Importable, RegistersEventListeners, SkipsFailures; //, SkipsErrors;

    protected $institution_id;

    public function __construct()
    {
        $this->institution_id = auth()->guard('counselor')->user()->institution->id;
    }

    /**
     * @param  array  $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $name = explode(' ', $row['name']);

        return new User([
            'uuid' => (string) Str::uuid(),
            'user_id' => $row['id'],
            'institution_id' => $this->institution_id,
            'name' => $row['name'],
            'first_name' => $name[0],
            'other_names' => $row['name'],
            'email' => preg_replace(' /\s+/', '', trim($row['email'] ?? 'email')),
            'password' => Hash::make(trim($row['email'])),
        ]);
    }

    public function batchSize(): int
    {
        return 500;
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public static function afterImport(AfterImport $event)
    {
        // event(new TotalVotesCast('lol'));
        // event(new ImportEvent('Register Import Completed'));
        // toSlack('Register Import Completed');
    }

    public function rules(): array
    {
        return [
            '*.id' => 'nullable|unique:users,user_id',
            '*.email' => 'nullable',
            '*.name' => 'nullable',
        ];
    }

    public function onFailure(Failure ...$failures)
    {
        foreach ($failures as $failure) {
            Log::info($failure);

            // ImportValidationErrors::create([
            //     'row' => $failure->row(),
            //     'attribute' => $failure->attribute(),
            //     'value' => $failure->values()[$failure->attribute()],
            //     'errors' => $failure->errors()[0],
            //     'election_id' => $this->election->id,
            // ]);
        }
    }

    public function onError(\Throwable $e)
    {
        // event(new ImportEvent($e));
        Log::info($e);
        // toSlack('Unable to import register');
    }
}
