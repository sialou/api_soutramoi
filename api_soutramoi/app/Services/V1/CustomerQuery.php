<?php
namespace App\Services\V1;

use Illuminate\Http\Request;


class CustomerQuery{

    protected $safeParms=[
       'name'=>['eq'],
       'type'=>['eq'],
       'email'=>['eq'],
       'address'=>['eq'],
       'city'=>['eq'],
       'state'=>['eq']
    ];

    protected $operatorMap=[
        'eq'=>'=',
        'lt'=>'<',
        'lte'=>'<_',
        'gt'=>'>',
        'gte'=>'>_',
    ];

    public function transform(Request $request){
        $eloQuery=[];

        return $eloQuery;
    }

}
