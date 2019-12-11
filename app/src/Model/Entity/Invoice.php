<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property string $number
 * @property \Cake\I18n\FrozenTime $issued_at
 * @property int $value
 * @property string $company_name
 * @property string $company_address
 * @property string|null $company_email
 */
class Invoice extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'number' => true,
        'issued_at' => true,
        'value' => true,
        'company_name' => true,
        'company_address' => true,
        'company_email' => true,
    ];
}
