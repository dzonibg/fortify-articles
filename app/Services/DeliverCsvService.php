<?php
namespace App\Services;

use Illuminate\Support\Collection;
class DeliverCsvService {

    public $csv;
    public $headers;
    public $filename;

    public function __construct(Collection $collection, $filename) {
        $this->filename = $filename;
        $csv = new ParseContentService($collection);
        $this->csv = $csv->ParseCSV();
        $this->setHeaders();
    }

    public function setHeaders() {
        $this->headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$this->filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
    }

    public function deliver() {

        return response()->stream($this->csv, 200, $this->headers);
    }

}
