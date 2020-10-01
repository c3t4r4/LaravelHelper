<?php
if (! function_exists('convertStringToDouble')) {
    function convertStringToDouble(?string $param)
    {
        if(empty($param)){
            return null;
        }

        return floatval(str_replace([','], '.', str_replace(['.'], '', $param)));
    }
}

if (! function_exists('clearField')) {
    function clearField(?string $param)
    {
        if(empty($param)){
            return '';
        }

        return str_replace(['.','-','/','(',')',' '], '', $param);
    }
}

if (! function_exists('convertDocument')) {
    function convertDocument(?string $param)
    {
        return substr($param,0,3) . '.' . substr($param,3,3) . '.' . substr($param,6,3) . '-' . substr($param,9);
    }
}

if (! function_exists('convertDocumentCompany')) {
    function convertDocumentCompany(?string $param)
    {
        return substr($param,0,2) . '.' . substr($param,2,3) . '.' . substr($param,5,3) . '/' . substr($param,8,4) . '-'. substr($param,12);
    }
}

if (! function_exists('convertZipcode')) {
    function convertZipcode(?string $param)
    {
        return substr($param,0,2) . '.' . substr($param,2,3) . '-' . substr($param,5,3);
    }
}

if (! function_exists('convertDateBR')) {
    function convertDateBR(?string $param)
    {
        if($param == ''){
            return '';
        }
        return date('d/m/Y', strtotime($param));
    }
}

if (! function_exists('convertDateTimeBR')) {
    function convertDateTimeBR(?string $param)
    {
        if($param == ''){
            return '';
        }
        return date('d/m/Y H:i:s', strtotime($param));
    }
}

if (! function_exists('convertStringToDate')) {
    function convertStringToDate(?string $param)
    {
        if(empty($param)){
            return null;
        }

        list($day, $month, $year) = explode('/', $param);
        return (new \DateTime($year.'-'.$month.'-'.$day))->format('Y-m-d');
    }
}

if (! function_exists('convertDoubleToString')) {
    function convertDoubleToString(?float $param)
    {
        return number_format($param, 2, ',', '.');
    }
}

if (! function_exists('convertFirstsUp')) {
    function convertFirstsUp(?string $param)
    {
        $words = explode(' ', $param);
        $newword = "";
        if(count($words) > 1){
            foreach ($words as $word){
                if(strlen($word) > 2){
                    $newword = $newword.' '.ucfirst($word);
                }else{
                    $newword = $newword.' '.$word;
                }
            }
        }else{
            $newword = ucfirst($param);
        }
        return $newword;
    }
}
