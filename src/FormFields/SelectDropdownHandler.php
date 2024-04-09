<?php

namespace TCG\Voyager\FormFields;

class SelectDropdownHandler extends AbstractHandler
{
    protected $codename = 'select_dropdown';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        $options = is_string($options) ? json_decode($options) : $options;

        return view('voyager::formfields.select_dropdown', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
