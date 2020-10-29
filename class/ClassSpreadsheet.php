<?php 
    namespace Classes;
    class ClassSpreadsheet extends ClassClient{
        private $service;
        public function __construct(){
            $this->service=new \Google_Service_Sheets($this->getClient());

        }
        #MÉTODO READ
        public function readSheet($spreadsheetId, $sheet, $range){
            $params=[
                "ranges"=>$sheet."!".$range
            ];
            $result=$this->service->spreadsheets_values->batchGet($spreadsheetId,$params);
            return $result->getValueRanges()[0]->values;
        }
    }
 ?>