<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agenda1 Entity
 *
 * @property int $id
 * @property string $hora
 * @property string $fecha
 * @property string $precio
 * @property int $id_user
 */
class Agenda1 extends Entity
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
        'hora' => true,
        'fecha' => true,
        'precio' => true,
        'id_user' => true,
    ];
}
