<?php

namespace Paysafe\ThreeDSecureV2;

/**
 * @property string $day
 * @property string $month
 * @property string $year
 */
class IssueDate extends \Paysafe\JSONObject
{

    protected static $fieldTypes = array(

     'day' => 'int',
     'month' => 'int',
     'year' => 'int'
    );

}
