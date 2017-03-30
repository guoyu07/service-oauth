<?php

namespace api\modules\api\v1\models\repository;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use api\modules\api\v1\models\Scope;

/**
 * Class ScopeRepository.
 *
 * @package api\modules\api\v1\models\repository
 */
class ScopeRepository extends ActiveQuery
{
    /**
     * Finds list of scopes.
     *
     * @param string $list List of scopes separated by space
     * @return array|ActiveRecord
     */
    public function findAllowed($list)
    {
        return $this->select('name')->where(
            ['in', 'name', explode(Scope::SCOPES_DELIMITER, $list)]
        )->orWhere(
            ['is_default' => Scope::STATUS_DEFAULT]
        )->all();
    }
}
