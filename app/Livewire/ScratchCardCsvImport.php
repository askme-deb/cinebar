<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ScratchCard;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ScratchCardCsvImport extends Component
{
    use WithFileUploads;

    public $csv_file;
    public $successCount = 0;
    public $errorRows = [];

    public function import()
    {
        $this->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $path = $this->csv_file->getRealPath();
        $rows = array_map('str_getcsv', file($path));
        $header = array_map('trim', array_shift($rows));

        DB::beginTransaction();
        try {
            foreach ($rows as $i => $row) {
                $data = array_combine($header, $row);
                $validator = Validator::make($data, [
                    'company_id' => 'required|exists:companies,id',
                    'card_number' => 'required|string|unique:scratch_cards,card_number',
                    'coupon_value' => 'required|numeric|min:0',
                ]);
                if ($validator->fails()) {
                    $this->errorRows[] = ['row' => $i + 2, 'errors' => $validator->errors()->all()];
                    continue;
                }
                ScratchCard::create([
                    'company_id' => $data['company_id'],
                    'card_number' => $data['card_number'],
                    'coupon_value' => $data['coupon_value'],
                    'status' => 'unused',
                ]);
                $this->successCount++;
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->addError('csv_file', 'Import failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.scratch-card-csv-import')->layout('layouts.app');
    }
}
