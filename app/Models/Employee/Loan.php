<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\Loan
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $loan_type_id
 * @property integer $user_id
 * @property float $amount
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\Loan whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\Loan whereLoanTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\Loan whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\Loan whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\Loan whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\Loan whereUpdatedAt($value)
 */
class Loan extends Model
{
    //
}
