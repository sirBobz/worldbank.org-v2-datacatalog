<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 07 Oct 2018 12:09:14 +0300.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $trx_id
 * @property string $name
 * @property string $acronym
 * @property string $description
 * @property string $url
 * @property string $type
 * @property string $languagesupported
 * @property string $periodicity
 * @property string $economycoverage
 * @property string $granularity
 * @property string $numberofeconomies
 * @property string $topics
 * @property string $updatefrequency
 * @property string $updateschedule
 * @property string $lastrevisiondate
 * @property string $contactdetails
 * @property string $accessoption
 * @property string $bulkdownload
 * @property string $cite
 * @property string $detailpageurl
 * @property string $popularity
 * @property string $coverage
 * @property string $api
 * @property string $apiaccessurl
 * @property string $apisourceid
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Transaction extends Eloquent
{
	protected $casts = [
		'trx_id' => 'int'
	];

	protected $fillable = [
		'trx_id',
		'name',
		'acronym',
		'description',
		'url',
		'type',
		'languagesupported',
		'periodicity',
		'economycoverage',
		'granularity',
		'numberofeconomies',
		'topics',
		'updatefrequency',
		'updateschedule',
		'lastrevisiondate',
		'contactdetails',
		'accessoption',
		'bulkdownload',
		'cite',
		'detailpageurl',
		'popularity',
		'coverage',
		'api',
		'apiaccessurl',
		'apisourceid'
	];
}
