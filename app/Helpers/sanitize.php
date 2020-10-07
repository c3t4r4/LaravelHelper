<?php
if (! function_exists('convertStringToDouble')) {
    function convertStringToDouble(?string $param)
    {
        if(empty($param)){
            return 0.0;
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
        try {
            return (new DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');
        } catch (Exception $e) {
            return null;
        }
    }
}

if (! function_exists('convertDoubleToString')) {
    function convertDoubleToString(?float $param)
    {
        return number_format($param, 2, ',', '.');
    }
}

if (! function_exists('convertDoubleToMoneyString')) {
    function convertDoubleToMoneyString(?float $param)
    {
        return 'R$ '.number_format($param, 2, ',', '.');
    }
}

if (! function_exists('convertFirstsUp')) {
    function convertFirstsUp(?string $param)
    {
        $words = explode(' ', $param);
        $newWord = "";
        if(count($words) > 1){
            foreach ($words as $word){
                if(strlen($word) > 2){
                    $newWord = $newWord.' '.ucfirst($word);
                }else{
                    $newWord = $newWord.' '.$word;
                }
            }
        }else{
            $newWord = ucfirst($param);
        }
        return $newWord;
    }
}
