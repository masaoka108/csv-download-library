# csv-download-library

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total downloads][ico-downloads]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

CSV file download library for Laravel.

## Installation
Via Composer

``` bash
$ composer require okamok/okamok/csv-download-library
```

## Usage
This is sample controller

``` php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Okamok\CsvDownloadLibrary\CsvCreate;    //csv-download-library
use Illuminate\Support\Facades\Response;

class TopController extends Controller
{
    public function index(Request $request)
    {
        //sample header
        $csvHeader = ['title1','title2','title3'];

        //sample data
        $data = [['row1-1', 'row1-2', 'row1-3'], ['row2-1', 'row2-2', 'row2-3']];

        //sample file name
        $fileName = 'test.csv';

        //use this library
        $ret = CsvCreate::getCsvData($data, $csvHeader, $fileName, 'UTF-8');

        //CSV output
        return Response::make($ret['csv'], 200, $ret['headers']);
    }
}
```

## License

The MIT License (MIT).




[ico-version]: https://img.shields.io/packagist/v/okamok/csv-download-library.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/okamok/csv-download-library.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/okamok/csv-download-library
