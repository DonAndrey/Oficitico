<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $name
 * @property string $last_name_1
 * @property string $last_name_2
 * @property string $address
 * @property string $phone
 * @property string $cellphone
 * @property string $picture
 * @property float $x
 * @property float $y
 * @property int $state
 *
 * @property \App\Model\Entity\Activity[] $activities
 * @property \App\Model\Entity\Doing[] $doings
 */
class User extends Entity
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
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}